<div class="dashboard_sidebar_menu dn-992">
    <ul class="sidebar-menu">
        <li class="title pt30 pb30"><span>Main</span></li>
        <li class="treeview"><a href="{{url('/admin')}}"><i class="flaticon-layers"></i><span> Dashboard</span></a></li>
        <li class="title"><span>Manage Property</span></li>
        <li><a href="{{url('property')}}"><i class="flaticon-home"></i> <span> All Property</span></a></li>
        <li class="title"><span>Manage Account</span></li>
        <li><a href="{{route('property.create')}}"><i class="flaticon-user"></i> <span>My Profile</span></a></li>

        <li class="title"><span>Manage Property Location</span></li>
        <li><a href="{{route('location.create')}}"><i class="flaticon-street-view"></i> <span>View Locations</span></a></li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="flaticon-logout"></i> <span>{{ __('Logout') }}</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </li>
    </ul>
</div>
