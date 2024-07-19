<x-layout>

    <div id="main" class="layout-column flex"><!-- ############ Header START-->
        <x-header/>
        
        <!-- ############ Footer END--><!-- ############ Content START-->
        <div id="content" class="flex"><!-- ############ Main START-->
            <div class="d-flex flex fixed-content">
                {{-- <div class="fade aside aside-sm" id="content-aside">
                    <div class="modal-dialog d-flex flex-column w-md bg-body" id="user-nav">
                        <div class="navbar"><span class="text-md mx-2">Groups</span>
                            <div class="dropdown dropright"><button data-toggle="dropdown"
                                    class="btn btn-sm btn-icon no-bg no-shadow"><i data-feather="plus"></i></button>
                                <div class="dropdown-menu w-lg">
                                    <div class="p-3">
                                        <div class="input-group"><input type="text"
                                                class="form-control form-control-sm" id="newField"
                                                placeholder="Group name" required> <span
                                                class="input-group-append"><button
                                                    class="btn btn-white no-shadow btn-sm" type="button"
                                                    id="newBtn"><i data-feather="check"></i></button></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scrollable hover">
                            <div class="sidenav p-2">
                                <nav class="nav-active-text-primary" data-nav>
                                    <ul class="nav">
                                        <li><a href="app.user.html#all"><span class="nav-text">All</span> <span
                                                    class="nav-badge"><b
                                                        class="badge badge-sm badge-pill gd-danger">15</b></span></a>
                                        </li>
                                        <li><a href="app.user.html#company"><span class="nav-text">Company</span>
                                                <span class="nav-badge"><b
                                                        class="badge badge-sm badge-pill gd-info">3</b></span></a></li>
                                        <li><a href="app.user.html#personal"><span
                                                    class="nav-text">Personal</span></a></li>
                                        <li><a href="app.user.html#team"><span class="nav-text">Team</span></a></li>
                                        <li class="nav-header hidden-folded mt-2"><span
                                                class="d-block pt-1 text-sm text-muted">Tags</span></li>
                                        <li><a href="app.user.html#client"><span class="mx-2"><b
                                                        class="badge badge-circle sm text-primary"></b> </span><span
                                                    class="nav-text">Clients</span></a></li>
                                        <li><a href="app.user.html#supplier"><span class="mx-2"><b
                                                        class="badge badge-circle sm text-info"></b> </span><span
                                                    class="nav-text">Suppliers</span></a></li>
                                        <li><a href="app.user.html#competitor"><span class="mx-2"><b
                                                        class="badge badge-circle sm text-success"></b> </span><span
                                                    class="nav-text">Competitors</span></a></li>
                                        <li><a href="app.user.html#corp"><span class="mx-2"><b
                                                        class="badge badge-circle sm text-warning"></b> </span><span
                                                    class="nav-text">Corps</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div><!-- / -->
                    </div>
                </div> --}}
                <div class="d-flex flex" id="content-body">
                    <div class="d-flex flex-column flex" id="user-list" data-plugin="user">
                        <div class="p-3">
                            <div class="toolbar">
                                <div class="btn-group"><button class="btn btn-sm btn-icon btn-white"
                                        data-toggle="tooltip" title="Trash" id="btn-trash"><i data-feather="trash"
                                            class="text-muted"></i></button> <button
                                        class="btn btn-sm btn-icon btn-white sort" data-sort="item-author"
                                        data-toggle="tooltip" title="Sort"><i class="sorting"></i></button></div>
                                <div class="dropdown"><button class="btn btn-sm btn-white no-wrap"
                                        data-toggle="dropdown">A-Z</button>
                                    <div class="dropdown-menu p-3" id="filter"><span
                                            class="badge pointer">A</span> <span class="badge pointer">B</span> <span
                                            class="badge pointer">C</span> <span class="badge pointer">D</span> <span
                                            class="badge pointer">E</span> <span class="badge pointer">F</span> <span
                                            class="badge pointer">G</span> <span class="badge pointer">H</span> <span
                                            class="badge pointer">I</span> <span class="badge pointer">J</span> <span
                                            class="badge pointer">K</span> <span class="badge pointer">L</span> <span
                                            class="badge pointer">M</span> <span class="badge pointer">N</span> <span
                                            class="badge pointer">O</span> <span class="badge pointer">P</span> <span
                                            class="badge pointer">Q</span> <span class="badge pointer">R</span> <span
                                            class="badge pointer">S</span> <span class="badge pointer">T</span> <span
                                            class="badge pointer">U</span> <span class="badge pointer">V</span> <span
                                            class="badge pointer">W</span> <span class="badge pointer">X</span> <span
                                            class="badge pointer">Y</span> <span class="badge pointer">Z</span></div>
                                </div>
                                <form class="flex">
                                    <div class="input-group"><input type="text"
                                            class="form-control form-control-theme form-control-sm search"
                                            placeholder="Search" required> <span class="input-group-append"><button
                                                class="btn btn-white no-border btn-sm" type="button"><span
                                                    class="d-flex text-muted"><i
                                                        data-feather="search"></i></span></button></span></div>
                                </form><button data-toggle="modal" data-target="#content-aside" data-modal
                                    class="btn btn-sm btn-icon btn-white d-md-none"><i
                                        data-feather="menu"></i></button>
                            </div>
                        </div>
                        <div class="scroll-y mx-3 mb-0 card">
                            <div class="loadings m-4"></div>
                            <div class="list list-row hides">

                            {{-- <div class="list-item" data-id="7">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="7"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="bookmark"
                                                class="active-primary text-muted"></i></a></div>
                                    <div><a href="app.user.detail.html#7"><span class="w-40 avatar gd-primary"
                                                data-toggle-class="loading"><span
                                                    class="avatar-status on b-white avatar-right"></span> <img
                                                    src="../assets/img/a7.jpg" alt="."></span></a></div>
                                    <div class="flex"><a href="app.user.detail.html#7"
                                            class="item-author text-color">Frank Kelley</a>
                                        <div class="item-mail text-muted h-1x d-none d-sm-block">
                                            frank-kelley@lostcorp.com</div>
                                        <div class="item-tag tag hide">
                                            Suppliers,Work,Clients,Company,Team,Personal,Partners,Friends</div>
                                    </div>
                                    <div>
                                        <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                class="text-muted"><i data-feather="more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"><a
                                                    class="dropdown-item" href="#">See detail </a><a
                                                    class="dropdown-item download">Download </a><a
                                                    class="dropdown-item edit">Edit</a>
                                                <div class="dropdown-divider"></div><a
                                                    class="dropdown-item trash">Delete item</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="1">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="1"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="bookmark"
                                                class="active-primary text-muted"></i></a></div>
                                    <div><a href="app.user.detail.html#1"><span class="w-40 avatar gd-primary"
                                                data-toggle-class="loading"><span
                                                    class="avatar-status on b-white avatar-right"></span> <img
                                                    src="../assets/img/a1.jpg" alt="."></span></a></div>
                                    <div class="flex"><a href="app.user.detail.html#1"
                                            class="item-author text-color">Joyce McCoy</a>
                                        <div class="item-mail text-muted h-1x d-none d-sm-block">
                                            joyce-mccoy@samsuminc..com</div>
                                        <div class="item-tag tag hide">
                                            Team,Suppliers,Work,Partners,Personal,Friends,Company,Clients</div>
                                    </div>
                                    <div>
                                        <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                class="text-muted"><i data-feather="more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"><a
                                                    class="dropdown-item" href="#">See detail </a><a
                                                    class="dropdown-item download">Download </a><a
                                                    class="dropdown-item edit">Edit</a>
                                                <div class="dropdown-divider"></div><a
                                                    class="dropdown-item trash">Delete item</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="2">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="2"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="bookmark"
                                                class="active-primary text-muted"></i></a></div>
                                    <div><a href="app.user.detail.html#2"><span class="w-40 avatar gd-primary"
                                                data-toggle-class="loading"><span
                                                    class="avatar-status off b-white avatar-right"></span> <img
                                                    src="../assets/img/a2.jpg" alt="."></span></a></div>
                                    <div class="flex"><a href="app.user.detail.html#2"
                                            class="item-author text-color">Kathy Alexander</a>
                                        <div class="item-mail text-muted h-1x d-none d-sm-block">
                                            kathy-alexander@microsoft.com</div>
                                        <div class="item-tag tag hide">
                                            Friends,Suppliers,Team,Company,Clients,Personal,Work,Partners</div>
                                    </div>
                                    <div>
                                        <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                class="text-muted"><i data-feather="more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"><a
                                                    class="dropdown-item" href="#">See detail </a><a
                                                    class="dropdown-item download">Download </a><a
                                                    class="dropdown-item edit">Edit</a>
                                                <div class="dropdown-divider"></div><a
                                                    class="dropdown-item trash">Delete item</a>
                                            </div>
                                        </div>
                                    </div>
                            </div> --}}

                                @foreach ($get_users as $user)
                                    <div class="list-item" data-id="17">
                                        <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                    value="17"> <i></i></label></div>
                                        <div><a href="#" data-toggle-class><i data-feather="bookmark"
                                                    class="active-primary text-muted"></i></a></div>
                                        <div><a href="app.user.detail.html#17"><span class="w-40 avatar gd-warning"
                                                    data-toggle-class="loading"><span
                                                        class="avatar-status on b-white avatar-right"></span> A</span></a>
                                        </div>
                                        <div class="flex"><a href="app.user.detail.html#17"
                                                class="item-author text-color">{{ $user->name}}</a>
                                            <div class="item-mail text-muted h-1x d-none d-sm-block"> {{ $user->email }}</div>
                                            <div class="item-tag tag hide">
                                                Suppliers,Team,Personal,Friends,Company,Work,Partners,Clients</div>
                                        </div>
                                        <div>
                                            <div class="item-action dropdown"><a href="#" data-toggle="dropdown"
                                                    class="text-muted"><i data-feather="more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"><a
                                                        class="dropdown-item" href="#">See detail </a><a
                                                        class="dropdown-item download">Download </a><a
                                                        class="dropdown-item edit">Edit</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item trash">Delete item</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                        </div>
                        <div class="px-3 py-3 mt-auto">
                            <div class="d-flex align-items-center">
                                <div class="flex d-flex flex-row"><button
                                        class="btn btn-sm no-bg no-shadow px-0 pager-prev"><i
                                            data-feather="chevron-left"></i></button>
                                    <div class="pagination pagination-sm mx-1"></div><button
                                        class="btn btn-sm no-bg no-shadow px-0 pager-next"><i
                                            data-feather="chevron-right"></i></button>
                                </div>
                                <div><span class="text-muted">Total:</span> <span id="count"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ############ Main END-->
        </div><!-- ############ Content END--><!-- ############ Footer START-->
        <div id="footer" class="page-footer hide">
            <div class="d-flex p-3"><span class="text-sm text-muted flex">&copy; Copyright. flatfull.com</span>
                <div class="text-sm text-muted">Version 1.1.2</div>
            </div>
        </div><!-- ############ Footer END-->
    </div>
</x-layout>