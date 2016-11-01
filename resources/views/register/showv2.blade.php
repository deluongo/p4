@extends('layouts.structure')


@section('title')
    'Registration'
@endsection

@section('content')
    <!-- Register Content -->
    <div class="bg-white pulldown">
        <div class="content content-boxed overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <div class="push-30-t push-20 animated fadeIn">
                        <!-- Register Title -->
                        <div class="text-center">
                            <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                            <h1 class="h3 push-10-t">Create Account</h1>
                        </div>
                        <!-- END Register Title -->

                        <!-- Register Form -->
                        <!-- jQuery Validation (.js-validation-register class is initialized in js/pages/base_pages_register.js) -->
                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form class="js-validation-register form-horizontal push-50-t push-50" action="base_pages_register_v2.html" method="post">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="text" id="register-username" name="register-username" placeholder="Please enter a username">
                                        <label for="register-username">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="email" id="register-email" name="register-email" placeholder="Please provide your email">
                                        <label for="register-email">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="password" id="register-password" name="register-password" placeholder="Choose a strong password..">
                                        <label for="register-password">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" type="password" id="register-password2" name="register-password2" placeholder="..and confirm it">
                                        <label for="register-password2">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" id="ps4-gamertag" name="ps4-gamertag" placeholder="Enter your PS4 Gamertag">
                                        <label for="ps4-gamertag">PS4 Gamertag</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material form-material-success">
                                        <input class="form-control" id="xbox-gamertag" name="xbox-gamertag" placeholder="Enter your XBOX Gamertag">
                                        <label for="xbox-gamertag">XBOX Gamertag</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-7 col-sm-8">
                                    <label class="css-input switch switch-sm switch-success">
                                        <input type="checkbox" id="register-terms" name="register-terms"><span></span> I agree with terms &amp; conditions
                                    </label>
                                </div>
                                <div class="col-xs-5 col-sm-4">
                                    <div class="font-s13 text-right push-5-t">
                                        <a href="#" data-toggle="modal" data-target="#modal-terms">View Terms</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                    <button class="btn btn-sm btn-block btn-success" type="submit">Create Account</button>
                                </div>
                            </div>
                        </form>
                        <!-- END Register Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Register Content -->

    <!-- Register Footer -->
    <div class="pulldown push-30-t text-center animated fadeInUp">
        <small class="text-muted"><span class="js-year-copy"></span> &copy; OneUI 3.0</small>
    </div>
    <!-- END Register Footer -->

    <!-- Terms Modal -->
    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout">
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Terms &amp; Conditions</h3>
                    </div>
                    <div class="block-content">
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> I agree</button>
                </div>
            </div>
        </div>
    </div>
<!-- END Terms Modal -->

@endsection

@section('js')
    <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
    <script src="{{ asset('/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('/js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ asset('/js/core/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('/js/core/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('/js/core/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('/js/core/js.cookie.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('/js/pages/base_pages_register.js') }}"></script>
@endsection