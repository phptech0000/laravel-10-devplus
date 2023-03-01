@extends('layouts.app')

@section("title")
    Criar Conta
@endsection

@section('content')

    <div class="m-2 md:flex md:justify-center shadow-xl rounded border-2 border-violet-500">
        <div class="p-4 md:p-0 md:w-8/12 bg-violet-500 flex items-center justify-center">
        <p class="text-white font-bold text-xl">Crie sua conta agora, não perca tempo!</p>
        </div>

    <div class="md:w-8/12 p-5 ">
        <form action="{{route('register')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nome</label>
                <input
                type="text"
                id="name"
                placeholder="Nome"
                name="name"
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                value="{{ old('name')}}"
                />
                 @error('name')
                    <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                <input
                type="text"
                id="username"
                placeholder="Nome de Usuário"
                name="username"
                class="border p-3 w-full rounded-lg g @error('username') border-red-500 @enderror"
                value="{{ old('username')}}"

                />
                    @error('username')
                    <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                        {{ $message }}
                    </p>
                @enderror
            </div>

              <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">E-mail</label>
                <input
                type="text"
                id="email"
                placeholder="E-mail de Registro"
                name="email"
                class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                value="{{ old('email')}}"

                />
                   @error('email')
                    <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                        {{ $message }}
                    </p>
                @enderror
            </div>

              <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Senha</label>
                <input
                type="password"
                id="password"
                                placeholder="Senha de Registro"

                name="password"
                class="border p-3 w-full rounded-lg"
                />
                 @error('password')
                    <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                        {{ $message }}
                    </p>
                @enderror
            </div>

              <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Senha</label>
                <input
                type="password"
                id="password_confirmation"
                placeholder="Repetir Senha"
                name="password_confirmation"
                class="border p-3 w-full rounded-lg"
                />
            </div>

            <input type="submit" value="Criar Conta" class="bg-violet-500 hover:bg-violet-600 transition-colors cursor-pointer w-full text-white font-bold rounded p-3">
        </form>
    </div>
    </div>


@endsection
