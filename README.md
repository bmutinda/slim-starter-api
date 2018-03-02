# slim-starter-api
Starter template for API with Slim3 framework

# How to use

##### 1. Clone the project

```
git clone https://github.com/bmutinda/slim-starter-api.git
```

##### 2. Edit composer file

- Change the project details .i.e. name, description, author
- Change the project **namespace**(MyAppNamespace) on this code block to match your preferred name 
```
"autoload": {
      "psr-4": {
        "MyAppNamespace\\": "src//app/"
      }
    }
```


##### 3. Updating namespace in all files

Change the word **_MyAppNamespace_** to the name you specified in #2 above
NB: You can do Find->ReplaceAll in your IDE



##### 4. Install dependencies
```
composer install
```
After this, run the following

```
composer dump-autoload -o
```


##### 5. Testing

Open your project in your browser and access this endpoint 

```
/api/v1/movies/
```
You should be able to see a list of movies 


##### 6. DONE 
You are now good to know - Delete what you don't need 


# Project Structure

```
src/
    app/
        Controllers/    - Project controllers called from bootstrap/routes.php
        ErrorHandlers/  - Handlers for 500 errors, method not found, 404
        Models/         - Just as usual 
        Repos/          - Call your datasources from DB or network API  
            Movies/     - (sample data repository)
    bootstrap/
        - app.php       - (bootstrap your app by loading all the )
        - routes.php    - (define app routes)

index.php               - the main app entry point
.htaccess

```
