# CodeIgniter POS Foundations

This project is a basic Point of Sale (POS) foundation created for IT0049 Web System Technologies Technical Formative Assessment 1. It demonstrates CodeIgniter 4 routing, controllers, views, navigation, and static PHP arrays without a database.

## Features

| Page | Route | Purpose |
| --- | --- | --- |
| Landing Page | `/` | Introduces the POS application. |
| About Page | `/about` | Describes the application. |
| Customer Accounts | `/customers` | Lists five sample customers. |
| User Accounts | `/users` | Lists five sample users or staff members. |

The Customer Accounts and User Accounts pages use static PHP arrays as temporary data sources. Each listing view uses a `foreach` loop to display its records.

## MVC Structure

- `app/Config/Routes.php` maps URLs to controller methods.
- `app/Controllers/Pages.php` handles the landing and About pages.
- `app/Controllers/Customers.php` provides the static customer data.
- `app/Controllers/Users.php` provides the static user data.
- `app/Views/` contains the HTML views rendered in the browser.

## Requirements

- PHP 8.2 or newer
- Composer
- CodeIgniter 4 dependencies, installed with Composer

## Local Setup

1. Open a terminal in the project directory.

   ```zsh
   cd ~/my-ci4-project
   ```

2. Install PHP dependencies if the `vendor` directory is not present.

   ```zsh
   composer install
   ```

3. Create the environment configuration file.

   ```zsh
   cp env .env
   ```

4. In `.env`, enable development mode and set the local base URL.

   ```ini
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   ```

5. Start the CodeIgniter development server.

   ```zsh
   php spark serve
   ```

6. Open [http://localhost:8080](http://localhost:8080) in a browser.

## Database Scope

No database is used in this version of the application. The activity requires static PHP arrays as temporary data sources; database integration can be added in a later module.
