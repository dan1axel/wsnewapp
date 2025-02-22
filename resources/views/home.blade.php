@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="bg-gradient-to-r from-gray-700 via-gray-900 to-gray-500">
        <div class="text-center mt-10 p-10 bg-opacity-60 bg-black rounded-lg">
            <h1 class="text-4xl font-bold text-white">Welcome to FitQuest</h1>
            <p class="mt-4 text-white">Your fitness journey starts here! Whether you're a beginner or an experienced athlete, FitQuest provides the tools, guidance, and community you need to reach your health and fitness goals.</p>

            <div class="mt-8">
                <a href="{{ route('signup') }}" class="bg-blue-600 text-white px-6 py-3 rounded-full text-lg hover:bg-blue-700">Start Your Journey Today</a>
            </div>

            <div class="mt-10">
                <h2 class="text-3xl font-semibold text-white">Why Choose FitQuest?</h2>
                <p class="mt-4 text-white">We provide personalized workout plans, expert advice, and a supportive community to help you stay motivated and on track to reach your fitness goals.</p>
            </div>

            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-blue-600">Personalized Plans</h3>
                    <p class="mt-4 text-gray-700">Get customized workout routines and meal plans tailored to your unique goals.</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-blue-600">Track Your Progress</h3>
                    <p class="mt-4 text-gray-700">Monitor your fitness journey with detailed progress reports and goal tracking.</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-blue-600">Join the Community</h3>
                    <p class="mt-4 text-gray-700">Connect with other fitness enthusiasts, share experiences, and motivate each other.</p>
                </div>
            </div>

            <div class="mt-16">
                <h2 class="text-3xl font-semibold text-white">What Our Members Say</h2>
                <div class="mt-6">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <p class="italic text-gray-700">"FitQuest helped me get back on track with my fitness goals. The personalized workout plans and nutrition advice have been a game-changer!"</p>
                        <p class="mt-4 text-gray-800 font-semibold">— Sarah T., Member</p>
                    </div>
                </div>
            </div>

            <div class="mt-10">
                <p class="text-white">Ready to take your fitness to the next level? Sign up today and start your journey with FitQuest!</p>
                <a href="{{ route('signup') }}" class="mt-4 bg-blue-600 text-white px-6 py-3 rounded-full text-lg hover:bg-blue-700">Join Now</a>
            </div>
        </div>
    </div>
@endsection
