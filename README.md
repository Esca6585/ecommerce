


## Laravel Authenticate Turkmen English Russian Localization Metronic template project

1. Run `composer install`

2. Copy `.env.example` to `.env`

3. Set valid database credentials of env variables `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`

4. Run `php artisan key:generate` to generate application key

5. Run with seeder command `php artisan migrate --seed`

   

   That's it... Run the command `php artisan serve` and cheers, you are good to go with your new **Laravel Auth Metronic template** application.

## Routes (here two guards web and admin)


1. User Login Page `localhost:8000/en/login`  `email: user@gmail.com | password: password`
2. Admin Login Page `localhost:8000/en/admin/login` `email: admin@gmail.com | password: password`
3. User Register Page `localhost:8000/en/register`



## Google and GitHub OAuth 

### You can register google or github Oauth and get login and password and set up it to .env

	GITHUB_CLIENT_ID=github_client_id
	GITHUB_SECRET=github_secret 
	GITHUB_URL=http://localhost:8000/tm/login/github/callback // this route in web.php file  
	
	GOOGLE_CLIENT_ID=google_client_id
	GOOGLE_SECRET=google_secret 
	GOOGLE_URL=http://localhost:8000/tm/login/google/callback // this route in web.php file 


## In this project have validation translation 3 languages Turkmen (Türkmen) English Russian 

* `this folder -> resources/lang/en, ru, tm`