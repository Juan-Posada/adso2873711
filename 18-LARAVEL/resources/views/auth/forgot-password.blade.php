@extends('layouts.app')
@section('title', 'Forgot password')
@section('content')
@include('layouts.navbar')
<main class="bg-[url(images/bg-welcome.webp)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
    <div class="bg-[#000000c0] w-100 md:w-4/12 text-white p-12 rounded-[22px] flex flex-col justify-center items-center">
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
        <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-6">
            @csrf
            <p class="mt-6">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </p>
            <div class="mt-4">
                <label class="mt-4">Email: </label>
                <input name="email" type="email" placeholder="email@example.com" class="input bg-[transparent] border-white w-full" />
            </div>
            <div class="mt-5">
                <button class="btn btn-light w-full flex justify-cennter items-center gap-2">
                    Email Password Rest Link
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" /></svg>
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
