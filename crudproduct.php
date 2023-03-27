<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productCode = $_POST["productCode"];
    $productName = $_POST["productName"];
    $productLine = $_POST["productLine"];
    $productScale = $_POST["productScale"];
    $productVendor = $_POST["productVendor"];
    $productDescription = $_POST["productDescription"];
    $quantityInStock = $_POST["quantityInStock"];
    $buyPrice = $_POST["buyPrice"];
    $MSRP = $_POST["MSRP  "];

    $sql = "INSERT INTO products (`productCode`,`productName`,`productLine`,`productScale`,`productVendor`,`productDescription`,`quantityInStock`,`buyPrice`,`MSRP`) VALUES ('$productCode','$productName','$productLine','$productScale','$productVendor','$productDescription','$quantityInStock','$buyPrice','$MSRP')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
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
                <li class="nav-item">
                <a class="nav-link" href="crudcustomer.php">create customer</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="crudproduct.php">create product</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <div>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

  
        <label for="productCode "> Product Code :</label>
        <input type="text" class="form-control" id="productCode " name="productCode " required><br><br>

        <label for="productName "> Product Name :</label>
        <input type="text" class="form-control" id="productName " name="productName " required><br><br>

        <label for="productLine">product Line</label>
        <select class="form-select" name="productLine" id="productLine">
        <option value="classic cars"> Classic Cars</option>
        <option value="motorcycle"> Motorcycles</option>
        <option value="planes"> Planes</option>
        <option value="ships"> Ships</option>
        <option value="trains"> Trains</option>
        <option value="trucks and buses"> Trucks and Buses</option>
        <option value="vintage cars"> Vintage Cars</option>
        </select>
        <br><br>

        <label for="productScale ">  product Scale:</label>
        <input type="text" class="form-control" id="productScale " name=" productScale" required><br><br>

        <label for="productVendor "> Product Vendor :</label>
        <input type="text" class="form-control" id="productVendor " name="productVendor " required><br><br>

        <label for=" productDescription"> product Description :</label>
        <input type="text" class="form-control" id="productDescription " name=" productDescription" required><br><br>

        <label for=" quantityInStock">  quantity In Stock:</label>
        <input type="text" class="form-control" id="quantityInStock " name="quantityInStock " required><br><br>

        <label for=" buyPrice"> Buy Price :</label>
        <input type="text" class="form-control" id="buyPrice " name="buyPrice " required><br><br>

        <label for=" MSRP"> MSRP :</label>
        <input type="text" class="form-control" id="MSRP " name=" MSRP" required><br><br>

        

        <input type="submit" value="Create">


</form>

</div>

