<!-- resources/views/components/nav.blade.php -->
<nav class="bg-white shadow-md fixed top-0 w-full z-10">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a class="text-lg font-semibold text-gray-800" href="{{ route('csrf.intro') }}">CSRF APP</a>
        
        <button id="menu-toggle" class="text-gray-800 focus:outline-none md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <div id="menu" class="hidden md:flex space-x-6">
            <div class="relative group">
                <button class="nav-link">CSRF</button>
                <ul class="absolute left-0 mt-2 w-40 bg-white shadow-md rounded-lg py-2 hidden group-hover:block">
                    <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="{{ route('csrf.intro') }}">General Intro</a></li>
                    <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">About</a></li>
                </ul>
            </div>
            <a class="nav-link font-semibold text-blue-600" href="{{ route('csrf.demo') }}">CSRF LAB</a>
            <!-- <div class="relative group">
                <button class="nav-link">More</button>
                <ul class="absolute left-0 mt-2 w-40 bg-white shadow-md rounded-lg py-2 hidden group-hover:block">
                    <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Documentation</a></li>
                    <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">About</a></li>
                </ul>
            </div> -->
        </div>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
</script>

<style>
    .nav-link {
        @apply text-gray-800 hover:text-blue-600 px-4 py-2;
    }
</style>
