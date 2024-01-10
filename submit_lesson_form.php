<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/Exception.php';

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $numStudents = $_POST["numStudents"];
    $lessonMode = $_POST["lessonMode"];
    $expectations = $_POST["expectations"];
    $otherInfo = $_POST["otherInfo"];

    // Create or open the CSV file
    $csvFile = 'lesson_data.csv';

    // Check if the file exists
    $fileExists = file_exists($csvFile);

    // Check if the file has the required headers for the maximum number of students
    $requiredHeaders = array("Name", "Address", "Email", "Phone", "Number of Students", "Lesson Mode", "Expectations", "Other Info");

    for ($i = 1; $i <= $numStudents; $i++) {
        $requiredHeaders[] = "Student {$i} Name";
        $requiredHeaders[] = "Student {$i} Age";
        $requiredHeaders[] = "Student {$i} Class";
        $requiredHeaders[] = "Student {$i} Subjects";
    }

    if (!$fileExists || !csvHasHeaders($csvFile, $requiredHeaders)) {
        // If the file does not exist or does not have the required headers, update the header
        file_put_contents($csvFile, implode(',', $requiredHeaders) . PHP_EOL, FILE_APPEND);
    }

    // Format the data and append it to the CSV file
    $csvData = array($name, $address, $email, $phone, $numStudents, $lessonMode, $expectations, $otherInfo);

    for ($i = 1; $i <= $numStudents; $i++) {
        $studentName = $_POST["student{$i}Name"];
        $studentAge = $_POST["student{$i}Age"];
        $studentClass = $_POST["student{$i}Class"];
        $studentSubjects = $_POST["student{$i}Subjects"];
        $csvData[] = $studentName;
        $csvData[] = $studentAge;
        $csvData[] = $studentClass;
        $csvData[] = $studentSubjects;
    }

    file_put_contents($csvFile, implode(',', $csvData) . PHP_EOL . PHP_EOL, FILE_APPEND); // Add an empty line after each submission

    // Prepare the email message
    $subject = "New Lesson Form Submission From $name";
    $message = "Name: $name\nAddress: $address\nEmail: $email\nPhone: $phone\nNumber of Students: $numStudents\nLesson Mode: $lessonMode\nExpectations: $expectations\nOther Info: $otherInfo\n\n";

    for ($i = 1; $i <= $numStudents; $i++) {
        $studentName = $_POST["student{$i}Name"];
        $studentAge = $_POST["student{$i}Age"];
        $studentClass = $_POST["student{$i}Class"];
        $studentSubjects = $_POST["student{$i}Subjects"];
        $message .= "Student $i Information:\n";
        $message .= "Name: $studentName\n";
        $message .= "Age: $studentAge\n";
        $message .= "Class: $studentClass\n";
        $message .= "Subjects: $studentSubjects\n\n";
    }

    // Send an email using PHPMailer
    $to = "info@icandit.com"; // Replace with your email address

    $mail = new PHPMailer(true);

    try {
        // Use the admin email address as the "To" address
        $mail->addAddress($to);
    
        // Set the "Reply-To" address to the user's email
        $mail->addReplyTo($email, $name);
    
        $mail->Subject = $subject;
        $mail->Body = $message;
    
        $mail->send();

       // Redirect to Thank You page
       header("Location: thank_you.html");
       exit();
   } catch (Exception $e) {
       // Handle email sending error
       header("HTTP/1.1 500 Internal Server Error");
       echo "Error sending email: {$mail->ErrorInfo}";
       exit();
   }
} else {
   // Handle invalid request
   header("HTTP/1.1 400 Bad Request");
   echo "Invalid request";
}

/**
 * Check if the CSV file has the required headers.
 *
 * @param string $csvFile The path to the CSV file.
 * @param array $requiredHeaders The array of required headers.
 * @return bool True if the CSV file has the required headers, false otherwise.
 */
function csvHasHeaders($csvFile, $requiredHeaders) {
    $existingHeaders = fgetcsv(fopen($csvFile, 'r'));
    return count(array_diff($requiredHeaders, $existingHeaders)) === 0;
}
?>
