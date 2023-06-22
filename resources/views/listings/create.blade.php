<x-layout>
    <x-card>
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Crie um DesTrabalho
            </h2>
            <p class="mb-4">Poste um DesTrabalho para encontrar um bovino</p>
        </header>

        <form action="">
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Nome da empresa</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" />
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Nome do DesTrabalho</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Exemplo: Puxador de carroça reversa" />
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Localização</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Examplo: Remoto, Lugar Nenhum" />
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email de contato</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" />
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Site da empresa/URL para cadastro
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" />
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Separadas por vírgulas)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Examplo: Laravel, Backend, Postgres, etc" />
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Logo da empresa
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Descrição do DesTrabalho
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder=""></textarea>
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Criar DesTrabalho
                </button>

                <a href="/" class="text-black ml-4"> Voltar </a>
            </div>
        </form>
    </x-card>
</x-layout>
