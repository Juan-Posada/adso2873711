<form action="{{ route('logout') }}" method="POST">
    @csrf

    <button :href="route('logout')" onclick="event.preventdefault();
                    this.closet('form').submit();">
        {{ __('Log Out') }}
    </button>
</form>

@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    @include('layouts.navbar')
    <main class="bg-[url(images/bg-welcome.webp)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#000000c0] w-96 text-white p-12 rounded-[22px] flex flex-col justify-center items-center">
            <h1 class="w-64 text-4xl flex justify-center items-center gap-2 border-b-2 pb-4 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"stroke="currentColor" class="size-12 mr-2"><path stroke-linecap="round" stroke-linejoin="round"d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                </svg>
            </h1>
            
        </div>
    </main>
@endsection
