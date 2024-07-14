<x-layout>
    <!-- ############ Aside END-->
    <div id="main" class="layout-column flex"><!-- ############ Header START-->
        <x-header />
        <!-- ############ Footer END--><!-- ############ Content START-->
        <div id="content" class="flex"><!-- ############ Main START-->
            <div>
                <div class="page-hero page-container" id="page-hero">
                    <div class="padding d-flex">
                        <div class="page-title">
                            <h2 class="text-md text-highlight">Dashboard</h2><small class="text-muted">Message
                                Stats</small>
                        </div>
                        <div class="flex"></div>
                    </div>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-theme table-row v-middle"
                                    data-plugin="dataTable">
                                    <thead>
                                        <tr>
                                            <th><span class="text-muted">ID</span></th>
                                            <th><span class="text-muted">Image</span></th>
                                            <th><span class="text-muted">Sender</span></th>
                                            <th><span class="text-muted d-none d-sm-block">Status</span></th>
                                            <th><span class="text-muted d-none d-sm-block">Date</span></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="" data-id="16">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">16</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-info">F</span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">AI Could
                                                    Uber</a>
                                                <div class="item-except text-muted text-sm h-1x">When it comes to
                                                    artificial intelligence, little things can add up in big ways</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">2000000000</span>
                                            </td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">533333</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown">
                                                    <a href="#"
                                                        data-toggle="dropdown" class="text-muted">
                                                        <i data-feather="more-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu">
                                                        <a class="dropdown-item" href="#">See
                                                            detail
                                                        </a>
                                                        {{-- <a class="dropdown-item edit">Edit</a> --}}
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="17">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">17</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-warning">H</span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">AI Could
                                                    Uber</a>
                                                <div class="item-except text-muted text-sm h-1x">AI will highlight &
                                                    emphasize key areas where students need help, allowing teachers to
                                                    focus
                                                    on facilitating the learning process</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">200</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">53</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="12">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">12</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-info">A</span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">Sales
                                                    Support</a>
                                                <div class="item-except text-muted text-sm h-1x">Our client is an IT
                                                    Healthcare start-up that provides process improvement solutions
                                                </div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">14</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">20</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="7">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">7</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-primary"><img
                                                            src="../assets/img/a7.jpg" alt="."></span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">Design
                                                    improvement</a>
                                                <div class="item-except text-muted text-sm h-1x">Today we're working on
                                                    improving the design to make the data you need more accessible!
                                                </div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">510</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">5</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="8">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">8</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-success"><img
                                                            src="../assets/img/a8.jpg" alt="."></span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">DEV
                                                    DAY
                                                    2018</a>
                                                <div class="item-except text-muted text-sm h-1x">Working on a research
                                                    piece on the history of vocational schools in America.</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">220</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">4</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="2">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">2</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-primary"><img
                                                            src="../assets/img/a2.jpg" alt="."></span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">Data
                                                    analytics application</a>
                                                <div class="item-except text-muted text-sm h-1x">With <a
                                                        href="#">@Dashboard</a>, you can create fully customized
                                                    and
                                                    interactive snapshots, scorecards, and dashboards. Visit our live
                                                    dashboard gallery to see a glimpse of what's possible.</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">10</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">4</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="3">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">3</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-primary"><img
                                                            src="../assets/img/a3.jpg" alt="."></span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">Html5
                                                    dashboard conference</a>
                                                <div class="item-except text-muted text-sm h-1x">Less than a month till
                                                    we
                                                    head over to the UK & Ireland with @NextUI</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">10</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">50</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="10">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">10</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-danger"><img
                                                            src="../assets/img/a10.jpg" alt="."></span></a>
                                            </td>
                                            <td class="flex"><a href="#" class="item-title text-color">AI
                                                    assistant</a>
                                                <div class="item-except text-muted text-sm h-1x">Leaders are running an
                                                    AMA
                                                    on Reddit. Ask your question and find out how the project is going
                                                </div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">240</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">50</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="1">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">1</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-primary"><img
                                                            src="../assets/img/a1.jpg" alt="."></span></a></td>
                                            <td class="flex"><a href="#"
                                                    class="item-title text-color">WordPress
                                                    dashboard redesign</a>
                                                <div class="item-except text-muted text-sm h-1x">In WordPress Tutorial,
                                                    we’ll streamline the process for you by pointing out the all key
                                                    features of the WordPress</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">210</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">5</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="20">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">20</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-warning">G</span></a>
                                            </td>
                                            <td class="flex"><a href="#"
                                                    class="item-title text-color">Netflix
                                                    hackathon ios app</a>
                                                <div class="item-except text-muted text-sm h-1x">Netflix hackathon
                                                    creates
                                                    eye tracking option for iOS app</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">120</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">20</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="17">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">17</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-warning">A</span></a>
                                            </td>
                                            <td class="flex"><a href="#" class="item-title text-color">AI
                                                    Could
                                                    Uber</a>
                                                <div class="item-except text-muted text-sm h-1x">Alibaba made a smart
                                                    screen to help blind people shop and it costs next to nothing</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">320</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">25</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="5">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">5</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-warning"><img
                                                            src="../assets/img/a5.jpg" alt="."></span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">Google
                                                    Analytics training</a>
                                                <div class="item-except text-muted text-sm h-1x">Free Worksheet
                                                    included.
                                                    Read on through or save for later but face the fear of entering your
                                                    Google Analytics</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">100</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">3</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="13">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">13</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-primary">L</span></a>
                                            </td>
                                            <td class="flex"><a href="#" class="item-title text-color">Feed
                                                    Reader</a>
                                                <div class="item-except text-muted text-sm h-1x">Email message from a
                                                    happy
                                                    user: 'Neat tool.. seems to be the easiest of' <a
                                                        href="#">#big
                                                        data</a></div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">14</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">20</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="15">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">15</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-success">J</span></a>
                                            </td>
                                            <td class="flex"><a href="#"
                                                    class="item-title text-color">Weekend
                                                    Fun Project</a>
                                                <div class="item-except text-muted text-sm h-1x">You don’t have to
                                                    switch
                                                    tools to review code, share input on projects, or open up the
                                                    conversation to the rest of your team.</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">240</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">50</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="" data-id="9">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">9</small></td>
                                            <td><a href="#"><span class="w-32 avatar gd-info"><img
                                                            src="../assets/img/a9.jpg" alt="."></span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">Web
                                                    App
                                                    develop tutorial</a>
                                                <div class="item-except text-muted text-sm h-1x">Build a progressive
                                                    web
                                                    app using jQuery</div>
                                            </td>
                                            <td><span class="item-amount d-none d-sm-block text-sm">2310</span></td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">20</span>
                                            </td>
                                            <td>
                                                <div class="item-action dropdown"><a href="#"
                                                        data-toggle="dropdown" class="text-muted"><i
                                                            data-feather="more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black"
                                                        role="menu"><a class="dropdown-item" href="#">See
                                                            detail
                                                        </a><a class="dropdown-item download">Download </a><a
                                                            class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div><a
                                                            class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- ############ Main END-->
            </div><!-- ############ Content END--><!-- ############ Footer START-->
        </div>
</x-layout>
