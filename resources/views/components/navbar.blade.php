<nav class="bg-white shadow-md fixed top-0 w-full z-10">
    <div class="max-w-screen-xl mx-auto px-4 py-3 flex justify-between items-center">
        <a class="text-lg font-semibold text-gray-800" href="{{ route('csrf.intro') }}">CSRF APP</a>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="text-gray-800 focus:outline-none md:hidden">
            <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Menu (Mobile: Hidden, Desktop: Flex) -->
        <div id="menu"
            class="fixed top-0 right-[-100%] h-full w-2/3 bg-white shadow-lg p-6 transition-all duration-300 ease-in-out md:static md:w-auto md:p-0 md:bg-transparent md:shadow-none md:flex md:space-x-6">
            
            <!-- Close Button (Only for Mobile) -->
            <button id="close-menu" class="absolute top-4 right-4 text-gray-800 md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Menu Items -->
            <ul class="flex flex-col space-y-6 md:flex-row md:space-y-0 md:space-x-6 mt-10 md:mt-0">
                <li class="relative group">
                    <!-- Mobile CSRF Dropdown Link -->
                    <button id="dropdown-toggle" class="nav-link w-full text-left md:hidden">CSRF</button>
                    <!-- Desktop CSRF Link -->
                    <a class="nav-link hidden md:block cursor-pointer">CSRF</a>
                    
                    <!-- Dropdown Menu -->
                    <ul id="dropdown-menu"
                        class="hidden md:absolute md:left-0 md:bg-white md:shadow-md md:rounded-lg md:w-40 md:py-2 group-hover:block transition-all duration-300 ease-in-out">
                        <li class="mobile-dropdown-item">
                            <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="{{ route('csrf.intro') }}">General Intro</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">About</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link font-semibold text-blue-600" href="{{ route('csrf.demo') }}">CSRF LAB</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .nav-link {
        @apply text-gray-800 hover:text-blue-600 px-4 py-2;
    }

    /* Desktop Dropdown Menu Styling */
    #dropdown-menu {
        padding: 0.5rem 1rem;
        visibility: hidden;
        opacity: 0;
        transform: translateY(-10px);
    }

    /* Make the dropdown visible when the parent is hovered */
    .group:hover #dropdown-menu {
        visibility: visible;
        opacity: 1;
        transform: translateY(0);
        transition: all 0.3s ease-in-out;
    }

    /* Hide dropdown when the parent is not hovered */
    .group:not(:hover) #dropdown-menu {
        visibility: hidden;
        opacity: 0;
        transform: translateY(-10px);
        transition: all 0.3s ease-in-out;
    }

    /* Add padding and bigger hit area for better interaction */
    #dropdown-menu li a {
        padding: 0.5rem 1rem;
    }

    /* Mobile Menu Visibility Fix */
    .md\\:hidden {
        display: none !important;
    }

    /* Mobile Dropdown - Show on Click */
    #dropdown-menu.show {
        display: block;
        visibility: visible;
        opacity: 1;
        transform: translateY(0);
    }

    /* Mobile Dropdown Items with Blue Left Border */
    .mobile-dropdown-item {
        border-left: 4px solid transparent;
        transition: all 0s ease-in-out;
    }

    /* Add blue left border on hover for mobile dropdown items */
    .mobile-dropdown-item:hover {
        border-left: 4px solid #3B82F6; /* Blue border color */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("menu");
        const closeMenu = document.getElementById("close-menu");
        const dropdownToggle = document.getElementById("dropdown-toggle");
        const dropdownMenu = document.getElementById("dropdown-menu");

        // Open Mobile Menu
        menuToggle.addEventListener("click", function () {
            menu.style.right = "0";
        });

        // Close Mobile Menu
        closeMenu.addEventListener("click", function () {
            menu.style.right = "-100%";
        });

        // Toggle Mobile Dropdown for CSRF
        dropdownToggle.addEventListener("click", function () {
            dropdownMenu.classList.toggle("show");
        });
    });
</script>
