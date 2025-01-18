<div class="d-flex justify-content-center align-items-center flex-column">
    <div class="fw-bold fs-1">
   SignUp
    </div>

    
    <form class="justify-content-center w-25" method="POST" action="server/formHandle.php">

  <div class="mb-3 mt-4">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">mobile</label>
    <input type="text" class="form-control" name="mobile" id="exampleInputPassword1">
  </div>
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="signup" >Submit</button>
  <div class="mt-3">
    <p>Already have an account? <a href="?login" class="text-danger text-decoration-none"> Login</a></p>
    
  </div>
</form>
</div>