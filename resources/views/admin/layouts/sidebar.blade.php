<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar bg-dark">
        <a class="sidebar-brand " href="{{ route('homeadmin') }}">
            <img src="{{ asset('logo_komunitas') }}" alt="Logo" class="img-fluid d-block mx-auto mb-2"
                style="border-radius: 50%; width: 45px; height: 45px;">
            <h4 class="text-white text-center fw-bold">BIGBRAND</h5>
                <span class="align-middle">BIGBRAND ADMIN</span>
        </a>
        <ul class="sidebar-nav">
            {{-- dashboard --}}
            <li class="sidebar-item ">
                <a href="{{ route('homeadmin') }}" class="sidebar-link">
                    <i class="fa-solid fa-book-open"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>
            {{-- master --}}
            <li class="sidebar-item ">
                <a href="#master" data-bs-toggle="collapse" class="sidebar-link ">
                    <i class="fa-solid fa-database"></i>
                    <span class="align-middle">Master</span>
                    <i class="align-middle float-end toggle-icon" data-feather="chevron-right"></i>
                </a>

                <!-- Submenu -->
                <ul id="master" class="sidebar-dropdown list-unstyled collapse ">

                    <!-- Komunitas -->
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="">
                            <i class="align-middle" data-feather="users"></i>
                            <span class="align-middle">Komunitas</span>
                        </a>
                    </li>


                </ul>
            </li>
        </ul>
    </div>
</nav>
