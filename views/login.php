<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include '../layout/hlogin.html'; ?>

    <main>
        <div class="login-card">
            <h1>Login</h1>
            <form action="../views/dashboard.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="extra-options">
                    <label>
                        <input type="checkbox" values="Remember">
                        Remember me
                    </label>
                    <a href="../views/forgot_pass.php">Forgot Password</a>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </main>


    <?php include '../layout/footer.html'; ?>
</body>
</html>