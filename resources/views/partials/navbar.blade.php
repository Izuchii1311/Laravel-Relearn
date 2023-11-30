{{-- Navbar Components Bootstrap Start --}}
<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">ReLearn</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarButtonsExample" aria-expanded="false" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'services') ? 'active' : '' }}" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'posts') ? 'active' : '' }}" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">About Me</a>
                </li>
            </ul>
            <div class="d-flex align-items-center ms-auto">
                <button type="button" class="btn btn-default text-white px-3 me-2">Login</button>
                <button type="button" class="btn btn-primary me-3">Sign up for free</button>
            </div>
        </div>
    </div>
</nav>
{{-- Navbar Components Bootstrap End --}}