<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Publicação - Jornada Maternidade</title>
    <link rel="stylesheet" href="{{ asset('css/post-create.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <div class="header-left">
            <a href="{{ url()->previous() }}" class="header-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="header-title">
            CRIAR PUBLICAÇÃO
        </div>
        <div class="header-right">
        </div>
    </header>

    <main class="create-post-container">
        <form action="{{ route('posts.store') }}" method="POST" class="post-form">
            @csrf

            <div class="form-group">
                <label for="content">Escreva sua publicação:</label>
                <textarea name="content" id="content" rows="10" placeholder="Compartilhe suas dúvidas, dicas ou experiências..." required>{{ old('content') }}</textarea>
                @error('content')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">Selecione uma categoria:</label>
                @if($currentCategory)
                    <input type="hidden" name="category" value="{{ $currentCategory }}">
                    <input type="text" value="{{ ucfirst($currentCategory) }}" class="category-display" readonly>
                @else
                    <select name="category" id="category" required>
                        <option value="" disabled selected>Escolha uma opção...</option>
                        @foreach($allowedCategories as $cat)
                            <option value="{{ $cat }}">{{ ucfirst($cat) }}</option>
                        @endforeach
                    </select>
                @endif
                @error('category')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="submit-btn">Publicar</button>
        </form>
    </main>
</body>
</html>