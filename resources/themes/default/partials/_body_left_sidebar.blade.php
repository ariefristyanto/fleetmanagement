<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            @if (Auth::check())
                <div class="pull-left image">
                    <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg",env('SSL',false)) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->full_name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            @endif
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ route('dashboard') }}"><i class='fa fa-bar-chart'></i> <span>Dashboard</span></a></li>

            @can('menu-vehicle')
                <li><a href="#"><i class='fa fa-truck'></i> <span>Vehicles</span></a></li>
            @endcan

            @can('menu-user')
                <li><a href="{{ route('users.index') }}"><i class='fa fa-user'></i> <span>Users</span></a></li>
            @endcan

            <li class="treeview">
                <a href="#"><i class='fa fa-cog'></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
                @can('menu-company')
                    <ul class="treeview-menu">
                        <li class="treeview">
                          <a href="{{ route('company.show')  }}"><i class='fa fa-building'> </i> Company</a>
                        </li>
                    </ul>
                @endcan
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
