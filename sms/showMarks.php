<?php
  function showMarks($roll)
  {
      include('dbcon.php');
      $qry="SELECT * FROM `subject` WHERE rollno ='$roll'";
      $run=mysqli_query($con,$qry);
      $row=mysqli_num_rows($run);
      $data1=mysqli_fetch_assoc($run);
      ?>
      <table class="marktable" border='1' style="width:50%;margin-top:2%;" align="center";>
          <tr>
              <th colspan="2" style="text-align:center">Marks</th>
          </tr>
          <tr>
              <th>Subject Name</th>
              <td><?php echo $data1['name'];?></td>
          </tr>
          <tr>
              <th>Marks</th>
              <td><?php echo $data1['marks'];?></td>
          </tr>
       </table>
      <?php
  }
?>