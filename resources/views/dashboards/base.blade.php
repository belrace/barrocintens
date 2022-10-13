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
        <script src="../js/app.js" defer></script>
        <link
            href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
            rel="stylesheet"
        />
    </head>


<body>
<header>
        <nav>
            <div class="logo">
                <i class="bx bx-menu menu-icon"></i>
                <span class="logo-name">Barroc Intens</span>
            </div>
            <div class="sidebar">
                <div class="logo">
                    <i class="bx bx-menu menu-icon"></i>
                    <span class="logo-name">Barroc Intens</span>
                </div>
                <div class="sidebar-content">
                <ul class="lists">
                    <li class="list">
                    <a href="/finance" class="nav-link">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="link">Dashboard</span>
                    </a>
                    </li>
                    <li class="list">
                    <a href="/finance/facturen" class="nav-link">
                        <i class='bx bx-notepad icon'></i>
                        <span class="link">Facturen</span>
                    </a>
                    </li>
                    <li class="list">
                    <a href="/finance/begroting" class="nav-link">
                        <i class='bx bx-euro icon'></i>
                        <span class="link">begroting</span>
                    </a>
                    <li class="list">
                    <a href="/finance/betalingsachterstanden" class="nav-link">
                        <i class='bx bx-edit-alt icon'></i>
                        <span class="link">betalingsachterstanden</span>
                    </a>
                    </li>
                </ul>

                <div class="bottom-cotent">
                    <li class="list">
                    <a href="/user/profile" class="nav-link">
                        <i class='bx bx-user-circle icon'></i>
                        <span class="link">Profile</span>
                    </a>
                    </li>
                    <li class="list">
                        <a href="{{ route('logout')}}" class="nav-link">
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
    <div>
        @yield('app')
    </div>
</body>

<footer>
    <div>
        
    </div>
</footer>
</html>
