
<?php
      include('dbcon.php');
      $sql="select * from users ";
      $result=$conn->query ($sql);
        echo "<form>";
      echo "<table border='1'>";
      echo "<caption class='cap'><b><br><br>STUDENT LIST:<br><br><br></caption>";
      echo "<tr><th> NAME</th><th>DEPARTMENT</th><th>ADM NO.</th><th>RANK</th><th>SEX</th><th>AGE</th><th>ADDRESS</th><th>HOSTEL PREF.</th><th>select</th></tr>";
      
      while($row=$result->fetch_assoc())
      {
        //echo "<option value='".$row["hname"]."'>".$row["hname"]."</option>";
        echo"<tr><td>".$row["fname"]."</td><td>".$row["dept"]."</td><td>".$row["admno"]."</td><td>".$row["catrank"]."</td><td>".$row["sex"]."</td><td>".$row["age"]."</td><td>".$row["address"]."</td><td>".$row["hostelpref"]."</td><td> <input type='checkbox' name='cb[]' value='".$row['id']."'</td></tr>";
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
          url: 'stud_del2.php',
          data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
          success: function (data)
          {
            alert(data);
            window.location="//localhost/finalp/index.php?page=stud_del.php";

          }
        });
    }
    });
});
</script>