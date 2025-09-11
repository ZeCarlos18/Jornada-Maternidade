<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Jornada Maternidade</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <div class="header-left">
            <a href="{{ route('dashboard') }}" class="header-icon home-icon"><i class="fas fa-home"></i></a>
        </div>
        <div class="logo-container" style="position: absolute; left: 50%; transform: translateX(-50%);">
            <img src="{{ asset('img/JM.png') }}" alt="Logo" style="height: 50px;">
        </div>
        <div class="header-right">
            <a href="{{ route('profile.edit') }}" class="header-icon"><i class="fas fa-user"></i></a>
            <a href="#" class="header-icon"><i class="fas fa-book-open"></i></a>
            <a href="{{ route('community') }}" class="header-icon"><i class="fas fa-users"></i></a>
        </div>
    </header>

    <main class="dashboard-container">
        <div class="summary-card">
            <h2>RESUMO DA GRAVIDEZ</h2>
            <p>Você está na semana {{ $currentWeek }}</p>
            <div class="progress-bar-container">
                <div class="progress-bar" style="width: {{ $gestationPercentage }}%;"></div>
            </div>
            <p>{{ $gestationPercentage }}% da gestação concluída!</p>
            <p>{{ $daysPassed }} dias / Faltam {{ $daysRemaining }} dias</p>
        </div>

        <div class="due-date">
            Data prevista: {{ $dueDate }} <i class="fas fa-calendar-alt"></i>
        </div>
    </main>
</body>