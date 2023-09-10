<?php
require "config/config.php"; ?>

<?php
if(isset($_POST["submit"])){
    $name = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];
    if($name == "" || $email == "" || $password == "" || $rpassword == ""){
        echo "All Fiels are required" ;
    }
    elseif ($password != $rpassword) {
        echo "Passwords do not match";
    }
    else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $insert = $conn->prepare($sql);
        $insert->execute(
            [
                ":name"     => $name,
                ":email"    => $email,
                ":password" => $hashed_password,
            ]
        );

    }
}
?>

<?php include "header.php"; ?>
<!--  -->

<div class="container">
    <div class="container-fluid m-4">
            <div class="container">
            <form action="" method="post">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">UserName :</label>
                    <div class="col-sm-10">
                        <input type="text" name="fname" class="form-control" id="inputPassword" placeholder="Full Name ...">
                        
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="staticEmail" placeholder="Email ...">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password ...">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" name="" class="col-sm-2 col-form-label">Repeat Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="rpassword" class="form-control" id="inputPassword" placeholder="Password ...">
                    </div>
                </div>
                <div class="mb-3">
                    <a href="login.php">
                        Already you have account?
                    </a>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
        
</div>

<!--  -->
<?php include "footer.php"; ?>