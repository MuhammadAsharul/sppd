@stack('prepend-style')
@include('includes.style')
@stack('addon-style')
<title>Registration</title>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{ 'images/logo.svg' }}" alt="logo">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="fw-light">Register</h6>
                        <form action="{{ route('register.post') }}" method="POST" class="pt-3">
                            @csrf
                            <div class="form-group">
                                <input type="name" id="name_address" class="form-control form-control-lg"
                                    name="name" required autofocus placeholder="Username">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="email" id="email_address" class="form-control form-control-lg"
                                    name="email" required autofocus placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password"
                                    name="password" required placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="mt-3 text-center">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn "
                                    type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@stack('prepend-script')
@include('includes.script')
@stack('addon-script')
