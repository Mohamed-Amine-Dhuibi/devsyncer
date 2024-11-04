DevSyncer Project Setup Documentation
=====================================

Table of Contents
-----------------

1.  [Project Setup](#project-setup)

2.  [Database Configuration](#database-configuration)

3.  [Running the Application](#running-the-application)

4.  [Developed Features](#developed-features)

* * * * *

### 1\. Project Setup

1.  **Create a New Laravel Project**: Install Laravel if you haven't already. Run the following command to create the `devsyncer` project

    `composer create-project laravel/laravel devsyncer`

1.  **Navigate into the Project Directory**:

    `cd devsyncer`

2.  **Install Dependencies**:\
    Make sure all required dependencies are installed.

    `composer install npm install && npm run dev`

3.  **Environment Configuration**:\
    Copy the `.env.example` file to create your environment configuration.

    `cp .env.example .env`

4.  **Generate Application Key**:

    `php artisan key:generate`

* * * * *

### 2\. Database Configuration

1.  **Database Setup**:\
    In the `.env` file, configure your database settings to match your environment.

    `DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=devsyncer_db DB_USERNAME=root DB_PASSWORD=your_password`

2.  **Create Database**:\
    Ensure you have a MySQL database created for this project. You can run the following in a MySQL console or GUI:

    `CREATE DATABASE devsyncer_db;`

3.  **Run Migrations**:\
    This command will set up your database with the necessary tables.

    `php artisan migrate`

* * * * *

### 3\. Running the Application

1.  **Start the Development Server**:\
    Run this command to launch the Laravel server:

    `php artisan serve`

2.  **Access the Application**:\
    Open a web browser and go to http://localhost:8000 to view the DevSyncer application.

* * * * *

### 4\. Developed Features

-   **User Authentication**:

    -   **Sign Up**: Users can create an account to join the platform.

    -   **Sign In**: Registered users can log in securely.

-   **Project Management**:

    -   **Project Sharing**: Users can share projects with others, allowing collaboration.

    -   **Project Joining**: Users can join shared projects to contribute to the work.
