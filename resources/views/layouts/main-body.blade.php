<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body>
    <header>
        <div class="profile text-center">
            <h3 class="m-0">{{ Auth::user()->name }}</h3>
            <a href="{{ route('profile') }}" class="btn">View profile</a>
        </div>
        <ul class="nav">
            <li><i class="fa-solid fa-house"></i><a href="{{ route('home') }}">Home</a></li>
            <li><i class="fas fa-eye"></i><a href="{{ route('categories.index') }}">All Categories</a></li>
            <li><i class="fas fa-pen"></i><a href="{{ route('categories.create') }}">Add Categories</a></li>
            <li><i class="fas fa-eye"></i><a href="{{ route('products.index') }}">View Products</a></li>
            <li><i class="fas fa-pen"></i><a href="{{ route('products.create') }}">Add Products</a></li>
            {{-- <li><i class="fas fa-eye"></i><a href="{{ route('users.index') }}">All Users</a></li>
            <li><i class="fas fa-eye"></i><a href="{{ route('roles.index') }}">Users Permissions</a></li> --}}
            <li>
                {{-- <a href="{{ route('logout') }}" class="d-block">Logout</a> --}}
                <a class="" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                    <li><i class="fas fa-right-from-bracket"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    @csrf
                </form>
            </li>
            {{-- <li><i class="fas fa-right-from-bracket"></i><a href="{{ route('logoutUser') }}"
                    >Logout</a></li> --}}
        </ul>
    </header>
    {{-- <div id="menu-Btn" class="fas fa-bars"></div> --}}

    @yield('content')
</body>
@yield('js')
<!-- <script src="{{ asset('assets/js/all.min.js') }}"></script> -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
<script>
    $('.dropify').dropify();
</script>

</html>
