# Tanzania Adventure Landing - Laravel Version

A stunning Laravel-based landing page for **Serengeti Wonders Tours**, showcasing Tanzania's most breathtaking safari destinations and tourism experiences.

![Tanzania Safari](https://images.unsplash.com/photo-1516426122078-c23e76319801?w=800&h=400&fit=crop)

## 🦁 About

This project is a complete recreation of a modern, responsive tourism landing page built with pure Laravel framework, featuring:

- **Safari Adventures** - Serengeti National Park, Ngorongoro Crater
- **Mountain Climbing** - Mount Kilimanjaro expeditions
- **Beach Tourism** - Zanzibar Island experiences
- **Cultural Tours** - Authentic Maasai community visits

## ✨ Features

### Frontend
- 🎨 **Beautiful Design** - Safari-themed with sunset gradient colors
- 📱 **Fully Responsive** - Works perfectly on all devices
- 🎭 **Interactive Elements** - Smooth scrolling, hover effects, parallax
- 🌟 **Modern UI/UX** - Clean, professional layout with African aesthetics

### Backend
- 🚀 **Laravel 11** - Latest PHP framework
- 📝 **Contact Forms** - Database storage with validation
- 🗄️ **SQLite Database** - Lightweight database solution
- 📧 **Form Handling** - Server-side validation and processing
- 🔐 **CSRF Protection** - Secure form submissions

### Pages & Sections
- 🏠 **Hero Section** - Stunning safari imagery with call-to-action
- ℹ️ **About Section** - Company story and expertise
- 🗺️ **Destinations** - Featured safari locations with details
- 🛎️ **Services** - Game drives, cultural tours, transfers, climbing
- 🏆 **Why Choose Us** - Trust factors and unique selling points
- 💬 **Testimonials** - Customer reviews and ratings
- 📞 **Contact Section** - Contact form with validation and success messages
- 📱 **Footer** - Links, social media, newsletter signup

## 🛠️ Technology Stack

- **Backend**: PHP 8.4 + Laravel 11
- **Frontend**: HTML5, CSS3, JavaScript
- **Database**: SQLite
- **Icons**: Lucide Icons
- **Fonts**: Google Fonts (Playfair Display, Inter)
- **Styling**: Custom CSS with Safari-themed design system

## 🚀 Installation

### Prerequisites
- PHP 8.1 or higher
- Composer
- SQLite
- Git

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
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```

6. **Visit the application**
   Open [http://localhost:8000](http://localhost:8000) in your browser

## 📁 Project Structure

```
tanzania-adventure-landing/
├── app/
│   ├── Http/Controllers/
│   │   └── HomeController.php      # Main controller
│   └── Models/
│       └── Contact.php             # Contact form model
├── database/
│   ├── migrations/
│   │   └── create_contacts_table.php
│   └── database.sqlite
├── public/
│   ├── css/
│   │   └── app.css                 # Additional styles
│   └── images/                     # Safari images
│       ├── hero-safari.jpg
│       ├── serengeti-migration.jpg
│       ├── kilimanjaro-peak.jpg
│       ├── ngorongoro-crater.jpg
│       ├── zanzibar-beach.jpg
│       └── maasai-culture.jpg
├── resources/
│   └── views/
│       └── welcome.blade.php       # Main landing page
└── routes/
    └── web.php                     # Application routes
```

## 🎨 Design System

### Color Palette
- **Primary**: Sunset Orange (`hsl(25 95% 53%)`)
- **Safari Gold**: `hsl(45 95% 60%)`
- **Safari Brown**: `hsl(25 35% 25%)`
- **Zanzibar Blue**: `hsl(195 85% 45%)`

### Typography
- **Headings**: Playfair Display (serif)
- **Body**: Inter (sans-serif)

### Components
- **Safari Cards**: Elevated cards with hover effects
- **Safari Buttons**: Gradient buttons with glow effects
- **Responsive Grid**: Mobile-first design approach

## 📧 Contact Form Features

The contact form includes:
- ✅ Server-side validation
- 💾 Database storage
- 🔄 Form persistence (old input values)
- 🎯 Success/error messages
- 🛡️ CSRF protection
- 📱 Mobile-friendly design

## 🌍 Destinations Featured

1. **Serengeti National Park**
   - Great Migration witness
   - Big Five safaris
   - Hot air balloon rides

2. **Ngorongoro Crater**
   - UNESCO World Heritage site
   - Dense wildlife viewing
   - Maasai cultural experiences

3. **Mount Kilimanjaro**
   - Africa's highest peak
   - 5 climate zones
   - Guided trekking expeditions

4. **Zanzibar Island**
   - Pristine white beaches
   - Historic Stone Town
   - Spice plantation tours

## 🤝 Contributing

We welcome contributions! Please feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📞 Contact Information

**Serengeti Wonders Tours**
- 📱 Phone: +255 754 123 456
- 📧 Email: info@serengetiwonders.com
- 📍 Location: Arusha, Tanzania
- 💬 WhatsApp: +255 754 123 456

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- Original design inspiration from Tanzania's natural beauty
- Safari images from the community
- Laravel framework and community
- African tourism industry

---

**Karibu Tanzania! Welcome to the adventure of a lifetime!** 🦁🏔️🏖️

*Built with ❤️ for Tanzania tourism by George Raymond*
