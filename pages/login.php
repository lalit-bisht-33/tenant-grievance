<div class="d-flex justify-content-center align-items-center flex-column">
    <div class="fw-bold fs-1">
   Login
    </div>

<form class="mt-4 w-25" method="POST" action="server/formHandle.php">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1">
  </div>
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="login" >Submit</button>
  <a href="?signup" class="text-danger ms-3 text-decoration-none">Signup</a>
</form>
</div>