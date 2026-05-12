<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginEmail = $_POST['loginEmail'];
    $loginPass = $_POST['loginPassword'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Process</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="php-container">
        <div class="result-card">
            <?php if($loginEmail == "aboode20555@gmail.com" && $loginPass == "123456"): ?>
                <h2 class="text-primary">Welcome Back!</h2>
                <p>Login successful for: <strong><?php echo htmlspecialchars($loginEmail); ?></strong></p>
                <div class="alert alert-success mt-3">Redirecting to Home Page...</div>
                <?php header("refresh:3; url=index.html"); ?>
            <?php else: ?>
                <h2 class="text-danger">Access Denied!</h2>
                <p>The email or password you entered is incorrect.</p>
                <a href="signup.html" class="btn btn-danger mt-3">Try Again</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
<?php } ?>