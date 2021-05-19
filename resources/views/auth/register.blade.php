@extends('layouts.app')

@section('content')
    <main class="h-auto w-full flex flex-col">
        <nav class="py-8 md:py-12 lg:py-4 px-12 flex justify-end justify-between items-center">
            <a href="/" class="glx800 text-purple-800 text-xl flex flex-row items-center space-x-2">
                <i class="fas fa-pen transform scale-75 mt-0.5"></i>
                <span>{{ env('APP_NAME') }}</span>
            </a>

            <a href="{{ route('login') }}" class="py-2 px-6 border border-b-4 border-solid border-purple-500 rounded-md shadow-md quicksand font-bold text-purple-800 flex flex-row items-center space-x-2 transition ease-in-out duration-200 hover:border-purple-900 hover:text-purple-700">
                <span>Log In</span>
                <i class="fas fa-arrow-right transform scale-90 mt-0.5"></i>
            </a>
        </nav>

        <form method="POST" action="{{ route('register') }}" class="w-4/5 lg:w-1/3 mt-2 md:mt-12 mx-auto lg:m-auto flex flex-col">
            @csrf

            <h1 class="glx800 text-gray-900 text-3xl text-purple-800">Sign Up<span class="text-gray-900">.</span></h1>
            <span class="mt-2 quicksand font-medium text-gray-500">
                Become a part of the community
            </span>

            <label for="name" class="w-full my-6 flex flex-col">
                <span class="mb-3 quicksand font-medium text-gray-500">Your Name</span>

                <div class="input relative group">
                    <i data-feather="user" class="text-gray-800 opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                    <input type="text" id="name" class="w-full py-3 pl-9 pr-4 border border-solid border-gray-400 rounded-md glx500 text-gray-900 text-lg ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:ring-purple-800 focus:outline-none @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="new-name" autofocus>
                </div>

                @error('name')
                    <span class="mt-3 quicksand font-medium text-sm text-red-500" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </label>

            <label for="email" class="w-full my-6 flex flex-col">
                <span class="mb-3 quicksand font-medium text-gray-500">Email Address</span>

                <div class="input relative group">
                    <i data-feather="at-sign" class="text-gray-800 opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                    <input type="text" id="email" class="w-full py-3 pl-9 pr-4 border border-solid border-gray-400 rounded-md glx500 text-gray-900 text-lg ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:ring-purple-800 focus:outline-none @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="new-email" autofocus>
                </div>

                @error('email')
                    <span class="mt-3 quicksand font-medium text-sm text-red-500" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </label>

            <label for="password" class="w-full flex flex-col">
                <div class="mb-3 quicksand font-medium text-gray-500 flex flex-row justify-between">
                    <span>Your Password</span>

                    <a href="{{ route('password.request') }}" class="font-semibold underline transition ease-in-out duration-200 hover:text-gray-900">Forgot Your Password?</a>
                </div>

                <div class="input relative group">
                    <i data-feather="lock" class="text-gray-800 opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                    <input type="text" id="password" class="w-full py-3 pl-9 pr-4 border border-solid border-gray-400 rounded-md glx500 text-gray-900 text-lg ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:ring-purple-800 focus:outline-none @error('password') border-red-500 @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" autofocus>
                </div>

                @error('password')
                    <span class="mt-3 quicksand font-medium text-sm text-red-500" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </label>

            <button type="submit" class="w-full py-3 mt-8 bg-purple-700 rounded-md border-b-4 border-solid border-purple-900 glx600 text-white text-lg transition ease-in-out duration-200 hover:bg-purple-800 focus:outline-none">Sign Up</button>

            <fieldset class="mt-6 flex flex-col border-t border-solid border-gray-400 border-opacity-50">
                <legend class="pb-px mb-6 mx-auto glx600 text-gray-500 px-2 bg-white">Or sign up using</legend>

                <section class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-4">
                    <button type="button" class="py-3 w-full md:w-1/2 rounded-md border border-solid border-b-2 border-gray-400 glx600 text-gray-700 flex flex-row space-x-4 items-center justify-center group transition ease-in-out duration-200 hover:bg-gray-900 hover:border-red-500">
                        <i class="fab fa-google text-red-500 transition ease-in-out duration-200 group-hover:text-red-500"></i>
                        <span class="transition ease-in-out duration-200 group-hover:text-white">Google</span>
                    </button>

                    <button type="button" class="py-3 w-full md:w-1/2 rounded-md border border-solid border-b-2 border-gray-400 glx600 text-gray-700 flex flex-row space-x-4 items-center justify-center group transition ease-in-out duration-200 hover:bg-gray-900 hover:border-blue-400">
                        <i class="fab fa-facebook-f text-blue-500 transition ease-in-out duration-200 group-hover:text-blue-400"></i>
                        <span class="transition ease-in-out duration-200 group-hover:text-white">Facebook</span>
                    </button>
                </section>
            </fieldset>

            <span class="my-6 quicksand font-medium text-gray-500">By signing up to {{ env('APP_NAME') }}, you agree to our <a href="{{ route('legal-terms') }}" class="underline">Terms</a> and <a href="{{ route('legal-privacy') }}" class="underline">Privacy Policy</a>.</span>
        </form>
    </main>
@endsection