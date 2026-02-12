# Shadecn Laravel UI

A modern, responsive, and accessible UI component library for Laravel, inspired by [shadcn/ui](https://ui.shadcn.com/). Built with **Laravel Blade**, **Tailwind CSS**, and **Alpine.js**.

This project provides a set of reusable Blade components that you can easy copy and paste into your own Laravel applications. It aims to bring the beautiful aesthetics and developer experience of the React/Vue ecosystem to the Laravel Blade world.

## 🚀 Features

*   **Laravel 12.x** ready
*   **Vite** powered frontend tooling
*   **Tailwind CSS** for styling
*   **Alpine.js** for lightweight interactivity
*   **Dark Mode** support out of the box
*   **Responsive Sidebar** layout
*   **Rich Component Library**:
    *   Actions (Buttons, Dropdowns, Modals, Swaps)
    *   Forms (Inputs, Selects, Toggles, Sliders)
    *   Data Display (Cards, Tables, Avatars)
    *   Navigation (Tabs, Breadcrumbs, Pagination)
    *   And much more!

## 🛠️ Prerequisites

Ensure you have the following installed on your local machine:

*   **PHP** 8.2 or higher
*   **Composer**
*   **Node.js** & **NPM** (Version 20+ recommended)
*   **MySQL**

## 💻 Installation

Follow these steps to set up the project locally:

1.  **Clone the repository**
    ```bash
    git clone https://github.com/yourusername/shadecn-laravel.git
    cd shadecn-laravel
    ```

2.  **Install PHP dependencies**
    ```bash
    composer install
    ```

3.  **Install Node dependencies**
    ```bash
    npm install
    ```

4.  **Configure Environment**
    Copy the example environment file and generate the application key:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Database Setup**
    Configure your database credentials in the `.env` file:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=shadecn
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    Then run the migrations:
    ```bash
    php artisan migrate
    ```

## 🏃‍♂️ Running Locally

To start the development server, you will need to run two terminal commands in parallel:

1.  **Start the Vite development server** (for assets & hot reload):
    ```bash
    npm run dev
    ```

2.  **Start the Laravel development server**:
    ```bash
    php artisan serve
    ```

Access the application at: [http://localhost:8000](http://localhost:8000)

## 🐳 Docker Support

This project includes a Docker setup for easy containerization.

1.  **Build and start the containers**:
    ```bash
    docker-compose up -d --build
    ```

2.  **Access the application**:
    The application will be available at [http://localhost:8000](http://localhost:8000).

3.  **Run commands inside the container**:
    ```bash
    docker-compose exec app php artisan migrate
    ```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
