<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary - Jornada Maternidade</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <header class="main-header">
        <div class="header-left">
            <a href="{{ route('dashboard') }}" class="header-icon home-icon"><i class="fas fa-home"></i></a>
        </div>
        
        <div class="header-title">
            <h1>Diary</h1>
            <i class="fas fa-book-open"></i>
        </div>
        
        <div class="header-right">
            <a href="{{ route('community.index') }}" class="header-icon"><i class="fas fa-users"></i></a>
            <a href="{{ route('profile.edit') }}" class="header-icon"><i class="fas fa-user"></i></a>
        </div>
    </header>

    <main class="diary-container">
        
        <div class="mood-selector-card">
            <h2>Como está se sentindo hoje?</h2>
            <div class="mood-icons">
                <button class="mood-button">😊</button>
                <button class="mood-button">😐</button>
                <button class="mood-button">😔</button>
                <button class="mood-button">😡</button>
            </div>
        </div>

        <div class="diary-grid">
            @forelse ($entries as $entry)
                <div class="diary-card">
                    <div class="card-header">
                        <i class="fas fa-calendar-alt"></i>
                        <span>{{ $entry->created_at->format('d/m/Y') }}</span>
                    </div>
                    <p class="card-content">{{ $entry->content }}</p>
                    @if ($entry->image)
                        <img src="{{ asset('storage/' . $entry->image) }}" alt="Imagem do diário" class="card-image" loading="lazy">
                    @else
                        <div class="card-image-placeholder">[Imagem]</div>
                    @endif

                    <div class="card-footer">
                        @foreach ($entry->moods as $mood)
                            <span class="mood-icon" title="{{ $mood->name }}">{{ $mood->emoji }}</span>
                        @endforeach
                    </div>
                </div>
            @empty
                <div class="no-entries-message">
                    <p>Seu diário está vazio.</p>
                    <p>Clique no botão '+' para adicionar sua primeira memória!</p>
                </div>
            @endforelse
        </div>
        
    </main>
    
    <a href="{{ route('diary.create') }}" class="fab">
        <i class="fas fa-plus"></i>
    </a>

</body>
</html>