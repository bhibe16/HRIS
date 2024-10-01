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
<body class="relative bg-gray-100 min-h-screen font-roboto">

    <!-- Navbar -->
    <nav class="bg-navbar text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <button id="menu-toggle" class="sm:hidden" aria-label="Toggle menu">
                <span class="material-icons">menu</span>
            </button>
        </div>
        <h1 class="text-2xl flex-grow text-center">Human Resources Information System</h1>
        <div class="flex items-center space-x-4">
            <span class="material-icons">search</span>
            <span class="material-icons">notifications</span>
            <span class="material-icons">account_circle</span>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen bg-gray-900 text-white transform -translate-x-full transition-transform sm:translate-x-0">
        <div class="h-full px-3 py-4 overflow-y-auto">
            <div class="flex justify-end sm:hidden mb-4">
                <button id="sidebar-close" class="text-white" aria-label="Close sidebar">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded hover:bg-gray-700">
                        <span class="material-icons">dashboard</span>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded hover:bg-gray-700">
                        <span class="material-icons">people</span>
                        <span class="ml-3">Employee Records</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="bg-gray-800 text-black p-8 sm:ml-64 min-h-screen">
        <div>
            @if(session()->has('success'))
                <div class="bg-green-500 text-white p-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <h2 class="text-xl text-white font-semibold mb-4">Create New Employee</h2>
        <div>
            @if($errors->any())
                <ul class="text-red-400 mb-4">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        
        <!--Create Employees-->
        <div class="w-30 md:w-60 mx-auto">
            <form method="post" action="{{ route('product.store') }}" class="bg-gray-700 p-6 rounded-lg">
                @csrf 
                @method('post')
                <div class="mb-4">
                    <label for="first_name" class="block text-sm font-medium mb-1 text-white">First Name</label>
                    <input type="text" id="first_name" name="First_name" placeholder="Firstname" value="{{ old('First_name') }}" class="w-full p-2 border rounded transition-colors duration-200" required />
                </div>
                <div class="mb-4">
                    <label for="last_name" class="block text-sm font-medium mb-1 text-white">Last Name</label>
                    <input type="text" id="last_name" name="Last_name" placeholder="Lastname" value="{{ old('Last_name') }}" class="w-full p-2 border rounded transition-colors duration-200" required />
                </div>
                <div class="mb-4">
                    <label for="department" class="block text-sm font-medium mb-1 text-white">Department</label>
                    <input type="text" id="department" name="Department" placeholder="Department" value="{{ old('Department') }}" class="w-full p-2 border rounded transition-colors duration-200" required />
                </div>
                <div class="mb-4">
                    <label for="position" class="block text-sm font-medium mb-1 text-white">Position</label>
                    <input type="text" id="position" name="Position" placeholder="Position" value="{{ old('Position') }}" class="w-full p-2 border rounded transition-colors duration-200" required />
                </div>
                
                <div>
                    <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-500 transition">Save New Employee</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
