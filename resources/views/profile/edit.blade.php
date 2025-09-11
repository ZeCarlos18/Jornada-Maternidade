<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - Jornada Maternidade</title>
    <link rel="stylesheet" href="perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <div class="header-left">
            <a href="{{ route('dashboard') }}" class="header-icon"><i class="fas fa-home"></i></a>
        </div>
        <div class="logo-container">
            <img src="{{ asset('img/JM.png') }}" alt="Logo" style="height: 50px;">
        </div>
        <div class="header-right">
            <a href="{{ route('profile.edit') }}" class="header-icon"><i class="fas fa-user"></i></a>
            <a href="#" class="header-icon"><i class="fas fa-book-open"></i></a>
            <a href="{{ route('community') }}" class="header-icon"><i class="fas fa-users"></i></a>
        </div>
    </header>

    <main>
        <div class="profile-container">
            <div class="profile-header">
                <label for="profilePicInput" class="profile-picture-container">
                    <img id="profilePic" src="{{ Auth::user()->profile_photo_url ?? 'https://placehold.co/140x140/EFEFEF/AAAAAA&text=Foto' }}" alt="Foto de Perfil">
                    <div class="edit-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                </label>
                <input type="file" id="profilePicInput" accept="image/*">
                
                <h1 class="user-name">{{ Auth::user()->name ?? 'Nome do Usuário' }}</h1>
                <p class="user-handle">{{ '@' . (Auth::user()->username ?? 'nomedeusuario') }}</p>
            </div>

            <div class="profile-stats">
                <div class="stat-item">
                    <span class="stat-count">128</span>
                    <span class="stat-label">Registros</span>
                </div>
                <div class="stat-item">
                    <span class="stat-count">54</span>
                    <span class="stat-label">Posts</span>
                </div>
                <div class="stat-item">
                    <span class="stat-count">231</span>
                    <span class="stat-label">Conexões</span>
                </div>
            </div>

            <ul class="profile-menu">
                <li class="menu-item"><a href="#"><span class="icon"><i class="fas fa-bell"></i></span>Notificações<i class="fas fa-chevron-right arrow-icon"></i></a></li>
                <li class="menu-item"><a href="#"><span class="icon"><i class="fas fa-shield-alt"></i></span>Privacidade<i class="fas fa-chevron-right arrow-icon"></i></a></li>
                <li class="menu-item"><a href="#"><span class="icon"><i class="fas fa-info-circle"></i></span>Sobre o App<i class="fas fa-chevron-right arrow-icon"></i></a></li>
                <li class="menu-item">
                    <a href="#" style="color: #d93025;">
                        <span class="icon" style="color: #d93025;"><i class="fas fa-sign-out-alt"></i></span>Sair<i class="fas fa-chevron-right arrow-icon"></i>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <script>
        const profilePicInput = document.getElementById('profilePicInput');
        const profilePic = document.getElementById('profilePic');

        profilePicInput.onchange = evt => {
            const [file] = profilePicInput.files;
            if (file) {
                profilePic.src = URL.createObjectURL(file);
            }
        };
    </script>

</body>
</html>