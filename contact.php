<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Received</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <div class="container php-container">
        <div class="result-card shadow">
            <div class="mb-4">
                <h2 class="text-success fw-bold">Message Received!</h2>
                <p class="text-muted">Thank you for reaching out. We have received your details as shown below:</p>
            </div>

            <table class="data-table">
                <tr>
                    <td class="data-label">Full Name</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td class="data-label">Email Address</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td class="data-label">Your Message</td>
                    <td><?php echo nl2br($message); ?></td>
                </tr>
            </table>

            <div class="mt-5">
                <a href="index.html" class="btn btn-primary px-4">Back to Home</a>
                <a href="contact.html" class="btn btn-outline-secondary px-4">Send Another Message</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
} else {
    header("Location: contact.html");
    exit();
}
?>