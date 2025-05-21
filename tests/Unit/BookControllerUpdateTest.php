<?php

namespace Tests\Unit;

use App\Http\Controllers\BookController;
use App\Http\Requests\Book\UpdateRequest;
use App\Http\Services\Book\Update;
use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Mockery;
use Tests\TestCase;

class BookControllerUpdateTest extends TestCase
{
    private $controller;
    private $updateService;
    private $request;
    private $book;

    protected function setUp(): void
    {
        parent::setUp();

        $this->updateService = Mockery::mock(Update::class);
        $this->request = Mockery::mock(UpdateRequest::class);
        $this->book = Mockery::mock(Book::class);
        $this->controller = new BookController();
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_book_controller_update(): void
    {
        // Arrange
        $validatedData = [
            'title' => 'Updated Title',
            'author' => 'Updated Author',
            'rating' => 8
        ];

        $updatedBook = new Book();
        $updatedBook->title = $validatedData['title'];
        $updatedBook->author = $validatedData['author'];
        $updatedBook->rating = $validatedData['rating'];

        $this->request->shouldReceive('validated')
            ->once()
            ->andReturn($validatedData);

        $this->updateService->shouldReceive('__invoke')
            ->once()
            ->with($validatedData, $this->book)
            ->andReturn($updatedBook);

        // Act
        $response = $this->controller->update($this->request, $this->updateService, $this->book);

        // Assert
        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals(200, $response->getStatusCode());

        $responseData = json_decode($response->getContent(), true);
        $this->assertEquals('Successfully updated the book.', $responseData['message']);
        $this->assertEquals($validatedData['title'], $responseData['data']['title']);
        $this->assertEquals($validatedData['author'], $responseData['data']['author']);
        $this->assertEquals($validatedData['rating'], $responseData['data']['rating']);
    }
}
