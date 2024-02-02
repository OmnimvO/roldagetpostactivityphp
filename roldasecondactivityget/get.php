<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="style.css" class="style">
</head>
<body>
    <h2>Student Information Form</h2>
    <form action="" method="get">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" name="middle_name"><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" required><br>

        <label for="age">Age:</label>
        <input type="text" name="age" required><br>

        <label for="course_year">Course and Year:</label>
        <input type="text" name="course_year" required><br>

        <label for="enrolled">Enrolled:</label>
        <input type="radio" name="enrolled" value="Yes" checked> Yes
        <input type="radio" name="enrolled" value="No"> No<br><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="grade">Grade:</label>
        <input type="number" name="grade" step="0.1" required><br>

        <input type="submit" value="Submit">
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["first_name"])) {
            $first_name = $_GET["first_name"];
            $middle_name = isset($_GET["middle_name"]) ? $_GET["middle_name"] : "";
            $last_name = $_GET["last_name"];
            $dob = $_GET["dob"];
            $age = $_GET["age"];
            $course_year = $_GET["course_year"];
            $enrolled = isset($_GET["enrolled"]) ? $_GET["enrolled"] : "No";
            $subject = $_GET["subject"];
            $grade = isset($_GET["grade"]) ? $_GET["grade"] : "";

            echo "<div class='result'>";
            echo "<h2>Student Information Result:</h2>";
            echo "First Name: $first_name<br>";
            echo "Middle Name: $middle_name<br>";
            echo "Last Name: $last_name<br>";
            echo "Date of Birth: $dob<br>";
            echo "Age: $age<br>";
            echo "Course and Year: $course_year<br>";
            echo "Enrolled: $enrolled<br>";
            echo "Subject: $subject<br>";
            echo "Grade: $grade<br>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
