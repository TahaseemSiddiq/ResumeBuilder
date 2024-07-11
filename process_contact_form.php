<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = clean_input($_POST['fullName']);
    $phoneNo = clean_input($_POST['phoneNo']);
    $emailAddr = clean_input($_POST['emailAddr']);
    $contactMethod = clean_input($_POST['contactMethod']);

    // Basic validation
    if (empty($fullName) || empty($phoneNo) || empty($emailAddr) || empty($contactMethod)) {
        echo "Please fill out all fields.";
        // You can redirect back to the form or handle errors as needed
        exit;
    }

    // Process the form data (e.g., send an email, store in database)
    // Example: send email notification
    $to = "your-email@example.com";
    $subject = "Contact Form Submission";
    $message = "Name: $fullName\n";
    $message .= "Phone: $phoneNo\n";
    $message .= "Email: $emailAddr\n";
    $message .= "Contact Method: $contactMethod\n";

    // Uncomment to send email (requires a working mail server setup)
    // mail($to, $subject, $message);

    // Success message
    echo "Thank you for your submission! We will contact you shortly.";
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.html");
    exit;
}

// Function to sanitize input data
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

