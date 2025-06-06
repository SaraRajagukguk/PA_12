@include('layouts.main')



    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Faculty Single</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Faculty Single</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- team single -->
        <div class="team-single pt-120 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="team-single-img">
                            <img src="assets/img/team/04.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="team-details">
                            <h3>Frank A. Mitchell</h3>
                            <strong>Associate Professor</strong>
                            <p class="mt-3">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters packages and web page editors now usepackages and web page editors now use.
                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.
                            </p>
                            <div class="team-details-info">
                                <ul>
                                    <li><a href="#"><i class="far fa-location-dot"></i> 25/B Milford Road, New York</a></li>
                                    <li><a href="#"><i class="far fa-envelope"></i> carson@example.com</a></li>
                                    <li><a href="#"><i class="far fa-phone"></i> +2 123 456 7892</a></li>
                                </ul>
                            </div>
                            <div class="team-details-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team single end -->


        <!-- biography & skill -->
        <div class="biography-skil pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="biography">
                            <h4 class="mb-3">Biography</h4>
                            <p class="mb-10">
                                Sed ut perspiciatis unde omnis totam rem chitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                If you are going to use a passage of you need to hidden in the middle of text.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-skill">
                            <h4 class="mb-3">Professional Skills</h4>
                            <div class="skills-section">
                                <div class="progress-box">
                                    <h5>Communication <span class="pull-right">85%</span></h5>
                                    <div class="progress" data-value="85">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Relationship <span class="pull-right">65%</span></h5>
                                    <div class="progress" data-value="65">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Creative Work <span class="pull-right">75%</span></h5>
                                    <div class="progress" data-value="75">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- biography & skill end -->

    </main>

    @include('layouts.footer')