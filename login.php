<?php
require "config/config.php";

if(isset($_SESSION['username'])) {
    header("location: index.php");
}
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"]; // Corrected variable name
    if(empty($email) || empty($password)){
        echo "All fields are required";
    } else {
        // Use prepared statements to prevent SQL injection
        $sql = "SELECT email, password FROM users WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email); // Bind the email parameter
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0) {
            if (password_verify($password, $data["password"])){
                $_SESSION["name"] = $data["name"];
                $_SESSION["email"] = $data["email"];
                header("location: index.php");
            } else {
                echo "Email or password is incorrect";
            }
        } else {
            echo "Email or password is incorrect";
        }
    }
}

?>

<?php include "inc/header.php"; ?>
<!--  -->

<div class="container">
    <div class="container-fluid m-4">
            <div class="container position-absolute top-50 start-50 translate-middle">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <a href="register.php">
                        Register
                    </a>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
        
</div>

<!--  -->
<?php include "inc/footer.php"; ?>
