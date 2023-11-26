@section('sidebar')
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ ($pagename == 'dashboard') ? 'active' : ''}}" aria-current="page" href="/thing1">
                    <span data-feather="home"></span>
                    Thing 1 and Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($pagename == 'thing2') ? 'active' : ''}}" href="/thing2">
                    <span data-feather="crosshair"></span>
                    Thing 2
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($pagename == 'sipusername') ? 'active' : ''}}" href="/thing3">
                    <span data-feather="user"></span>
                    Thing 3
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"> <span>Tools</span> </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ ($pagename == 'tool1') ? 'active' : ''}}" href="/tool1">
                    <span data-feather="activity"></span>
                    Tool 1
                </a>
            </li>
        </ul>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ ($pagename == 'tool2') ? 'active' : ''}}" href="/tool2">
                    <span data-feather="dollar-sign"></span>
                    Tool 2
                </a>
            </li>
        </ul>
    </div>
</nav>
@endsection