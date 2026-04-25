<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Đăng nhập | Lunarbox</title>

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
                        <a class="nav-link  active fw-semibold dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tài khoản
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fw-semibold" href="./login.php">Đăng nhập</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="./signup.php">Đăng ký</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main page -->
    <main class="d-flex justify-content-center">
        <form method="post" class="bg-white p-4 my-4 rounded" style="width: 330px">

            <!-- Message output -->
            <div id="message" class="bg-danger w-100 text-white text-center mb-3 rounded p-2 d-none" style="font-size: 14px;"></div>

            <h2 class="mb-3">Đăng nhập</h2>
            <!-- Inputs -->
            <div class="form-floating my-2">
                <input type="text" name="username" class="form-control" placeholder="">
                <label>Tên tài khoản</label>
            </div>
            <div class="form-floating my-2">
                <input type="password" name="password" class="form-control password" placeholder="">
                <label>Mật khẩu</label>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox">
                <label class="form-check-label">Hiển thị mật khẩu</label>
            </div>
            <script src="../js/show-password.js"></script>

            <button type="submit" class="btn btn-danger w-100" id="submit">Đăng nhập</button>
            <p class="text-center mt-3 mb-0">Chưa có tài khoản? Đăng ký tại <a href="./signup.php" class="link-secondary">đây</a></p>
        </form>
    </main>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // Get form datas
            $username = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);

            // Testing mechanic
            $user = ["username" => "Phatcraft", "password" => "phat0727"];
            if($username == $user["username"] && $password == $user['password']){
                ?>
                    <script src="../js/login-success.js"></script>
                <?php
            }else{
                ?>
                    <script src="../js/wrong-username-password.js"></script>
                <?php
            }

        }
    ?>

</body>
</html>