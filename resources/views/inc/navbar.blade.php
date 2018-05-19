<nav class="navbar bg-dark navbar-dark">
    <a class="navbar-brand" href="/">{{config("app.name")}}</a>
    <button class="collapse navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-expand" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/studentRegister">Add new Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/parentRegister">Register Parent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/promote">Promote</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/account">Account Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/search">Search</a>
            </li>

        </ul>
    </div>
</nav>
{{--


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
            <a class="navbar-brand" href="#">{{config("app.name")}}</a>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/studentRegister">Add new Student</a></li>
            <li><a href="/parentRegister">Register Parent</a></li>
            <li><a href="/promote">Promote</a></li>
            <li><a href="/account">Account Information</a></li>
            <li><a href="/search">Search</a></li>
        </ul>
    </div>
</nav>
--}}
