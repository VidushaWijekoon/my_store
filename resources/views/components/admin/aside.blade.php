<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('category.create') }}">
                        <i class="bi bi-circle"></i><span>Add Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}">
                        <i class="bi bi-circle"></i><span>View Category</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ route('brands') }}">
                <i class="bi bi-menu-button-wide"></i>
                <span>Brands</span>
            </a>
        </li>

        <!-- End Register Page Nav -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('colors.index') }}">
                <i class="bi bi-paint-bucket"></i>
                <span>Color</span>
            </a>
        </li>
        <!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Products</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('products.create') }}">
                        <i class="bi bi-circle"></i><span>Create Products</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}">
                        <i class="bi bi-circle"></i><span>View Products</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <!-- End Register Page Nav -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sliders.index') }}">
                <i class="bi bi-sliders2"></i>
                <span>Home Slider</span>
            </a>
        </li>
        <!-- End Register Page Nav -->



        <li class="nav-heading">Pages</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('frontend.homepage.index') }}">
                <i class="fa-solid fa-home"></i>
                <span>Front Home Page</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->