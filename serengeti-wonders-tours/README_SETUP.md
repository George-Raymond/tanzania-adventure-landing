# Serengeti Wonders Tours - Laravel Project Setup Guide

This is a complete recreation of the Tanzania safari tour website using Laravel, PHP, JavaScript, CSS, and MySQL. The project maintains the exact same appearance and functionality as the original React project.

## Project Overview

- **Framework**: Laravel 12.x
- **Database**: MySQL
- **Frontend**: Blade templates with vanilla JavaScript and CSS
- **Styling**: Custom CSS with modern animations and responsive design
- **Features**: Tour listings, detailed tour pages, booking system, testimonials

## Prerequisites

Before setting up the project, ensure you have the following installed:

- PHP 8.1 or higher
- Composer
- MySQL 5.7 or higher
- Node.js and npm (optional, for asset compilation)

## Installation Steps

### 1. Clone or Download the Project

If you have the project files, navigate to the project directory:

```bash
cd serengeti-wonders-tours
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Environment Configuration

The `.env` file is already configured for MySQL. Update the database credentials if needed:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=serengeti_wonders
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Create MySQL Database

Create a new MySQL database named `serengeti_wonders`:

```sql
CREATE DATABASE serengeti_wonders CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Database Migrations

```bash
php artisan migrate
```

### 7. Seed the Database

Populate the database with sample tours and testimonials:

```bash
php artisan db:seed
```

### 8. Start the Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Project Structure

### Models
- **Tour**: Manages safari tour data with features, pricing, and details
- **Booking**: Handles customer booking requests
- **Testimonial**: Stores customer reviews and ratings

### Controllers
- **HomeController**: Displays the homepage with featured tours and testimonials
- **TourController**: Manages tour listings and individual tour pages
- **BookingController**: Processes booking form submissions

### Views
- **layouts/app.blade.php**: Main layout with navigation, styling, and JavaScript
- **home.blade.php**: Homepage with hero section, featured tours, about, testimonials
- **tours/index.blade.php**: Tour listings with filtering capabilities
- **tours/show.blade.php**: Detailed tour page with booking form

### Database Tables
- **tours**: Tour information, pricing, highlights, and inclusions
- **bookings**: Customer booking requests and details
- **testimonials**: Customer reviews and ratings

## Features

### Homepage
- Hero section with call-to-action
- Featured tours grid
- About section with company highlights
- Customer testimonials
- Statistics section
- Contact information

### Tours Page
- Complete tour listings
- Advanced filtering (duration, price, difficulty)
- Tour cards with images, highlights, and pricing
- Pagination support

### Tour Detail Page
- Comprehensive tour information
- Image gallery
- Tour highlights and inclusions
- Booking form with validation
- Related tours suggestions

### Booking System
- Complete booking form
- Form validation (client and server-side)
- Email and phone validation
- Date validation (future dates only)
- Capacity validation
- Total price calculation

## Customization

### Adding New Tours
1. Use the Tour model to create new tours
2. Include required fields: title, description, price, duration, location, image_url
3. Optionally add highlights and included items as JSON arrays

### Styling Modifications
- Main styles are in `resources/views/layouts/app.blade.php`
- Responsive design with mobile-first approach
- Modern animations and hover effects
- Custom color scheme with blue primary colors

### Database Configuration
- Update `.env` file for different database settings
- Modify migration files for schema changes
- Update seeders for different sample data

## Production Deployment

### 1. Environment Setup
```bash
# Set environment to production
APP_ENV=production
APP_DEBUG=false

# Configure production database
DB_HOST=your_production_host
DB_DATABASE=your_production_database
DB_USERNAME=your_production_username
DB_PASSWORD=your_production_password
```

### 2. Optimize for Production
```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

### 3. Web Server Configuration
- Configure Apache or Nginx to point to the `public` directory
- Ensure proper permissions for storage and cache directories
- Set up SSL certificate for HTTPS

## Troubleshooting

### Common Issues

1. **Database Connection Error**
   - Verify MySQL is running
   - Check database credentials in `.env`
   - Ensure database exists

2. **Permission Errors**
   ```bash
   chmod -R 775 storage bootstrap/cache
   chown -R www-data:www-data storage bootstrap/cache
   ```

3. **Missing Dependencies**
   ```bash
   composer install
   php artisan key:generate
   ```

4. **Migration Errors**
   ```bash
   php artisan migrate:fresh --seed
   ```

## Support

For any issues or questions regarding the setup:

1. Check Laravel documentation: https://laravel.com/docs
2. Verify PHP and MySQL versions
3. Ensure all dependencies are installed
4. Check error logs in `storage/logs/laravel.log`

## License

This project is created for educational and demonstration purposes. The design and functionality replicate the original React project while using Laravel and traditional web technologies.