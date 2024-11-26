<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turam</title>
    <link href="style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="sigma-wrapper">
        <form method="POST" action="aksilogin.php">
            <h1>Login</h1>
            <div class="rizz-username">
                <input type="text" name="username" placeholder="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="rizz-username">
                <input type="password" name="password" placeholder="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="ingat">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password</a>
            </div>

            <button type="submit" class="btn">Login</button>
            <div class="buat">
                <p>Gak punya akun?</p>
                <a href="admin.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>