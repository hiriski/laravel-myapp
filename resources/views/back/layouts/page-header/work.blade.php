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
                        <a href="#" class="navbar-brand">Work<a>
                    @endisset
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-toggle="#navbarPageHeader">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbarPageHeader" class="collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item {{ Route::getCurrentRoute()->uri === "admin/work" ? 'active' : '' }}">
                                    <a href="{{ route('admin.work.index') }}" class="nav-link">All Works</a>
                                </li>
                                <li class="nav-item {{ Route::getCurrentRoute()->uri === "admin/work/create" ? 'active' : '' }}">
                                    <a href="{{ route('admin.work.create') }}" class="nav-link">Create new</a>
                                </li>
                                <li class="nav-item {{ Route::getCurrentRoute()->uri === "admin/work/status/published" ? 'active' : '' }}">
                                    <a href="" class="nav-link">Published</a>
                                </li>
                                <li class="nav-item {{ Route::getCurrentRoute()->uri === "admin/blog/status/private" ? 'active' : '' }}">
                                    <a href="" class="nav-link">Private</a>
                                </li>
                            </ul>
                            <form action="" class="form-inline my-2 my-lg-0">
                                <input type="search" placeholder="Search works.." class="form-control mr-sm-2">
                                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>