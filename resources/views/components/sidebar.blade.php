<aside class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="menu-title">
                    <span>Main menu</span>
                </li>   
                <li>
                    <a href="{{ route('home') }}" class="">
                        <span data-feather="home" class="nav-icon"></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                   
                </li>

                
                <li>
                    <a href="{{ route('admin.index') }}" class="">
                        <span data-feather="user-check" class="nav-icon"></span>
                        <span class="menu-text">Admin</span>
                    </a>
                </li>
      
            
            </ul>
        </div>
    </div>
</aside>