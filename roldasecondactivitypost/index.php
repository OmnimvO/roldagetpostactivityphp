<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="style.css" class="style">
</head>
<body>

<form action="student_info.php" method="post">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" required><br>

    <label for="middleName">Middle Name:</label>
    <input type="text" name="middleName"><br>

    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" required><br>

    <label for="dob">Date of Birth:</label>
    <input type="text" name="dob" placeholder="YYYY-MM-DD"><br>

    <label for="age">Age:</label>
    <input type="text" name="age" required><br>

    <label for="courseYear">Course and Year:</label>
    <input type="text" name="courseYear" required><br>

    <label for="enrolled">Enrolled:</label>
    <input type="radio" name="enrolled" value="Yes" checked> Yes
    <input type="radio" name="enrolled" value="No"> No<br> <br>

    <label for="subjectGrade">Subject and Grade:</label>
    <input type="text" name="subject" placeholder="Subject"> 
    <input type="number" step="0.1" name="grade" placeholder="Grade"><br>

    <input type="submit" value="Submit">
</form>



</body>
</html>
