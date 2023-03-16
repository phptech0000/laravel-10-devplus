@extends('layouts.app')

@section('title')
    Criar Conta
@endsection

@section('content')
    <div class="mx-auto max-w-lg flex justify-center flex-col items-center gap-5">
        <div class="w-10/12">
            <form class="p-8 shadow-xl rounded border-2 border-violet-500" action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nome</label>
                    <input type="text" id="name" placeholder="Nome" name="name"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}" />
                    @error('name')
                        <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text" id="username" placeholder="Nome de Usuário" name="username"
                        class="border p-3 w-full rounded-lg g @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}" />
                    @error('username')
                        <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

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
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir
                        Senha</label>
                    <input type="password" id="password_confirmation" placeholder="Repetir Senha"
                        name="password_confirmation" class="border p-3 w-full rounded-lg" />
                </div>

                <input type="submit" value="Criar Conta"
                    class="bg-violet-500 hover:bg-violet-600 transition-colors cursor-pointer w-full text-white font-bold rounded p-3">
            </form>
        </div>
        <div class="p-5 shadow-xl rounded border-2 border-violet-500 w-10/12">
            <p class="text-center text-gray-500">Tem uma conta? <a class="text-violet-900 font-bold"
                    href="{{route('login')}}">Conecte-se</a></p>
        </div>
    </div>
@endsection
