<x-layout>

    <div id="main" class="layout-column flex">
        <x-header/>
        <!-- ############ Footer END--><!-- ############ Content START-->
        <div id="content" class="flex"><!-- ############ Main START-->
            <div class="d-flex flex fixed-content">
                <div class="fade aside aside-sm" id="content-aside">
                    <div class="modal-dialog d-flex flex-column w-md bg-body" id="mail-nav">
                        <div class="navbar"><span class="text-md">Email</span></div>
                        <div class="scrollable hover">
                            <div class="p-2 px-3"><button
                                    class="btn btn-sm btn-block box-shadows btn-rounded gd-danger text-white"
                                    id="btn-new-mail">New mail</button></div>
                            <div class="sidenav my-3">
                                <nav class="nav-active-text-primary" data-nav>
                                    <ul class="nav">
                                        {{-- <li><a href="/email#inbox"><span class="nav-icon"><i
                                                        data-feather="archive"></i> </span><span
                                                    class="nav-text">Inbox</span> <span class="nav-badge"><b
                                                        class="badge badge-pill gd-info">9</b></span></a>
                                        </li> --}}
                                        <li>
                                            <a href="/email#sent"><span class="nav-icon"><i
                                                        data-feather="send"></i> </span><span
                                                    class="nav-text">Sent</span> <span class="nav-badge"><b
                                                        class="badge badge-pill gd-danger">10</b></span></a>
                                        </li>
                                        <li><a href="/email#draft"><span class="nav-icon"><i
                                                        data-feather="edit-2"></i> </span><span
                                                    class="nav-text">Draft</span></a></li>
                                        <li><a href="/email#trash"><span class="nav-icon"><i
                                                        data-feather="trash-2"></i> </span><span
                                                    class="nav-text name">Trash</span></a></li>
                                        <li class="nav-header d-flex">
                                            {{-- <div class="py-2 text-muted">Labels</div><span class="flex"></span>
                                            <div class="dropdown dropleft"><button data-toggle="dropdown"
                                                    class="btn btn-sm btn-icon no-shadow no-bg"><i
                                                        data-feather="plus"></i></button>
                                                <div class="dropdown-menu w">
                                                    <div class="p-3">
                                                        <div class="input-group"><input type="text"
                                                                class="form-control form-control-sm" id="newField"
                                                                placeholder="New label" required> <span
                                                                class="input-group-append"><button
                                                                    class="btn btn-white no-shadow btn-sm"
                                                                    type="button" id="newBtn"><i
                                                                        data-feather="check"></i></button></span></div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aside-deck hide" id="mail-deck">
                    <div class="card card-origin alert p-0 m-0 b-a hide">
                        <div class="card-header d-flex align-items-center bg-body">
                            <div class="flex h-1x mx-1 mail-to">New mail</div>
                            <div class="ml-auto no-wrap"><a class="p-1"><span><i data-feather="arrow-right"
                                            width="12" height="12"></i> </span></a><a class="p-1 text-muted"
                                    data-toggle-class="card-hide-body" data-target=".card"
                                    data-target-closest="true"><i data-feather="minus" width="12"
                                        height="12"></i> </a><a class="p-1 text-muted" data-dismiss="alert"><i
                                        data-feather="x" width="12" height="12"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-2"><input type="text" class="form-control"
                                        placeholder="Recipients"></div>
                                <div><input type="text" class="form-control" placeholder="Subject"></div>
                                <div class="note-editor-inline">
                                    <textarea class="form-control summernote">
	                      </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex" id="content-body">
                    <div class="d-flex flex-column flex" id="mail-list" data-plugin="mail">
                        <div class="p-3">
                            <div class="toolbar">
                                <div class="btn-group"><button class="btn btn-sm btn-icon btn-white"
                                        data-toggle="tooltip" title="Trash" id="btn-trash"><i data-feather="trash"
                                            class="text-muted"></i></button> <button
                                        class="btn btn-sm btn-icon btn-white sort" data-sort="item-title"
                                        data-toggle="tooltip" title="Sort"><i class="sorting"></i></button></div>
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
                                @foreach ($myMessages as $message)                                    
                                <div class="list-item" data-id="17">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="17"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#17"><span class="w-40 avatar gd-warning"
                                                data-toggle-class="loading">H</span></a></div>

                                    <div class="flex"><a href="app.mail.detail.html#17"
                                            class="item-title text-color h-1x"> {{$message->subject}} </a>
                                        <div class="item-except text-muted text-sm h-1x">{{ $message->body }}</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">{{$message->created_at->shortRelativeDiffForHumans()}}</div>
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