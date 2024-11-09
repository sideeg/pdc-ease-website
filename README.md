# PDC-EASE Website

**PDC-EASE** is the official website for a company that offers professional services, including blogs, case studies, and more. The website provides an interactive and dynamic user interface with Vue.js for a rich user experience. Built with **Laravel** and **Vue.js**, the platform allows users to learn about the company's services and stay updated with the latest blog posts. It also includes role-based access control for managing users and their permissions.

## Features

- **Dynamic Service Pages**: A section dedicated to showcasing the company's services with detailed descriptions and benefits.
- **Interactive Blog**: A blog section where the company shares industry news, updates, and thought leadership.
- **Vue.js Integration**: A modern, reactive frontend built with Vue.js for a highly interactive user experience.
- **Role-Based Permissions**: Integration with **Spatie Laravel Permission** for managing user roles and access control.
- **Authentication System**: Built-in user authentication system using **Laravel UI**.

## Tech Stack

- **Backend**: 
  - **Laravel** (PHP Framework)
  - **Spatie Laravel Permission** (for role-based access control)
  - **MySQL** or **SQLite** (Database)
  
- **Frontend**:
  - **Vue.js** (Reactive JavaScript Framework)
  - **Laravel UI** (for frontend scaffolding)
  - **Bootstrap / Tailwind CSS** (for styling and responsive design)

- **Other**:
  - **Composer** (for managing PHP dependencies)
  - **Node.js** / **npm** (for managing frontend dependencies and assets)

## Prerequisites

Before you begin, ensure that you have the following installed:

- **PHP** >= 7.4 (Laravel recommends PHP 8.0+)
- **Composer** (PHP dependency manager)
- **Node.js** and **npm** (for compiling frontend assets)
- A **Database** (MySQL, SQLite, etc.)

### Install PHP and Composer

1. [Install PHP](https://www.php.net/downloads.php)
2. [Install Composer](https://getcomposer.org/doc/00-intro.md)

### Install Node.js and npm

- [Download Node.js](https://nodejs.org/) (which includes npm).

---

## Installation

### 1. Clone the Repository

Clone the repository to your local machine:

```bash
git clone https://github.com/sideeg/pdc-ease-website.git
```

### 2. Navigate to the Project Directory

```bash
cd pdc-ease-website
```

### 3. Install PHP Dependencies

Run the following command to install Laravel's PHP dependencies:

```bash
composer install
```

### 4. Install Laravel UI & Spatie Laravel Permission

This project uses **Laravel UI** for authentication scaffolding and **Spatie Laravel Permission** for role-based access control. Run the following commands:

```bash
composer require spatie/laravel-permission
composer require laravel/ui
```

### 5. Set Up the Environment File

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Edit the `.env` file to configure your database credentials (e.g., `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

### 6. Generate Application Key

Run the following command to generate the application key. This will update your `.env` file with a new `APP_KEY`:

```bash
php artisan key:generate
```

### 7. Set Up the Database

Create the database for the project (e.g., in MySQL) and update the `.env` file with the correct database details. Then, run the migrations:

```bash
php artisan migrate
```

This will set up all necessary database tables.

### 8. Install Frontend Dependencies

Install frontend dependencies using npm:

```bash
npm install
```

### 9. Compile Frontend Assets

Compile the frontend assets (CSS, JavaScript, Vue components) using Laravel Mix:

```bash
npm run dev
```

For production:

```bash
npm run prod
```

### 10. Run the Development Server

Start the local development server:

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`.

---

## Usage

### User Features

- **View Services**: Users can browse the company's service offerings and learn about each service's details.
- **Blog**: Users can view blog posts published by the company, including articles, news, and updates.
- **Authentication**: Users can register, log in, and access personalized content.
- **Dynamic UI**: The frontend is built with Vue.js to provide an interactive and reactive user experience.

### Admin Features

- **Manage Services**: Admin users can add, edit, and delete services listed on the website.
- **Manage Blog**: Admins can create and publish blog posts from the admin panel.
- **Role-Based Access**: Admins can assign different roles and permissions to users (using **Spatie Laravel Permission**).
  
---

## Contributing

We welcome contributions to improve this project! To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes.
4. Run tests (if applicable) and ensure everything works as expected.
5. Submit a pull request with a detailed description of the changes.

Please make sure to follow the project's code style and commit guidelines.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Acknowledgments

- **Laravel**: The PHP framework powering the backend.
- **Vue.js**: The reactive JavaScript framework powering the frontend.
- **Spatie Laravel Permission**: For handling role-based access control.
- **Laravel UI**: For generating authentication scaffolding.
- **Bootstrap / Tailwind CSS**: For frontend styling and responsive design.

---

## Contact

For any questions, issues, or suggestions, please contact us:

- **Email**: [support@pdc-ease.com](mailto:support@pdc-ease.com)
- **GitHub Issues**: [PDC-EASE Website Issues](https://github.com/sideeg/pdc-ease-website/issues)

---

## Conclusion

The **PDC-EASE Website** is a modern, interactive platform that showcases the company's services and blog posts while providing a rich user experience powered by Vue.js. With Laravel on the backend, the website includes features like role-based access control, a blog system, and a dynamic service catalog. 
