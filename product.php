<?php
include('conn.php');
$products = "SELECT * FROM products";

if (isset($_POST["search"])) {

    $products = searchProducts($_POST["keyword"]);
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
        
        <table>
            <tr>
                <th> productCode </th>
                <th> productName</th>
                <th> productLine</th>
                <th> productScale</th>
                <th> productVendor</th>
                <th> productDescription</th>
                <th> quantityInStock</th>
                <th> buyPrice</th>
                <th> MSRP</th>
            </tr>
            <?php
            $result = mysqli_query($conn, $products);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" .$row["productCode"] . "</td>"; 
                echo "<td>" .$row["productName"] . "</td>";
                echo "<td>" .$row["productLine"] . "</td>";
                echo "<td>" .$row["productScale"] . "</td>";
                echo "<td>" .$row["productVendor"] . "</td>";
                echo "<td>" .$row["productDescription"] . "</td>";
                echo "<td>" .$row["quantityInStock"] . "</td>";
                echo "<td>" .$row["buyPrice"] . "</td>";
                echo "<td>" .$row["MSRP"]. "<br>";
                echo "</tr>";
            }
            ?>
        </table> 
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

        
    </body>   
</html>
