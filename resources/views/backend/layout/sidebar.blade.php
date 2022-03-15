
<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="{{ url('') }}" class="brand-link">
    <img src="{{ asset('assets/images/brand.jpeg') }}" alt="BFL" class="brand-image elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">
        {{ config('app.name') ?? 'BFL Backend' }}
    </span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{ asset('assets/images/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">User Name</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Menu
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Appellants</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link active">
<i class="fas fa-landmark nav-icon"></i>
<p>Courts</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="fas fa-gavel nav-icon"></i>
<p>Judges</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="fas fa-building nav-icon"></i>
<p>Law Firms</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Lawyers</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Magistrates</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Respondents</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Simple Link
<span class="right badge badge-danger">New</span>
</p>
</a>
</li>
</ul>
</nav>

</div>

</aside>