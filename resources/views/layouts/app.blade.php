<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if (app()->getLocale()=="ar") dir="rtl" @endif>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock Management System</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI CSS -->
    <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet">
    <!-- Custom CSS -->
    @vite(['resources/js/app.js', 'resources/js/my.js', 'resources/css/app.css'])
</head>

<body class="min-vh-100 d-flex flex-column">
    <header class=" text-white shadow-sm" style="background-color:rgb(35, 96, 195);"> 
        <nav class="container d-flex justify-content-between align-items-center py-3">
            <h1 class="h3 mb-0 fw-bold">@lang("Stock Management System")</h1>

            <a href="{{ route('dashboard') }}" class="btn btn-outline-light bg-primary border-white text-white">@lang("Dashboard")</a>
            <select name="selectLocale" id="selectLocale">
                <option @if(app()->getLocale() == 'ar') selected @endif value="ar">ar</option>
                <option @if(app()->getLocale() == 'fr') selected @endif value="fr">fr</option>
                <option @if(app()->getLocale() == 'en') selected @endif value="en">en</option>
                <option @if(app()->getLocale() == 'es') selected @endif value="es">es</option>
            </select>
        </nav>
    </header>

    <main class="container flex-grow-1 py-4">

         <div>
                    <a href="{{ route('profile') }}" class="btn btn-primary me-2">Mon profil</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">Se déconnecter</button>
                    </form>
                </div>


        @yield('content')
    </main>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<<<<<<< HEAD
=======
    @stack('scripts')
>>>>>>> 3bc9ad0becf7a3d6ede5c5d26573886f55036e00
    <script>
        $("#selectLocale").on('change',function(){
            var locale = $(this).val();
            window.location.href = "/changeLocale/"+locale;
        })
    </script>

    <footer class=" text-center py-3 text-white" style="background-color:rgb(35, 96, 195);"> <!-- Bleu -->
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Stock Management System. All rights reserved.</p>
        </div>
    </footer>
<<<<<<< HEAD
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @stack('scripts')
=======
>>>>>>> 3bc9ad0becf7a3d6ede5c5d26573886f55036e00
</body>

</html>
