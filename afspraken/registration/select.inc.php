<table style="undefined;table-layout: fixed; width: 660px">
<colgroup>
<col style="width: 20px">
<col style="width: 70px">
<col style="width: 80px">
<col style="width: 80px">
<col style="width: 100px">
<col style="width: 30px">
<col style="width: 60px">
<col style="width: 150px">
<col style="width: 70px">
</colgroup>
<thead>
  <tr>
    <th><h3>id</h3></th>
    <th><h3>voornaam</h3></th>
    <th><h3>achternaam</h3></th>
    <th><h3>stad</h3></th>
    <th><h3>straat</h3></th>
    <th><h3>nr</h3></th>
    <th><h3>post nr</h3></th>
    <th><h3>E-mail</h3></th>
    <th><h3>tel nr</h3></th>
  </tr>
</thead>
<?php 

    $sql = "SELECT * FROM tb_customer";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach($result as $key => $row) {
            echo "<thead>
            <tr>";
            echo "<th>" . $row['id'] . "</th> "; 
            echo "<th>" . $row['first_name'] . "</th> ";
            echo "<th>" . $row['last_name'] . "</th> ";
            echo "<th>" . $row['city'] . "</th> ";
            echo "<th>" . $row['street'] . "</th> ";
            echo "<th>" . $row['house_number'] . "</th> ";
            echo "<th>" . $row['postcode'] . "</th> ";
            echo "<th>" . "<a href='mailto: abc@example.com'>".$row['e_mail'] . "</a>" . "</th> ";
            echo "<th>" . $row['phone_number'] . "</th> "; 
            echo "</tr>
            </thead>";
            
        }
?>

</table>
