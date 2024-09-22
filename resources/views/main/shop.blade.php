@extends('layouts.main')
@section('content')
    <div class="grid w-full h-screen my-auto mt-24 mb-8 md:grid-cols-2 lg:grid-cols-4 gap-4 px-12 overflow-auto">
        <x-card image="banner01.jpg" />
        <x-card image="banner02.jpg" />
        <x-card image="banner03.jpg" />
        <x-card image="banner04.png" />
        <x-card image="banner05.jpg" />
        <x-card image="banner06.jpg" />
    </div>
@endsection