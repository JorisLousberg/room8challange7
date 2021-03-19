<?php 

    $sql = "SELECT * FROM tb_customer";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach($result as $key => $row) {
            echo "<div>" . $row['id'] . " " . $row['first_name'] . " " . $row['last_name'] . " " . $row['city'] . " " . $row['street'] . " " . $row['house_number'] . " " . $row['e_mail'] . " " . $row['phone_number'] . "</div>"; 
        }
?>