
<?php

$studentName = "Ahmad";
$studentID = "ST1001";
$subject = "Artificial Intelligence";
$marks = 75;

if ($marks >= 80) {
    $grade = "A";
} elseif ($marks >= 70) {
    $grade = "B";
} elseif ($marks >= 60) {
    $grade = "C";
} elseif ($marks >= 50) {
    $grade = "D";
} else {
    $grade = "F";
}


if ($marks >= 50) {
    $result = "Passed";
    $statusMessage = "Congratulations! You have passed the subject.";
} else {
    $result = "Failed";
    $statusMessage = "You need to improve your marks.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Result Card</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .result-card {
            width: 400px;
            margin: 50px auto;
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        h2 {
            text-align: center;
        }

        .info {
            margin: 10px 0;
        }

        .result {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        .status {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>

<div class="result-card">

    <h2>Student Result Card</h2>

    <div class="info">
        <strong>Student Name:</strong>
        <?php echo $studentName; ?>
    </div>

    <div class="info">
        <strong>Student ID:</strong>
        <?php echo $studentID; ?>
    </div>

    <div class="info">
        <strong>Subject:</strong>
        <?php echo $subject; ?>
    </div>

    <div class="info">
        <strong>Marks:</strong>
        <?php echo $marks; ?>
    </div>

    <div class="info">
        <strong>Grade:</strong>
        <?php echo $grade; ?>
    </div>

    <div class="result">
        <?php echo $result; ?>
    </div>

    <div class="status">
        <?php echo $statusMessage; ?>
    </div>

</div>

</body>
</html>

