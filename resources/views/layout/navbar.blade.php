<nav class="fixed top-0 left-0 w-full z-50
    bg-black/40 backdrop-blur-md shadow-md">

    <div class="flex justify-between items-center px-5 md:px-10 py-3">

        <!-- Logo & Title -->
        <div class="flex items-center space-x-3 text-white text-xs leading-tight">
            <img
                src="{{ asset('logo.png') }}"
                alt="Logo"
                class="w-8 h-8 md:w-8 md:h-8 object-contain"
            >

            <div class="flex flex-col items-start">
                <p class="font-bold">Memberi Makna</p>
                <p>Pada Budaya</p>
            </div>
        </div>


        <!-- ================= DESKTOP MENU ================= -->
        <div class="hidden md:flex items-center space-x-10 text-white text-sm">

            <a href="{{ route('profile') }}"
                class="{{ Route::currentRouteName() == 'profile' ? 'text-yellow-300' : 'text-white' }}
                hover:text-red-700 transition duration-200">
                Profile
            </a>

            <a href="{{ route('event') }}"
                class="{{ Route::currentRouteName() == 'event' ? 'text-yellow-300' : 'text-white' }}
                hover:text-red-700 transition duration-200">
                Event
            </a>

            <a href="{{ route('galeri') }}"
                class="{{ Route::currentRouteName() == 'galeri' ? 'text-yellow-300' : 'text-white' }}
                hover:text-red-700 transition duration-200">
                Galeri
            </a>

            <a href="{{ route('kontaklokasi') }}"
                class="{{ Route::currentRouteName() == 'kontaklokasi' ? 'text-yellow-300' : 'text-white' }}
                hover:text-red-700 transition duration-200">
                Kontak & Lokasi
            </a>

        </div>


        <!-- ================= DESKTOP SEARCH ================= -->
        <div class="hidden md:flex items-center space-x-2">

            <input
                id="searchInput"
                type="text"
                placeholder="Cari halaman..."
                class="bg-white/30 border-none rounded-full px-4 py-1 text-sm
                       text-white focus:outline-none w-50
                       placeholder-white/70"
                onkeydown="if(event.key==='Enter'){goSearch()}"
            >

            <button
                onclick="goSearch()"
                class="text-white hover:text-red-700 p-1 transition"
            >
                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0a7 7 0 0114 0z"
                    />
                </svg>
            </button>

        </div>


        <!-- ================= MOBILE HAMBURGER ================= -->
        <button
            id="mobileMenuButton"
            onclick="toggleMobileMenu()"
            class="md:hidden text-white p-2 rounded-lg
                   hover:bg-white/10 transition"
            aria-label="Buka menu"
        >

            <svg
                id="menuIcon"
                class="w-7 h-7"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>

            <svg
                id="closeIcon"
                class="hidden w-7 h-7"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>

        </button>

    </div>


    <!-- ================= MOBILE MENU ================= -->
    <div
        id="mobileMenu"
        class="hidden md:hidden px-5 pb-5
               border-t border-white/10
               bg-black/50 backdrop-blur-md"
    >

        <!-- Search Mobile -->
        <div class="flex items-center mt-4 mb-5">

            <input
                id="mobileSearchInput"
                type="text"
                placeholder="Cari halaman..."
                class="flex-1 bg-white/20 border border-white/10
                       rounded-full px-4 py-2 text-sm text-white
                       focus:outline-none
                       placeholder-white/70"
                onkeydown="if(event.key==='Enter'){goMobileSearch()}"
            >

            <button
                onclick="goMobileSearch()"
                class="ml-2 text-white p-2
                       hover:text-yellow-300 transition"
            >

                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0a7 7 0 0114 0z"
                    />
                </svg>

            </button>

        </div>


        <!-- Mobile Navigation -->

        <div class="flex flex-col space-y-1">

            <a
                href="{{ route('profile') }}"
                class="py-3 px-3 rounded-lg
                {{ Route::currentRouteName() == 'profile'
                    ? 'text-yellow-300 bg-white/5'
                    : 'text-white' }}
                hover:bg-white/10 transition"
            >
                Profile
            </a>

            <a
                href="{{ route('event') }}"
                class="py-3 px-3 rounded-lg
                {{ Route::currentRouteName() == 'event'
                    ? 'text-yellow-300 bg-white/5'
                    : 'text-white' }}
                hover:bg-white/10 transition"
            >
                Event
            </a>

            <a
                href="{{ route('galeri') }}"
                class="py-3 px-3 rounded-lg
                {{ Route::currentRouteName() == 'galeri'
                    ? 'text-yellow-300 bg-white/5'
                    : 'text-white' }}
                hover:bg-white/10 transition"
            >
                Galeri
            </a>

            <a
                href="{{ route('kontaklokasi') }}"
                class="py-3 px-3 rounded-lg
                {{ Route::currentRouteName() == 'kontaklokasi'
                    ? 'text-yellow-300 bg-white/5'
                    : 'text-white' }}
                hover:bg-white/10 transition"
            >
                Kontak & Lokasi
            </a>

        </div>

    </div>

</nav>


<!-- ================= SEARCH SCRIPT ================= -->
<script>

function getSearchRoutes() {

    return {

        'profile': "{{ route('profile') }}",
        'profil': "{{ route('profile') }}",

        'event': "{{ route('event') }}",
        'acara': "{{ route('event') }}",

        'galeri': "{{ route('galeri') }}",
        'gallery': "{{ route('galeri') }}",

        'kontak': "{{ route('kontaklokasi') }}",
        'lokasi': "{{ route('kontaklokasi') }}",

    };

}


function searchPage(q) {

    q = q.toLowerCase().trim();

    if (!q) return;

    const routes = getSearchRoutes();

    for (const key in routes) {

        if (q.includes(key)) {

            window.location.href = routes[key];

            return;
        }

    }

    alert('Halaman tidak ditemukan');

}


function goSearch() {

    const input = document.getElementById('searchInput');

    if (!input) return;

    searchPage(input.value);

}


function goMobileSearch() {

    const input = document.getElementById('mobileSearchInput');

    if (!input) return;

    searchPage(input.value);

}


function toggleMobileMenu() {

    const menu = document.getElementById('mobileMenu');

    const menuIcon = document.getElementById('menuIcon');

    const closeIcon = document.getElementById('closeIcon');

    if (menu.classList.contains('hidden')) {

        menu.classList.remove('hidden');

        menuIcon.classList.add('hidden');

        closeIcon.classList.remove('hidden');

    } else {

        menu.classList.add('hidden');

        menuIcon.classList.remove('hidden');

        closeIcon.classList.add('hidden');

    }

}

</script>