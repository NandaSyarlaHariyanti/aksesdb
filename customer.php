<?php
include('conn.php');
$customer = "SELECT * FROM customers";

if (isset($_POST["search"])) {

    $customer = searchCustomer($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand">Nanda Syarla</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="customer.php">customer</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="product.php">product</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
     <table >
            <tr>

                <th > customerNumber </th>
                <th> customerName</th>
                <th> contactLastName</th>
                <th> contactFirstName</th>
                <th> phone</th>
                <th> adressLine1</th>
                <th> adressLine2</th>
                <th> city</th>
                <th> state</th>
                <th> postalCode</th>
                <th> country</th>
                <th> salesRepEmployeeNumber</th>
                <th> creditLimit</th>
            </tr>
            <?php
            $result = mysqli_query($conn, $customer);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" .$row["customerNumber"] . "</td>";
                echo "<td>" .$row["customerName"] . "</td>";
                echo "<td>" .$row["contactLastName"] . "</td>";
                echo "<td>" .$row["contactFirstName"] . "</td>";
                echo "<td>" .$row["phone"] . "</td>";
                echo "<td>" .$row["addressLine1"] . "</td>";
                echo "<td>" .$row["addressLine2"] . "</td>";
                echo "<td>" .$row["city"] . "</td>";
                echo "<td>" .$row["state"] . "</td>";
                echo "<td>" .$row["postalCode"] . "</td>";
                echo "<td>" .$row["country"] . "</td>";
                echo "<td>" .$row["salesRepEmployeeNumber"] . "</td>";
                echo "<td>" .$row["creditLimit"] . "</td>";
                echo "</tr>";
            }
            ?>
        </table> 
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

        
    </body>   
</html>


