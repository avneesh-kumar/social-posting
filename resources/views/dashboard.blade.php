<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socially - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Platform-specific gradient backgrounds */
        .facebook { background: linear-gradient(135deg, #3b5998, #8b9dc3); }
        .instagram { background: linear-gradient(135deg, #f09433, #bc1888, #833ab4); }
        .twitter { background: linear-gradient(135deg, #000000, #ffffff); }
        .linkedin { background: linear-gradient(135deg, #0077B5, #fff); }
        
        /* Centering and large icon styles */
        .btn-social:hover { transform: scale(1.1); transition: transform 0.2s ease; }
        .hidden { display: none; }

        /* Parallax effect */
        body.parallax {
            perspective: 1px;
            transform-style: preserve-3d;
            overflow-x: hidden;
            overflow-y: scroll;
        }
        .layer {
            position: relative;
            transform: translateZ(-1px) scale(2);
        }

        /* Loader animation */
        .loader {
            border: 6px solid #f3f3f3;
            border-radius: 50%;
            border-top: 6px solid #3498db;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-gray-100 transition-all duration-500 parallax">

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
        <a href="#" class="mr-4"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="mr-4"><i class="fab fa-instagram"></i></a>
        <a href="#" class="mr-4"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
</header>

<!-- Social Media Platform Selection -->
<section class="container mx-auto py-12 text-center layer">
    <h2 class="text-3xl font-bold mb-6">Select a Platform</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="facebook text-white py-6 rounded-lg cursor-pointer btn-social" onclick="selectPlatform('facebook')">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" class="w-20 mx-auto">
            <p class="mt-2 text-xl font-semibold">Facebook</p>
        </div>
        <div class="instagram text-white py-6 rounded-lg cursor-pointer btn-social" onclick="selectPlatform('instagram')">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" class="w-20 mx-auto">
            <p class="mt-2 text-xl font-semibold">Instagram</p>
        </div>
        <div class="twitter text-white py-6 rounded-lg cursor-pointer btn-social" onclick="selectPlatform('twitter')">
            <img src="https://img.freepik.com/free-vector/new-2023-twitter-logo-x-icon-design_1017-45418.jpg?t=st=1725701947~exp=1725705547~hmac=e6ad9ba7920bfdb6ae13831d08b8b7119af683c2ea23bad1454a653c48d48f25&w=826" alt="Twitter" class="w-20 mx-auto">
            <p class="mt-2 text-xl font-semibold">Twitter</p>
        </div>
        <div class="linkedin text-white py-6 rounded-lg cursor-pointer btn-social" onclick="selectPlatform('linkedin')">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/81/LinkedIn_icon.svg" alt="LinkedIn" class="w-20 mx-auto">
            <p class="mt-2 text-xl font-semibold">LinkedIn</p>
        </div>
    </div>
</section>

<!-- Dynamic Post Section -->
<section class="container mx-auto py-12">
    <div id="post-section" class="hidden text-center">
        <h3 class="text-3xl font-bold mb-4" id="platform-title"></h3>
        <form id="post-form">
            <textarea class="w-full border border-gray-300 p-4 rounded-lg mb-4" rows="5" placeholder="Write your post..."></textarea>
            <input type="file" id="image-upload" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 mb-4">
            <div id="image-preview" class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4"></div>
            <button type="button" onclick="submitPost()" class="bg-blue-500 text-white py-2 px-6 rounded-lg">Submit</button>
        </form>
        <!-- Loader -->
        <div id="loader" class="hidden mt-6 loader"></div>
    </div>
</section>

<script>
    const postSection = document.getElementById('post-section');
    const platformTitle = document.getElementById('platform-title');
    const loader = document.getElementById('loader');

    // Function to handle platform selection and theme change
    function selectPlatform(platform) {
        const body = document.body;
        const titleMap = {
            'facebook': 'Facebook Post',
            'instagram': 'Instagram Post',
            'twitter': 'Twitter Post',
            'linkedin': 'LinkedIn Post'
        };
        body.className = platform + ' parallax'; // Change theme with parallax
        platformTitle.textContent = titleMap[platform]; // Change section title
        postSection.classList.remove('hidden'); // Show post section
    }

    // Function to submit the post (async simulation)
    function submitPost() {
        loader.classList.remove('hidden');
        setTimeout(() => {
            loader.classList.add('hidden');
            alert('Post submitted successfully!');
        }, 2000); // Simulating async request with a 2s delay
    }

    // Image preview functionality
    document.getElementById('image-upload').addEventListener('change', function () {
        const preview = document.getElementById('image-preview');
        preview.innerHTML = '';
        Array.from(this.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'w-full h-auto rounded-lg';
                preview.appendChild(img);
            }
            reader.readAsDataURL(file);
        });
    });
</script>
</body>
</html>
