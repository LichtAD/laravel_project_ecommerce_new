<h1>this is admin</h1>

<!-- Authentication -->
<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <input type="submit" value="Logout">
</form>