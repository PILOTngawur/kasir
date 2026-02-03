<nav class="navbar navbar-expand-lg bg-body-tertary mb-5">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand">Pelaggan</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand">Produk</a>
            </li>
            <li class="nav-item">
                <a class="navbar-brand">Tarnsaks</a>
            </li>
        </ul>
        <form action="/logout" method="post">
        @csrf
        <button class="btn btn-primary">Logout</button>
        </form>
    </div>

</nav>