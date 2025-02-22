@extends('layout')

@section('title', 'Sign Up')

@section('content')
    <div class="text-center mt-10">
        <h1 class="text-4xl font-bold text-blue-600">Create Your FitQuest Account</h1>
        <p class="mt-4 text-gray-700">Fill in the details below to get started on your fitness journey with FitQuest.</p>

        <!-- Sign-up Form -->
        <form action="{{ route('signup.submit') }}" method="POST" class="mt-8">
            @csrf
            <div>
                <label for="name" class="block text-gray-700">Full Name</label>
                <input type="text" id="name" name="name" class="mt-2 p-3 border border-gray-300 rounded w-1/2 mx-auto" required>
            </div>

            <div class="mt-6">
                <label for="email" class="block text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" class="mt-2 p-3 border border-gray-300 rounded w-1/2 mx-auto" required>
            </div>

            <div class="mt-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-2 p-3 border border-gray-300 rounded w-1/2 mx-auto" required>
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-full text-lg hover:bg-blue-700">Sign Up</button>
            </div>
        </form>
    </div>
@endsection
