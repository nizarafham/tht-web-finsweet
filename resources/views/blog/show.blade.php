@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">{{ $blog['title'] }}</h1>
    <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" class="w-full max-h-96 object-cover mb-6 rounded-lg shadow-md">

    <div class="mb-4 text-gray-600">
        <p><strong>Category:</strong> {{ $blog['category'] }}</p>
        <p><strong>Author:</strong> {{ $blog['author'] }}</p>
    </div>

    <p class="text-gray-800 leading-relaxed mb-6">{{ $blog['content'] }}</p>

    <a href="{{ route('blogs.index') }}" class="inline-block mt-6 text-blue-500 hover:underline">Back to Blog List</a>
</div>
@include('footer.join')
@endsection
