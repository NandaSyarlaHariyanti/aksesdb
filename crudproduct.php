<?php
include('conn.php');
$status ='';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $productLine = $_POST['productLine'];
    $productScale = $_POST['productScale'];
    $productVendor = $_POST['productVendor'];
    $productDescription = $_POST['productDescription'];
    $quantityInStock = $_POST['quantityInStock'];
    $buyPrice = $_POST['buyPrice'];
    $MSRP = $_POST['MSRP'];

    $sql = "INSERT INTO products ( productCode , productName , productLine , productScale , productVendor , productDescription , quantityInStock , buyPrice , MSRP ) VALUES ('$productCode','$productName','$productLine','$productScale','$productVendor','$productDescription','$quantityInStock','$buyPrice','$MSRP')";
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

        <label for="productCode" class="form-label">Product Code</label>
        <input type="text" class="form-control" name="productCode" id="ProductCode" >

        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="productName" id="productName" >

        <label for="productLine" class="form-label">Product Line</label>
        <select class="form-select" name="productLine" id="productLine">
          <option selected>Choose Product Line</option>
          <option value="classic cars">Classic Cars</option>
          <option value="motorcycles">Motorcycles</option>
          <option value="planes">Planes</option>
          <option value="ships">Ships</option>
          <option value="trains">Trains</option>
          <option value="trucks and buses">Trucks and Buses</option>
          <option value="vintage cars">Vintage Cars</option>
        </select>
        
        <label for="productScale" class="form-label">Product Scale</label>
        <input type="text" class="form-control" name="productScale" id="productScale" >
        
        <label for="productVendor" class="form-label">Product Vendor</label>
        <input type="text" class="form-control" name="productVendor" id="productVendor" >
        
        <label for="productDescription" class="form-label">Product Description</label>
        <input type="text" class="form-control" name="productDescription" id="productDescription" >
        
        <label for="quantityInStock" class="form-label">Quantity in Stock</label>
        <input type="text" class="form-control" name="quantityInStock" id="quantityInStock" >
        
        <label for="buyPrice" class="form-label">Buy Price</label>
        <input type="text" class="form-control" name="buyPrice" id="buyPrice" >

        <label for="MSRP" class="form-label">MSRP</label>
        <input type="text" class="form-control" name="MSRP" id="MSRP" >

        <input type="submit" value="Create">


</form>

</div>

