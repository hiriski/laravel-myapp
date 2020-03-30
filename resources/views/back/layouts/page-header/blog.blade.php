<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">

            <div id="page-header">
                <div class="page-header-inner">

                    <!-- Toggle Sidebar -->
                    <button class="btn" id="btnToggleSidebar">
                        <span><i class="material-icons">arrow_back</i></span>
                    </button>
                    
                    <nav class="navbar navbar-expand-md navbar-light">
                    @isset($pageTitle)
                        <a href="#" class="navbar-brand">{{ ucfirst($pageTitle) }}</a>
                        @else()
                        <a href="#" class="navbar-brand">Blog<a>
                    @endisset
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-toggle="#navbarPageHeader">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbarPageHeader" class="collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item {{ Route::getCurrentRoute()->uri === "admin/blog" ? 'active' : '' }}">
                                    <a href="{{ route('admin.blog.index') }}" class="nav-link">Blog All</a>
                                </li>
                                <li class="nav-item {{ Route::getCurrentRoute()->uri === "admin/blog/create" ? 'active' : '' }}">
                                    <a href="{{ route('admin.blog.create') }}" class="nav-link">Create new</a>
                                </li>
                                <li class="nav-item {{ Route::getCurrentRoute()->uri === "admin/blog/draft" ? 'active' : '' }}">
                                    <a href="" class="nav-link">Drafts</a>
                                </li>
                                <li class="nav-item {{ Route::getCurrentRoute()->uri === "admin/blog/trash" ? 'active' : '' }}">
                                    <a href="" class="nav-link">Trash</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" id="navbarDropDown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a href="" class="dropdown-item">Dropdown menu 1</a>
                                        <a href="" class="dropdown-item">Dropdown menu 2</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">Dropdown menu 3</a>
                                        <a href="" class="dropdown-item">Dropdown menu 4</a>
                                    </div>
                                </li>
                            </ul>
                            <form action="" class="form-inline my-2 my-lg-0">
                                <input type="search" placeholder="Search blog" class="form-control mr-sm-2">
                                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>