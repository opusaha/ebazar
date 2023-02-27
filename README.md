# Laravel Multi Vendor Ecommerce Site

This is a Laravel based ecommerce website that allows multiple vendors to upload and sell their products. The website also allows normal buyers to purchase these products and provides features such as reviews, returns, and product tracking.

## Features

- Multi vendor support
- Product uploading and selling
- Review and rating system
- Return and refund system
- Product tracking system
- Ajax based features for seamless user experience
- Admin dashboard for managing products, vendors, and buyers
- Corn job based feature for scheduling product visibility on the frontend

## Installation

1. Clone the repository to your local machine.
2. Install dependencies using `composer install`.
3. Copy the `.env.example` file to `.env` and update the database connection settings.
4. Run `php artisan key:generate` to generate an application key.
5. Run `php artisan migrate` to run the database migrations.
6. Run `php artisan db:seed` to seed the database with sample data (optional).
7. Run `php artisan serve` to start the development server.

## Usage

1. Visit the website on the development server.
2. Create a new account for either a vendor or a buyer.
3. Login and explore the website features such as uploading products, purchasing products, leaving reviews, etc.
4. Admin can manage products, vendors, and buyers using the admin dashboard.

## Credits

This project was developed by [Opu saha](https://github.com/opusaha/) and is licensed under the [MIT License](https://opensource.org/licenses/MIT).
