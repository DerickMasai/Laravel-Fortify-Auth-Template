@extends('layouts.app')

@section('content')
    <main class="h-auto w-full flex flex-col">
        <nav class="py-8 md:py-12 lg:py-4 px-12 flex justify-start items-center">
            <a href="{{ route('register') }}" class="glx800 text-purple-800 text-xl flex flex-row items-center space-x-2">
                <i class="fas fa-pen transform scale-75 mt-0.5"></i>
                <span>{{ env('APP_NAME') }}</span>
            </a>
        </nav>

        <form method="POST" action="{{ route('login') }}" class="w-4/5 lg:w-1/3 mt-2 mx-auto md:mt-12 flex flex-col">
            @csrf

            <h1 class="glx800 text-gray-900 text-3xl text-purple-800">Reset Your Password<span class="text-gray-900">.</span></h1>
            <span class="mt-2 quicksand font-medium text-gray-500">
                Last step, enter and confirm your new password
            </span>

            <label for="password" class="w-full my-6 flex flex-col">
                <span class="mb-3 quicksand font-medium text-gray-500">Your Password</span>

                <div class="input relative group">
                    <i data-feather="lock" class="text-gray-800 opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                    <input type="text" id="password" class="w-full py-3 pl-9 pr-4 border border-solid border-gray-400 rounded-md glx500 text-gray-900 text-lg ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:ring-purple-800 focus:outline-none @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                </div>

                @error('password')
                    <span class="mt-3 quicksand font-medium text-sm text-red-500" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </label>

            <label for="password-confirm" class="w-full flex flex-col">
                <span class="mb-3 quicksand font-medium text-gray-500">Confirm Password</span>

                <div class="input relative group">
                    <i data-feather="lock" class="text-gray-800 opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                    <input type="text" id="password-confirm" class="w-full py-3 pl-9 pr-4 border border-solid border-gray-400 rounded-md glx500 text-gray-900 text-lg ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:ring-purple-800 focus:outline-none @error('password_confirmation') border-red-500 @enderror" name="password_confirmation" required autocomplete="new-password">
                </div>

                @error('password_confirmation')
                    <span class="mt-3 quicksand font-medium text-sm text-red-500" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </label>

            <button type="submit" class="w-full py-3 mt-8 bg-purple-700 rounded-md border-b-4 border-solid border-purple-900 glx600 text-white text-lg transition ease-in-out duration-200 hover:bg-purple-800 focus:outline-none">Reset Password</button>
        </form>
    </main>
@endsection