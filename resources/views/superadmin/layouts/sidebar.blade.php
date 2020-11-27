<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ Auth::user()->merchant->merchant_name }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    @if (Auth::user()->role->role_name == "Superadmin")
    {{-- Master Data --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <div class="sidebar-heading">
        <span>Cafe</span>
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterData"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseMasterData" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master Data:</h6>
                <a class="collapse-item" href="{{route('merchants.index')}}">Merchants</a>
                <a class="collapse-item" href="{{route('roles.index')}}">Roles</a>
                <a class="collapse-item" href="{{route('units.index')}}">Units</a>
                <a class="collapse-item" href="{{route('users.index')}}">Users</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <div class="sidebar-heading">
        <span>CMS</span>
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterDataCMS"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master CMS</span>
        </a>
        <div id="collapseMasterDataCMS" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master CMS:</h6>
                <a class="collapse-item" href="javascript:void(0)">Banner</a>
                <a class="collapse-item" href="javascript:void(0)">Menu</a>
                <a class="collapse-item" href="javascript:void(0)">Sale</a>
                <a class="collapse-item" href="javascript:void(0)">Footer</a>
            </div>
        </div>
    </li>
    @endif


    @if (Auth::user()->role->role_name == "Superadmin")
    {{-- Menu Administrasi --}}
    <!-- Divider -->
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
