<!doctype html>
<body>

<center>
	<legend style="color: black; font-family: Courier New, Courier, monospace; font-size: 35px; font-weight: bold;  text-shadow: 1px 1px 1px black ;line-height: 30px; margin: 0 0 8px;">LOGIN:</legend>
  <p>(select a login option)</p>
    <h2 style=  "font-family: cursive;
    text-align:left;
    color:black;
    text-shadow: 1px 1px 1px papayawhip;
    font-size:20px;
    font-weight:lighter;
    margin-top:0px;
    margin-bottom: 1px;
    padding-left: 100px">
	 


</h2>
      <form id='cform'>
  	<input type="radio" name="login" value="hostel" required> <b>HOSTEL LOGIN</b><br>
     <input type="radio" name="login" value="admin" required><b>ADMIN LOGIN</b><br><br><br>


     <table class='form_tab'>
  <tr><td>Email:</td><td>
  		<input type="email" name="email" ><br><br></td></tr>
  <tr><td>Password:</td><td>
  		<input type="password" name="password"><br><br></td></tr>






  	
  		
  
  	 
    </table>
    <br>
    <button  type="submit" class="btn" name="login_user">Login</button>
  </form>
  <br>
  <br>
</center>
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  
<script>
  $(function ()
{
  $('form').on('submit', function (e)
  {
    //alert ("testing");
    e.preventDefault();
   
          $.ajax({
          type: 'post',
          url: 'login2.php',
          data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
          success: function (data)
          {
           if(data.match(/admin login failed !!/))
            {
              alert(data);
              //alert("test"); 
              //document.getElementById("cform").reset();
              //window.location="//localhost/demo/";
            }
            else if(data.match(/Hostel login failed !!/))
            {
              alert(data);
              //alert("test"); 
              //document.getElementById("cform").reset();
              //window.location="//localhost/demo/";
            }
            else 
            {
                          window.location=data;
                          //alert(data);
            }
          }
        });
    });
});
</script>