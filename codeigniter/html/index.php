<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Header Section -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-blue-600 hover:text-blue-700">FlaskApp</a>
            <nav>
                <a href="#features" class="text-gray-600 hover:text-blue-600 px-3">Features</a>
                <a href="#about" class="text-gray-600 hover:text-blue-600 px-3">About</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600 px-3">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white">
        <div class="container mx-auto px-6 py-20 text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to PHP Test App</h1>
            <p class="text-lg mb-8">A modern, interactive platform to test your PHP application.</p>
            <a href="#features" class="bg-white text-blue-600 py-3 px-6 rounded-md font-medium shadow-md hover:bg-gray-100 transition">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-blue-600 text-4xl mb-4">⚡</div>
                    <h3 class="text-xl font-bold mb-2">Fast & Lightweight</h3>
                    <p>Built with Flask, known for its lightweight and speed.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-blue-600 text-4xl mb-4">🔒</div>
                    <h3 class="text-xl font-bold mb-2">Secure</h3>
                    <p>Enjoy robust security features with modern best practices.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-blue-600 text-4xl mb-4">📈</div>
                    <h3 class="text-xl font-bold mb-2">Scalable</h3>
                    <p>Grow effortlessly with our scalable architecture.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">About Us</h2>
            <p class="text-lg text-gray-600">This PHP Test Application is designed to demonstrate the power and flexibility of PHP combined with modern design principles using Tailwind CSS. It's simple, interactive, and ready to be extended for your needs!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Contact Us</h2>
            <form action="#" method="POST" class="max-w-lg mx-auto">
                <div class="mb-4">
                    <input type="text" name="name" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring focus:ring-blue-300" required>
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring focus:ring-blue-300" required>
                </div>
                <div class="mb-4">
                    <textarea name="message" rows="4" placeholder="Your Message" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring focus:ring-blue-300" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white py-3 px-6 rounded-md font-medium hover:bg-blue-700 transition">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-6">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 FlaskApp. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
