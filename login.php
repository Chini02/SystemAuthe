<?php


?>

<?php include "header.php"; ?>
<!--  -->

<div class="container">
    <div class="container-fluid m-4">
            <div class="container position-absolute top-50 start-50 translate-middle">
            <form action="" methode="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <a href="register.php">
                        Register
                    </a>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
        
</div>

<!--  -->
<?php include "footer.php"; ?>