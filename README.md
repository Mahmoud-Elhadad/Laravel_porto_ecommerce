# Laravel E-Commerce Platform

A full-featured e-commerce web application built with **Laravel 12** and **PHP 8.2**, featuring a complete storefront and a separate admin dashboard for backend management.

---

## Features

### Storefront
- Product catalog with pagination and category filtering
- Product detail pages with related products (same category)
- Shopping cart — add, remove, and update quantity via AJAX with real-time total calculation
- Wishlist — toggle add/remove via AJAX
- User registration & login
- Contact form with message submission

### Admin Dashboard (`/dashboard`)
- Secure admin authentication with dedicated guard
- Product management — full CRUD with multi-image upload
- Category management — create, list, delete
- Admin account management — full CRUD with profile image upload
- Contact message inbox — view, mark as read/unread, delete

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | Laravel 12, PHP 8.2 |
| Database | MySQL + Eloquent ORM |
| Frontend | Blade Templating, Vite |
| Auth | Laravel Guards (dual: customer & admin) |
| Testing | Pest v3, PHPUnit v11 |

---

## Getting Started

### Requirements
- PHP 8.2+
- Composer
- Node.js & npm
- MySQL

### Installation

```bash
# Clone the repository
git clone <repository-url>
cd Laravel_porto_project

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Copy environment file and configure your database
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Build assets
npm run build
```

### Running the App

```bash
composer run dev
```

---

## Project Structure

```
app/
├── Http/
│   ├── Controllers/       # All controllers
│   ├── Middleware/        # AuthAdmin, ExistAdmin
│   └── Requests/          # Form Request validation classes
├── Models/                # Eloquent models
└── View/Components/       # Blade components

resources/views/
├── ecomm/porto/           # Storefront views
└── dashboard/             # Admin panel views

routes/
├── web.php                # Customer-facing routes
└── admin.php              # Admin dashboard routes (mounted at /dashboard)
```

---

## Authentication

The app uses **two separate guards**:

- `web` — for customers (standard Laravel auth)
- `dashboard` — for admins (`Admin` model), protected by `AuthAdmin` middleware
