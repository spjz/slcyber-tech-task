## Searchlight Cyber Full Stack Tech Test


We recommend you spend a couple of hours tackling these items, it covers a range of abilities.
Give it your best go!

Please create a git repository first, and commit often as you work your way through the points, at least for every point tackled.


To Set Up the application run the following in the application directory
```
./vendor/bin/sail up
```
then in a new terminal run
```
docker exec -it full-stack-tech-test-laravel.test-1 php artisan migrate
docker exec -it full-stack-tech-test-laravel.test-1 php artisan db:seed
```

We'd like you to have a go at tackling the following:

- Update the landing page to match the design and add the ability to search for a Book Title
- There's an issue with trying to update a book, find and resolve the issue.
- All the seeded Books have a rating of 5, make them each have a randomly picked number between 1 and 10
- You can currently delete books and the records be removed from the database, we want to keep those records. Enable the ability to Soft Delete books.
- Add the ability within the API (no front end work needed) to create Genres and add multiple Genres to Books.
- Add Unit Tests for the BookController update method.


6. Front end -> make page to match design with search bar
7. Front end debug issue?
8. Something with emitting data / passing a prop


Handy Links
- https://vuejs.org/guide/introduction.html
- https://tailwindcomponents.com/cheatsheet/
- https://laravel.com/docs/10.x
