<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $score = htmlspecialchars($_POST["score"]);

    $to = "keira.jarvis@wearecodenation.com";
    $subject = "Quiz score submission";
    $message = "Student Name: {$name}\nScore: {$score}";
    $headers = "From: no-reply@wearecodenation.com\r\nContent-type: text/plain; charset=utf-8";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for submitting your score!";
    } else {
        echo "Error: Unable to send email. Please try again.";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
