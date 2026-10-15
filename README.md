# Porto E-Commerce Platform

A full-featured e-commerce web application built with Laravel 12, designed to demonstrate modern backend development practices and real-world e-commerce functionality.

## Project Overview

Porto is a comprehensive e-commerce platform that enables users to browse products, manage shopping carts, create wishlists, and complete purchases. The application features a robust admin dashboard for product and category management, user authentication, and order processing. Built with Laravel 12, it leverages the latest PHP features, Eloquent ORM, and modern frontend tooling including TailwindCSS and Vite.

## Key Features

### User Features
- **Authentication System**: Secure user registration and login with session management
- **Product Browsing**: Browse products by category with filtering and search capabilities
- **Shopping Cart**: Add/remove products, update quantities, and manage cart in real-time
- **Wishlist**: Save favorite products for later purchase
- **User Profile**: Manage personal information and view order history

### Admin Features
- **Admin Dashboard**: Comprehensive dashboard for managing the entire platform
- **Product Management**: Full CRUD operations for products with image uploads
- **Category Management**: Organize products into hierarchical categories
- **User Management**: View and manage registered users
- **Message System**: Handle customer inquiries and support requests

### Technical Features
- **RESTful Architecture**: Clean API endpoints following Laravel best practices
- **Form Validation**: Server-side validation using Laravel Form Requests
- **Database Relationships**: Complex Eloquent relationships (one-to-many, many-to-many)
- **AJAX Interactions**: Dynamic UI updates without page reloads
- **Image Handling**: Product image uploads with storage management
- **Middleware**: Custom middleware for authentication and authorization
- **Testing**: Pest PHP testing framework for unit and feature tests

## Tech Stack

- **Backend**: PHP 8.2, Laravel 12
- **Database**: MySQL with Eloquent ORM
- **Frontend**: TailwindCSS 4, Vite 7, Blade Templates
- **HTTP Client**: Axios
- **Testing**: Pest PHP 3
- **Code Quality**: Laravel Pint
- **Development Tools**: Laravel Sail, Laravel Tinker

## Installation

```bash
# Clone the repository
git clone YOUR_REPOSITORY_URL
cd Laravel_porto_project

# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate
php artisan storage:link

# Start development server
php artisan serve
```

Or use the automated setup script:

```bash
composer run setup
```

For development with hot-reload:

```bash
composer run dev
```

## Running Tests

```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run filtered tests
php artisan test --filter=testName
```
