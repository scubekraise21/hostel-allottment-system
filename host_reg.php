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
    <tr><td>HOSTEL NAME:</td><td><input type="text" name="hosname" placeholder="enter hostelname" required></td> </tr>
    <tr><td>CAPACITY:</td><td>
      <input type="number" name="hoscapacity" placeholder="enter hostel capacity" ></td> </tr>
   <tr><td>HOSTEL TYPE:</td><td><input type="radio" name="hostype" value="north_indian_boys" required>NORTH INDIAN BOYS<br>
            <input type="radio" name="hostype" value="south_indian_boys" >SOUTH INDIAN BOYS<br>
            <input type="radio" name="hostype" value="north_indian_girls">NORTH INDIAN GIRLS <br>
            <input type="radio" name="hostype" value="south_indian_girls">SOUTH INDIAN GIRLS<br></td> </tr>

    <tr><td>FOOD:</td><td><input type="radio" name="foodtype" value="north_indian">NORTH INDIAN<br>
            <input type="radio" name="foodtype" value="south_indian" >SOUTH INDIAN<br>
            <input type="radio" name="foodtype" value="both" >BOTH<br></td> </tr>

    <tr><td>OWNER NAME:</td><td><input type="text" name="hosown" placeholder="enter owner name" required></td> </tr>
    <tr><td>OWNER PH_NO:</td><td> <input type="text" name="hosno" placeholder="enter phone number" required></td> </tr>
    <tr><td> RENT:</td><td><input type="text" name="hosrent" placeholder="enter hostel rent" required></td> </tr>
    <tr><td>HOSTEL ADDRESS:</td><td> <input type="text" name="addr" placeholder="enter your address"></td> </tr>
    
    <tr><td>E-MAIL</td><td><input type="email" placeholder="enter your email id" name="email" required></td> </tr> 
    <tr><td>PASSWORD:</td><td>  <input type="password" placeholder="enter password" name="password_1" required></td> </tr>
    <tr><td>CONFIRM PASSWORD:</td><td><input type="password" placeholder="re-enter password" name="password_2" required></td></tr>
    <tr><td></td><td>
    <button type="submit" class="btn" name="reg_user">Register</button></td></tr>
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
          url: 'hregister.php',
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