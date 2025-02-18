<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $_SESSION['users'])) {
        $error = 'Username already exists';
    } else {
        $_SESSION['users'][$username] = $password;
        $_SESSION['username'] = $username;
        header('Location: confirmationuserid.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f0f0f0; }
        .container { max-width: 400px; margin: 50px auto; background-color: #E3B53C; padding: 20px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }
        h2 { margin-bottom: 20px; text-align: center; }
        .error { color: red; text-align: center; }
        input { width: calc(100% - 24px); padding: 12px; margin: 10px 0; border: 1px solid #ccc; border-radius: 6px; }
        button { width: 100%; padding: 12px; background-color: #4CAF50; color: white; border: none; border-radius: 6px; cursor: pointer; }
        button:hover { background-color: #E84040; }
        @media (max-width: 500px) {
            .container { width: 90%; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create User</h2>
        <?php if (!empty($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="register">Create</button>
        </form>
    </div>
</body>
</html>