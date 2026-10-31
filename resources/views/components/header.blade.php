<header class="bg-white flex border-b-2 items-center justify-between p-4 px-32">
    <div class="mx-4">
        @auth
            <a href="/dashboard" class="no-underline">
                <x-button label="HT" />
            </a>
        @endauth
        @guest
            <a href="/" class="no-underline">
                <x-button label="HT" />
            </a>
        @endguest
    </div>

    <div class="mx-4 flex items-center gap-4">
        @auth
            {{-- login --}}
            <form action="/logout" method="POST">
                @csrf
                <x-button label="Deslogar" />
            </form>
        @endauth

        @guest
            {{-- logout --}}
            <a href="/login" class="no-underline">
                <x-button label="Logar" />
            </a>
            <a href="/register" class="no-underline">
                <x-button label="cadastrar" bgcolor="bg-white-200" />
            </a>
        @endguest
    </div>
</header>