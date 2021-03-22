

<!--<a href="form.php"><div class="return">RETURN</div></a><br/><br/><br/>-->
<div class="form">
  <form action="" enctype="multipart/form-data" method="post">
  <mark class='title1'><strong>auto gegevens</strong></mark> <br/>
  <input type="text" name="tb_clientid" value="" placeholder="Vul eigenaar's client id in"><br /> <!--client id input -->
  <input type="text" name="tb_license" value="" placeholder="Vul kenteken in"><br /> <!--license input -->
  <label for="foods">kies een merk:</label><br /> <!--start brand part -->
  <select id="foods" name="tb_brand"><!--catagory list -->
    <option value="Toyota">Toyota</option> <!--option 1-->
    <option value="Lexus">Lexus</option>   <!--option 2-->
    <option value="Ford">Ford</option>     <!--option 3-->
    <option value="Opel">Opel</option>     <!--option 4-->
    <option value="Volkswagen">Volkswagen</option> <!--option 5-->
    <option value="Other">andere</option> <!--        option 6-->
  </select><br /> <!--END catagory list -->
  <input type="text" name="tb_model" value="" placeholder="Vul auto model in"><br /> <!--model input -->
  <mark class='checkbox1'>registreer een klant:</mark><input type="checkbox" name="tb_clientregister" value="TRUE"> <br /><br /><br />
  <mark class='title1'><strong>klanten gegevens</strong></mark> <br/>
  <input type="text" name="tb_firstname" value="" placeholder="Vul voornaam in"><br /> <!--firstname input -->
  <input type="text" name="tb_lastname" value="" placeholder="Vul achternaam in"><br /> <!--lastname input -->
  <input type="text" name="tb_city" value="" placeholder="Vul stad in"><br /> <!--city input -->
  <input type="text" name="tb_street" value="" placeholder="Vul straat in"><br /> <!--street input -->
  <input type="text" name="tb_housenumber" value="" placeholder="Vul huisnummer in"><br /> <!--housenumber input -->
  <input type="text" name="tb_postnr" value="" placeholder="Vul postcode in"><br /> <!--postcode input -->
  <input type="email" name="tb_email" value="" placeholder="Vul E-mail in"><br /> <!--email input -->
  <input type="text" name="tb_telnum" value="" placeholder="Vul telefoon nummer in"><br /> <!--phonenumber input -->
  
    
  <input type="hidden" name="frmInsertMenuitem" value="frmInsertMenuitem"> <br /> <!--form data values -->
  <input type="submit" name="button_submit" value="versturen"> <!--data tranfer button -->
  </form>
</div>
