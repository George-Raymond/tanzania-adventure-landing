# Tanzania Adventure Landing - Laravel Application

A complete Laravel-based landing page for Serengeti Wonders Tours, recreated from the original React/TypeScript version with pure PHP, HTML, CSS, and JavaScript.

## 🦁 Features

- **Responsive Design**: Mobile-first approach with beautiful animations
- **Safari-themed UI**: Authentic Tanzania colors and gradients
- **Contact Form**: Functional contact form with database storage
- **Modern CSS**: Custom CSS with Safari-themed color palette
- **Smooth Scrolling**: JavaScript-powered smooth navigation
- **Image Gallery**: High-quality Tanzania safari images
- **SEO Optimized**: Proper meta tags and semantic HTML

## 🛠️ Tech Stack

- **Backend**: Laravel 12 (PHP 8.4)
- **Database**: SQLite (MySQL ready)
- **Frontend**: Pure HTML, CSS, JavaScript
- **Styling**: Custom CSS with Safari theme
- **Images**: Optimized safari images

## 🚀 Quick Start

### Prerequisites
- PHP 8.4 or higher
- Composer
- SQLite (or MySQL)

### Installation

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
php artisan migrate
```

5. **Start the server**
```bash
php artisan serve
```

Visit `http://localhost:8000` to see your Tanzania Adventure Landing page!

## 📁 Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   └── HomeController.php       # Main page controller
│   └── Models/
│       └── Contact.php              # Contact form model
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php           # Main layout with CSS/JS
│   └── home.blade.php              # Landing page content
├── public/images/                  # Safari images
├── database/migrations/            # Database schema
└── routes/web.php                 # Application routes
```

## 🎨 Design Features

### Color Palette
- **Primary**: Safari Orange (`hsl(25, 95%, 53%)`)
- **Secondary**: Acacia Brown (`hsl(30, 25%, 85%)`)
- **Accent**: Zanzibar Blue (`hsl(195, 85%, 45%)`)
- **Gradients**: Sunset, Safari, Ocean themes

### Sections
1. **Hero Section**: Full-screen with parallax background
2. **About**: Company information with image grid
3. **Destinations**: Top Tanzania destinations
4. **Services**: Safari services offered
5. **Why Choose Us**: Key benefits
6. **Testimonials**: Customer reviews
7. **Contact**: Contact form and information
8. **Footer**: Links and newsletter signup

## 📱 Responsive Design

- **Mobile First**: Optimized for all screen sizes
- **Breakpoints**: 768px (tablet), 1024px (desktop)
- **Touch Friendly**: Large buttons and touch targets
- **Fast Loading**: Optimized images and CSS

## 🗃️ Database

### Contact Form
The contact table stores:
- Name (required)
- Email (required)
- Phone (optional)
- Message (required)
- Timestamps

## 🔧 Customization

### Changing Colors
Edit the CSS variables in `resources/views/layouts/app.blade.php`:
```css
:root {
    --primary: hsl(25, 95%, 53%);
    --safari-gold: hsl(45, 95%, 60%);
    /* ... other colors */
}
```

### Adding New Sections
1. Update `HomeController.php` with new data
2. Add section to `home.blade.php`
3. Style with CSS in the layout file

### Database Configuration
For MySQL, update `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tanzania_adventure
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 📧 Contact Form

The contact form:
- Validates input fields
- Stores submissions in database
- Shows success message
- Includes spam protection (CSRF)

## 🌍 Deployment

### Shared Hosting
1. Upload files via FTP
2. Set document root to `public/`
3. Update `.env` with production settings
4. Run `php artisan migrate --force`

### VPS/Cloud
1. Install PHP, Composer, Web server
2. Clone repository
3. Set up virtual host pointing to `public/`
4. Configure environment variables
5. Set proper file permissions

## 🎯 SEO Features

- Semantic HTML structure
- Meta descriptions and titles
- Open Graph tags ready
- Fast loading times
- Mobile-friendly design

## 📞 Contact Information

**Serengeti Wonders Tours**
- Phone: +255 754 123 456
- Email: info@serengetiwonders.com
- Location: Arusha, Tanzania
- WhatsApp: +255 754 123 456

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is licensed under the MIT License.

## 🙏 Acknowledgments

- Original design inspiration from Tanzania's natural beauty
- Safari images from professional photographers
- Laravel framework for robust backend
- Modern CSS techniques for beautiful UI

---

**Ready to explore Tanzania? Visit our landing page and start your adventure!** 🦁🏔️🏖️

## 🔄 How to Push to Your GitHub Repository

Since I couldn't push directly to your repository, here's how you can do it:

1. **Create the repository on GitHub** (if not already created):
   - Go to GitHub.com
   - Click "New repository"
   - Name it `tanzania-adventure-landing1`
   - Don't initialize with README (we already have one)

2. **Push from your local machine**:
```bash
# The repository is already initialized and committed
# Just add your GitHub repository as remote and push
git remote add origin https://github.com/George-Raymond/tanzania-adventure-landing1.git
git branch -M main
git push -u origin main
```

The complete Laravel application is ready with all features from the original React version!
