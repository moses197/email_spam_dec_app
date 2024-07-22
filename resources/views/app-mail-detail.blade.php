<x-layout>


<!-- ############ Aside END-->
    <div id="main" class="layout-column flex"><!-- ############ Header START-->
    <x-header/>
        
        <!-- ############ Footer END--><!-- ############ Content START-->
        <div id="content" class="flex"><!-- ############ Main START-->
            <div class="d-flex flex fixed-content">
                {{-- <div class="fade aside aside-sm" id="content-aside">
                    <div class="modal-dialog d-flex flex-column w-md bg-body" id="mail-nav">
                        <div class="navbar"><span class="text-md">Email</span></div>
                        <div class="scrollable hover">
                            <div class="p-2 px-3"><button
                                    class="btn btn-sm btn-block box-shadows btn-rounded gd-danger text-white"
                                    id="btn-new-mail">New mail</button></div>
                            <div class="sidenav my-3">
                                <nav class="nav-active-text-primary" data-nav>
                                    <ul class="nav">
                                        <li><a href="app.mail.html#inbox"><span class="nav-icon"><i
                                                        data-feather="archive"></i> </span><span
                                                    class="nav-text">Inbox</span> <span class="nav-badge"><b
                                                        class="badge badge-pill gd-info">8</b></span></a></li>
                                        <li><a href="app.mail.html#sent"><span class="nav-icon"><i
                                                        data-feather="send"></i> </span><span
                                                    class="nav-text">Sent</span> <span class="nav-badge"><b
                                                        class="badge badge-pill gd-danger">6</b></span></a></li>
                                        <li><a href="app.mail.html#draft"><span class="nav-icon"><i
                                                        data-feather="edit-2"></i> </span><span
                                                    class="nav-text">Draft</span></a></li>
                                        <li><a href="app.mail.html#trash"><span class="nav-icon"><i
                                                        data-feather="trash-2"></i> </span><span
                                                    class="nav-text name">Trash</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                    <div class="d-flex flex-column flex" data-plugin="mail">
                        <div class="navbar">
                            <div class="d-none d-md-flex align-items-center"><span class="avatar w-32"><img
                                        class="circle w-32" src="../assets/img/a1.jpg" alt="."></span><span
                                    class="mx-2"><span class="text-muted">from </span><a href="#">Jacqueline
                                        Reid</a> <span class="text-xs text-muted">on 1:20 23/06</span></span></div><a
                                href="app.mail.html" class="d-md-none btn-go-back btn btn-sm bg-white"><i
                                    data-feather="arrow-left"></i> </a><span class="flex"></span>
                            <ul class="nav no-border">
                                <li class="nav-item"><a class="nav-link px-2" id="btn-reply-mail"
                                        data-toggle="tooltip" data-placement="bottom" title="Reply"><i
                                            data-feather="corner-up-left"></i></a></li>
                                <li class="nav-item"><a class="nav-link px-2" data-toggle="tooltip"
                                        data-placement="bottom" title="Delete"><i data-feather="trash"></i></a></li>
                                <li class="nav-item dropdown"><a class="nav-link px-2 dropdown-toggle no-border"
                                        data-toggle="dropdown" title="Label"><i data-feather="tag"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu"><a
                                            class="dropdown-item"><i class="badge badge-circle xs text-primary"></i>
                                            Workshop </a><a class="dropdown-item"><i
                                                class="badge badge-circle xs text-info"></i> Enterprise </a><a
                                            class="dropdown-item"><i class="badge badge-circle xs text-success"></i>
                                            Personal </a><a class="dropdown-item"><i
                                                class="badge badge-circle xs text-warning"></i> Private</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item"><i
                                                data-feather="plus"></i> Create new label</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="scroll-y mx-3 mb-3 card">
                            <div class="p-3 px-md-5 py-md-4">
                                <h2 class="mb-3 text-highlight">The spectacle before us was indeed sublime.</h2>
                                <div class="text-sm l-h-2x">
                                    <p>Hello,</p>
                                    <p>Mauris, metus consequat risus ornare sagittis eu convallis adipiscing lacus,
                                        felis eget sem congue ut dolor adipiscing tortor egestas enim justo gravida
                                        gravida a, non sed amet, risus malesuada cursus enim vel, nunc, purus id elit
                                        odio odio et in nisl vitae, volutpat augue mi feugiat sollicitudin eget congue
                                        maecenas orci, vitae sem eu vel</p>
                                    <blockquote class="bg-white bg-primary--lt p-3 r"><em>Ornare eget ut pharetra
                                            dictum sit iaculis pellentesque mattis venenatis enim eu mi arcu eu mi nec
                                            nibh aliquam amet integer laoreet sed vitae ornare convallis metus,
                                            adipiscing dui dictum et velit eget blandit ipsum</em></blockquote>
                                    <p class="text-muted">Nunc, integer id pulvinar duis lacus, gravida amet sit id
                                        cursus scelerisque pharetra nunc at turpis nulla quam pellentesque dapibus
                                        varius ullamcorper cras gravida vel</p>
                                    <ul>
                                        <li>Dui, amet lectus consectetur morbi donec morbi</li>
                                        <li>In sem quis senectus praesent porttitor ultrices vitae volutpat</li>
                                        <li>Erat at tincidunt condimentum semper sapien,</li>
                                        <li>Nunc mus turpis etiam</li>
                                    </ul>
                                    <p>Aliquam tellus, aenean vitae egestas at neque, non bibendum aliquet velit
                                        sollicitudin amet cursus proin libero, turpis dictum quisque gravida eget
                                        convallis sem nisl commodo, ultricies imperdiet feugiat</p>
                                    <ol>
                                        <li>Elit lobortis aliquam iaculis ac ut praesent id</li>
                                        <li>Sagittis facilisi vel ut</li>
                                        <li>Dignissim gravida lorem egestas consequat</li>
                                    </ol>
                                    <p>&nbsp;</p>
                                    <p>Best Regards</p>
                                </div>
                            </div>
                            <div class="p-3 px-md-5 py-md-4 b-t">
                                <h6 class="mb-2">Attached files:</h6>
                                <div><a href="#" class="d-block mb-1"><span
                                            class="badge badge-outline text-muted">PSD</span> DesignMockup.psd <small
                                            class="ml-2 text-muted">34kb</small> </a><a href="#"
                                        class="d-block mb-1"><span class="badge badge-outline text-muted">PDF</span>
                                        Design-Documentation.pdf <small class="ml-2 text-muted">432kb</small> </a><a
                                        href="#" class="d-block mb-1"><span
                                            class="badge badge-outline text-muted">MP4</span> Design-video-show.mp4
                                        <small class="ml-2 text-muted">3mb</small></a></div>
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
    </x-layout>
