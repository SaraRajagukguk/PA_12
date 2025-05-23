@include('layouts.main')



    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Forgot Password</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Forgot Password</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- forgot password -->
        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="assets/img/logo/logo.png" alt="">
                            <p>Reset your eduka account password</p>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn"><i class="far fa-key"></i> Send Reset
                                    Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- forgot password end -->

    </main>

    @include('layouts.footer')