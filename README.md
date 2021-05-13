# MCR Micro Admin Panel

Basically, project to manage companies and their employees. Mini-CRM.

## Table of contents
* [General info](#general-info)
* [Technologies](#technologies)
* [Setup](#setup)

## General info: 
  <ul> 
    <li>  Basic Laravel Auth: ability to log in as administrator </li>
	<li> create first user with email admin@admin.com and password “password” </li>
	<li> CRUD functionality (Create / Read / Update / Delete) for two menu items and Models: Companies (Name (required), email, logo (minimum 100×100), website)            and Employees (First name (required), last name (required), Company (foreign key to Companies), email, phone). </li>
	 <li>Store companies logos in storage/app/public folder and make them accessible from public </li>
	 <li>Use basic Laravel resource controllers with default methods – index, create, store etc. </li>
	 <li>validate inputs </li>
	 <li>show 10 items per page </li>
	 <li>use default Bootstrap-based design theme, but remove ability to register </li>
   </ul>
	
 ## Technologies 
 Project is created with:
 * Laravel version: 7
 * Bootstrap: 4
 * PHP: 7.4.13


 ## Setup
    
   `git clone`
    
   `npm install`
    
   <p> in file .env put your db password and user then create a new database 
    
    
    
   `php artisan make:migrate --refresh`
    
   `php artisan serve`
    
   `npm run watch`
