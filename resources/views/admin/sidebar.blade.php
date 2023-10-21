<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin.index')}}"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="active"><a class="nav-link" href="{{route('admin.index')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>
            <li class=""><a class="nav-link" href="{{route('admin.add.student')}}"><i class="fas fa-hand-point-right"></i> <span> Add Student </span></a></li>
            <li class=""><a class="nav-link" href="{{route('admin.view.student')}}"><i class="fas fa-hand-point-right"></i> <span> View Student </span></a></li>
            <li class=""><a class="nav-link" href="{{route('admin.add.exam')}}"><i class="fas fa-hand-point-right"></i> <span> Add Exam </span></a></li>
            <li class=""><a class="nav-link" href="{{route('admin.view.exam')}}"><i class="fas fa-hand-point-right"></i> <span> View Exam </span></a></li>
        </ul>
    </aside>
</div>