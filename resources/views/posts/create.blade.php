@extends('layouts.app')

@section('title')
    Criar uma nova publicação
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{route('images.store')}}" method="POST" enctype="multipart/form-data" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center" id="dropzone">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 shadow-xl rounded border-2 border-violet-500 mt-10 md:mt-0">
              <form action="{{route('posts.store')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="title" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                <input
                type="text"
                id="title"
                placeholder="Titulo da publicação"
                name="title"
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                value="{{ old('title')}}"
                />
                 @error('title')
                    <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                        {{ $message }}
                    </p>
                @enderror
            </div>

             <div class="mb-5">
                <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">Descrição</label>
                <textarea
                id="description"
                name="description"
                placeholder="Descrição da publicação"
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                >{{ old('name')}}</textarea>
                 @error('description')
                    <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-5">
                <input
                    name="image"
                    type="hidden"
                    value="{{old('image')}}"
                    />

                @error('image')
                    <p class="bg-red-500 text-center text-white my-2 rounded-lg text-sm p-2 uppercase font-bold">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <input type="submit" value="Publicar" class="bg-violet-500 hover:bg-violet-600 transition-colors cursor-pointer w-full text-white font-bold rounded p-3">
              </form>
        </div>
    </div>
@endsection

