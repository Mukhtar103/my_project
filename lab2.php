
<?php
$number = 5;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 500px;
            margin: 40px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Multiplication Table of <?php echo $number; ?></h2>

    <table>
        <tr>
            <th>Number</th>
            <th>×</th>
            <th>Multiplier</th>
            <th>Result</th>
        </tr>

        <?php

       
        for ($i = 1; $i <= 10; $i++) {

            $result = $number * $i;

            echo "<tr>";
            echo "<td>$number</td>";
            echo "<td>×</td>";
            echo "<td>$i</td>";
            echo "<td>$result</td>";
            echo "</tr>";
        }

        ?>

    </table>

</div>

</body>
</html>

