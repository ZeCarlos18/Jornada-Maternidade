<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Diário - Jornada Maternidade</title>
    <link rel="stylesheet" href="{{ asset('css/diary.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <div class="header-left">
            <a href="{{ route('dashboard') }}" class="header-icon home-icon"><i class="fas fa-home"></i></a>
        <div>
        <div class="header-title">
            MEU DIÁRIO <i class="fas fa-book-open"></i>
        </div>
        <div class="header-right">
            <a href="{{ route('profile.edit') }}" class="header-icon profile-icon"><i class="fas fa-user"></i></a>
            <a href="{{ route('community') }}" class="header-icon"><i class="fas fa-users"></i></a>
        </div>
    </header>

    <main class="community-grid" style="padding-top: 80px;">
        @forelse ($posts as $post)
            <div class="post-card">
                <div class="post-header">
                    <i class="fas fa-user-circle post-avatar"></i>
                    <span class="post-author">{{ $post->user->name }}</span>
                    <span class="post-date" style="margin-left: auto; font-size: 0.8em; color: #666;">{{ $post->created_at->format('d/m/Y') }}</span>
                </div>
                <div class="post-content">
                    <p>{{ $post->content }}</p>
                </div>
                <div class="post-actions">
                    <button><i class="far fa-heart"></i></button>
                    <button><i class="far fa-comment"></i></button>
                    <button><i class="fas fa-share"></i></button>
                </div>
            </div>
        @empty
            <div style="text-align: center; margin-top: 50px; color: #666;">
                <p class="no-posts">Você ainda não escreveu nenhuma entrada no seu diário.</p>
                <p>Use o botão '+' para começar!</p>
            </div>
        @endforelse
    </main>

    <button class="add-post-btn">
        <i class="fas fa-plus"></i>
    </button>
</body>
</html>