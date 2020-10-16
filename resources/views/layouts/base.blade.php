<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="@yield('style')">
</head>

<body>
    <header>    
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/liste">liste</a></li>
                <li><a href="/ajout">ajout</a></li>
            </ul>
        </nav>
        <h1>Les statues</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        
    </footer>
</body>

</html>