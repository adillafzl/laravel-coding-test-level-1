@extends('layouts.app')
@section('title', '')

@section('content')

<section class="text-gray-600 body-font h-screen pb-12">
    <div class="flex flex-wrap w-full my-12 px-8 mx-auto">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Add New Events</h1>
            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
        </div>
    </div>

    <div class="container mx-auto flex px-5 py-4 justify-center flex-col border rounded-md border-gray-200 shadow">
        @include('event.partials.back-button')     
        @include('event.partials.any-error')
        @include('event.partials.create-form')
    </div>
</section>

@endsection