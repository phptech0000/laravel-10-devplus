@extends('layouts.app')

@section("title")
    Iníciar Sessão
@endsection

@section('content')

    <div class="m-2 md:flex md:justify-center shadow-xl rounded border-2 border-violet-500">
        <div class="p-4 md:p-0 md:w-8/12 bg-violet-500 flex items-center justify-center">
        <p class="text-white font-bold text-xl">Crie sua conta agora, não perca tempo!</p>
        </div>

    <div class="md:w-8/12 p-5 ">
        <form method="POST" action="{{route('login')}}" novalidate>
            @csrf

            @if(session('mensagem'))
                <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                        {{ session('mensagem') }}
                    </p>
            @endif

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
                <input type="checkbox" name="remember"> <label class="text-gray-500 text-sm">Lembrar senha</label>
            </div>

            <input type="submit" value="Entrar" class="bg-violet-500 hover:bg-violet-600 transition-colors cursor-pointer w-full text-white font-bold rounded p-3">
        </form>
    </div>
    </div>


@endsection
