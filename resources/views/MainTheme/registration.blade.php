@extends('MainTheme.index')

@section('body')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Login/Register</h2>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="registration.html">Register</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Login Box Area =================-->
<section class="login_box_area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="mainTheme/img/login.jpg" alt="">
                    <div class="hover">
                        <h4>New to our website?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this
                            is the</p>
                        <a class="main_btn" href="{{route('register')}}">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 frmRegister">
                <div class="login_form_inner reg_form">
                    <h3>Create an Account</h3>
                    <form class="row login_form" action="{{route('register')}}" method="post" id="contactForm"
                        novalidate="novalidate">
                        @csrf
                        <h4 class="formContent">Name</h4>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Please enter your name">
                        </div>
                        <h4 class="formContent">Email</h4>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Please enter your valid email address">
                        </div>
                        <h4 class="formContent">Password</h4>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="password" name="password"
                                placeholder="Please enter Password">
                        </div>
                        <h4 class="formContent">Confirm Password</h4>

                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="pass" name="pass"
                                placeholder="Please enter the password again">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Keep me logged in</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="btn submit_btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->


@endsection