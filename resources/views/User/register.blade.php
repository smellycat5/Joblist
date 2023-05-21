@extends ('components.layout')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><a href="{{route('user.login')}}">Log In </a> <span>Sign Up</span></h6>
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <form action="{{ route('user.storeUser')}}" method="post">
                                                <h4 class="mb-3 pb-3">Sign Up</h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-style" placeholder="Full Name"
                                                        name="name">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="tel" class="form-style" placeholder="Phone Number"
                                                        name="phone">
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" class="form-style" placeholder="Email"
                                                        name="email">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" placeholder="Password"
                                                        name="pass">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" class="btn mt-4" name="send">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
