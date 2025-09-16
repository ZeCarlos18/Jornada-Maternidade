<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - Jornada Maternidade</title>
    
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <header class="profile-header">
            <div class="profile-nav-left">
                <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
            </div>
            <div class="profile-nav-right">
                <a href="{{ route('diary') }}"><i class="fas fa-book-open"></i></a>
                <a href="{{ route('community') }}"><i class="fas fa-users"></i></a>
            </div>
            <form id="profilePicForm" action="{{ route('profile.update.photo') }}" method="POST" enctype="multipart/form-data" style="text-align: center;">
                @csrf
                <div class="profile-picture-container">
                    <img id="profilePic" src="{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : 'https://via.placeholder.com/110' }}" alt="Foto de Perfil">
                    <label for="profilePicInput" class="edit-icon">
                        <i class="fas fa-pencil-alt"></i>
                    </label>
                    <input type="file" id="profilePicInput" name="profile_photo" style="display: none;" accept="image/*">
                </div>
            </form>
            <h2 class="user-name">{{ $user->name }}</h2>
    </header>

    <section class="profile-stats">
        <div class="stat-item">
            <span class="stat-label">Registros</span>
            <span class="stat-count">{{ $user->diary_count ?? 0 }}</span>
        </div>
        <div class="stat-item">
            <span class="stat-label">Posts</span>
            <span class="stat-count">{{ $user->posts_count ?? 0 }}</span>
        </div>
        <div class="stat-item">
            <span class="stat-label">Conexões</span>
            <span class="stat-count">{{ $user->connections_count ?? 0 }}</span>
        </div>
    </section>

        <ul class="profile-menu">
            <li class="menu-item"><a href="#"><i class="fas fa-bell icon"></i> Notificações <i class="fas fa-chevron-right arrow-icon"></i></a></li>
            <li class="menu-item"><a href="#"><i class="fas fa-shield-alt icon"></i> Privacidade <i class="fas fa-chevron-right arrow-icon"></i></a></li>
            <li class="menu-item"><a href="#"><i class="fas fa-info-circle icon"></i> Sobre o App <i class="fas fa-chevron-right arrow-icon"></i></a></li>
            <li class="menu-item"><a href="#" onclick="toggleSection('account-section'); return false;"><i class="fas fa-user-cog icon"></i> Conta <i class="fas fa-chevron-right arrow-icon"></i></a></li>
            <li class="menu-item">
                <form method="POST" action="{{ route('logout') }}" style="width: 100%;">
                    @csrf
                    <button type="submit" class="logout">
                        <i class="fas fa-sign-out-alt icon logout"></i> Sair
                    </button>
                </form>
            </li>
        </ul>

        {{-- INÍCIO DA SEÇÃO QUE DEVE SER OCULTA --}}
        <section id="account-section" class="account-section" style="display:none;">
            
            {{-- ATUALIZAR INFORMAÇÕES DO PERFIL --}}
            <div class="update-profile-information">
                <h2>Informações do Perfil</h2>
                <p>Altere seu nome de usuário e o seu e-mail.</p>
                <form method="post" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')
                    <div class="account-info">
                        <label for="name">Nome de Usuário</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus>
                    </div>
                    <div class="account-info">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
                    </div>
                    <button type="submit" class="btn-save">Salvar</button>
                </form>
            </div>

            <hr>

            {{-- ATUALIZAR SENHA --}}
            <div class="update-password">
                <h2>Alterar Senha</h2>
                <p>Certifique-se que a sua conta está usando uma senha segura.</p>
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')
                    <div class="account-info">
                        <label for="current_password">Senha Atual</label>
                        <input id="current_password" name="current_password" type="password" autocomplete="current-password">
                    </div>
                    <div class="account-info">
                        <label for="password">Nova Senha</label>
                        <input id="password" name="password" type="password" autocomplete="new-password">
                    </div>
                    <div class="account-info">
                        <label for="password_confirmation">Confirmar Senha</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn-save">Salvar</button>
                </form>
            </div>
    </div>
        </section>
    </div>

    <script>
        function toggleSection(id) {
            const el = document.getElementById(id);
            if (el.style.display === "none" || el.style.display === "") {
                el.style.display = "block";
            } else {
                el.style.display = "none";
            }
        }

        document.getElementById('profilePicInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profilePic').src = e.target.result;
                }
                reader.readAsDataURL(file);
                
                document.getElementById('profilePicForm').submit();
            }
        });
    </script>
</body>
</html>