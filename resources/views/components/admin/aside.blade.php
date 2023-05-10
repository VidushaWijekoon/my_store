<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard.index') }}">
                <i class="fa-solid fa-grip"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-sitemap"></i><span>Category</span><i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('category.create') }}">
                        <i class="fa-regular fa-circle"></i><span>Add Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.store') }}">
                        <i class="fa-regular fa-circle"></i><span>View Category</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#products" data-bs-toggle="collapse" href="#">
                <i class="fa-brands fa-product-hunt"></i><span>Products</span><i
                    class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="products" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('product.create') }}">
                        <i class="fa-regular fa-circle"></i><span>Add Products</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('product.index') }}">
                        <i class="fa-regular fa-circle"></i><span>View Products</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('brands') }}">
                <i class="fa-solid fa-fill-drip"></i>
                <span>Brands</span>
            </a>
        </li>
        <!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('colors.index') }}">
                <i class="fa-brands fa-bandcamp"></i>
                <span>Colors</span>
            </a>
        </li>
        <!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('sliders.index') }}">
                <i class="fa-solid fa-hill-rockslide"></i>
                <span>Home Slider</span>
            </a>
        </li>
        <!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-users-gear"></i><span>Users</span><i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle"></i><span>View Users</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('register') }}"><i class="fa-solid fa-newspaper"></i>{{
                __('Register') }}</a>
        </li>
        <!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-right-to-bracket"></i></i>{{ __('Sign Out') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->