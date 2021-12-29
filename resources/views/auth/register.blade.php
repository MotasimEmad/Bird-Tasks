@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="bg-white rounded my-4 mx-12 md:my-8 md:mx-56 lg:my-12 lg:mx-96 py-4">
            <h1 class="text-gray-800 text-xl md:text-2xl font-semibold mb-12 text-center">Register</h1>
            <div class="flex flex-col mx-8">
                <label for="name" class="text-gray-500 font-semibold mb-3">{{ __('Name') }}</label>
                <input 
                    name="name"
                    type="text"
                    placeholder="John Walker"
                    class="border border-gray-200 shadow rounded-lg mb-6 p-3 w-full focus:outline-none" />
                    
                <label for="email" class="text-gray-500 font-semibold mb-3">{{ __('E-Mail') }}</label>
                <input 
                    name="email"
                    type="email"
                    placeholder="example@example.com"
                    class="border border-gray-200 shadow rounded-lg mb-6 p-3 w-full focus:outline-none" />

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label for="password" class="text-gray-500 font-semibold mb-3">{{ __('Password') }}</label>
                <input 
                    name="password"
                    type="password"
                    placeholder="*********"
                    class="border border-gray-200 shadow rounded-lg mb-3 p-3 w-full focus:outline-none" />

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <label for="password" class="text-gray-500 font-semibold mb-3">{{ __('Confirm Password') }}</label>
                <input 
                    name="password_confirmation"
                    type="password"
                    placeholder="*********"
                    class="border border-gray-200 shadow rounded-lg mb-3 p-3 w-full focus:outline-none" />

                <button class="bg-blue-500 text-white font-semibold py-2 px-6 mt-3 mb-3 rounded-lg shadow-2xl">
                    {{ __('Register')}}
                </button>
            </div>
    </form>
@endsection