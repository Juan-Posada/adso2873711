@extends('layouts.app')
@section('title', 'Login')
@section('content')
@include('layouts.navbar')
<main class="bg-[url(images/bg-welcome.webp)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
    <div class="bg-[#000000c0] w-96 text-white p-12 rounded-[22px] flex flex-col justify-center items-center">
        <h1 class="w-64 text-4xl flex justify-center items-center gap-2 border-b-2 pb-4 rounded-xl">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-13 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" /></svg>
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
        <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-6">
            @csrf
            <div class="mt-10">
                <label class="mt-4">Email: </label>
                <input name="email" type="email" placeholder="email@example.com" class="input bg-[transparent] border-white" />
            </div>
            <div class="">
                <label class="mt-4">Password: </label>
                <input name="password" type="password" placeholder="Secret" class="input bg-[transparent] border-white" />
            </div>
            <div class="mt-5">
                <button class="btn btn-light w-full flex justify-cennter items-center gap-2">
                    Log In
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" /></svg>
                </button>
                @if (Route::has('password.request'))
                    <a class="border-b-1 mt-4 inline-block text-sm text-gray-300 hover:text-gray-100" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</main>
@endsection