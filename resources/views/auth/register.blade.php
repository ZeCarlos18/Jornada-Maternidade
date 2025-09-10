<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Jornada Maternidade</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="logo-container">
             <img src="https://i.imgur.com/RdeS13y.png" alt="Logo Jornada Maternidade" class="logo-img">
            <h1 class="logo-text">Jornada Maternidade</h1>
        </div>

        <h2 class="login-title">Cadastro</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Name -->
            <div class="input-group">
                <i class="fas fa-user input-icon"></i>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="USUÁRIO" class="input-field">
            </div>
            @error('name')
                <span class="error-message">{{ $message }}</span>
            @enderror

            <!-- Email Address -->
            <div class="input-group">
                <i class="fas fa-envelope input-icon"></i>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="E-MAIL" class="input-field">
            </div>
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror

            <!-- Password -->
            <div class="input-group">
                <i class="fas fa-lock input-icon"></i>
                <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="SENHA" class="input-field">
            </div>
            @error('password')
                <span class="error-message">{{ $message }}</span>
            @enderror

            <!-- Confirm Password -->
            <div class="input-group">
                <i class="fas fa-lock input-icon"></i>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRMAR SENHA" class="input-field">
            </div>

            <button type="submit" class="submit-btn">Entrar</button>
        </form>
    </div>
</body>
</html>