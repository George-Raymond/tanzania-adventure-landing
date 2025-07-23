<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Serengeti Wonders Tours - Tanzania Safari Adventures')</title>
    <meta name="description" content="@yield('description', 'Experience authentic Tanzania safaris, Kilimanjaro climbing, and Zanzibar beaches with local experts. Book your dream African adventure today!')">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <style>
        /* Safari-themed CSS styles */
        :root {
            /* Safari Earthy Palette */
            --background: hsl(35, 15%, 97%);
            --foreground: hsl(25, 25%, 15%);
            --card: hsl(35, 20%, 98%);
            --card-foreground: hsl(25, 25%, 15%);
            
            /* Sunset Orange - Primary brand color */
            --primary: hsl(25, 95%, 53%);
            --primary-foreground: hsl(35, 15%, 97%);
            --primary-glow: hsl(30, 100%, 65%);
            
            /* Acacia Tree Brown */
            --secondary: hsl(30, 25%, 85%);
            --secondary-foreground: hsl(25, 35%, 25%);
            
            /* Savanna Grass */
            --muted: hsl(45, 30%, 92%);
            --muted-foreground: hsl(35, 15%, 45%);
            
            /* Custom Safari Colors */
            --safari-gold: hsl(45, 95%, 60%);
            --safari-brown: hsl(25, 35%, 25%);
            --safari-green: hsl(95, 30%, 35%);
            --zanzibar-blue: hsl(195, 85%, 45%);
            --kilimanjaro-snow: hsl(210, 20%, 95%);
            
            --border: hsl(35, 25%, 88%);
            --input: hsl(35, 25%, 88%);
            --ring: hsl(25, 95%, 53%);
            --radius: 0.75rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background);
            color: var(--foreground);
            line-height: 1.6;
        }

        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-glow), var(--safari-gold));
            color: var(--primary-foreground);
            box-shadow: 0 4px 15px rgba(255, 140, 0, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 140, 0, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: var(--foreground);
            border: 2px solid var(--border);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: var(--primary-foreground);
            border-color: var(--primary);
        }

        /* Cards */
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(255, 140, 0, 0.15);
        }

        .card-content {
            padding: 1.5rem;
        }

        /* Form elements */
        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--foreground);
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--border);
            border-radius: var(--radius);
            font-size: 1rem;
            transition: border-color 0.3s ease;
            background: var(--background);
            color: var(--foreground);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255, 140, 0, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Utility classes */
        .text-center { text-align: center; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }
        
        .mb-1 { margin-bottom: 0.25rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-3 { margin-bottom: 0.75rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-12 { margin-bottom: 3rem; }
        .mb-16 { margin-bottom: 4rem; }

        .mt-4 { margin-top: 1rem; }
        .mt-6 { margin-top: 1.5rem; }
        .mt-8 { margin-top: 2rem; }

        .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
        .py-12 { padding-top: 3rem; padding-bottom: 3rem; }
        .py-16 { padding-top: 4rem; padding-bottom: 4rem; }
        .py-20 { padding-top: 5rem; padding-bottom: 5rem; }

        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }

        .grid { display: grid; }
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        .grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        .grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        .gap-4 { gap: 1rem; }
        .gap-6 { gap: 1.5rem; }
        .gap-8 { gap: 2rem; }

        .flex { display: flex; }
        .items-center { align-items: center; }
        .justify-center { justify-content: center; }
        .justify-between { justify-content: space-between; }
        .space-x-4 > * + * { margin-left: 1rem; }
        .space-y-4 > * + * { margin-top: 1rem; }
        .space-y-6 > * + * { margin-top: 1.5rem; }

        .w-full { width: 100%; }
        .h-full { height: 100%; }
        .min-h-screen { min-height: 100vh; }

        .fixed { position: fixed; }
        .relative { position: relative; }
        .absolute { position: absolute; }
        .inset-0 { top: 0; right: 0; bottom: 0; left: 0; }

        .z-50 { z-index: 50; }
        .z-10 { z-index: 10; }

        .bg-cover { background-size: cover; }
        .bg-center { background-position: center; }
        .bg-no-repeat { background-repeat: no-repeat; }

        .rounded-xl { border-radius: 0.75rem; }
        .rounded-full { border-radius: 9999px; }

        .shadow-lg { box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); }

        .text-white { color: white; }
        .text-primary { color: var(--primary); }
        .text-muted { color: var(--muted-foreground); }

        .text-sm { font-size: 0.875rem; }
        .text-base { font-size: 1rem; }
        .text-lg { font-size: 1.125rem; }
        .text-xl { font-size: 1.25rem; }
        .text-2xl { font-size: 1.5rem; }
        .text-3xl { font-size: 1.875rem; }
        .text-4xl { font-size: 2.25rem; }
        .text-5xl { font-size: 3rem; }

        .font-bold { font-weight: 700; }
        .font-semibold { font-weight: 600; }
        .font-medium { font-weight: 500; }

        .hidden { display: none; }

        /* Responsive */
        @media (min-width: 768px) {
            .md\\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .md\\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .md\\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
            .md\\:flex { display: flex; }
            .md\\:hidden { display: none; }
            .md\\:block { display: block; }
            .md\\:text-5xl { font-size: 3rem; }
            .md\\:text-7xl { font-size: 4.5rem; }
        }

        @media (min-width: 1024px) {
            .lg\\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .lg\\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Success message */
        .alert-success {
            background: hsl(120, 50%, 95%);
            color: hsl(120, 50%, 25%);
            border: 1px solid hsl(120, 50%, 80%);
            padding: 1rem;
            border-radius: var(--radius);
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- JavaScript for smooth scrolling and mobile menu -->
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.parallax-bg');
            if (parallax) {
                const speed = scrolled * 0.5;
                parallax.style.transform = `translateY(${speed}px)`;
            }
        });

        // Form submission handling
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    const submitBtn = this.querySelector('button[type="submit"]');
                    if (submitBtn) {
                        submitBtn.innerHTML = 'Sending...';
                        submitBtn.disabled = true;
                    }
                });
            }
        });
    </script>
</body>
</html>