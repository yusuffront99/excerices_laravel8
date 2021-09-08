    <div class="container-fluid mt-2">
        <ul class="nav nav-tabs bg-dark px-2 py-2">
            <li class="nav-item">
                <a class="nav-link {{($title === 'home') ? 'active' : ''}} " aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($title === 'about') ? 'active' : ''}}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{($title === 'blogs') ? 'active' : ''}}" href="/posts">My Blogs</a>
            </li>
        </ul>
    </div>
