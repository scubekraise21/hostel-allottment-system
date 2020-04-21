
<?php
      include('dbcon.php');
      $sql="select * from users ";
      $result=$conn->query ($sql);
      echo "<table border='1' class='form_tab1'>";
      echo "<caption class='cap'><b><br><br>ALLOTMENT LIST:<br><br><br></caption>";
      echo "<tr><th> NAME</th><th>DEPARTMENT</th><th>ADM NO.</th><th>RANK</th><th>SEX</th><th>AGE</th><th>ADDRESS</th><th>HOSTEL</th></tr>";
      while($row=$result->fetch_assoc())
      {
        //echo "<option value='".$row["hname"]."'>".$row["hname"]."</option>";
        echo"<tr><td>".$row["fname"]."</td><td>".$row["dept"]."</td><td>".$row["admno"]."</td><td>".$row["catrank"]."</td><td>".$row["sex"]."</td><td>".$row["age"]."</td><td>".$row["address"]."</td><td>".$row["hostelpref"]."</td></tr>";
      }
      echo "</table>";

      ?>