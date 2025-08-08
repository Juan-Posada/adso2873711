<form action="{{ route('logout') }}" method="POST">
    @csrf

    <button :href="route('logout')" 
            onclick="event.preventdefault();
                    this.closet('form').submit();">
            {{('Log Out')}}
    </button>
</form>
