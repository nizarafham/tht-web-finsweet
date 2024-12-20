<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex flex-wrap justify-between items-center border-b border-gray-700 pb-8">
            <div class="mb-6 md:mb-0">
                <h1 class="text-2xl font-bold">Finsweet</h1>
            </div>
            <nav>
                <ul class="flex space-x-6 text-sm">
                    <li><a href="{{route('home')}}" class="hover:text-gray-400">Home</a></li>
                    <li><a href="{{route('blogs.index')}}" class="hover:text-gray-400">Blog</a></li>
                    <li><a href="#" class="hover:text-gray-400">About us</a></li>
                    <li><a href="{{route('profile')}}" class="hover:text-gray-400">Profile</a></li>
                    <li><a href="#" class="hover:text-gray-400">Privacy Policy</a></li>
                </ul>
            </nav>
        </div>

        <div class="mt-8 mb-8">
            <h2 class="text-lg font-medium">Subscribe to our newsletter to get latest updates and news</h2>
            <div class="flex mt-4">
                <input type="email" placeholder="Enter Your Email"
                    class="w-full md:w-auto flex-1 px-4 py-2 rounded-l-md text-gray-900" />
                <button class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-6 py-2 rounded-r-md">
                    <a href="{{route('sign-in')}}">Subscribe</a>
                </button>
            </div>
        </div>

        <div class="flex flex-wrap justify-between items-center">
            <div>
                <p>Finstreet 118 2561 Fintown</p>
                <p>Hello@finsweet.com 020 7993 2905</p>
            </div>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="hover:text-gray-400"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-gray-400"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-gray-400"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-gray-400"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</footer>
