<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @vite('resources/css/app.css')
    <title>Edit Product</title>
</head>
<body class="relative bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-navbar text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <button id="menu-toggle" class="sm:hidden">
                <span class="material-icons">menu</span>
            </button>
        </div>
        <h1 class="text-2xl flex-grow text-center">Human Resources Information System</h1>
        <div class="flex items-center">
            <span class="material-icons">search</span>
            <span class="material-icons">notifications</span>
            <span class="material-icons">account_circle</span>
        </div>
    </nav>
    
    <!-- Sidebar -->
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen bg-gray-900 text-white transform -translate-x-full transition-transform sm:translate-x-0">
        <div class="h-full px-3 py-4 overflow-y-auto">
            <div class="flex justify-end sm:hidden">
                <button id="sidebar-close" class="text-white">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <ul class="mt-4 space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-200 rounded hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M504-580v-301h377v301H504ZM78-434v-447h375v447H78ZM504-80v-449h377v449H504ZM78-80v-302h375v302H78Zm92-445h192v-265H170v265Zm426 353h194v-265H596v265Zm0-499h194v-119H596v119ZM170-172h192v-118H170v118Zm192-353Zm234-146Zm0 234ZM362-290Z"/></svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-200 rounded hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                            <path d="M480.16-493q-72.62 0-122.39-50.27Q308-593.54 308-666q0-72.46 49.61-121.73Q407.22-837 479.84-837t122.89 49.16Q653-738.69 653-665.5q0 71.96-50.11 122.23Q552.78-493 480.16-493ZM138-130v-115.79q0-41.19 22.17-75.12Q182.34-354.83 220-372q62.2-27.9 127.78-44.95Q413.36-434 479.99-434q67.01 0 131.79 17.05Q676.56-399.9 739-372q37.91 15.25 60.95 50.3Q823-286.64 823-245.79V-130H138Zm342-454q33 0 57-24t24-57q0-33-23.8-57.5-23.79-24.5-57-24.5-33.2 0-57.2 24.68t-24 56.82q0 33.5 24 57.5t57 24Zm166 272v91h85v-21.51q0-15.42-9-28.96Q713-285 698-293q-12-7-25-11t-27-8Zm-252-23.32V-281h176v-53q-24-5.14-46-6.57-22-1.43-44-1.43t-43 1.52q-21 1.53-43 5.16ZM229-221h88v-96q-13.59 6.11-28.4 11.46-14.82 5.35-26.6 12.54-16 8-24.5 21.53-8.5 13.54-8.5 28.96V-221Zm417 0H317h329ZM480-665Z"/>
                        </svg>
                        <span class="ml-3">Employee Records</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="bg-midnight-gradient text-black p-8 sm:ml-64 min-h-screen">
        <h1 class="text-2xl font-bold mb-4 text-white">Edit employee</h1>

    

        <div class="w-30 md:w-60 mx-auto">
            <form method="post" action="{{ route('product.update', ['product' => $product]) }}" class="bg-gray-800 p-6 rounded-lg shadow-md">
                @csrf 
                @method('put')
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-200 mb-1">First Name</label>
                    <input type="text" name="First_name" placeholder="First Name" value="{{ $product->First_name }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-200 mb-1">Last Name</label>
                    <input type="text" name="Last_name" placeholder="Last Name" value="{{ $product->Last_name }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-200 mb-1">Department</label>
                    <input type="text" name="Department" placeholder="Department" value="{{ $product->Department }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-200 mb-1">Position</label>
                    <input type="text" name="Position" placeholder="Position" value="{{ $product->Position }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200" />
                </div>
                <div>
                    <input type="submit" value="Update" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-500 transition" />
                </div>
            </form>
        </div>
    </main>

    <script>
        // Sidebar toggle functionality
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('default-sidebar');
        const sidebarClose = document.getElementById('sidebar-close');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        sidebarClose.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });
    </script>
</body>
</html>
