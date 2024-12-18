@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row max-w-7xl mx-auto bg-white overflow-hidden">
    <div class="p-6 flex-1">
      <p class="text-sm text-gray-500 uppercase tracking-wide font-semibold mb-2">Featured Post</p>
      <h1 class="text-2xl font-bold text-gray-900 mb-4">
        Step-by-step guide to choosing great font pairs
      </h1>
      <p class="text-sm text-gray-500 mb-2">
        By <span class="text-indigo-600 font-medium cursor-pointer">John Doe</span> | May 23, 2022
      </p>
      <p class="text-gray-600 mb-6">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
      </p>
      <a href="#" class="inline-block bg-yellow-400 text-gray-900 px-5 py-2 rounded-md font-medium hover:bg-yellow-500">
        Read More >
      </a>
    </div>

    <div class="flex-1">
      <img
        src="{{asset('images/featurepost.png')}}"
        alt="Person working at desk"
        class="rounded-lg mb-4 mt-4" style="width: 600px; height: 300px; object-fit: cover;"
      />
    </div>
  </div>

<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-8" style="margin-left: 130px">All posts</h1>

    <div class="space-y-8" style="margin-left: 130px">
        @foreach ($blogs as $blog)
            <div class="flex flex-col md:flex-row items-start gap-6 border-b pb-6">
                <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" class="w-full md:w-1/4 h-40 object-cover rounded-lg">

                <div class="flex-1">
                    <span class="text-sm uppercase text-blue-500 font-semibold">{{ $blog['category'] }}</span>
                    <h2 class="text-2xl font-bold mt-2 mb-3">{{ $blog['title'] }}</h2>
                    <p class="text-gray-600">{{ Str::limit($blog['content'], 120, '...') }}</p>
                    <a href="{{ route('blogs.show', $blog['id']) }}" class="inline-block mt-4 text-blue-600 font-semibold hover:underline">
                        Read More
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8 flex justify-between text-blue-600">
        <a href="#" class="hover:underline">&lt; Prev</a>
        <a href="#" class="hover:underline">Next &gt;</a>
    </div>

    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-6">All Categories</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-gray-100 p-4 rounded-lg text-center">
                <h3 class="font-bold">Business</h3>
                <p class="text-gray-600 mt-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-yellow-400 p-4 rounded-lg text-center">
                <h3 class="font-bold">Startup</h3>
                <p class="text-gray-700 mt-2 text-sm">Discover tips and tricks for launching your startup.</p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg text-center">
                <h3 class="font-bold">Economy</h3>
                <p class="text-gray-600 mt-2 text-sm">Learn more about the economic trends and updates.</p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg text-center">
                <h3 class="font-bold">Technology</h3>
                <p class="text-gray-600 mt-2 text-sm">Explore the latest technology advancements and tools.</p>
            </div>
        </div>
    </div>
</div>
@endsection
