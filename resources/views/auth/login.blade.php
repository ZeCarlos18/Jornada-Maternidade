<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Jornada Maternidade</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('img/JM.png') }}" alt="Logo Jornada Maternidade" class="logo-img">
        </div>

        <h2 class="login-title">Login</h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <i class="fas fa-user input-icon"></i>
                <input type="email" name="email" placeholder="E-MAIL" class="input-field" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock input-icon"></i>
                <input type="password" name="password" placeholder="SENHA" class="input-field" required>
            </div>
            <button type="submit" class="submit-btn">Entrar</button>
        </form>

        <div class="social-login">
            <p>Ou acesse com</p>
            <div class="social-icons">
                <a href="#" class="social-icon-link">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
                </a>
                <a href="#" class="social-icon-link">
                    <img src="https://ssl.gstatic.com/ui/v1/icons/mail/rfr/logo_gmail_lockup_default_1x_r5.png" alt="Gmail">
                </a>
            </div>
        </div>

        <div class="signup-link">
            <p>Não tem uma conta?</p>
            <a href="/register">Cadastrar-se</a>
        </div>
    </div>
</body>
</html>