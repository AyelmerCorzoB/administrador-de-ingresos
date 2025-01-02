<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/almuerzos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/menuHamburguesa.js') }}"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>El Sabor de Casa</title>
</head>

<body>
    
    @include ('components.header')
    @include ('components.main_almuerzos')
    @include('components.footer_almuerzos')
</body>

</html>
