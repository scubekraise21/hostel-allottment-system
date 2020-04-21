<?php
      include('dbcon.php');
      $sql="select hname from hreg where capacity>0";
      $result=$conn->query ($sql);
      while($row=$result->fetch_assoc())
      {
        //echo "<option value='".$row["hname"]."'>".$row["hname"]."</option>";
        echo $row["hname"];
      }

      ?>