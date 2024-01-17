# Todo List Task App

## Overview

The Todo List Task App is a simple task management application developed using Laravel 5.1.2. Users can add tasks, mark them as completed, and delete tasks when done. The app features a user authentication system provided by Laravel Breeze.

## Technologies Used

-   Laravel 5.1.2
-   Laravel Breeze for authentication
-   PHP 8.2.4
-   Dev Dependencies:
    -   Tailwind CSS
    -   Alpine.js
    -   Autoprefixer
    -   Axios
    -   Laravel Vite Plugin
    -   PostCSS
    -   Tailwind CSS
    -   Vite

## Setup and Installation

### Prerequisites

-   PHP 8.2.4
-   Laravel dependencies
-   Node.js
-   Composer

### Installation Steps

1. Clone the repository.

    ```bash
    git clone https://github.com/your-username/todo-list-app.git
    ```

2. Install PHP dependencies.

    ```bash
    composer install
    ```

3. Install Node dependencies.

    ```bash
    npm install
    ```

4. Copy the `.env.example` file to `.env` and configure the database.

    ```bash
    cp .env.example .env
    ```

    Ensure the database settings are correctly set in the `.env` file.

5. Generate application key.

    ```bash
    php artisan key:generate
    ```

6. Run migrations.

    ```bash
    php artisan migrate
    ```

7. Start the development server.
    ```bash
    php artisan serve
    ```

Visit `http://localhost:8000` in your browser to access the app.

## Configuration

-   Database configuration is set in the `.env` file. Ensure the `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` are correctly configured.

## Usage

Users can interact with the app by visiting the hosted site or cloning the repository and running it locally.

## Testing

No specific test suites are provided. You can run PHPUnit for testing.

```bash
php artisan test
```

## Deployment

Deploying the app to a production environment involves configuring your web server and ensuring the necessary server requirements are met.

## Contributing

Contributions are welcome! Please follow the [contribution guidelines](CONTRIBUTING.md).

## License

## This Todo List Task App is open-sourced under the [MIT license](LICENSE).
