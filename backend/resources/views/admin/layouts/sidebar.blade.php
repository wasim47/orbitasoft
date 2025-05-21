@include('admin.layouts.topbar')
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="./index.html" class="brand-link">
            <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light">Orbita Soft</span> </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="{{ route('admin.dashboard') }}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>

                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-image"></i>
                        <p>Banner<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('banner.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Banner List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('banner.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Banner</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-user-tie"></i>
                        <p>Client<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('clients.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Client List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('clients.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Client</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi fa fa-newspaper"></i>
                        <p>Content<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('contents.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Content List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contents.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Content</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-comment"></i>
                        <p>Customer Feedback<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('feedback.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Feedback List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('feedback.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Customer Feedback</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-question"></i>
                        <p>FAQ<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('faq.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>FAQ List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faq.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New FAQ</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-list"></i>
                        <p>Menu<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('menu.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Menu List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('menu.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Menu</p>
                            </a>
                        </li>

                    </ul>
                </li>

                

                

               
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-th"></i>
                        <p>Our Service<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('service.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Our Service List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('service.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Our Service</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-users"></i>
                        <p>Our Team<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('menu.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Feedback List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('menu.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Customer Feedback</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>Package Category<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> 
                            <a href="{{ route('package_category.index') }}" class="nav-link"> 
                                <i class="nav-icon bi bi-list"></i><p>Category List</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="{{ route('package_category.create') }}" class="nav-link"> 
                                <i class="nav-icon bi bi-plus-circle"></i><p>New Category</p>
                            </a> 
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>Package<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> 
                            <a href="{{ route('package.index') }}" class="nav-link"> 
                                <i class="nav-icon bi bi-list"></i><p>Package List</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="{{ route('package.create') }}" class="nav-link"> 
                                <i class="nav-icon bi bi-plus-circle"></i><p>New Package</p>
                            </a> 
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-portrait"></i>
                        <p>Portfolio<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('portfolio.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Portfolio List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('portfolio.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Portfolio</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-boxes"></i>
                        <p>Products<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('product.index') }}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Products List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product.create') }}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Products</p>
                            </a>
                        </li>

                    </ul>
                </li>

                

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-link"></i>
                        <p>Useful Links<i class="nav-arrow bi bi-chevron-right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('usefulllink.index')}}" class="nav-link">
                                <i class="nav-icon bi bi-list"></i>
                                <p>Useful Links List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('usefulllink.create')}}" class="nav-link">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>New Useful Links</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>