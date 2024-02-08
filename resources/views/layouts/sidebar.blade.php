<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Store <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a href="{{ route('products') }}" class="nav-link">
            <i class="fab fa-fw fa-product-hunt"></i>
            <span>Product</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="/profile" class="nav-link">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
    </li>

    <!-- divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- sidebar toggler (sidebar) -->
    <div class="text-center d-none d-nd-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>




</ul>