<?php
      include('dbcon.php');
      $sql="select * from hreg where id='".$_GET['id']."'";
      $result=$conn->query ($sql);
      $row=$result->fetch_assoc()
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
</head>
<body>
	<form id='cform'>
    <center>
  <legend style="color: black; font-family: Courier New, Courier, monospace; font-size: 34px; font-weight: bold;  text-shadow: 1px 1px 1px black ;line-height: 30px; margin: 0 0 8px;">PERSONAL INFORMATION:</legend>
</center>
<br>
  <table class='form_tab'>
    <tr><td>HOSTEL NAME:</td><td><input type="text" name="hosname" placeholder="enter hostelname" required value="<?php echo $row['hname']?>"></td> </tr>
    <tr><td>CAPACITY:</td><td>
      <input type="number" name="hoscapacity" placeholder="enter hostel capacity" value="<?php echo $row['capacity']?>" ></td> </tr>
   <tr><td>HOSTEL TYPE:</td><td><input type="radio" name="hostype" value="north_indian_boys" required  <?php if ($row['htype']=="north_indian_boys") echo "checked"?>>NORTH INDIAN BOYS<br>
            <input type="radio" name="hostype" value="south_indian_boys" required <?php if ($row['htype']=="south_indian_boys") echo "checked"?>>SOUTH INDIAN BOYS<br>
            <input type="radio" name="hostype" value="north_indian_girls" required <?php if ($row['htype']=="north_indian_girls") echo "checked"?>>NORTH INDIAN GIRLS <br>
            <input type="radio" name="hostype" value="south_indian_girls" required <?php if ($row['htype']=="south_indian_girls") echo "checked"?>>SOUTH INDIAN GIRLS<br></td> </tr>

    <tr><td>FOOD:</td><td><input type="radio" name="foodtype" value="north_indian" required <?php if ($row['food']=="north_indian") echo "checked"?>>NORTH INDIAN<br>
            <input type="radio" name="foodtype" value="south_indian" required <?php if ($row['food']=="south_indian") echo "checked"?>>SOUTH INDIAN<br>
            <input type="radio" name="foodtype" value="both" required <?php if ($row['food']=="both") echo "checked"?> >BOTH<br></td> </tr>

    <tr><td>OWNER NAME:</td><td><input type="text" name="hosown" placeholder="enter owner name" required value="<?php echo $row['own_name']?>"></td> </tr>
    <tr><td>OWNER PH_NO:</td><td> <input type="text" name="hosno" placeholder="enter phone number" required value="<?php echo $row['own_phno']?>"></td> </tr>
    <tr><td> RENT:</td><td><input type="text" name="hosrent" placeholder="enter hostel rent" required value="<?php echo $row['rent']?>"></td> </tr>
    <tr><td>HOSTEL ADDRESS:</td><td> <input type="text" name="addr" placeholder="enter your address" required value="<?php echo $row['haddress']?>"></td> </tr>
    
    <tr><td>E-MAIL</td><td><input type="email" placeholder="enter your email id" name="email" required value="<?php echo $row['email']?>"></td> </tr> 
    <tr><td>PASSWORD:</td><td>  <input type="password" placeholder="enter password" name="password_1" required value="<?php echo $row['password']?>"></td> </tr>
    <tr><td>CONFIRM PASSWORD:</td><td><input type="password" placeholder="re-enter password" name="password_2" required value="<?php echo $row['password']?>"></td></tr>
    <tr><td></td><td>
      <input type="text" hidden value="<?php echo $row['id'] ?> " name="id">
    <button type="submit" class="btn" name="reg_user">Update</button></td></tr>
    </table>
     
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>
</html>

<script>
  $(function ()
{
  $('form').on('submit', function (e)
  {
    e.preventDefault();
    if (confirm("Are you sure"))
    {
          $.ajax({
          type: 'post',
          url: 'hregister_edit.php',
          data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
          success: function (data)
          {
           if(data.match(/New record created successfully/))
            {
              //alert("test"); 
              //document.getElementById("cform").reset();
              window.location="//localhost/finalp/";
            }
            alert(data);
          }
        });
    }
    });
});
</script>