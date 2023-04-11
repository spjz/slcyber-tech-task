## Searchlight Cyber Full Stack Tech Test


We recommend you spend a couple hours tackling these items, it covers a range of abilities.
Give it your best go!



To Set Up the application run the following in the application directory
```
./vendor/bin/sail up
```
then in a new terminal run
```
docker exec -it searchlight-cyber-tech-test-laravel.test-1 php artisan migrate
docker exec -it searchlight-cyber-tech-test-laravel.test-1 php artisan db:seed
```

We'd like you to have a go at tackling the following: 




1. Debug an error with an endpoint -> updating a book?
2. Add ability to SoftDelete a book
3. Edit the seeder to create books with any rating
4. Add the ability to the API to add multiple genres to books 
5. Add Unit Tests for Updating Books 
6. Add ability to search for a book title via the API? 
6. Front end -> make page to match design with search bar
7. Front end debug issue?
8. Something with emitting data / passing a prop 
