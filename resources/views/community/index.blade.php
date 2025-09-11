<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade - Jornada Maternidade</title>
    <link rel="stylesheet" href="{{ asset('css/Community.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <a href="{{ route('dashboard') }}" class="header-icon home-icon"><i class="fas fa-home"></i></a>
        <div class="header-title">
            COMUNIDADE <i class="fas fa-users"></i>
        </div>
        <a href="{{ route('profile.edit') }}" class="header-icon profile-icon"><i class="fas fa-user"></i></a>
    </header>

    <nav class="category-nav">
        <a href="{{ route('community', ['category' => 'Dúvidas']) }}"
            class = "category-btn {{ $activeCategory == 'Dúvidas' ? 'active' : '' }}">Dúvidas</a>

        <a href="{{ route('community', ['category' => 'Saúde']) }}"
            class="category-btn {{ $activeCategory == 'Saúde' ? 'active' : '' }}">Saúde</a>

        <a href="{{ route('community', ['category' => 'Dicas']) }}"
            class="category-btn {{ $activeCategory == 'Dicas' ? 'active' : '' }}">Dicas</a>
    </nav>

    <main class="community-grid">
        @forelse ($posts as $post)
            <div class="post-card">
                <div class="post-header">
                    <i class="fas fa-user-circle post-avatar"></i>
                    <span class="post-author">{{ $post->user->name }}</span>
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
            <p class="no-posts">Ainda não há publicações na comunidade.</p>
        @endforelse
    </main>

    <button class="add-post-btn">
        <i class="fas fa-plus"></i>
    </button>
</body>
</html>