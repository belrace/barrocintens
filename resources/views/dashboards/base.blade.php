<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barroc</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/dashboard.css">
    <script src="/js/app.js" defer></script>

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script>
        document.documentElement.classList.add('dark');
    </script>
    <style>
        nav {
            z-index: 999;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <i class="bx bx-menu menu-icon"></i>
                <span class="logo-name">Barroc Intens</span>
            </div>
            <div class="sidebar" style="z-index: 999;">
                <div class="logo">
                    <i class="bx bx-menu menu-icon"></i>
                    <span class="logo-name">Barroc Intens</span>
                </div>
                <div class="sidebar-content">
                    <div>
                        @yield('sidebar')
                    </div>
                    <div class="bottom-cotent">
                        <li class="list">
                            <a href="/user/profile" class="nav-link">
                                <i class='bx bx-user-circle icon'></i>
                                <span class="link">Profile</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="{{ route('logout') }}" class="nav-link">
                                <i class="bx bx-log-out icon"></i>
                                <span class="link">Logout</span>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>

        <section class="overlay"></section>
    </header>
    <div class="main-sec">
        @yield('app')
    </div>
</body>

<footer>
    <div>

    </div>
</footer>

</html>