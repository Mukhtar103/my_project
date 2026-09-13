
<?php

define("TAX_RATE", 5);


$products = [
    ["name" => "Laptop", "price" => 800, "quantity" => 2],
    ["name" => "Keyboard", "price" => 50, "quantity" => 3],
    ["name" => "Mouse", "price" => 25, "quantity" => 2],
    ["name" => "Monitor", "price" => 200, "quantity" => 1]
];



function calculateLineTotal($price, $quantity) {
    return $price * $quantity;
}


function calculateDiscount($subtotal) {

    if ($subtotal >= 1000) {
        return $subtotal * 0.10; 
    } elseif ($subtotal >= 500) {
        return $subtotal * 0.05;
    } else {
        return 0;
    }
}


function calculateTax($amount) {
    return $amount * (TAX_RATE / 100);
}



function calculateFinalPayable($subtotal, $discount, $tax) {
    return $subtotal - $discount + $tax;
}

$subtotal = 0;

foreach ($products as $product) {
    $subtotal += calculateLineTotal(
        $product["price"],
        $product["quantity"]
    );
}



$discount = calculateDiscount($subtotal);


$amountAfterDiscount = $subtotal - $discount;


$tax = calculateTax($amountAfterDiscount);


$finalTotal = calculateFinalPayable(
    $subtotal,
    $discount,
    $tax
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Invoice</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .invoice {
            width: 750px;
            margin: 40px auto;
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #999;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }

        .totals {
            width: 300px;
            margin-left: auto;
            margin-top: 20px;
        }

        .total-row {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .final {
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="invoice">

    <h2>Product Invoice</h2>

    <table>

        <tr>
            <th>No.</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Line Total</th>
        </tr>

        <?php

        $number = 1;

        foreach ($products as $product) {

           
            $lineTotal = calculateLineTotal(
                $product["price"],
                $product["quantity"]
            );

            echo "<tr>";
            echo "<td>" . $number . "</td>";
            echo "<td>" . $product["name"] . "</td>";
            echo "<td>$" . number_format($product["price"], 2) . "</td>";
            echo "<td>" . $product["quantity"] . "</td>";
            echo "<td>$" . number_format($lineTotal, 2) . "</td>";
            echo "</tr>";

            $number++;
        }

        ?>

    </table>


    <div class="totals">

        <div class="total-row">
            <strong>Subtotal:</strong>
            $<?php echo number_format($subtotal, 2); ?>
        </div>

        <div class="total-row">
            <strong>Discount:</strong>
            $<?php echo number_format($discount, 2); ?>
        </div>

        <div class="total-row">
            <strong>Tax (<?php echo TAX_RATE; ?>%):</strong>
            $<?php echo number_format($tax, 2); ?>
        </div>

        <div class="final">
            Final Total:
            $<?php echo number_format($finalTotal, 2); ?>
        </div>

    </div>

</div>

</body>
</html>
