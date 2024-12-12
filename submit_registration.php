<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $registration_date = $_POST['registration_date'];
    $student_class = $_POST['student_class'];
    $registration_for_class = $_POST['registration_for_class'];
    $contact_number = $_POST['contact_number'];

    // Email details
    $to = "aliyanmaqsood620@gmail.com"; // Replace with your email address
    $subject = "New Student Registration Submission";
    $message = "
    <html>
    <head>
        <title>New Registration</title>
    </head>
    <body>
        <h2>New Registration Details</h2>
        <p><strong>Student Name:</strong> $student_name</p>
        <p><strong>Father's Name:</strong> $father_name</p>
        <p><strong>Registration Date:</strong> $registration_date</p>
        <p><strong>Current Class:</strong> $student_class</p>
        <p><strong>Registration For Class:</strong> $registration_for_class</p>
        <p><strong>Contact Number:</strong> $contact_number</p>
    </body>
    </html>
    ";

    // Headers for email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: aliyanmaqsood620@gmail.com" . "\r\n"; // Replace with a valid sender email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Registration submitted successfully.";
    } else {
        echo "Error sending email. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
