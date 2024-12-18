<header class="bg-gray-900 text-white py-4">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">{Finsweet</h1>

        <nav class="flex items-center" style="margin-left: 900px">
            <ul class="flex space-x-6 text-sm">
                <li><a href="{{route('home')}}" class="hover:text-gray-400">Home</a></li>
                <li><a href="{{route('blogs.index')}}" class="hover:text-gray-400">Blog</a></li>
                <li><a href="#" class="hover:text-gray-400">About Us</a></li>
                <li><a href="#" class="hover:text-gray-400">Contact Us</a></li>
            </ul>
        </nav>
        <div>
            <button class="bg-white text-gray-900 px-4 py-2 rounded-md font-medium hover:bg-gray-200">
                <a href="{{route('sign-in')}}">Subscribe</a>
            </button>
        </div>
    </div>
</header>
