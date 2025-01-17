<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Offcanvas Toggle Button -->
        <button class="btn btn-white ms-0" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"> <i class="bi bi-list"
                style="font-size: 30px;"></i> </button>

        <!-- Brand -->
        <a class="navbar-brand ms-2" href="{{ route('welcome') }}">
            <i class="bi bi-threads me-2"></i>Thread
        </a>

        <!-- Navbar Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown bar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another Action</a></li>
                        <li><a class="dropdown-item" href="#">Something Here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-start" style="width: 250px;" data-bs-scroll="true" tabindex="-1"
    id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <hr>
    <div class="offcanvas-body">
        <div class="d-flex flex-column">
            <a href="{{ route('welcome') }}" class="btn btn-outline-secondary d-flex align-items-center mb-2">
                <i class="bi bi-house-fill" style="font-size: 30px;"></i>
                <span class="mx-3">Home</span>
            </a>
            
            <a href="{{ route('table') }}" class="btn btn-outline-secondary d-flex align-items-center mb-2">
                <i class="bi bi-table" style="font-size: 30px;"></i>
                <span class="mx-3">Table</span>
            </a>
            
            <a href="{{ route('form') }}" class="btn btn-outline-secondary d-flex align-items-center mb-2">
                <i class="bi bi-table" style="font-size: 30px;"></i>
                <span class="mx-3">Table 1</span>
            </a>
            
            <a href="#" class="btn btn-outline-secondary d-flex align-items-center mb-2">
                <i class="bi bi-gear" style="font-size: 30px;"></i>
                <span class="mx-2">Settings</span>
            </a>

            <a href="#" class="btn btn-outline-secondary d-flex align-items-center mb-2">
                <i class="bi bi-box-arrow-right" style="font-size: 30px;"></i>
                <span class="mx-1">Logout</span>
            </a>

        </div>
    </div>
</div>
