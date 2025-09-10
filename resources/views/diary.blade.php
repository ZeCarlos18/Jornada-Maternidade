<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Diary') }}
                </h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.079 0-2.152.091-3.21.286A6.348 6.348 0 0 0 2.25 12c0 3.038 1.496 5.753 3.841 7.427m12.443-4.228A9.016 9.016 0 0 0 18 3.75c1.079 0 2.152.091 3.21.286C21.828 4.743 22.5 5.923 22.5 7.25c0 3.425-2.607 6.229-5.91 6.883m-12.274 2.871L5.81 19.333m5.215-6.321L14.77 19.333m-9.56-5.462a48.455 48.455 0 0 1-1.082-.218m18.113 0a48.454 48.454 0 0 0-1.082-.218m-2.903-.687a48.163 48.163 0 0 1-.58.125m-14.775 0a48.163 48.163 0 0 0 .58.125m3.758-2.508a48.256 48.256 0 0 1-.951.365m12.373-2.316a48.272 48.272 0 0 0 .95.365m-2.823.136a56.126 56.126 0 0 1-4.706 1.096m-5.405-1.096a56.126 56.126 0 0 0-4.706-1.096" />
                </svg>
            </div>
            <div class="flex items-center space-x-4">
                {{-- Seus outros ícones aqui --}}
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-purple-200 p-6 rounded-3xl shadow-xl mb-8 border-4 border-purple-500">
                <p class="text-center font-bold text-gray-700 mb-4 text-lg">Como você está se sentindo hoje?</p>
                <div class="flex justify-center space-x-6">
                    {{-- Seus botões de humor aqui --}}
                    <button class="flex flex-col items-center"><span class="text-4xl">😊</span><span class="text-sm text-gray-600 mt-1">Feliz</span></button>
                    <button class="flex flex-col items-center"><span class="text-4xl">😐</span><span class="text-sm text-gray-600 mt-1">Neutro</span></button>
                    <button class="flex flex-col items-center"><span class="text-4xl">😔</span><span class="text-sm text-gray-600 mt-1">Triste</span></button>
                    <button class="flex flex-col items-center"><span class="text-4xl">😡</span><span class="text-sm text-gray-600 mt-1">Irritado</span></button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                @forelse ($entries as $entry)
                    <div class="bg-white p-6 rounded-3xl shadow-lg border-2 border-gray-300">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25m-3.75 0h18a2.25 2.25 0 0 1 2.25 2.25v13.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V7.5a2.25 2.25 0 0 1 2.25-2.25Zm0 0h.008v.008h-.008Zm0 3h18a2.25 2.25 0 0 1 2.25 2.25v13.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V7.5a2.25 2.25 0 0 1 2.25-2.25Z" />
                            </svg>
                            {{-- Data dinâmica vinda do banco de dados --}}
                            <p class="text-sm text-gray-500">{{ $entry->created_at->format('d/m/Y') }}</p>
                        </div>

                        {{-- Conteúdo dinâmico vindo do banco de dados --}}
                        <p class="text-gray-800 mb-4">{{ $entry->content }}</p>
                        
                        @if ($entry->image_path)
                            <img src="{{ asset('storage/' . $entry->image_path) }}" alt="Imagem do diário" class="w-full h-40 object-cover rounded-lg" loading="lazy">
                        @else
                             <div class="w-full h-40 bg-gray-200 rounded-lg flex items-center justify-center text-gray-400">
                                [Sem Imagem]
                            </div>
                        @endif

                        {{-- Moods (humores) dinâmicos --}}
                        <div class="flex justify-end items-center mt-4 space-x-2">
                            @foreach ($entry->moods as $mood)
                                <span class="text-2xl" title="{{ $mood->name }}">{{ $mood->emoji }}</span>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-12">
                        <p class="text-gray-500">Nenhuma entrada encontrada no seu diário.</p>
                        <p class="text-gray-400 text-sm mt-2">Clique no botão '+' para adicionar sua primeira memória!</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $entries->links() }}
            </div>

            <a href="{{ route('diary.create') }}" class="fixed bottom-8 right-8 bg-purple-600 hover:bg-purple-700 text-white p-4 rounded-full shadow-lg transition-transform transform hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </a>
        </div>
    </div>
</x-app-layout>