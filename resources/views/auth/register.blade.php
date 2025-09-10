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
            <img src="{{ asset('img/JM.png') }}" alt="Logo Jornada Maternidade" class="logo-img">
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h2>Cadastro</h2>
            <div class="input-group">
                <i class="fas fa-user input-icon"></i>
                <label for="name" class="input-label">Nome de Usuário</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="input-field">
            </div>
            @error('name')
                <span class="error-message">{{ $message }}</span>
            @enderror

             <div class="input-group">
                <i class="fas fa-calendar-days input-icon"></i>
                <label for="menstruation_day" class="input-label">Data da Última Menstruação</label>
                <input id="menstruation_day" type="date" name="menstruation_day" required autocomplete="date" class="input-field">
            </div>
            
            <div class="input-group">
                <i class="fas fa-envelope input-icon"></i>
                <label for="email" class="input-label">E-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="input-field">
            </div>
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <i class="fas fa-lock input-icon"></i>
                <label for="password" class="input-label">Senha</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="input-field">
            </div>
            @error('password')
                <span class="error-message">{{ $message }}</span>
            @enderror

            <div class="input-group">
                <i class="fas fa-lock input-icon"></i>
                <label for="password_confirmation" class="input-label">Confirmar Senha</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input-field">
            </div>

            <button type="submit" class="submit-btn">Cadastrar</button>
        </form>
    </div>
</body>
</html>