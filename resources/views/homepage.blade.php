<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socially - Manage Your Social Media</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Keyframes for animations */
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideIn {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(0); }
        }
        .fade-in { animation: fadeIn 1s ease-in-out; }
        .slide-in { animation: slideIn 1s ease-in-out; }
        .facebook { background-color: #4267B2; }
        .instagram { background-color: #E1306C; }
        .twitter { background-color: #1DA1F2; }
        .linkedin { background-color: #0077B5; }
        .btn-hover:hover { transform: scale(1.1); transition: transform 0.2s ease; }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-gray-900 text-white py-4 text-center flex items-center justify-center">
        <div class="w-1/3 text-left pl-4">
            <a href="/" class="text-white"><img src="{{ asset('logo.webp') }}" alt="Logo" class="h-8"></a>
        </div>
        <div class="w-1/3">
            <h1 class="text-2xl font-bold">Socially</h1>
            <p class="text-sm">Effortlessly manage your social media platforms</p>
        </div>
        <div class="w-1/3 text-right pr-4">
            <a href="/auth/facebook" class="mr-4"><i class="fab fa-facebook-f"></i></a>
            <a href="/auth/instagram" class="mr-4"><i class="fab fa-instagram"></i></a>
            <a href="#" class="mr-4"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold fade-in">Simplify Your Social Media Strategy</h1>
            <p class="mt-4 text-lg fade-in">Manage, schedule, and post across all your social accounts from a single dashboard.</p>
            <a href="/dashboard" class="mt-8 inline-block bg-white text-blue-500 font-bold py-3 px-8 rounded-full shadow-lg btn-hover fade-in">Get Started Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features bg-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold slide-in">Why Use Socially?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="feature-item fade-in">
                    <div class="text-5xl text-blue-500"><i class="fab fa-facebook"></i></div>
                    <h3 class="text-xl font-semibold mt-4">Post on Multiple Platforms</h3>
                    <p class="mt-2 text-gray-600">Seamlessly post to Facebook, Instagram, LinkedIn, Twitter, and more!</p>
                </div>
                <div class="feature-item fade-in">
                    <div class="text-5xl text-pink-500"><i class="fas fa-calendar-alt"></i></div>
                    <h3 class="text-xl font-semibold mt-4">Schedule Ahead</h3>
                    <p class="mt-2 text-gray-600">Plan posts ahead to keep your audience engaged.</p>
                </div>
                <div class="feature-item fade-in">
                    <div class="text-5xl text-blue-500"><i class="fas fa-chart-line"></i></div>
                    <h3 class="text-xl font-semibold mt-4">Track Performance</h3>
                    <p class="mt-2 text-gray-600">Monitor engagement and reach with analytics.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing bg-gradient-to-r from-purple-500 to-indigo-600 py-16 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold slide-in">Choose Your Plan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div class="card bg-white text-purple-500 p-8 rounded-lg shadow-lg slide-in">
                    <h3 class="text-2xl font-bold">Free Plan</h3>
                    <p class="text-5xl font-bold mt-4">$0</p>
                    <p class="text-xl mt-2">For individuals just getting started</p>
                    <ul class="mt-6 text-gray-700">
                        <li>1 Social Account</li>
                        <li>5 Scheduled Posts</li>
                    </ul>
                    <a href="#" class="mt-8 inline-block bg-purple-500 text-white py-3 px-6 rounded-full shadow-lg btn-hover">Get Started Free</a>
                </div>
                <div class="card bg-white text-indigo-500 p-8 rounded-lg shadow-lg slide-in">
                    <h3 class="text-2xl font-bold">Pro Plan</h3>
                    <p class="text-5xl font-bold mt-4">$29</p>
                    <p class="text-xl mt-2">For businesses and brands</p>
                    <ul class="mt-6 text-gray-700">
                        <li>5 Social Accounts</li>
                        <li>Unlimited Scheduled Posts</li>
                        <li>Advanced Analytics</li>
                    </ul>
                    <a href="#" class="mt-8 inline-block bg-indigo-500 text-white py-3 px-6 rounded-full shadow-lg btn-hover">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 text-center">
        <p>&copy; 2024 Socially. All Rights Reserved.</p>
    </footer>

</body>
</html>
