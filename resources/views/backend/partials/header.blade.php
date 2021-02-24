<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        @if(auth()->user())
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{route('admin.profile')}}"><span data-feather="user"></span> {{auth()->user()->name}}</a>
        @else
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company Name</a>
        @endif
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            @if(auth()->user())
                <a class="nav-link" href="{{route('admin.logout')}}">Signout</a>
            @else
                <a class="nav-link" style="display: inline" href="{{route('admin.login')}}">Signin</a> <span style="color: lightgray">||</span>
                <a class="nav-link" style="display: inline" href="#">Signup</a>
            @endif
        </li>
    </ul>
</header>

