<a href="form.php"><div class="return">RETURN</div></a><br/><br/><br/>
<div class="form">
  <form action="" enctype="multipart/form-data" method="post">
  auto gegevens <br/>
  <input type="text" name="tb_license" value="" placeholder="enter license plate"><br /> <!--license input -->
  <label for="foods">Choose a brand:</label><br /> <!--start brand part -->
  <select id="foods" name="tb_brand"><!--catagory list -->
    <option value="Toyota">Toyota</option> <!--option 1-->
    <option value="Lexus">Lexus</option>   <!--option 2-->
    <option value="Ford">Ford</option>     <!--option 3-->
    <option value="Opel">Opel</option>     <!--option 4-->
    <option value="Volkwagen">Volkwagen</option> <!--option 5-->
    <option value="Other">Other</option> <!--        option 6-->
  </select><br /> <!--END catagory list -->
  <input type="text" name="tb_model" value="" placeholder="enter car model"><br /> <br /><!--model input -->
  klanten gegevens <br/>
  <input type="text" name="tb_firstname" value="" placeholder="enter first name"><br /> <!--fname input -->
  <input type="text" name="tb_lastname" value="" placeholder="enter last name"><br /> <!--lname input -->
  <input type="text" name="tb_city" value="" placeholder="enter city"><br /> <!--lname input -->
  <input type="text" name="tb_street" value="" placeholder="enter street"><br /> <!--lname input -->
  <input type="text" name="tb_housenumber" value="" placeholder="enter housenumber"><br /> <!--lname input -->
  <input type="email" name="tb_email" value="" placeholder="enter email"><br /> <!--lname input -->
  <input type="number" id="quantity" name="tb_telnum" min="13" max="13">
  
    
  <input type="hidden" name="frmInsertMenuitem" value="frmInsertMenuitem"> <br /> <!--form data values -->
  <input type="submit" name="button_submit" value="versturen"> <!--data tranfer button -->
  </form>
</div>