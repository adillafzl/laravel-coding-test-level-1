@extends('layouts.app')
@section('title', '')

@section('content')

<section class="text-gray-600 body-font h-auto pb-12">
    <div class="flex flex-wrap w-full mt-12 px-8 mx-auto">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">List of Events</h1>
            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
        </div>
    </div>

    <div class="container mx-auto flex px-5 py-4 items-center justify-center flex-col">
    <a href="{{ route('events.create') }}" class="flex text-white bg-indigo-500 border-0 py-2 px-4 hover:bg-indigo-600 rounded text-base float-right ml-auto">Add Event</a>

        @include('event.partials.table')

    </div>
</section>

@endsection