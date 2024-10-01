<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @vite('resources/css/app.css')
    <title>HRIS</title>
</head>
<body class="relative bg-yellow-100 dark:bg-yellow-900 text-black dark:text-yellow-100 min-h-screen transition-colors duration-300">

    <!-- Navbar -->
    <nav class="bg-black text-yellow-100 p-4 flex justify-between items-center">
        <div class="flex items-center">
            <!-- Sidebar Toggle Button -->
            <button id="menu-toggle" class="sm:hidden">
                <span class="material-icons">menu</span>
            </button>
        </div>
        <h1 class="text-2xl flex-grow text-center text-yellow-100">Human Resources Information System</h1>
        <div class="flex items-center space-x-4">
            <span class="material-icons cursor-pointer text-yellow-100">search</span>
            <span class="material-icons cursor-pointer text-yellow-100">notifications</span>
            <span class="material-icons cursor-pointer text-yellow-100">account_circle</span>

            <!-- Dark/Light Mode Toggle Button -->
            <button id="theme-toggle" class="material-icons cursor-pointer focus:outline-none text-yellow-100">brightness_6</button>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen bg-black dark:bg-yellow-800 text-yellow-100 transform -translate-x-full transition-transform sm:translate-x-0">
        <div class="h-full px-3 py-4 overflow-y-auto">
            <!-- Sidebar Close Button for Mobile -->
            <div class="flex justify-end sm:hidden">
                <button id="sidebar-close" class="text-yellow-100">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <ul class="mt-4 space-y-2 font-medium">
                <li>
                    <a href="" class="flex items-center p-2 text-yellow-200 rounded hover:bg-yellow-700 dark:hover:bg-yellow-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M504-580v-301h377v301H504ZM78-434v-447h375v447H78ZM504-80v-449h377v449H504ZM78-80v-302h375v302H78Zm92-445h192v-265H170v265Zm426 353h194v-265H596v265Zm0-499h194v-119H596v119ZM170-172h192v-118H170v118Zm192-353Zm234-146Zm0 234ZM362-290Z"/></svg>
                        <span class="ml-3 text-yellow-100">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('product.index') }}" class="flex items-center p-2 text-yellow-200 rounded hover:bg-yellow-700 dark:hover:bg-yellow-600">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                        <path d="M480.16-493q-72.62 0-122.39-50.27Q308-593.54 308-666q0-72.46 49.61-121.73Q407.22-837 479.84-837t122.89 49.16Q653-738.69 653-665.5q0 71.96-50.11 122.23Q552.78-493 480.16-493ZM138-130v-115.79q0-41.19 22.17-75.12Q182.34-354.83 220-372q62.2-27.9 127.78-44.95Q413.36-434 479.99-434q67.01 0 131.79 17.05Q676.56-399.9 739-372q37.91 15.25 60.95 50.3Q823-286.64 823-245.79V-130H138Zm342-454q33 0 57-24t24-57q0-33-23.8-57.5-23.79-24.5-57-24.5-33.2 0-57.2 24.68t-24 56.82q0 33.5 24 57.5t57 24Zm166 272v91h85v-21.51q0-15.42-9-28.96Q713-285 698-293q-12-7-25-11t-27-8Zm-252-23.32V-281h176v-53q-24-5.14-46-6.57-22-1.43-44-1.43t-43 1.52q-21 1.53-43 5.16ZM229-221h88v-96q-13.59 6.11-28.4 11.46-14.82 5.35-26.6 12.54-16 8-24.5 21.53-8.5 13.54-8.5 28.96V-221Zm417 0H317h329ZM480-665Z"/>
                        </svg>
                        <span class="ml-3 text-yellow-100">Employee Records</span>
                    </a>
                </li>
                <li>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="flex items-center p-2 bg-red-500 text-white rounded hover:bg-red-600">
            <!-- SVG Log Out Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6-4v12" />
            </svg>
            <span class="ml-3">Log Out</span>
        </button>
    </form>
</li>

            </ul>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="bg-yellow-100 dark:bg-yellow-900 text-black dark:text-yellow-100 p-8 sm:ml-64 min-h-screen">
        <h2 class="text-3xl font-bold mb-4 text-black">Welcome to HRIS</h2>
        <p class="mb-6 text-black">This is the main content area. You can add your content here.</p>
        <div class="container">
            @yield('main')
        </div>
    </main>

    <!-- JavaScript for Sidebar and Dark Mode Toggle -->
    <script>
    // Sidebar toggle (for mobile)
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const sidebar = document.getElementById('default-sidebar');
        sidebar.classList.toggle('-translate-x-full');
    });

    document.getElementById('sidebar-close').addEventListener('click', function() {
        const sidebar = document.getElementById('default-sidebar');
        sidebar.classList.add('-translate-x-full');
    });

    // Dark/Light mode toggle
    const themeToggle = document.getElementById('theme-toggle');
    const rootElement = document.documentElement;

    // Update the icon based on the theme
    function updateIcon() {
  if (rootElement.classList.contains('dark')) {
    themeToggle.innerHTML = '<span class="material-icons">wb_sunny</span>'; // Sun icon for light mode
  } else {
    themeToggle.innerHTML = '<span class="material-icons">brightness_2</span>'; // Moon icon for dark mode
  }
}

    // Toggle dark/light mode and update the icon
    themeToggle.addEventListener('click', () => {
        rootElement.classList.toggle('dark');
        const theme = rootElement.classList.contains('dark') ? 'dark' : 'light';
        localStorage.setItem('theme', theme);
        updateIcon();
    });

    // Set theme and icon on page load based on localStorage
    const storedTheme = localStorage.getItem('theme');
    if (storedTheme === 'dark') {
        rootElement.classList.add('dark');
    } else {
        rootElement.classList.remove('dark');
    }
    updateIcon();
</script>
</body>
</html>
