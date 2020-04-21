
<?php
      include('dbcon.php');
      $sql="select * from hreg ";
      $result=$conn->query ($sql);
        echo "<form>";
      echo "<table border='1'>";
      echo "<caption class='cap'><b><br><br>HOSTEL LIST:<br><br><br></caption>";
      echo "<tr><th>HOSTEL NAME</th><th>CAPACITY</th><th>HOSTEL TYPE</th><th>FOOD</th><th>OWNER NAME</th><th>PhNO.</th><th>RENT</th><th>ADDRESS</th><th>select</th></tr>";
      
      while($row=$result->fetch_assoc())
      {
        //echo "<option value='".$row["hname"]."'>".$row["hname"]."</option>";
        echo"<tr><td>".$row["hname"]."</td><td>".$row["capacity"]."</td><td>".$row["htype"]."</td><td>".$row["food"]."</td><td>".$row["own_name"]."</td><td>".$row["own_phno"]."</td><td>".$row["rent"]."</td><td>".$row["haddress"]."</td><td> <input type='checkbox' name='cb[]' value='".$row['id']."'</td></tr>";
      }
      echo "</table>";
      ?>
          <button type="submit" class="btn" name="reg_user">Delete</button>

        </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

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
          url: 'hostel_del2.php',
          data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
          success: function (data)
          {
            alert(data);
            window.location="//localhost/finalp/index.php?page=host_del.php";

          }
        });
    }
    });
});
</script>