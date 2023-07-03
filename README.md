
# Home Services Provider

Home Services Provider is a web application built for providing multiple services such as electrician, carpenter, etc. It has three different parts: User, Provider, and Admin. This repository contains the source code and necessary files for the project.

## Technologies Used

The following technologies have been used to develop this project:

-   PHP
-   HTML
-   CSS
-   JavaScript
-   MySQL

## Project Structure

The project is organized into different directories and files. Here's a brief overview of the structure:

-   **`index.php`**: The main entry point of the application.
-   **`config.php`**: Contains configuration settings for connecting to the MySQL database.
-   **`css/`**: Directory for CSS files.
-   **`js/`**: Directory for JavaScript files.
-   **`images/`**: Directory for storing image assets.
-   **`includes/`**: Directory containing reusable PHP code snippets and functions.
-   **`/`**: Directory for user-related functionalities and views.
-   **`provider/`**: Directory for provider-related functionalities and views.
-   **`admin/`**: Directory for admin-related functionalities and views.

## Setup Instructions

To set up the project locally, follow these steps:

1.  Clone the repository: `git clone https://github.com/Uttamnath64/Home-Service-Provider.git`.
2.  Navigate to the project directory: `cd Home-Service-Provider`.
3.  Import the MySQL database: Use the provided SQL script  `hsp.sql` file.
4.  Update the database configuration: Open `config.php` and modify the database connection settings according to your local environment.
5.  Start a local development server: You can use tools like XAMPP, WAMP, or MAMP to run the PHP application locally.
6.  Access the application: Open a web browser and visit `http://localhost/Home-Service-Provider` to access the application.

## Usage

-   As a **User**, you can browse available services, view service providers, and request services.
-   As a **Provider**, you can create an account, list your services, and manage service requests from uenter code heresers.
-   As an **Admin**, you have additional privileges to manage users, providers, and service requests.
