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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body class="bg-success">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold d-flex" href="/">
                <img src="../icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                <span class="ps-2">Lunarbox</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active fw-semibold" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tài khoản
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Đăng nhập</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item fw-bold" href="./signup.php">Đăng ký</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main page -->
    <main class="d-flex justify-content-center">
        <form method="post" class="bg-white rounded p-4 mt-4" style="width: 330px;">
            <h3 class="mb-4">Đăng ký</h3>
            
            <!-- Inputs -->
            <div class="input-group mb-3">
                <span class="input-group-text" >
                    <i class="bi bi-person-fill"></i>
                </span>
                <input type="text" name="username" class="form-control p-2" placeholder="Tên người dùng">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </span>
                <input type="email" name="email" placeholder="Email" class="form-control p-2">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="bi bi-key-fill"></i>
                </span>
                <input type="password" name="password" placeholder="Mật khẩu" class="form-control p-2">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="bi bi-key-fill"></i>
                </span>
                <input type="password" name="confirm-password" placeholder="Xác nhận mật khẩu" class="form-control p-2">
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Hiển thị mật khẩu</label>
            </div>

            <button type="submit" class="btn btn-danger w-100 mt-3">Đăng ký</button>
            
        </form>
    </main>

</body>
</html>