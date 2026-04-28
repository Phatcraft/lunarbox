<?php
    session_start();
    require("../../config/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Đăng ký | Lunarbox</title>

    <!-- CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body class="bg-success">
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold d-flex" href="../">
                <img src="../icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                <span class="ps-2">Lunarbox</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active fw-semibold dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tài khoản
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./login.php">Đăng nhập</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item fw-semibold" href="./signup.php">Đăng ký</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Message output -->
    <div id="message" class="bg-danger w-100 text-white text-center mb-1 p-2 d-none"></div>


    <!-- Main page -->
    <main class="d-flex justify-content-center">
        <form method="post" class="bg-white p-4 my-2 rounded" style="width: 330px">

            <h2 class="mb-3">Đăng ký</h2>
            <!-- Inputs -->
            <div class="form-floating my-2">
                <input type="text" name="username" class="form-control" placeholder="">
                <label>Tên tài khoản</label>
            </div>

            <div class="form-floating my-2">
                <input type="email" name="email" class="form-control" placeholder="">
                <label>Email</label>
            </div>

            <div class="form-floating my-2">
                <input type="password" name="password" class="form-control password" placeholder="">
                <label>Mật khẩu</label>
            </div>

            <div class="form-floating my-2">
                <input type="password" name="confirm-password" class="form-control password" placeholder="">
                <label>Xác nhận mật khẩu</label>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox">
                <label class="form-check-label">Hiển thị mật khẩu</label>
            </div>
            <script src="../js/show-password.js"></script>

            <button type="submit" class="btn btn-danger w-100" id="submit">Đăng ký</button>
            <p class="text-center mt-3 mb-0">Đã có tài khoản? Đăng nhập tại <a href="./login.php" class="link-secondary">đây</a></p>
        </form>
    </main>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // Get form datas
            $username = htmlspecialchars($_POST["username"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);
            $confirm = htmlspecialchars($_POST["confirm-password"]);

            // Wrong password and confirm pass
            if($password != $confirm){
                ?>
                    <script src="../js/wrong-password-confirm.js"></script>
                <?php
            }else{
                
                $id = bin2hex(random_bytes(16));
                $hash = password_hash($password, PASSWORD_BCRYPT);

                $sql = $conn->prepare("INSERT INTO users(userID, username, email, password) VALUES (?,?,?,?)");    
                $sql->bind_param("ssss", $id, $username, $email, $hash);

                try{
                    $sql->execute();
                    $_SESSION["user"] = [
                        "id" => $id,
                        "token" => bin2hex(random_bytes(32))
                    ];
                    ?>
                        <script src="../js/signup-success.js"></script>
                    <?php
                }catch(mysqli_sql_exception){
                    ?>
                        <script src="../js/username-email-exists.js"></script>
                    <?php
                }

            }

        }
    ?>

</body>
</html>