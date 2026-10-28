<x-layout>
    <main class="flex flex-1 items-center justify-center p-4">
        <section class="bg-white w-full max-w-150 border-2 shadow-brutal p-10">
            <form action="/register" method="POST">
                {{-- confiar no form --}}
                @csrf

                <h1 class="text-3xl font-bold">
                    Registre-se
                </h1>

                <p class="mt-4">
                    Insira seus dados para criar uma conta
                </p>

                <div class="flex flex-col gap-2 mt-4">
                    <label for="email">Nome</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        class="bg-white p-2 border-2 @error('name') border-red-500 @enderror" 
                        placeholder="Digite seu nome"
                    >
                    @error('name')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mt-4">
                    <label for="email">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror" 
                        placeholder="Digite seu email"
                    >
                    @error('email')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mt-4">
                    <label for="password">Senha</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
                        placeholder="**************"
                    >
                    @error('password')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mt-4">
                    <label for="password">Confirme a senha</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
                        placeholder="**************"
                    >
                    @error('password')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                
                <x-button label="Criar conta" props="w-full mt-4 h-12" />

                <p class="text-center mt-6">
                    Já tem uma conta?
                    <a href="/login" class="underline hover:opacity-50 transition">
                        Fazer login.
                    </a>
                </p>
            </form>
        </section>
    </main>
</x-layout>