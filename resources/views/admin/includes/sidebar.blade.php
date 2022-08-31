<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('main.index')}}" class="brand-link" target="_blank">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Открыть сайт</span>
    </a>
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.main.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Главная</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Категории</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.post.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>Статьи</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tag.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>Теги</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Пользователи</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.main.index')}}" class="nav-link" target="_blank">
                    <i class="nav-icon fas fa-person-booth"></i>
                    <p>Персональный кабинет</p>
                </a>
            </li>
        </ul>
    </div>
    </aside>
