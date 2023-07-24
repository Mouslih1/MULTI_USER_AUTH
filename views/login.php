<?php

$title = "Multi user role authentification";
ob_start();

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 bg-light mt-5 px-0">
            <form action="index.php?controller=userController&action=loginAction" method="POST" class="p-4">
                <div class="form-group mb-3">
                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
                </div>
                <div class="form-group lead mb-3">
                    <label for="userType">I'm :</label>
                    <input type="radio" class="custom-radio" name="user_type" value="student" required>&nbsp;Student |
                    <input type="radio" class="custom-radio" name="user_type" value="teacher" required>&nbsp;Teacher |
                    <input type="radio" class="custom-radio" name="user_type" value="student" required>&nbsp;Admin
                </div>
                <div class="form-group mb-3">
                    <input type="submit" name="login" class="form-control form-control-lg btn btn-danger btn-block">
                </div>
            </form>
        </div>
    </div>
</div>



<?php

$content = ob_get_clean();
include_once("views/layout.php");

?>