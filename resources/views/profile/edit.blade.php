<x-app-layout>
    <x-slot name="header">
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
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
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
                        <li class="menu-item">
                            <a href="#" onclick="toggleSection('notificacoes'); return false;">
                                <span class="icon"><i class="fas fa-bell"></i></span>Notificações<i class="fas fa-chevron-right arrow-icon"></i>
                            </a>
                            <div id="notificacoes" class="hidden-section" style="display:none; margin-left:32px;">
                                <p>Você tem 3 novas notificações.</p>
                                <ul>
                                    <li>Nova mensagem de Maria.</li>
                                    <li>Seu post foi curtido por João.</li>
                                    <li>Atualização disponível no app.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="#" onclick="toggleSection('privacidade'); return false;">
                                <span class="icon"><i class="fas fa-shield-alt"></i></span>Privacidade<i class="fas fa-chevron-right arrow-icon"></i>
                            </a>
                            <div id="privacidade" class="hidden-section" style="display:none; margin-left:32px;">
                                <p>Suas configurações de privacidade estão ativadas.</p>
                                <ul>
                                    <li>Perfil público: Não</li>
                                    <li>Receber notificações: Sim</li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="#" onclick="toggleSection('sobreapp'); return false;">
                                <span class="icon"><i class="fas fa-info-circle"></i></span>Sobre o App<i class="fas fa-chevron-right arrow-icon"></i>
                            </a>
                            <div id="sobreapp" class="hidden-section" style="display:none; margin-left:32px;">
                                <p>Jornada Maternidade v1.0</p>
                                <p>Aplicativo para acompanhamento da maternidade.</p>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="#" style="color: #d93025;">
                                <span class="icon" style="color: #d93025;"><i class="fas fa-sign-out-alt"></i></span>Sair<i class="fas fa-chevron-right arrow-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </main>

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

    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        const profilePicInput = document.getElementById('profilePicInput');
        const profilePic = document.getElementById('profilePic');

        profilePicInput && (profilePicInput.onchange = evt => {
            const [file] = profilePicInput.files;
            if (file) {
                profilePic.src = URL.createObjectURL(file);
            }
        });

        function toggleSection(id) {
            const el = document.getElementById(id);
            if (el.style.display === "none" || el.style.display === "") {
                el.style.display = "block";
            } else {
                el.style.display = "none";
            }
        }
    </script>
</x-app-layout>