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
                <a class="nav-link" href="/search">Search</a>
            </li>
            <li class="nav-item dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                        data-toggle="dropdown">
                    Account Information
                </button>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/fees">Fee Record</a>
                    <a class="dropdown-item" href="/products">Products</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
