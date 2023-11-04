<?php
// Header File Include
include_once("temp/header.php");
?>
    <main id="main" class="mx-2">
        <section class="mt-5">
            <h2 class="mb-3">User Log In</h2>
            <span id="usr_error_cont" class="text-danger"></span>
            <form class="d-flex flex-column">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="usr_log_email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="usr_log_pwd" placeholder="Password">
                </div>
                <a id="usr_login_vrfy" href="#" class="btn btn-primary mt-3">Log In</a>
              </form>
        </section>
    </main>
<?php
// Footer File Include
include_once("temp/footer.php");
?>