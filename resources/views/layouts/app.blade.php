<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Tanzania Adventure Landing - Serengeti Wonders Tours')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <style>
        /* Safari Earthy Palette */
        :root {
            --background: hsl(35, 15%, 97%);
            --foreground: hsl(25, 25%, 15%);
            --card: hsl(35, 20%, 98%);
            --card-foreground: hsl(25, 25%, 15%);
            --primary: hsl(25, 95%, 53%);
            --primary-foreground: hsl(35, 15%, 97%);
            --primary-glow: hsl(30, 100%, 65%);
            --secondary: hsl(30, 25%, 85%);
            --secondary-foreground: hsl(25, 35%, 25%);
            --muted: hsl(45, 30%, 92%);
            --muted-foreground: hsl(35, 15%, 45%);
            --accent: hsl(200, 50%, 40%);
            --accent-foreground: hsl(35, 15%, 97%);
            --destructive: hsl(0, 84%, 60%);
            --destructive-foreground: hsl(35, 15%, 97%);
            --border: hsl(35, 25%, 88%);
            --input: hsl(35, 25%, 88%);
            --ring: hsl(25, 95%, 53%);
            --safari-gold: hsl(45, 85%, 65%);
            --earth-brown: hsl(30, 40%, 30%);
            --sunset-red: hsl(15, 90%, 60%);
            --grass-green: hsl(85, 40%, 45%);
            --sky-blue: hsl(200, 60%, 50%);
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

        .safari-button {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-glow) 100%);
            color: var(--primary-foreground);
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .safari-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            background: linear-gradient(135deg, var(--primary-glow) 0%, var(--primary) 100%);
        }

        .safari-text-glow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .section {
            padding: 80px 0;
        }

        .card {
            background: var(--card);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--primary-foreground);
        }

        .btn-outline {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-outline:hover {
            background: white;
            color: var(--primary);
        }

        .input, .textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border);
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .input:focus, .textarea:focus {
            outline: none;
            border-color: var(--primary);
        }

        .grid {
            display: grid;
            gap: 24px;
        }

        .grid-cols-1 { grid-template-columns: repeat(1, 1fr); }
        .grid-cols-2 { grid-template-columns: repeat(2, 1fr); }
        .grid-cols-3 { grid-template-columns: repeat(3, 1fr); }
        .grid-cols-4 { grid-template-columns: repeat(4, 1fr); }

        @media (max-width: 768px) {
            .grid-cols-2, .grid-cols-3, .grid-cols-4 {
                grid-template-columns: 1fr;
            }
        }

        .text-center { text-align: center; }
        .text-left { text-align: left; }
        .text-right { text-align: right; }

        .mb-4 { margin-bottom: 16px; }
        .mb-6 { margin-bottom: 24px; }
        .mb-8 { margin-bottom: 32px; }
        .mb-16 { margin-bottom: 64px; }

        .mt-4 { margin-top: 16px; }
        .mt-8 { margin-top: 32px; }

        .p-4 { padding: 16px; }
        .p-6 { padding: 24px; }
        .p-8 { padding: 32px; }

        .hidden { display: none; }
        .block { display: block; }
        .flex { display: flex; }
        .inline-flex { display: inline-flex; }

        .items-center { align-items: center; }
        .justify-center { justify-content: center; }
        .justify-between { justify-content: space-between; }

        .space-x-4 > * + * { margin-left: 16px; }
        .space-y-4 > * + * { margin-top: 16px; }

        .fixed { position: fixed; }
        .relative { position: relative; }
        .absolute { position: absolute; }

        .top-0 { top: 0; }
        .left-0 { left: 0; }
        .right-0 { right: 0; }
        .bottom-0 { bottom: 0; }

        .w-full { width: 100%; }
        .h-full { height: 100%; }
        .h-screen { height: 100vh; }

        .z-50 { z-index: 50; }
        .z-10 { z-index: 10; }

        .opacity-0 { opacity: 0; }
        .opacity-100 { opacity: 1; }

        .transform { transform: translateZ(0); }
        .transition-all { transition: all 0.3s ease; }

        .bg-cover { background-size: cover; }
        .bg-center { background-position: center; }
        .bg-no-repeat { background-repeat: no-repeat; }

        .text-white { color: white; }
        .text-primary { color: var(--primary); }

        .bg-primary { background-color: var(--primary); }
        .bg-white { background-color: white; }

        .border { border: 1px solid var(--border); }
        .border-white { border: 1px solid white; }

        .rounded { border-radius: 8px; }
        .rounded-full { border-radius: 9999px; }

        .shadow { box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); }

        /* Responsive */
        @media (min-width: 768px) {
            .md\\:flex { display: flex; }
            .md\\:hidden { display: none; }
            .md\\:block { display: block; }
            .md\\:grid-cols-2 { grid-template-columns: repeat(2, 1fr); }
            .md\\:grid-cols-3 { grid-template-columns: repeat(3, 1fr); }
            .md\\:grid-cols-4 { grid-template-columns: repeat(4, 1fr); }
        }

        /* Animation classes */
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        .animate-slide-up {
            animation: slideUp 0.6s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { 
                opacity: 0; 
                transform: translateY(30px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        /* Scroll indicator */
        .scroll-indicator {
            width: 24px;
            height: 40px;
            border: 2px solid white;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            animation: bounce 2s infinite;
        }

        .scroll-indicator::after {
            content: '';
            width: 4px;
            height: 12px;
            background: white;
            border-radius: 2px;
            margin-top: 8px;
            animation: scroll 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        @keyframes scroll {
            0% { opacity: 0; transform: translateY(-10px); }
            50% { opacity: 1; }
            100% { opacity: 0; transform: translateY(10px); }
        }
    </style>
</head>
<body>
    @yield('content')

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Smooth scrolling for navigation links
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
            const menuButton = document.querySelector('[data-mobile-menu-button]');
            const isOpen = !mobileMenu.classList.contains('hidden');
            
            if (isOpen) {
                mobileMenu.classList.add('hidden');
                menuButton.innerHTML = '<i data-lucide="menu"></i>';
            } else {
                mobileMenu.classList.remove('hidden');
                menuButton.innerHTML = '<i data-lucide="x"></i>';
            }
            lucide.createIcons();
        }

        // Contact form submission
        async function submitContactForm(event) {
            event.preventDefault();
            
            const form = event.target;
            const formData = new FormData(form);
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Show loading state
            submitButton.innerHTML = '<i data-lucide="loader-2" class="animate-spin"></i> Sending...';
            submitButton.disabled = true;
            
            try {
                const response = await fetch('/contact', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Show success message
                    showToast('Asante Sana! 🦁', result.message, 'success');
                    form.reset();
                } else {
                    showToast('Error', 'Something went wrong. Please try again.', 'error');
                }
            } catch (error) {
                showToast('Error', 'Something went wrong. Please try again.', 'error');
            } finally {
                // Reset button
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
                lucide.createIcons();
            }
        }

        // Toast notification
        function showToast(title, message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${type === 'success' ? 'bg-green-500' : 'bg-red-500'} text-white max-w-sm`;
            toast.innerHTML = `
                <div class="font-semibold">${title}</div>
                <div class="text-sm">${message}</div>
            `;
            
            document.body.appendChild(toast);
            
            // Animate in
            setTimeout(() => toast.classList.add('animate-fade-in'), 10);
            
            // Remove after 5 seconds
            setTimeout(() => {
                toast.style.opacity = '0';
                setTimeout(() => document.body.removeChild(toast), 300);
            }, 5000);
        }

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-bg');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-slide-up');
                }
            });
        }, observerOptions);

        // Observe all sections for animations
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>