
<?php
      include('dbcon.php');
      $sql="select * from hreg ";
      $result=$conn->query ($sql);
      echo "<table border='1' class='form_tab1'>";
      echo "<caption class='cap'><b><br><br>HOSTEL LIST:<br><br><br></caption>";
      echo "<tr><th>HOSTEL NAME</th><th>CAPACITY</th><th>HOSTEL TYPE</th><th>FOOD</th><th>OWNER NAME</th><th>PhNO.</th><th>RENT</th><th>ADDRESS</th></tr>";
      while($row=$result->fetch_assoc())
      {
        //echo "<option value='".$row["hname"]."'>".$row["hname"]."</option>";
        echo"<tr><td>".$row["hname"]."</td><td>".$row["capacity"]."</td><td>".$row["htype"]."</td><td>".$row["food"]."</td><td>".$row["own_name"]."</td><td>".$row["own_phno"]."</td><td>".$row["rent"]."</td><td>".$row["haddress"]."</td></tr>";
      }
      echo "</table>";

      ?>