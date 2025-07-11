<div class="navbar bg-[#0006] shadow-sm absolute top-0">
    <div class="flex-1">
        <a href="{{ url('/') }}" class="btn btn-ghost text-xl text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            Home
        </a>
    </div>
    <div class="flex-none">
        @auth
            <ul class="flex items-center justify-center gap-2">
            <li>
                <div class="avatar">
                    <div class="mask mask-squircle w-12">
                        <img src="{{ asset('images/'.Auth::user()->photo) }}" alt="">
                    </div>
                </div>
            </li>
            <li>
                <span class="badge text-white bg-[transparent] ">
                    Admin: {{ Auth::user()->fullname }}
                </span>
            </li>
        </ul>
        @endauth
        @guest
        <ul class="menu menu-horizontal px-1 text-white">
            <li>
                <a href="{{ url('login') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" /></svg>
                    Login
                </a>
            </li>
            <li>
                <a href="{{ url('register') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" /></svg>
                    Register
                </a>
            </li>
            <li>
                <details>
                    <summary>Parent</summary>
                        <ul class="bg-[#0006] rounded-t-none p-2">
                            <li><a>Link 1</a></li>
                            <li><a>Link 2</a></li>
                        </ul>
                </details>
            </li>
        </ul>
        @endguest
    </div>
</div>