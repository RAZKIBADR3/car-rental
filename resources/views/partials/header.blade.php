<header class="col-12 p-4 d-flex justify-content-between">
    <div class="col-3">
        <p class="fs-3 text-capitalize">location de vehicules</p>
    </div>
    <nav class="col-6 d-flex align-items-center justify-content-evenly">
        <a class="text-capitalize text-decoration-none fs-5" href="/vehicules">vehicules</a>
        <a class="text-capitalize text-decoration-none fs-5" href="/locations">locations</a>
        @auth
            <a onclick="return confirm('vouler vous decounecter')" class="btn btn-dark" href="/user/logout">Logout</a>
        @else
            <a class="btn btn-dark" href="/user/login">Login</a>
        @endauth
    </nav>
</header>
