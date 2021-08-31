
<div class="container mt-2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Yf</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{($title === 'Home | Page') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{($title === 'About | Page') ? 'active' : ''}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{($title === 'Blog | Page') ? 'active' : ''}}" href="/blog">Blog</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
</div>