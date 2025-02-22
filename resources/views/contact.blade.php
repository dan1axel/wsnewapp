@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <div class="bg-gradient-to-r from-gray-700 via-gray-900 to-gray-500">
        <div class="text-center mt-10 p-10 bg-opacity-60 bg-black rounded-lg">
            <h1 class="text-3xl font-bold text-white">Contact Us</h1>
            <p class="mt-4 text-white">
                Have questions or feedback? We would love to hear from you! Whether you're looking for support, have suggestions, or want to partner with us, feel free to reach out using the methods below.
            </p>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-white">Email Us</h2>
                <p class="mt-4 text-white">You can reach us at <a href="mailto:support@fitquest.com" class="text-blue-400 hover:underline">support@fitquest.com</a></p>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-white">Follow Us</h2>
                <ul class="mt-4 text-white">
                    <li><a href="https://facebook.com/fitquest" class="text-blue-400 hover:underline">Facebook</a></li>
                    <li><a href="https://twitter.com/fitquest" class="text-blue-400 hover:underline">Twitter</a></li>
                    <li><a href="https://instagram.com/fitquest" class="text-blue-400 hover:underline">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
