<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $courseYear = $_POST["courseYear"];
    $enrolled = $_POST["enrolled"];
    $subject = $_POST["subject"];
    $grade = $_POST["grade"];

    echo '<style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #studentInfo {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #007acc;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        strong {
            color: #007acc;
        }
    </style>';


    echo '<div id="studentInfo">';
    echo "<h2>Student Information:</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Middle Name:</strong> $middleName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Date of Birth (or Age):</strong> $dob</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Course and Year:</strong> $courseYear</p>";
    echo "<p><strong>Enrolled:</strong> $enrolled</p>";
    echo "<p><strong>Subject and Grade:</strong> $subject - $grade</p>";
    echo '</div>';
} else {
    echo "Invalid request method!";
}
?>
