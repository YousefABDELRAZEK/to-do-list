<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# To-Do App

A simple To-Do application built with Laravel 11, designed to help you manage tasks with ease. This application includes features for adding, updating, and deleting tasks, as well as marking tasks as completed.

## Features

- **Add Tasks**: Create new tasks with a title.
- **Mark as Completed**: Use checkboxes to mark tasks as completed or incomplete.
- **Delete Tasks**: Remove tasks from the list.
- **Task Persistence**: All tasks are stored in a MySQL database, ensuring they persist across sessions.

## Technologies Used

- **Laravel 11**: The PHP framework used for building the backend.
- **MySQL**: The database used for storing tasks.
- **Blade**: Laravel's templating engine used for rendering views.
- **CSS**: For styling the application.

## Installation

1. **Clone the Repository**:

    ```bash
    git clone https://github.com/YousefABDELRAZEK/todo.git
    ```

2. **Navigate to the Project Directory**:

    ```bash
    cd todo
    ```

3. **Install Dependencies**:

    ```bash
    composer install
    ```

4. **Set Up Environment**:

    Copy the example environment file and adjust database credentials as needed.

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database configuration.

5. **Run Migrations**:

    ```bash
    php artisan migrate
    ```

6. **Start the Development Server**:

    ```bash
    php artisan serve
    ```

    Visit `http://localhost:8000` in your web browser to access the application.

## Usage

- **Home Page**: View the list of tasks and their statuses.
- **Create Task**: Add a new task using the input field and "Create" button.
- **Update Task**: Check or uncheck tasks to mark them as completed or incomplete.
- **Delete Task**: Remove tasks by clicking the delete button next to each task.

## Contributing

If you wish to contribute to this project, please follow these steps:

1. **Fork the Repository**
2. **Create a New Branch**: `git checkout -b feature/YourFeature`
3. **Make Your Changes**
4. **Commit Your Changes**: `git commit -am 'Add new feature'`
5. **Push to the Branch**: `git push origin feature/YourFeature`
6. **Create a Pull Request**

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any questions or feedback, feel free to reach out to [Youssef Abdelrazek](https://github.com/YousefABDELRAZEK).


## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
