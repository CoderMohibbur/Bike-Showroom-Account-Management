<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Random Design with Login/Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header Section -->
    <header class="bg-gradient-to-r from-purple-500 to-pink-600 text-white py-3">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo Section -->
            <div class="text-2xl font-extrabold">LOGO</div>

            <!-- Navigation Menu -->
            <nav>
                <ul class="flex space-x-6 text-base font-medium">
                    <li><a href="#" class="hover:text-yellow-300 transition-all duration-200">Home</a></li>
                    <li><a href="#" class="hover:text-yellow-300 transition-all duration-200">About</a></li>
                    <li><a href="#" class="hover:text-yellow-300 transition-all duration-200">Services</a></li>
                    <li><a href="#" class="hover:text-yellow-300 transition-all duration-200">Blog</a></li>
                    <li><a href="#" class="hover:text-yellow-300 transition-all duration-200">Contact</a></li>
                </ul>
            </nav>

            <!-- Login/Register Section -->
            <div class="flex space-x-6">
                <a href="http://127.0.0.1:8000/login" class="px-5 py-1.5 border-2 border-white rounded-full text-white font-semibold hover:bg-white hover:text-purple-600 transition-all duration-200">Login</a>
                <a href="http://127.0.0.1:8000/register" class="px-5 py-1.5 bg-white text-purple-600 rounded-full font-semibold hover:bg-purple-600 hover:text-white transition-all duration-200">Register</a>
            </div>
        </div>
    </header>



<!-- Body Section -->
<main class="relative w-full h-screen">
    <!-- Full-screen Background Image -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://content3.jdmagicbox.com/comp/kolkata/t1/033pxx33.xx33.210418141505.m6t1/catalogue/vivaan-suzuki-belgachia-kolkata-motorcycle-dealers-suzuki-wmi0gae3wr.jpg');">
        <!-- Overlay to darken the image (optional) -->
        <div class="absolute inset-0 bg-black opacity-40"></div>
    </div>

<!-- Text Section Over the Image -->
<div class="relative z-10 flex justify-center items-center w-full h-full text-center text-white">
    <div class="px-6 py-12 md:px-12">
        <!-- Title with improved styling -->
        <h1 class="text-5xl font-extrabold mb-6 text-yellow-400 drop-shadow-lg">Welcome to Our Bike Showroom</h1>
        <!-- Subtitle with better legibility and spacing -->
        <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto leading-relaxed text-white-400 drop-shadow-lg text-shadow-white">Explore the best bikes in the industry. Find your perfect ride and start your adventure today.</p>
        <!-- Call-to-action button -->
        <a href="#" class="bg-green-500 text-white px-8 py-3 rounded-lg hover:bg-green-600 transition-all duration-300 text-lg font-medium transform hover:scale-105">Explore Now</a>
    </div>
</div>

</main>






<!-- Footer Section -->
<footer class="bg-gradient-to-r from-indigo-600 to-blue-500 text-white py-3">
    <div class="container mx-auto text-center px-5">
        <!-- Footer Heading -->
        <p class="text-sm mb-2">© 2024 Bike Showroom | Japan Bangladesh IT</p>

        <!-- Privacy and Terms Links -->

    </div>
</footer>




</body>
</html>
