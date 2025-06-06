@include('layouts.main')



    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Application Form</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Application Form</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- application -->
        <div class="application py-120">
            <div class="container">
                <div class="application-form">
                    <h3>Application Form</h3>
                    <form action="#">
                        <div class="row">
                            <h5 class="mb-3">Basic Information</h5>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="Your First Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="Your Last Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Program Type</label>
                                    <select class="form-select" name="program">
                                        <option value="">Choose Program Type</option>
                                        <option value="1">Program Type 01</option>
                                        <option value="2">Program Type 02</option>
                                        <option value="3">Program Type 03</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Degree Level</label>
                                    <select class="form-select" name="degree">
                                        <option value="">Choose Degree Level</option>
                                        <option value="1">Degree Level 01</option>
                                        <option value="2">Degree Level 02</option>
                                        <option value="3">Degree Level 03</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label>Student Photo</label>
                                  <input type="file" class="form-control" name="photo" aria-describedby="photohelp">
                                  <div id="photohelp" class="form-text">Your Photo Must be in Passport (PP) Size. Max Upload Size 1MB.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label>Upload Passport or Birth Document</label>
                                  <input type="file" class="form-control" name="document" aria-describedby="dochelp">
                                  <div id="dochelp" class="form-text">Upload File Must Be Zip File. Max Upload Size 1MB.</div>
                                </div>
                            </div>
                            <h5 class="mt-4 mb-3">Personal Information</h5>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Father's Name</label>
                                    <input type="text" class="form-control" name="fathername" placeholder="Your Father's Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Mother's Name</label>
                                    <input type="text" class="form-control" name="mothername" placeholder="Your Mother's Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" name="number" placeholder="Your Contact Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Present Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Your Present Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="date" class="form-control" name="dob">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>National ID Or Passport ID</label>
                                    <input type="text" class="form-control" name="nid" placeholder="Your ID Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-select" name="gender">
                                        <option value="">Choose Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Student Type</label>
                                    <select class="form-select" name="studenttype">
                                        <option value="">Choose Student Type</option>
                                        <option value="1">Student Type 01</option>
                                        <option value="2">Student Type 02</option>
                                        <option value="3">Student Type 03</option>
                                    </select>
                                </div>
                            </div>
                            <h5 class="mt-4 mb-3">Academic Information</h5>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>School</label>
                                    <input type="text" class="form-control" name="school" placeholder="Your School">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Year Of Completion</label>
                                    <input type="text" class="form-control" name="yoc" placeholder="Completion Year">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Highest Qualification</label>
                                    <input type="text" class="form-control" name="qualification" placeholder="Your Qualification">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Current Status</label>
                                    <select class="form-select" name="status">
                                        <option value="">Choose Current Status</option>
                                        <option value="1">Current Status 01</option>
                                        <option value="2">Current Status 02</option>
                                        <option value="3">Current Status 03</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Study Area</label>
                                    <select class="form-select" name="studyarea">
                                        <option value="">Choose Study Area</option>
                                        <option value="1">Study Area 01</option>
                                        <option value="2">Study Area 02</option>
                                        <option value="3">Study Area 03</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Academic Degree Level</label>
                                    <select class="form-select" name="academicdegree">
                                        <option value="">Choose Degree Level</option>
                                        <option value="1">Academic Degree Level 01</option>
                                        <option value="2">Academic Degree Level 02</option>
                                        <option value="3">Academic Degree Level 03</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="agree" name="agree" value="1">
                                  <label class="form-check-label" for="agree">
                                    By Submitting This Form You Agree To The <a href="#">Terms & Conditions</a> And <a href="#">Privacy Policy</a>.
                                  </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="theme-btn">Submit Application<i class="fas fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- application end-->

    </main>

    @include('layouts.footer')