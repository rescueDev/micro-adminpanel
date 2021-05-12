# MCR Micro Admin Panel

Basically, project to manage companies and their employees. Mini-CRM.
Features: 

	• Basic Laravel Auth: ability to log in as administrator
	• create first user with email admin@admin.com and password “password”
	• CRUD functionality (Create / Read / Update / Delete) for two menu items and Models: Companies (Name (required), email, logo (minimum 100×100), website) and Employees (First name (required), last name (required), Company (foreign key to Companies), email, phone).
	• Store companies logos in storage/app/public folder and make them accessible from public
	• Use basic Laravel resource controllers with default methods – index, create, store etc.
	• validate inputs
	• show 10 items per page
	• use default Bootstrap-based design theme, but remove ability to register
    
    
    ## Installation
    
    `git clone`
    
    `npm install`
    
    ## in file .env put your db password and user then create a new database 
    
    
    
    `php artisan make:migrate --refresh`
    
    `php artisan serve`
    
    `npm run watch`
