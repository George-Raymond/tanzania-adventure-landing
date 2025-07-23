# Tanzania Adventure Landing

A beautiful, responsive single-page application for Serengeti Wonders Tours built with pure Laravel, HTML, CSS, and JavaScript. This project showcases Tanzania's premier safari destinations, services, and cultural experiences.

## 🦁 Features

- **Single Page Application**: Smooth scrolling navigation between sections
- **Responsive Design**: Mobile-first approach with beautiful Safari-themed styling
- **Dynamic Content**: Database-driven destinations, services, and testimonials
- **Interactive Contact Form**: AJAX-powered form submission with validation
- **Parallax Effects**: Engaging visual effects and animations
- **Local Expertise**: Authentic Tanzanian safari experience showcase

## 🗺️ Sections

1. **Hero Section**: Stunning safari imagery with call-to-action
2. **About**: Company story and statistics
3. **Destinations**: Serengeti, Ngorongoro, Kilimanjaro, and Zanzibar
4. **Services**: Game drives, cultural tours, transfers, and mountain climbing
5. **Why Choose Us**: Unique value propositions
6. **Testimonials**: Customer reviews and experiences
7. **Contact**: Contact form and company information
8. **Footer**: Additional links and newsletter signup

## 🛠️ Technology Stack

- **Backend**: Laravel 12.21.0 (PHP 8.4)
- **Database**: SQLite (easily configurable for MySQL/PostgreSQL)
- **Frontend**: Pure HTML5, CSS3, and vanilla JavaScript
- **Icons**: Lucide Icons
- **Fonts**: Google Fonts (Playfair Display, Inter)
- **Styling**: Custom CSS with Safari-themed color palette

## 🚀 Installation

### Prerequisites
- PHP 8.4 or higher
- Composer
- SQLite extension for PHP

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/George-Raymond/tanzania-adventure-landing1.git
   cd tanzania-adventure-landing1
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   touch database/database.sqlite
   php artisan migrate
   php artisan db:seed
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```

6. **Visit the application**
   Open your browser and navigate to `http://localhost:8000`

## 📊 Database Structure

### Destinations
- Serengeti National Park
- Ngorongoro Crater
- Mount Kilimanjaro
- Zanzibar Island

### Services
- Game Drives
- Cultural Tours
- Airport Transfers
- Mountain Climbing

### Testimonials
- Customer reviews with ratings
- Profile images and country information

### Contact Submissions
- Form submissions with validation
- Email notifications (configurable)

## 🎨 Design System

### Color Palette (Safari Theme)
- **Primary**: Sunset Orange (`hsl(25, 95%, 53%)`)
- **Secondary**: Acacia Brown (`hsl(30, 25%, 85%)`)
- **Accent**: Kilimanjaro Blue (`hsl(200, 50%, 40%)`)
- **Safari Gold**: `hsl(45, 85%, 65%)`
- **Earth Brown**: `hsl(30, 40%, 30%)`

### Typography
- **Headings**: Playfair Display (Serif)
- **Body**: Inter (Sans-serif)

## 📱 Responsive Breakpoints

- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

## 🔧 Configuration

### Database Configuration
The application uses SQLite by default. To use MySQL:

1. Update `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tanzania_adventure
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

2. Run migrations:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

### Email Configuration
Configure email settings in `.env` for contact form notifications:
```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
```

## 🌍 Deployment

### Shared Hosting
1. Upload files to public_html or web root
2. Move contents of `public/` to the web root
3. Update `index.php` to point to the correct Laravel bootstrap file
4. Set up database and run migrations

### VPS/Cloud Hosting
1. Set up web server (Apache/Nginx)
2. Configure PHP and database
3. Clone repository and install dependencies
4. Set proper file permissions
5. Configure environment variables

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is open-source and available under the [MIT License](LICENSE).

## 📞 Contact

**Serengeti Wonders Tours**
- Email: info@serengetiwonders.com
- Phone: +255 123 456 789
- Location: Arusha, Tanzania
- Website: [Your Website URL]

## 🙏 Acknowledgments

- Safari images sourced from Tanzania Tourism Board
- Icons by Lucide Icons
- Fonts by Google Fonts
- Inspiration from Tanzania's natural beauty

---

**Experience the Magic of Tanzania** 🇹🇿

*Safaris • Mountains • Beaches • Culture*
