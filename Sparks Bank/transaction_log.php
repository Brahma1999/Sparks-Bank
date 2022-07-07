<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "spark bank"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
$sql = "SELECT * FROM history" ;
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Log</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
    
        if(window.history.replaceState){
            
            window.history.replaceState(null, null, window.location.href); 
        }
    </script>

</head>
<body>

    <?php include('navbar.php'); ?>

    <div class="contain">
        <h2 id="hist_head">Transaction History</h2>  
        <div>
         <table id = "Table">
           <thead>
              <tr>
                 <th>SL No.</th>
                 <th>Sender</th>
                 <th>Sender Ac No.</th>
                 <th>Receiver</th>
                 <th>Receiver Ac No.</th>
                 <th>Amount</th>
                 <th>Date & Time</th>
              </tr>
           </thead>

          <tbody>
              <?php
                while($row = $result->fetch_assoc()) 
                { 
                 ?> 
              <tr>
                 <td><?php echo $row['sno']; ?></td>
                 <td><?php echo $row['payer']; ?></td>
                 <td><?php echo $row['payerAcc']; ?></td>
                 <td><?php echo $row['payee']; ?></td>
                 <td><?php echo $row['payeeAcc']; ?></td>
                 <td><?php echo $row['amount']; ?></td>
                 <td><?php echo $row['time']; ?></td>
              </tr>
              <?php
               }
               $conn->close();
              ?> 
         </tbody>
      </table>
    </div>
   </div>

<footer id="foot_id">
    <p>&copy 2022 Made By <a href="www.linkedin.com/in/brahmanand-parida-437092224" target="_blank">Brahmanand Parida</a></p>
</footer>
</body>


</html>