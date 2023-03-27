<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $customerNumber = $_POST["customerNumber"];
    $customerName = $_POST["customerName"];
    $contactLastName = $_POST["contactLastName"];
    $contactFirstName = $_POST["contactFirstName"];
    $phone = $_POST["phone"];
    $addressLine1 = $_POST["addressLine1"];
    $addressLine2 = $_POST["addressLine2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postalCode = $_POST["postalCode"];
    $country = $_POST["country"];
    $salesRepEmployeeNumber = $_POST["salesRepEmployeeNumber"];
    $creditLimit = $_POST["creditLimit"];

    
    $sql = "INSERT INTO customers (`customerNumber`,`customerName`,`contactLastName`,`contactFirstName`,`phone`,`addressLine1`,`addressLine2`,`city`,`state`,`postalCode`,`country`,`salesRepEmployeeNumber`,`creditLimit`)
     VALUES ('$customerNumber','$customerName','$contactLastName','$contactFirstName','$phone','$addressLine1','$addressLine2','$city','$state','$postalCode','$country','$salesRepEmployeeNumber','$creditLimit')";
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

  
        <label for="customerNumber">Customer Number :</label>
        <input type="text" id="customerNumber" name="customerNumber" required><br><br>

        <label for="customerName">Customer Name :</label>
        <input type="text" id="customerName" name="customerName" required><br><br>

        <label for="contactLastName">Contact Last Name :</label>
        <input type="text" id="contactLastName" name="contactLastName" required><br><br>

        <label for="contactFirstName">Contact First Name :</label>
        <input type="text" id="contactFirstName" name="contactFirstName" required><br><br>

        <label for="phone">phone :</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="addressLine1">Address Line 1 :</label>
        <input type="text" id="addressLine1" name="addressLine1" required><br><br>
        
        <label for="addressLine2">Address Line 2 :</label>
        <input type="text" id="addressLine2" name="addressLine2" required><br><br>

        <label for="city">City :</label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="state">State :</label>
        <input type="text" id="state" name="state" required><br><br>

        <label for="postalCode">Postal Code :</label>
        <input type="text" id="postalCode" name="postalCode" required><br><br>

        <label for="country">Country :</label>
        <input type="text" id="country" name="country" required><br><br>

        <label for="salesRepEmployeeNumber">Sales Rep Employee Number</label>
        <select class="form-control" name= "salesRepEmployeeNumber" id="salesRepEmployeeNumber">
        <option value="1002"> 1002</option> <option value="1056"> 1056</option>
        <option value="1076"> 1076</option> <option value="1088"> 1088</option>
        <option value="1102"> 1102</option> <option value="1143"> 1143</option>
        <option value="1165"> 1165</option> <option value="1166"> 1166</option>
        <option value="1188"> 1188</option> <option value="1216"> 1216</option>
        <option value="1286"> 1286</option> <option value="1323"> 1323</option>
        <option value="1337"> 1337</option> <option value="1370"> 1370</option>
        <option value="1401"> 1401</option> <option value="1501"> 1501</option>
        <option value="1504"> 1504</option> <option value="1611"> 1611</option>
        <option value="1612"> 1612</option> <option value="1619"> 1619</option>
        <option value="1621"> 1621</option> <option value="1625"> 1625</option>
        <option value="1702"> 1702</option> 

        </select>
        <br><br>

        
        <label for="creditLimit">Credit Limit :</label>
        <input type="text" id="creditLimit" name="creditLimit" required><br><br>
        

        <input type="submit" value="Create">


</form>

</div>

