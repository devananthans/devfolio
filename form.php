<?php
    // PHP Mail Handler - Embedded in HTML
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
        // Sanitize input
        $name = htmlspecialchars(trim($_POST['name']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars(trim($_POST['message']));
        
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    showAlert('Invalid email address', 'error');
                });
            </script>";
            exit;
        }
        
        // Recipient email
        $to = "devananthan25@gmail.com";
        $subject = "New Contact Form Submission from " . $name;
        
        // Email body
        $body = "Name: " . $name . "\n";
        $body .= "Email: " . $email . "\n\n";
        $body .= "Message:\n" . $message;
        
        // Headers
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    showAlert('Message sent successfully! We will get back to you soon.', 'success');
                    document.getElementById('contactForm').reset();
                });
            </script>";
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    showAlert('Failed to send message. Please try again or contact directly.', 'error');
                });
            </script>";
        }
    }
    ?>