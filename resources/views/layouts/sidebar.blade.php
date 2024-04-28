<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
    <div class="position-sticky">
        <ul class="nav flex-column mt-3">
            <!-- Add appropriate classes for sidebar links -->
            <li class="nav-item">
                <a href="#" class="nav-link">Link 1</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link bg-light">Link 2</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Link 3</a>
            </li>
            <!-- Adjusted the logout button for better visual appeal -->
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-block">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
