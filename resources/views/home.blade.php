@extends('layouts.app')

@section('title')
    Início
@endsection

@section('content')
    <x-list-post :posts="$posts" />
@endsection
