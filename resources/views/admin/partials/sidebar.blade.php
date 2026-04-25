<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.projects.index')}}">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title">Projects</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.widgets')}}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Widgets</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.contacts')}}">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Contacts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.settings')}}">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Basic Elements</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>