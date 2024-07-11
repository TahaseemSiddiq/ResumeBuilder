<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Custom CSS */
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Thank you for your submission!</h4>
            <p>We have received the following details:</p>
            <?php
            session_start();
            if (isset($_SESSION['contact_form_data'])) {
                $formData = $_SESSION['contact_form_data'];
                echo "<ul>";
                echo "<li><strong>Full Name:</strong> " . htmlspecialchars($formData['fullName']) . "</li>";
                echo "<li><strong>Phone No.:</strong> " . htmlspecialchars($formData['phoneNo']) . "</li>";
                echo "<li><strong>Email Address:</strong> " . htmlspecialchars($formData['emailAddr']) . "</li>";
                echo "<li><strong>Contact Method:</strong> " . htmlspecialchars($formData['contactMethod']) . "</li>";
                echo "</ul>";
            } else {
                echo "<p>No data found.</p>";
            }
            ?>
            <hr>
            <p class="mb-0">We will contact you shortly.</p>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

