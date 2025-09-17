<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Diário - Jornada Maternidade</title>
    <link rel="icon" href="{{ asset('img/JM.png') }}">
    <link rel="stylesheet" href="{{ asset('css/diary.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <div class="header-left">
            <a href="{{ route('dashboard') }}" class="header-icon"><i class="fas fa-home"></i></a>
        </div>
        <div class="header-title">
            MEU DIÁRIO <i class="fas fa-book-open"></i>
        </div>
        <div class="header-right">
            <a href="{{ route('community') }}" class="header-icon"><i class="fas fa-users"></i></a>
            <a href="{{ route('profile.edit') }}" class="header-icon"><i class="fas fa-user"></i></a>
        </div>
    </header>

    <main class="diary-grid">
        @forelse ($posts as $post)
            <div class="post-card">
                <div class="post-header">
                    <div class="post-author">
                        <span>{{ $post->user->name }}</span>
                    </div>
                    <div class="post-meta">
                        <span>{{ $post->created_at->format('d/m/Y') }}</span>
                        @can('delete', $post)
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este registro?');">
                            @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        @endcan
                    </div>
                </div>
                <div class="post-content">
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        @empty
            <div class="no-posts-container">
                <p>Você ainda não escreveu nenhuma entrada no seu diário.</p>
                <p>Use o botão '+' para começar!</p>
            </div>
        @endforelse
    </main>

    <a href="{{ route('posts.create', 'diary') }}" class="add-post-btn">
        <i class="fas fa-plus"></i>
    </a>
</body>
</html>