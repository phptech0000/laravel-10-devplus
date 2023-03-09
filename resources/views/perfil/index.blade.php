@extends('layouts.app')

@section('title')
    Editar Perfil: {{ auth()->user()->username }}
@endsection


@section('content')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form action="{{ route('perfil.store') }}" enctype="multipart/form-data" method="POST" class="mt-10 md:mt-0">
                @csrf
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Nome de usuário</label>
                    <input type="text" id="username" placeholder="Username" name="username"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}" />
                    @error('username')
                        <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="image" class="mb-2 block uppercase text-gray-500 font-bold">Imagem do perfil</label>
                    <input type="file" id="image" name="image"
                        class="border p-3 w-full rounded-lg
                        value="" accept=".jpg, .jpeg, .png" />

                </div>
                <input type="submit" value="Salvar alterações"
                    class="bg-violet-500 hover:bg-violet-600 transition-colors cursor-pointer w-full text-white font-bold rounded p-3">

            </form>
        </div>
    </div>
@endsection
