<html>
    <head>
        <title>
            Register
        </title>
        <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body>
        <!-- Section: Design Block -->
        <section class="vh-100" style="background-color: #9A616D;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                      <div class="col-md-6 col-lg-5 d-none d-md-block img-fluid">
                        <img src="img9.png"
                          alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                         
                      </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
          
                          <form method="post" action="valid.php" enctype="multipart/form-data">
          
                            <div class="d-flex align-items-center mb-3 pb-1"> 
                              <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                              <span class="h1 fw-bold mb-0">Register</span>
                            </div>
          
                            <!-- <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Enter your credientials</h5> -->
          
                            <div class="form-outline mb-4">
                              <input type="text" id="form2Example17" name="userf" class="form-control form-control-lg" />
                              <label class="form-label" for="form2Example17">username</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example17" name="emailf" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example17">email</label>
                              </div>

                              <div class="form-outline mb-4">
                              <input type="text" id="form2Example27" name="numf" class="form-control form-control-lg" />
                              <label class="form-label" for="form2Example27">Phone</label>
                            </div>

                            <div class="form-outline mb-4">
          
                            <div class="form-outline mb-4">
                              <input type="password" id="form2Example27" name="passf" class="form-control form-control-lg" />
                              <label class="form-label" for="form2Example27">Password</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="file" name="files" id="form2Example17" class="form-control form-control-lg" style="font-size: 15px;" />
                                <label class="form-label mt-2" for="form2Example17">upload your picture</label>
                              </div>
          
                            <div class="pt-1 mb-4">
                              <button class="btn btn-dark btn-lg btn-block" name="submit" type="submit">Register</button>
                            </div>
          
                           
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">have an account? <a href="index.php"
                                style="color: #393f81;">Login here</a></p>
                            <a href="#!" class="small text-muted">Terms of use.</a>
                            <a href="#!" class="small text-muted">Privacy policy</a>
                          </form>
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>

</html>