{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.app')
@section('title', 'Register')
@section('content')
@include('layouts.navbar')
<main class="bg-[url(images/bg-welcome.webp)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
    <div class="bg-[#000000c0] w-96 text-white p-10 mt-30 mb-12 rounded-[22px] flex flex-col justify-center items-center">
        <h1 class="w-64 text-4xl flex justify-center items-center gap-2 border-b-2 pb-4 rounded-xl">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" /></svg>
        </h1>
        @if (count($errors->all()) > 0 )
            <div class="flex flex-col gap-2 my-4">
                @foreach ($errors->all() as $msg)
                    <div class="badge badge-error text-xs">
                        {{ $msg }}
                    </div>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-6">
            @csrf
            <div class="mt-10">
                <label class="mt-4">Document: </label>
                <input name="document" type="text" placeholder="1000000000" class="input bg-[transparent] border-white" value="{{ old('document') }}"/>
            </div>
            <div class="">
                <label class="mt-4">Full Name: </label>
                <input name="fullaname" type="text" placeholder="Juan Pérez" class="input bg-[transparent] border-white" value="{{ old('fullname') }}"/>
            </div>
            <div class="">
                <label class="mt-4">Gener: </label>
                <select class="select bg-[transparent] border-white" name="gender" >
                    <option class="text-black" value="Female">Female</option>
                    <option class="text-black" value="Male">Male</option>
                </select>
            </div>
            <div class="">
                <label class="mt-4">Birthdate: </label>
                <input name="birthdate" type="date" placeholder="2000-01-01" class="input bg-[transparent] border-white" value="{{ old('birthdate') }}/ ">
            </div>
            <div class="">
                <label class="mt-4">Phone Number: </label>
                <input name="phone" type="text" placeholder="3000000000" class="input bg-[transparent] border-white" value="{{ old('phone') }}" / >
            </div>
            <div class="">
                <label class="mt-4">Email: </label>
                <input name="email" type="email" placeholder="email@example.com" class="input bg-[transparent] border-white" value="{{ old('email') }}/>
            </div>
            <div class="">
                <label class="mt-4">Password: </label>
                <input name="password" type="password" placeholder="Secret" class="input bg-[transparent] border-white" />
            </div>
            <div class="">
                <label class="mt-4">Password Confirmation: </label>
                <input name="password_confirmation" type="password" placeholder="Secret" class="input bg-[transparent] border-white" />
            </div>
            <div class="mt-5">
                <button class="btn btn-light w-full flex justify-cennter items-center gap-2">
                    Register
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" /></svg>
                </button>
                <a class="border-b-1 mt-4 inline-block text-sm text-gray-300 hover:text-gray-100" href="{{ route('login') }}">
                    Already Register?
                </a>
            </div>
        </form>
    </div>
</main>
@endsection