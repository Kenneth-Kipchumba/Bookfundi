<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('') }}" class="brand-link">
        <img src="{{ asset('assets/images/brand.jpeg') }}" alt="BFL" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            {{ config('app.name') ?? 'BFL Backend' }}
        </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="{{ asset('assets/images/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block">{{ auth()->user()->last_name ?? '' }}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fa-solid fa-lock"></i>
                    <p>
                    User Management
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa-solid fa-person-circle-exclamation"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fa-solid fa-lock"></i>
                    <p>
                    Caselaws
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Case Index</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
            <i class="nav-icon fa-solid fa-book"></i>
            <p>
            Attributes
            <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('backend.courts.index') }}" class="nav-link active">
                        <i class="fas fa-landmark nav-icon"></i>
                        <p>Courts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.judges.index') }}" class="nav-link">
                        <i class="fas fa-gavel nav-icon"></i>
                        <p>Judges</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.firms.index') }}" class="nav-link">
                        <i class="fas fa-building nav-icon"></i>
                        <p>Law Firms</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.advocates.index') }}" class="nav-link">
                        <i class="fas fa-user-tie nav-icon"></i>
                        <p>Advocates</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.magistrates.index') }}" class="nav-link">
                        <i class="fas fa-gavel nav-icon"></i>
                        <p>Magistrates</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.subjects.index') }}" class="nav-link">
                        <i class="fa-solid fa-align-left nav-icon"></i>
                        <p>Subject</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.specializations.index') }}" class="nav-link">
                        <i class="fa-solid fa-users-viewfinder nav-icon"></i>
                        <p>Specializations</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.parties.index') }}" class="nav-link">
                        <i class="fa-solid fa-users-rectangle nav-icon"></i>
                        <p>Parties</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.citations.index') }}" class="nav-link">
                        <i class="fa-solid fa-book-bookmark nav-icon"></i>
                        <p>Citation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.outcomes.index') }}" class="nav-link">
                        <i class="fa-solid fa-book-open-reader nav-icon"></i>
                        <p>Outcomes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('backend.decisions.index') }}" class="nav-link">
                        <i class="fa-solid fa-book-open nav-icon"></i>
                        <p>Decisions</p>
                    </a>
                </li>
            </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fa-solid fa-border-all"></i>
                    <i class=""></i>
                    <p>
                    Other Attributes
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.countries.index') }}" class="nav-link">
                            <i class="nav-icon fa-solid fa-flag"></i>
                            <p>Countries</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.counties.index') }}" class="nav-link">
                            <i class="nav-icon fa-solid fa-location-crosshairs"></i>
                            <p>County/Province/State</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.towns.index') }}" class="nav-link active">
                            <i class="nav-icon fa-solid fa-location-dot"></i>
                            <p>Towns/Cities</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
</aside>