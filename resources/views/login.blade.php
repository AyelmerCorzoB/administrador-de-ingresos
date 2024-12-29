<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div>
        <div class="olas"></div>
        <div class="olas"></div>
        <div class="olas"></div>
    </div>
    <form action="{{ url('/login') }}" method="POST">
        <img src="storage/images/logo.png" alt="">
        @csrf
        <div class="input-container">
            <input type="text" name="nombre" placeholder="Usuario" required>
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña" required>
            <i class="fa-solid fa-lock"></i>
        </div>
        <input name="enviar" type="submit" class="btn" value="Entrar">
    </form>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
</body>
</html>
