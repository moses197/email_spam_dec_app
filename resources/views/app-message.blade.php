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
                        {{-- <div><a href="https://themeforest.net/item/basik-responsive-bootstrap-web-admin-template/23365964"
                                class="btn btn-md text-muted"><span class="d-none d-sm-inline mx-1">Buy this
                                    Item</span> <i data-feather="arrow-right"></i></a></div>
                    </div> --}}
                </div>
                {{-- <div class="page-content page-container" id="page-content"> --}}
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
                        {{-- <div class="row">
                            <div class="col-sm-6">
                                <form data-plugin="parsley" data-option="{}">
                                    <div class="card">
                                        <div class="card-header"><strong>Basic constraints</strong></div>
                                        <div class="card-body">
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Required</label>
                                                <div class="col-sm-9"><input type="text" class="form-control"
                                                        required placeholder="required field"><select required
                                                        class="form-control custom-select my-2">
                                                        <option value="">Please choose</option>
                                                        <option value="foo">Foo</option>
                                                        <option value="bar">Bar</option>
                                                    </select>
                                                    <div class="checkcard"><label class="checkbox ui-check"><input
                                                                type="checkbox" name="inlineCheckbox1"
                                                                value="option1" required
                                                                data-parsley-error-message="You must agree to the site policy."><i></i>
                                                            Agree to the policy</label></div>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-3 col-form-label">Min
                                                    Length</label>
                                                <div class="col-sm-9"><input type="text" minlength="6"
                                                        class="form-control" placeholder="minlength = 6"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-3 col-form-label">Max
                                                    Length</label>
                                                <div class="col-sm-9"><input type="text" maxlength="6"
                                                        class="form-control" placeholder="maxlength = 6"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-3 col-form-label">Range
                                                    Length</label>
                                                <div class="col-sm-9"><input type="text"
                                                        data-parsley-length="[6, 10]" class="form-control"
                                                        placeholder="data-rangelength = [5,10]"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Min</label>
                                                <div class="col-sm-9"><input type="text" min="6"
                                                        class="form-control" placeholder="min = 6"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Max</label>
                                                <div class="col-sm-9"><input type="text" max="100"
                                                        class="form-control" placeholder="max = 100"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Range</label>
                                                <div class="col-sm-9"><input type="text"
                                                        data-parsley-range="[6, 10]" class="form-control"
                                                        placeholder="data-range = [6, 10]"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Pattern</label>
                                                <div class="col-sm-9"><input type="text" pattern="#[A-Fa-f0-9]{6}"
                                                        class="form-control" placeholder="hexa color code"></div>
                                            </div>
                                            <div class="text-right"><button type="submit"
                                                    class="btn btn-primary">Submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <form data-plugin="parsley" data-option="{}">
                                    <div class="card">
                                        <div class="card-header"><strong>Type constraints</strong></div>
                                        <div class="card-body">
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9"><input type="email" class="form-control"
                                                        required placeholder="email"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Url</label>
                                                <div class="col-sm-9"><input type="url" class="form-control"
                                                        placeholder="url"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Integer</label>
                                                <div class="col-sm-9"><input type="text"
                                                        data-parsley-type="integer" class="form-control"
                                                        placeholder="Integer"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Digits</label>
                                                <div class="col-sm-9"><input type="text"
                                                        data-parsley-type="digits" class="form-control"
                                                        placeholder="digits"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Number</label>
                                                <div class="col-sm-9"><input type="text"
                                                        data-parsley-type="number" class="form-control"
                                                        placeholder="number"></div>
                                            </div>
                                            <div class="form-group row"><label
                                                    class="col-sm-3 col-form-label">Alphanum</label>
                                                <div class="col-sm-9"><input type="text"
                                                        data-parsley-type="alphanum" class="form-control"
                                                        placeholder="alphanumeric string"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-3 col-form-label">Equal
                                                    To</label>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-sm-6"><input type="text" value="foo"
                                                                id="foo" class="form-control"></div>
                                                        <div class="col-sm-6"><input type="text"
                                                                data-parsley-equalto="#foo" placeholder="equal to foo"
                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right"><button type="submit"
                                                    class="btn btn-primary">Submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
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