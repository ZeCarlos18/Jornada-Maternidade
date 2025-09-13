<li class="menu-item">
    <a href="#" onclick="toggleSection('deleteuser'); return false;" style="color: #d93025;">
        <span class="icon" style="color: #d93025;"><i class="fas fa-user-slash"></i></span>Deletar Conta<i class="fas fa-chevron-right arrow-icon"></i>
    </a>
    <div id="deleteuser" class="hidden-section" style="display:none; margin-left:32px;">
        <section class="space-y-6">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Deletar Conta') }}
                </h2>
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Uma vez que sua conta for deletada, todos os conteúdos dela serão permanentemente excluídos.') }}
                </p>
            </header>

            <x-danger-button
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                class="w-full py-3 rounded-lg font-bold"
            >{{ __('Deletar Conta') }}</x-danger-button>

            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6 flex flex-col gap-4">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-gray-900 mb-2">
                        {{ __('Tem certeza que quer deletar a sua conta?') }}
                    </h2>
                    <p class="mt-1 text-sm text-gray-600 mb-4">
                        {{ __('Uma vez que sua conta for deletada, todos os conteúdos dela serão permanentemente excluídos. Por favor, insira sua senha, caso você gostaria de deletar permanentemente a sua conta.') }}
                    </p>

                    <div class="mt-2">
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                        <x-text-input
                            id="password"
                            name="password"
                            type="password"
                            class="mt-1 block w-full rounded-lg border-gray-300"
                            placeholder="{{ __('Password') }}"
                        />
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-6 flex justify-end gap-2">
                        <x-secondary-button x-on:click="$dispatch('close')" class="rounded-lg">
                            {{ __('Cancelar') }}
                        </x-secondary-button>
                        <x-danger-button class="ms-3 rounded-lg font-bold">
                            {{ __('Deletar Conta') }}
                        </x-danger-button>
                    </div>
                </form>
            </x-modal>
        </section>
    </div>
</li>
<script>
    function toggleSection(id) {
        const el = document.getElementById(id);
        if (el.style.display === "none" || el.style.display === "") {
            el.style.display = "block";
        } else {
            el.style.display = "none";
        }
    }
</script>