<?php
print_r($_FILES);


$sql = "INSERT INTO tb_customercar (kenteken, merk, model) 
VALUES ('$licenseplate','$brand','$carmodel')";
$stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        //print_r($result);
?>

<?php
print_r($_FILES);


$sql = "INSERT INTO tb_customer (first_name, last_name, city, street, house_number, e_mail, phone_number) 
VALUES ('$firstname','$lastname','$city','$street','$housenm','$mail','$telnum')";
$stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        //print_r($result);
?>