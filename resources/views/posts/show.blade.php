@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection


@section('content')
    <div class="container mx-auto flex">
        <div class="md:w-1/2">
            <img src="{{ asset('uploads') . '/' . $post->image }}" alt="Imagem do post {{ $post->title }}">

            <div class="p-3">
                <p>0 Likes</p>
            </div>

            <div class="">
                <p class="font-bold"> {{ $post->user->username }} </p>
                <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
            </div>

        </div>

        <div class="md:w-1/2">
            2
        </div>
    </div>
@endsection
