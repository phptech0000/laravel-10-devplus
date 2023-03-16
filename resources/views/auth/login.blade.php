@extends('layouts.app')

@section('title')
 Entrar
@endsection

@section('content')
    <div class="mx-auto max-w-lg flex justify-center flex-col items-center gap-5">
        <div class="w-10/12">
            <h1 class="text-violet-500 font-bold mb-4 text-center text-4xl">DevPulse</h1>
            <form class="p-8 shadow-xl rounded border-2 border-violet-500" method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                @if (session('mensagem'))
                    <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                        {{ session('mensagem') }}
                    </p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">E-mail</label>
                    <input type="text" id="email" placeholder="E-mail de Registro" name="email"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('email') }}" />
                    @error('email')
                        <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Senha</label>
                    <input type="password" id="password" placeholder="Senha de Registro" name="password"
                        class="border p-3 w-full rounded-lg" />
                    @error('password')
                        <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember"> <label class="text-gray-500 text-sm">Lembrar senha</label>
                </div>

                <input type="submit" value="Entrar"
                    class="bg-violet-500 hover:bg-violet-600 transition-colors cursor-pointer w-full text-white font-bold rounded p-3">
            </form>
        </div>
        <div class="p-5 shadow-xl rounded border-2 border-violet-500 w-10/12">
            <p class="text-center text-gray-500">Não tem uma conta? <a class="text-violet-900 font-bold" href="{{route('register')}}">Cadastra-se</a></p>
        </div>
    </div>

@endsection
