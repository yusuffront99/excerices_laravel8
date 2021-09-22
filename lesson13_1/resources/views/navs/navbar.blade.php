<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{($active === 'home') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link {{($active === 'login') ? 'active' : ''}}" aria-current="page" href="/login"><i class="bi bi-arrow-return-right"></i> Login</a>
            </li>
        </ul>
    </div>
</div>
</nav>