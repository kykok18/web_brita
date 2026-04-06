<?php
session_start();

if (isset($_SESSION['admin'])) {
    header("Location: ../admin/dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #1f2937;
            display: flex;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            max-width: 400px;
            width: 100%;
            margin: auto;
        }

        .card {
            border-radius: 12px;
        }

        .btn-primary {
            background-color: #2563eb;
            border: none;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <div class="card shadow-lg">
            <div class="card-body">

                <h4 class="text-center mb-3">Login</h4>

                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger">Login gagal / captcha salah!</div>
                <?php endif; ?>

                <form method="POST" action="proses_login.php">

                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <!-- CAPTCHA -->
                    <div class="mb-3">
                        <label>Captcha (Case Sensitive)</label>
                        <div class="d-flex align-items-center gap-2">
                            <img src="captcha.php" id="captcha-img">
                            <button type="button" class="btn btn-sm btn-secondary" onclick="refreshCaptcha()">↻</button>
                        </div>
                        <input type="text" name="captcha" class="form-control mt-2" required>
                    </div>

                    <button class="btn btn-primary w-100">Login</button>

                </form>

            </div>
        </div>
    </div>

    <script>
        function refreshCaptcha() {
            document.getElementById('captcha-img').src = 'captcha.php?' + Date.now();
        }
    </script>

</body>

</html>