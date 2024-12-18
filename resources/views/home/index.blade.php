<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{Finsweet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-gray-50 text-gray-800">
    @include('navigation.index')
    <div class="h-screen bg-cover bg-center" style="background-image: url('/images/header.png');">
        <div class="h-full bg-black bg-opacity-60 flex items-center justify-center ">
            <div class="text-left text-white max-w-2xl p-6 "style="margin-left:-850px; margin-top:-75px";>
                <h2 class="mb-8">POSTED ON <b>STARTUP</b></h2>
                <h1 class="text-4xl font-bold mb-4">Step-by-step guide to choosing great font pairs</h1>
                <p class="text-lg mb-8">By <span class="text-yellow-500">James West</span> | May 23, 2022</p>
                <p class="text-gray-300 mb-6">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                <a href="#featured" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full">Read More</a>
            </div>
        </div>
    </div>

    <section class="py-12" id="featured">
        <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8">
            <div class="md:col-span-2">
                <h1 class="text-4xl font-bold">Featured Post</h1>
                <img src="/images/featurepost.png" alt="Featured Image" class="rounded-lg mb-4 mt-4" style="width: 600px; height: 300px; object-fit: cover;">
                <h1 class="text-3xl text-gray-800 mt-2 font-bold">Lorem ipsum dolor sit amet consectetur, adipisicing elit, sed do eiusmod tempor.</h1>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <button class="mt-4 px-6 py-2 bg-yellow-500 text-gray-900 rounded-md hover:bg-yellow-600">
                    Read More
                </button>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-4">Recent Posts</h2>
<div class="space-y-4">
    @foreach ($blogs as $blog)
        <div class="border-b pb-4">
            <h3 class="font-bold">{{ $blog['title'] }}</h3>
            <p class="text-gray-600">{{ Str::limit($blog['content'], 100, '...') }}</p>
            <a href="{{ route('blogs.show', $blog['id']) }}" class="text-blue-500 hover:underline">Read More</a>
        </div>
    @endforeach
</div>

            </div>
        </div>
    </section>

    <section class="bg-white py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold">We are a community of creative writers who share their knowledge</h2>
            <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </section>

    <section class="py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold mb-6">Choose a Category</h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="bg-yellow-100 p-3 rounded-lg">
                    <h3 class="font-bold">Business</h3>
                </div>
                <div class="bg-yellow-100 p-3 rounded-lg">
                    <h3 class="font-bold">Startup</h3>
                </div>
                <div class="bg-yellow-100 p-3 rounded-lg">
                    <h3 class="font-bold">Technology</h3>
                </div>
                <div class="bg-yellow-100 p-3 rounded-lg">
                    <h3 class="font-bold">Design</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold mb-6">List of Authors</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <div>
                    <img src="{{asset('images/blog1.jpg')}}" alt="Author" class="rounded-full mx-auto mb-4">
                    <p>rawr</p>
                </div>
                <div>
                    <img src="{{asset('images/blog1.jpg')}}" alt="Author" class="rounded-full mx-auto mb-4">
                    <p>rawr</p>
                </div>
                <div>
                    <img src="{{asset('images/blog1.jpg')}}" alt="Author" class="rounded-full mx-auto mb-4">
                    <p>rawr</p>
                </div>
                <div>
                    <img src="{{asset('images/blog1.jpg')}}" alt="Author" class=" rounded-full mx-auto mb-4">
                    <p>rawr</p>
                </div>
            </div>
        </div>
    </section>

    @include('footer.index')

</body>
</html>
