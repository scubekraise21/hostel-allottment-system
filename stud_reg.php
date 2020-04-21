<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
</head>
<body>
  
	
  <form>
    <center>
  <legend style="color: black ; font-family: Courier New, Courier, monospace; font-size: 34px; font-weight: bold;  text-shadow: 1px 1px 1px black ;line-height: 44px; margin: 0 0 8px;">PERSONAL INFORMATION:</legend>
</center>
    <table class='form_tab'>
    <tr><td>FIRST NAME:</td><td><input type="text" name="firstname" placeholder="enter firstname" required></td> </tr>
    <tr><td>LAST NAME:</td><td>
      <input type="text" name="lastname" placeholder="enter lname"></td> </tr>
    <tr><td>DEPARTMENT:</td><td><input type="text" name="dept" placeholder="enter dept." required></td> </tr>
    <tr><td>ADMISSION NO.:</td><td><input type="text" name="admno" placeholder="enter adm no." required></td> </tr>
    <tr><td>CAT RANK:</td><td> <input type="number" name="CATrank" placeholder="enter cat rank" required></td> </tr>
    <tr><td>SEX:</td><td><input type="radio" name="gender" value="male">Male<br>
            <input type="radio" name="gender" value="female" >female<br>
            <input type="radio" name="gender" value="other" >other<br></td> </tr>
    <tr><td>AGE:</td><td><input type="number" name="age" placeholder="enter age"></td> </tr>
    <tr><td>ADDRESS:</td><td> <input type="text" name="addr" placeholder="enter your address"></td> </tr>
    <tr><td> HOSTEL PREFERANCE:</td><td><select name="hpref" required>
      <option hidden value="">select hostel</option>
      <?php
      include('dbcon.php');
      $sql="select hname from hreg where capacity>0";
      $result=$conn->query ($sql);
      while($row=$result->fetch_assoc())
      {
        echo "<option value='".$row["hname"]."'>".$row["hname"]."</option>";
        //echo "<option value='2'>yyy</option>";
      }

      ?>


    </select></td> </tr>
   
    <tr><td>E-MAIL:</td><td><input type="email" placeholder="enter your email id" name="email" required></td> </tr> 
   <!--- <tr><td>PASSWORD:</td><td>  <input type="password" placeholder="enter password" name="password_1" required></td> </tr>
    <tr><td>CONFIRM PASSWORD:</td><td><input type="password" placeholder="re-enter password" name="password_2" required></td></tr>-->
    <tr><td></td><td>
    <button type="submit" class="btn" name="reg_user">REGISTER</button></td></tr>
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
          url: 'register.php',
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
            //alert(data);
          }
        });
    }
    });
});
</script>