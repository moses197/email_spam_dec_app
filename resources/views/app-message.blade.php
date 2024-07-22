<x-layout>

    <!-- ############ Aside END-->
    <div id="main" class="layout-column flex"><!-- ############ Header START-->

        <!-- ############ Footer END--><!-- ############ Content START-->
        <div id="content" class="flex"><!-- ############ Main START-->
            <div>
                <div class="page-hero page-container" id="page-hero">
                    <div class="padding d-flex">
                        <div class="page-title">
                            <h2 class="text-md text-highlight">Send Email</h2><small class="text-muted">Send message to friends and family</small>
                        </div>
                        <div class="flex"></div>
                </div>
                    <div class="padding">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-8">
                                <form method="POST" action="{{ route('messages-store') }}">
                                    @csrf
                                    <div class="carda">
                                        {{-- <input type="text" style="width: 1076px"> --}}
                                        {{-- <div class="card-header"><strong>Contact</strong></div>
                                        <div class="card-body">
                                            <p class="text-muted">Need support? please fill the fields below.</p>
                                            <div class="form-row"> --}}
                                                <div class="form-group form-message">
                                                    <label class="text-dark">Receiptient Email</label>
                                                    <input type="email" class="form-control" name="recipient_email" placeholder="Name" required style="border: 1px solid rgba(85, 93, 94, 0.308)"  value="{{ old('recipient_email') }}">
                                                </div>
                                                <div class="form-group form-message"><label class="text-dark">Subject</label><input 
                                                        type="text" class="form-control" name="subject" placeholder="Enter email"
                                                        required style="border: 1px solid rgba(85, 93, 94, 0.308)" value="{{ old('subject') }}">
                                                    </div>
                                                    <div class="form-group form-message"><label class="text-dark">Message</label>
                                                        <textarea class="form-control" rows="6" data-minwords="6" name="body" required placeholder="Type your message" style="border: 1px solid rgba(85, 93, 94, 0.308)">{{ old('body') }}</textarea>
                                                    </div>
                                                    <div class="text-right pt-2 form-message"><button type="submit"
                                                            class="btn btn-primary">Send Email</button></div>
                                            </div>


                                        </div>
                                    </div>
                                </form>
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