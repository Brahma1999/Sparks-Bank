<?php
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "spark bank"; 
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
    //$sql = "SELECT * FROM customerinfo" ;
    $sql = "SELECT * FROM accountdetails" ;
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php include('navbar.php'); ?>

    <div class="container">
    <p style="text-align: center" id="customer-head">Customers Details</p>                  
            <table id="Table">
                <thead>
                    <tr>
                    <th>SL.No.</th>
                    <th>Account No.</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Balance</th>  
                    </tr>
                </thead>                     
                <?php
                while($row = $result->fetch_assoc()) { 
                ?> 
                <tr>
                    <td><?php echo $row['sno']; ?></td>
                    <td><?php echo $row['accID']; ?></td>
                    
                    <td ><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['balance']; ?></td>
                    
                </tr>
                <?php
                }
                $conn->close();
                ?> 
            </table>
        
    </div>
    


    








    <footer>
        <p>&copy 2022 Made By <a href="www.linkedin.com/in/brahmanand-parida-437092224" target="_blank">Brahmanand Parida</a></p>
    </footer>
</body>
</html>