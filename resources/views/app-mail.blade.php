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
                                        <li><a href="/email#inbox"><span class="nav-icon"><i
                                                        data-feather="archive"></i> </span><span
                                                    class="nav-text">Inbox</span> <span class="nav-badge"><b
                                                        class="badge badge-pill gd-info">9</b></span></a></li>
                                        <li><a href="/email#sent"><span class="nav-icon"><i
                                                        data-feather="send"></i> </span><span
                                                    class="nav-text">Sent</span> <span class="nav-badge"><b
                                                        class="badge badge-pill gd-danger">10</b></span></a></li>
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
                                <div class="list-item" data-id="9">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="9"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#9"><span class="w-40 avatar gd-info"
                                                data-toggle-class="loading"><img src="../assets/img/a9.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#9"
                                            class="item-title text-color h-1x">Web App develop tutorial</a>
                                        <div class="item-except text-muted text-sm h-1x">Build a progressive web app
                                            using jQuery</div>
                                        <div class="item-tag tag hide">
                                            Personal,Private,Draft,Company,Sent,Trash,Workshop</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">2 days ago</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="17">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="17"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#17"><span class="w-40 avatar gd-warning"
                                                data-toggle-class="loading">H</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#17"
                                            class="item-title text-color h-1x">AI Could Uber</a>
                                        <div class="item-except text-muted text-sm h-1x">AI will highlight & emphasize
                                            key areas where students need help, allowing teachers to focus on
                                            facilitating the learning process</div>
                                        <div class="item-tag tag hide">
                                            Company,Personal,Sent,Private,Draft,Workshop,Trash</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">13/12 18</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="2">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="2"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#2"><span class="w-40 avatar gd-primary"
                                                data-toggle-class="loading"><img src="../assets/img/a2.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#2"
                                            class="item-title text-color h-1x">Data analytics application</a>
                                        <div class="item-except text-muted text-sm h-1x">With <a
                                                href="#">@Dashboard</a>, you can create fully customized and
                                            interactive snapshots, scorecards, and dashboards. Visit our live dashboard
                                            gallery to see a glimpse of what's possible.</div>
                                        <div class="item-tag tag hide">
                                            Personal,Sent,Draft,Trash,Private,Workshop,Company</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">45 minutes ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="16">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="16"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#16"><span class="w-40 avatar gd-info"
                                                data-toggle-class="loading">F</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#16"
                                            class="item-title text-color h-1x">AI Could Uber</a>
                                        <div class="item-except text-muted text-sm h-1x">When it comes to artificial
                                            intelligence, little things can add up in big ways</div>
                                        <div class="item-tag tag hide">
                                            Workshop,Company,Personal,Private,Trash,Sent,Draft</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">03/12 18</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="17">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="17"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#17"><span class="w-40 avatar gd-warning"
                                                data-toggle-class="loading">A</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#17"
                                            class="item-title text-color h-1x">AI Could Uber</a>
                                        <div class="item-except text-muted text-sm h-1x">Alibaba made a smart screen to
                                            help blind people shop and it costs next to nothing</div>
                                        <div class="item-tag tag hide">
                                            Workshop,Company,Sent,Personal,Trash,Private,Draft</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">13/12 18</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="1">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="1"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#1"><span class="w-40 avatar gd-primary"
                                                data-toggle-class="loading"><img src="../assets/img/a1.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#1"
                                            class="item-title text-color h-1x">WordPress dashboard redesign</a>
                                        <div class="item-except text-muted text-sm h-1x">In WordPress Tutorial, we’ll
                                            streamline the process for you by pointing out the all key features of the
                                            WordPress</div>
                                        <div class="item-tag tag hide">
                                            Draft,Trash,Company,Sent,Personal,Workshop,Private</div>
                                    </div>
                                    <div>
                                        <div class="item-icon text-muted"><i data-feather="paperclip" width="10"
                                                height="10"></i></div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">20 minutes ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="6">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="6"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#6"><span class="w-40 avatar gd-danger"
                                                data-toggle-class="loading"><img src="../assets/img/a6.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#6"
                                            class="item-title text-color h-1x">eBay Dashboard</a>
                                        <div class="item-except text-muted text-sm h-1x">This makes me believe there
                                            are good people in the world still</div>
                                        <div class="item-tag tag hide">
                                            Sent,Personal,Company,Draft,Private,Trash,Workshop</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">1 Week ago</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="8">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="8"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#8"><span class="w-40 avatar gd-success"
                                                data-toggle-class="loading"><img src="../assets/img/a8.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#8"
                                            class="item-title text-color h-1x">DEV DAY 2018</a>
                                        <div class="item-except text-muted text-sm h-1x">Working on a research piece on
                                            the history of vocational schools in America.</div>
                                        <div class="item-tag tag hide">
                                            Trash,Workshop,Sent,Personal,Company,Draft,Private</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">02/11 18</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="19">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="19"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#19"><span class="w-40 avatar gd-warning"
                                                data-toggle-class="loading">T</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#19"
                                            class="item-title text-color h-1x">IOS Application</a>
                                        <div class="item-except text-muted text-sm h-1x">We design and implement native
                                            iOS apps that harmonize simplicity of design and complexity of function
                                        </div>
                                        <div class="item-tag tag hide">
                                            Sent,Private,Workshop,Draft,Trash,Personal,Company</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">13/12 18</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="4">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="4"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#4"><span class="w-40 avatar gd-success"
                                                data-toggle-class="loading"><img src="../assets/img/a4.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#4"
                                            class="item-title text-color h-1x">Open source project public release</a>
                                        <div class="item-except text-muted text-sm h-1x">New out-of-the box dashboards
                                            and enhanced security and compliance</div>
                                        <div class="item-tag tag hide">
                                            Draft,Workshop,Sent,Private,Company,Personal,Trash</div>
                                    </div>
                                    <div>
                                        <div class="item-icon text-muted"><i data-feather="paperclip" width="10"
                                                height="10"></i></div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">2 hours ago</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="13">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="13"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#13"><span class="w-40 avatar gd-primary"
                                                data-toggle-class="loading">L</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#13"
                                            class="item-title text-color h-1x">Feed Reader</a>
                                        <div class="item-except text-muted text-sm h-1x">Email message from a happy
                                            user: 'Neat tool.. seems to be the easiest of' <a href="#">#big
                                                data</a></div>
                                        <div class="item-tag tag hide">
                                            Draft,Private,Sent,Personal,Workshop,Company,Trash</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">3 weeks ago</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="15">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="15"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#15"><span class="w-40 avatar gd-success"
                                                data-toggle-class="loading">J</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#15"
                                            class="item-title text-color h-1x">Weekend Fun Project</a>
                                        <div class="item-except text-muted text-sm h-1x">You don’t have to switch tools
                                            to review code, share input on projects, or open up the conversation to the
                                            rest of your team.</div>
                                        <div class="item-tag tag hide">
                                            Sent,Draft,Private,Workshop,Company,Trash,Personal</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">03/12 18</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="7">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="7"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#7"><span class="w-40 avatar gd-primary"
                                                data-toggle-class="loading"><img src="../assets/img/a7.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#7"
                                            class="item-title text-color h-1x">Design improvement</a>
                                        <div class="item-except text-muted text-sm h-1x">Today we're working on
                                            improving the design to make the data you need more accessible!</div>
                                        <div class="item-tag tag hide">
                                            Draft,Personal,Private,Company,Workshop,Sent,Trash</div>
                                    </div>
                                    <div>
                                        <div class="item-icon text-muted"><i data-feather="paperclip" width="10"
                                                height="10"></i></div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">21 July</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="5">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="5"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#5"><span class="w-40 avatar gd-warning"
                                                data-toggle-class="loading"><img src="../assets/img/a5.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#5"
                                            class="item-title text-color h-1x">Google Analytics training</a>
                                        <div class="item-except text-muted text-sm h-1x">Free Worksheet included. Read
                                            on through or save for later but face the fear of entering your Google
                                            Analytics</div>
                                        <div class="item-tag tag hide">
                                            Personal,Sent,Draft,Private,Workshop,Company,Trash</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">3 days ago</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="11">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="11"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#11"><span class="w-40 avatar gd-info"
                                                data-toggle-class="loading">K</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#11"
                                            class="item-title text-color h-1x">Fitness application</a>
                                        <div class="item-except text-muted text-sm h-1x">@DataAPI Implemented new API
                                            for transation data from client to server.</div>
                                        <div class="item-tag tag hide">
                                            Company,Draft,Workshop,Personal,Trash,Sent,Private</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">20 minutes ago
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="12">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="12"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#12"><span class="w-40 avatar gd-info"
                                                data-toggle-class="loading">A</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#12"
                                            class="item-title text-color h-1x">Sales Support</a>
                                        <div class="item-except text-muted text-sm h-1x">Our client is an IT Healthcare
                                            start-up that provides process improvement solutions</div>
                                        <div class="item-tag tag hide">
                                            Personal,Draft,Private,Trash,Workshop,Company,Sent</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">5 hours ago</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="14">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="14"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#14"><span class="w-40 avatar gd-warning"
                                                data-toggle-class="loading">B</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#14"
                                            class="item-title text-color h-1x">Database management</a>
                                        <div class="item-except text-muted text-sm h-1x">Managing data in all software
                                            or applications becomes simplified when you make use of the best <a
                                                href="#">#DatabaseMan</a></div>
                                        <div class="item-tag tag hide">
                                            Company,Personal,Trash,Workshop,Sent,Private,Draft</div>
                                    </div>
                                    <div>
                                        <div class="item-icon text-muted"><i data-feather="paperclip" width="10"
                                                height="10"></i></div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">1 day ago</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="10">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="10"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#10"><span class="w-40 avatar gd-danger"
                                                data-toggle-class="loading"><img src="../assets/img/a10.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#10"
                                            class="item-title text-color h-1x">AI assistant</a>
                                        <div class="item-except text-muted text-sm h-1x">Leaders are running an AMA on
                                            Reddit. Ask your question and find out how the project is going</div>
                                        <div class="item-tag tag hide">
                                            Sent,Workshop,Draft,Company,Trash,Personal,Private</div>
                                    </div>
                                    <div>
                                        <div class="item-icon text-muted"><i data-feather="paperclip" width="10"
                                                height="10"></i></div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">1 day ago</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="3">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="3"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#3"><span class="w-40 avatar gd-primary"
                                                data-toggle-class="loading"><img src="../assets/img/a3.jpg"
                                                    alt="."></span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#3"
                                            class="item-title text-color h-1x">Html5 dashboard conference</a>
                                        <div class="item-except text-muted text-sm h-1x">Less than a month till we head
                                            over to the UK & Ireland with @NextUI</div>
                                        <div class="item-tag tag hide">
                                            Company,Personal,Sent,Draft,Trash,Private,Workshop</div>
                                    </div>
                                    <div>
                                        <div class="item-icon text-muted"><i data-feather="paperclip" width="10"
                                                height="10"></i></div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">1 hour ago</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="20">
                                    <div><label class="ui-check m-0"><input type="checkbox" name="id"
                                                value="20"> <i></i></label></div>
                                    <div><a href="#" data-toggle-class><i data-feather="star"
                                                class="active-warning text-muted"></i></a></div>
                                    <div><a href="app.mail.detail.html#20"><span class="w-40 avatar gd-warning"
                                                data-toggle-class="loading">G</span></a></div>
                                    <div class="flex"><a href="app.mail.detail.html#20"
                                            class="item-title text-color h-1x">Netflix hackathon ios app</a>
                                        <div class="item-except text-muted text-sm h-1x">Netflix hackathon creates eye
                                            tracking option for iOS app</div>
                                        <div class="item-tag tag hide">
                                            Trash,Company,Sent,Personal,Workshop,Private,Draft</div>
                                    </div>
                                    <div class="no-wrap">
                                        <div class="item-date text-muted text-sm d-none d-md-block">25/12 18</div>
                                    </div>
                                </div>
                            </div>
                            <div class="no-result hide">
                                <div class="p-4 text-center">No Results</div>
                            </div>
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