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
                                    >
                                    <thead>
                                        <tr>
                                            <th><span class="text-muted">Name</span></th>
                                            <th><span class="text-muted">Image</span></th>
                                            <th><span class="text-muted">Messages</span></th>
                                            <th><span class="text-muted d-none d-sm-block">Status</span></th>
                                            <th><span class="text-muted d-none d-sm-block">Date</span></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)                                            
                                        <tr class="">
                                            <td style="min-width:30px;text-align:center"><small
                                                    class="text-muted">{{$message->user->name}}</small>
                                            </td>
                                            <td><a href="#"><span class="w-32 avatar gd-info">F</span></a></td>
                                            <td class="flex"><a href="#" class="item-title text-color">{{$message->subject}}</a>
                                                <div class="item-except text-muted text-sm h-1x">{{ Str::limit($message->body, 95) }}</div>
                                            </td>
                                            <td>
                                                @if ($message->type == 'spam')
                                                <div style="display: flex; gap: 4px;">
                                                    <span class="text-danger"> <i data-feather="alert-triangle"></i> </span> 
                                                    <span> {{$message->type}}</span>
                                                </div>                                                    
                                                @else
                                                     <span class="text-success"> <i data-feather="check-circle"></i> </span> <span> {{$message->type}}</span>
                                                @endif
                                                {{-- item-amount d-none d-sm-block text-sm text-danger --}}
                                            </td>
                                            <td><span
                                                    class="item-amount d-none d-sm-block text-sm [object Object]">{{$message->created_at}}</span>
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
                                        @endforeach
                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- ############ Main END-->
            </div><!-- ############ Content END--><!-- ############ Footer START-->
        </div>
</x-layout>
