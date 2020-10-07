<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion toggled" style="background-color: #499bea;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-fw fa-balance-scale" style="color: white;"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-gray-900">{{ config('app.name', 'Laravel') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt" style="color: white;"></i>
            <span class="text-white">Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Action Goods
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog" style="color: white;"></i>
            <span class="text-white">Action</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-gray-700">Action :</h6>
                <a class="collapse-item" href="{{ route('viewgoods')}}"><i class="fas fa-fw fa-eye mr-2" style="color: blue;"></i> View Goods</a>
                <a class="collapse-item" href="cards.html"><i class="fas fa-fw fa-th-large mr-2" style="color: brown;"></i> VIew Catalogue</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        User <br> Action
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-user-friends" style="color: white;"></i>
            <span class="text-white">User</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-gray-700">List User :</h6>
                <a class="collapse-item" href=""><i class="fas fa-fw fa-eye mr-2" style="color: blue;"></i> View User</a>
                <a class="collapse-item" href="cards.html"><i class="fas fa-fw fa-users-cog mr-2" style="color: brown;"></i> User Overview</a>
            </div>
        </div>
    </li>

</ul>
<!-- End of Sidebar -->
