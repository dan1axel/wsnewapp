@extends('layout')

@section('title', 'About Us')

@section('content')
    <div class="bg-gradient-to-r from-gray-700 via-gray-900 to-gray-500">
        <div class="text-center mt-10 p-10 bg-opacity-60 bg-black rounded-lg">
            <h1 class="text-3xl font-bold text-white">About FitQuest</h1>
            <p class="mt-4 text-white">
                Welcome to **FitQuest**, your personal fitness journey platform! We are dedicated to helping you achieve your health and fitness goals with personalized workout plans, nutrition tips, and expert guidance.
            </p>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-white">Our Mission</h2>
                <p class="mt-4 text-white">
                    Our mission is to make fitness accessible and enjoyable for everyone, regardless of their starting point. With FitQuest, you can take control of your fitness journey and reach your full potential.
                </p>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-white">Our Values</h2>
                <ul class="mt-4 text-white list-disc pl-6">
                    <li>Personalization: Tailored plans that suit your needs.</li>
                    <li>Support: A vibrant community to help you stay motivated.</li>
                    <li>Progress: Tracking and achieving measurable results.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
