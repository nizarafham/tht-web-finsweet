@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen py-10">
    <div class="container mx-auto p-6 bg-white shadow-md rounded-md">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800">-Profile-</h1>
            <p class="text-gray-600 mt-2">Welcome, {{ Auth::user()->name }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div>
                <ul class="text-gray-600 leading-relaxed">
                    <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
                    <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                    <li><strong>Joined:</strong> {{ Auth::user()->created_at->format('M d, Y') }}</li>
                    <div class="mt-8">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                Sign Out
                            </button>
                        </form>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
