

<?php
if ($registerclient == TRUE) { //if checkbox register client is true = sending car and client data from form to their tables
  echo "<h1>yes</h1>";
  $sql = "INSERT INTO tb_customercar (kenteken, merk, model) 
        VALUES ('$licenseplate','$brand','$carmodel')";
        $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();?>
<?php
  $sql = "INSERT INTO tb_customer (first_name, last_name, city, street, house_number, postcode, e_mail, phone_number) 
  VALUES ('$firstname','$lastname','$city','$street','$housenm','$postnr','$mail','$telnum')";
  $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
          //print_r($result);?>
        <?php
} else { //if checkbox register client is false = sending only the car data to its table and ignoring the client data
        echo "<h1>nope you shall only send car to the database</h1>";
        $sql = "INSERT INTO tb_customercar (customer_id, kenteken, merk, model) 
        VALUES ('$clientid', '$licenseplate','$brand','$carmodel')";
        $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                //print_r($result);
}
?>

