<header class="bg-white flex border-b-2 items-center justify-between p-4">
    <div class="mx-4">
        logo
    </div>

    <div class="mx-4">
        @auth
            {{-- login --}}
            <form action="/logout" method="POST">
                @csrf
                <x-button label="Logout" />
            </form>
        @endauth

        @guest
            {{-- logout --}}
            <a href="/login" class="no-underline">
                <x-button label="Login" />
            </a>
        @endguest
    </div>
</header>