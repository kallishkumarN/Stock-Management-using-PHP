<?php 

$conn = new mysqli("localhost","root","","");

 ?>

<html>
  <head>
    <title>Stock Analysis</title>
<style>
#mic{
height:90px; width: 240px;  margin-left:-10px;	 margin-top:-5px; 
}

#rit
{
height:90px; width: 240px; margin-left:1275px; margin-top:-90px; 

}
label{
margin-left:30px;

}
fieldset
{


}
</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data1 = google.visualization.arrayToDataTable([
          ['itemname', 'count' , 'product'],
          
          <?php

          $sql = "SELECT * FROM stock;";

          $res = $conn->query($sql);
          if ($res->num_rows > 0) {
          while($row = $res->fetch_assoc()) {
            echo "['".$row['itemname']."',".$row['count'].",".$row['product']."],";

          }
        }

          ?>

        ]);

         var data2 = google.visualization.arrayToDataTable([
          ['eid', 'quantity' , 'product'],
          
          <?php
          $value1 = $_POST['date']; 
          $sql1 = "SELECT * FROM emp_table WHERE dot   = '$value1';";

          $res = $conn->query($sql1);
          if ($res->num_rows > 0) {
          while($row = $res->fetch_assoc()) {
            echo "['".$row['eid']."',".$row['quantity'].",".$row['product']."],";

          }
        }

          ?>

        ]);




        var data3 = google.visualization.arrayToDataTable([
          ['eid', 'quantity' , 'product'],
          
          <?php
           if(isset($_POST['submit']))
          {
             $value1 = $_POST['date'];
              $sql1 = "SELECT * FROM emp_table WHERE dot = '$value1';";
          }
                
          $res = $conn->query($sql1);
          if ($res->num_rows > 0) {
          while($row = $res->fetch_assoc()) {
            echo "['".$row['eid']."',".$row['pending'].",".$row['product']."],";

          }
        }
      
          ?>

        ]);


        var options = {
          title: 'STOCK'
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart1.draw(data1, options);
        
        var options = {
          title: 'ISSUE'
        };

        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart2.draw(data2, options);
       
        var options = {
          title: 'PENDING'
        };

        var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart3.draw(data3, options);
      }
    </script>
  </head>
  <body>

<img id="mic" src="micron.jpg" /><br>
<img id="rit" src="rit.jpg" /><br><br>


    <form method ="POST">
      <br><br><br><label name="text"><b>Enter date:<b></label>
      <input style="height:30px;" type="date" name="date">
      <input type="submit" name="submit" style="height:30px;" value="Search"><a style="margin-left:1350px; font-size:25px;color:black; " href="login.php">Back to Login</a>


    </form>


    <div id="piechart1" style="width: 600px; height: 300px; margin-left: 40px; margin-top:100px;"></div>
    <div id="piechart2" style="width: 600px; height: 300px; margin-left: 450px; margin-top: -300"></div>
    <div id="piechart3" style="width: 600px; height: 300px; margin-left: 925px; margin-top: -310"></div>

</body>
</html>
