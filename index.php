<?php
    include ('conn.php');
?>

<!DOCTYPE html>
<html>
     <body>
     <table>
            <tr>

                <th> customerNumber </th>
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
            $sql = "SELECT * FROM customers";
            $result = mysqli_query($conn, $sql);
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
        
    </body>   
</html>

