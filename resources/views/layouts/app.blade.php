<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blouse Online')</title>

   
    <!-- global CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@100;200;300;400;600;700;800;900&family=Dancing+Script:wght@400..700&family=Libertinus+Keyboard&family=Noto+Sans+Elbasan&family=Oleo+Script:wght@400;700&family=Pacifico&family=Sirivennela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Local CSS -->
     <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    {{-- Exemple de menu/nav commun --}}
    @include('partials.navbar')

    <!-- principle content -->
    <main>
        @yield('content')
    </main>

    {{-- Exemple de footer commun --}}
    @include('partials.footer')

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Local JS -->
    <script src="{{ asset('assets/script/script.js') }}"></script>
</body>
</html>