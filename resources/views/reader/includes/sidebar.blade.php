<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widjet="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('reader.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p class="ml-1">
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('reader.user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p class="ml-1">
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('reader.department.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-building"></i>
                    <p class="ml-1">
                        Отделы
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('reader.position.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-building-user"></i>
                    <p class="ml-1">
                        Должности
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
