<div id="" class="bg-dark">
  <div class="container">
  <footer class="footer pt-4 pt-md-5">
    <div class="row">
      <div class="col-6 col-md">
      <a><i class="fa fa-phone" aria-hidden="true"></i></a><h5 class="d-inline text-white">Contact</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-white text-muted" href="tel: +2348065423935"><small>+2348135956854</small></a></li>
          <li><a class="text-white text-muted" href="email: Flourishhoteld565@gmail.com"><small>macbernards@hotmail.com</small></a></li>
          <li><small class="text-white text-muted font-italic">Monday-Sunday (24hours)</small></li>
        </ul>
      </div>
      <div class="col-6 col-md">
      <a><i class="fa fa-map-marker" aria-hidden="true"></i></a><h5 class="d-inline text-white">Address</h5>
        <ul class="list-unstyled text-small">
          <li><small class=" text-muted">Gombe State,<br>Nigeria. <br>
							<span><a class="text-white font-italic" href="https://www.google.com/maps/dir//Flourish+Hotels/data=!4m8!4m7!1m0!1m5!1m1!1s0x10ffda6687e11fc1:0x9917a51cdfcae983!2m2!1d11.1802897!2d10.276724">Click here to get Map direction.</a></small></span>
          </li>
        </ul>
      </div>
      <div class="col-6 col-md">
      <p class="text-muted"><small>How do you like our services?<br>Please give us a comment</small></p>
      <a href="" id="button" role="document" class="btn btn-sm btn-outline-info p-1" data-toggle="modal" data-target="#modalLoginForm">Make a Comment</a>
	
        <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
          <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header form-label-group text-center">
                  <h4 class="modal-title w-100 font-weight-bold text-center">Comment</h4>
                  <input class="close bg-transparent border-0 text-danger" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body mx-3">
                  <div class="md-form form-label-group mb-1">
                    <input validate required autofocus type="email" id="fullName" class="form-control form-control-sm" name="fullName" placeholder="Full Name" value="<?php echo htmlspecialchars($fullName) ?>">
                    <label data-error="wrong" data-success="right" for="fullName">Names:</label>
                    <div class="text-danger"><?php echo $errors['fullName']; ?></div>
                  </div>
                  <div class="md-form form-label-group mb-1">
                    <input validate required type="email" id="defaultForm-email" class="form-control form-control-sm" name="Email" placeholder="Email Address" value="<?php echo htmlspecialchars($email) ?>">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Email:</label>
                    <div class="text-danger"><?php echo $errors['Email']; ?></div>
                  </div>
                  <div class="md-form form-label-group mb-1">
                    <textarea rows="4" class="form-control" name="comment" id="comment" required placeholder="Enter your Comment here" value="<?php echo htmlspecialchars($comment) ?>"></textarea>
                    <label data-error="wrong" data-success="right" for="comment"></label>
                    <div class="text-danger"><?php echo $errors['comment']; ?></div>
                  </div>
                </div>
                <div class="modal-footer form-label-group d-flex justify-content-center">
                  <input type="submit" class="btn  btn-info" name="Submit" value="Submit" >
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      
      <div class="col-6 col-md">
        <img class="mb-2" src="assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <span class="social-links text-center">
          <a href="#" class="twitter"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#" class="facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </span>
        <small class="d-block mb-3 text-muted">&copy; Copyright <br> <strong>MacBernard Hotel Limited</strong> <br> All Rights Reserved.</small>
      </div>
      <div class="col-12 col-xs">
        <p class="float-right">
          <a class="text-muted" href="#">Back to top</a>
        </p>
      </div>
    </div>
  </footer>
</div>
  </div>




<footer class="bg-dark footer mt-auto py-3">
    <div class="text-muted text-center credits">
        <span class="font-italic">Designed by</span> <strong><a class="text-muted" href="email: macbernards@hotmail.com">MacBernard</a></strong>
    </div>
</footer>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/offcanvas.js"></script>
    
