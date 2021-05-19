@extends('layouts.app')

@section('content')
    <main class="h-auto lg:h-screen w-full flex flex-col">
        <nav class="py-8 md:py-12 lg:py-4 px-12 flex justify-end">
            <a href="{{ route('login') }}" class="py-2 px-6 border border-b-4 border-solid border-purple-500 rounded-md shadow-md quicksand font-bold text-purple-800 flex flex-row items-center space-x-2 transition ease-in-out duration-200 hover:border-purple-900 hover:text-purple-700">
                <span>Log In</span>
                <i class="fas fa-arrow-right transform scale-90 mt-0.5"></i>
            </a>
        </nav>

        <form method="POST" action="{{ route('password.email') }}" class="w-4/5 lg:w-1/3 mt-2 mx-auto md:mt-12 flex flex-col">
            @csrf

            <h1 class="glx700 text-gray-900 text-3xl text-purple-800">Forgot Your Password<span class="text-gray-900">.</span></h1>
            <span class="mt-2 quicksand font-medium text-gray-500">
                Not to worry, we will send you instructions on how to reset your password by email.
            </span>

            <label for="email" class="w-full mt-6 flex flex-col">
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

            <button type="submit" class="w-full py-3 mt-8 bg-purple-700 rounded-md border-b-4 border-solid border-purple-900 glx600 text-white text-lg transition ease-in-out duration-200 hover:bg-purple-800 focus:outline-none">Send</button>
        </form>
    </main>
@endsection