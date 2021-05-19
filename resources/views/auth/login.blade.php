@extends('layouts.app')

@section('content')
    <main class="h-auto w-full flex flex-col">
        <nav class="py-8 md:py-12 lg:py-4 px-12 flex  justify-between items-center">
            <a href="{{ route('register') }}" class="glx800 text-purple-800 text-xl flex flex-row items-center space-x-2">
                <i class="fas fa-pen transform scale-75 mt-0.5"></i>
                <span>{{ env('APP_NAME') }}</span>
            </a>
            <a href="{{ route('register') }}" class="py-2 px-6 border border-b-4 border-solid border-purple-500 rounded-md shadow-md quicksand font-bold text-purple-800 flex flex-row items-center space-x-2 transition ease-in-out duration-200 hover:border-purple-900 hover:text-purple-700" >
                <span>Join {{ env('APP_NAME') }}</span>
                <i class="fas fa-arrow-right transform scale-90 mt-0.5"></i>
            </a>
        </nav>

        <form method="POST" action="{{ route('login') }}" class="w-4/5 lg:w-1/3 mt-2 md:mt-12 mx-auto lg:m-auto flex flex-col">
            @csrf

            <h1 class="glx800 text-gray-900 text-3xl text-purple-800">Sign In<span class="text-gray-900">.</span></h1>
            <span class="mt-2 quicksand font-medium text-gray-500">
                Welcome back, let's get you back to studying
            </span>

            <label for="email" class="w-full my-6 flex flex-col">
                <span class="mb-3 quicksand font-medium text-gray-500">Email Address</span>
                
                <div class="input relative group">
                    <i data-feather="at-sign" class="text-gray-800 opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                    <input type="text" id="email" class="w-full py-3 pl-9 pr-4 border border-solid border-gray-400 rounded-md glx500 text-gray-900 text-lg ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:ring-purple-800 focus:outline-none @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                    <input type="text" id="password" class="w-full py-3 pl-9 pr-4 border border-solid border-gray-400 rounded-md glx500 text-gray-900 text-lg ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:ring-purple-800 focus:outline-none @error('password') border-red-500 @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">
                </div>

                @error('password')
                    <span class="mt-3 quicksand font-medium text-sm text-red-500" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </label>

            <label for="remember" class="w-auto mt-6 mr-auto flex justify-start items-start">
                <div class="border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-purple-800 active:border-purple-800">
                    <input type="checkbox" class="opacity-0 absolute cursor-pointer" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <svg class="fill-current hidden w-4 h-4 text-purple-800 font-bold pointer-events-none transform scale-75" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                </div>
                <span class="select-none -mt-0.5 quicksand font-medium text-md text-gray-500 cursor-pointer">{{ __('Remember Me') }}</span>
            </label>

            <button type="submit" class="w-full py-3 mt-6 bg-purple-700 rounded-md border-b-4 border-solid border-purple-900 glx600 text-white text-lg transition ease-in-out duration-200 hover:bg-purple-800 focus:outline-none">Log In</button>

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

            <span class="my-6 quicksand font-medium text-gray-500">By signing in to {{ env('APP_NAME') }}, you agree to our <a href="{{ route('legal-terms') }}" class="underline">Terms</a> and <a href="{{ route('legal-privacy') }}" class="underline">Privacy Policy</a>.</span>
        </form>
    </main>
@endsection