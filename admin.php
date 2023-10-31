<?php
// Header File Include
include_once("temp/header.php");
?>
    <main id="main" class="mx-2">
        <section class="mt-5">
            <h2 class="mb-3">Admin Log In</h2>
            <form class="d-flex flex-column">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <a href="admin_dashbord.php?id=admin" class="btn btn-primary mt-3">Log In</a>
              </form>
        </section>
    </main>
<?php
// Footer File Include
include_once("temp/footer.php");
?>