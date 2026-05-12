<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password']; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="php-container">
        <div class="result-card">
            <h2 class="text-success mb-4">Account Created!</h2>
            <p>Welcome to the community, <strong><?php echo htmlspecialchars($user); ?></strong>.</p>
            
            <table class="data-table">
                <tr><td class="data-label">Username:</td><td><?php echo htmlspecialchars($user); ?></td></tr>
                <tr><td class="data-label">Email:</td><td><?php echo htmlspecialchars($email); ?></td></tr>
                <tr><td class="data-label">Status:</td><td><span class="badge bg-success">Active</span></td></tr>
            </table>

            <a href="signup.html" class="btn btn-outline-primary mt-4">Go to Login</a>
        </div>
    </div>
</body>
</html>
<?php } ?>