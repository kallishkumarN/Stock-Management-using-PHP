<html>
<head>
<title>Manager Login</title>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
#f1{

width: 330px; 
height:590px; 
margin-left:10px; 
margin-top:20px;
}

#f2{

height: 590px;
width: 330px;
margin-top:-645;
margin-left:375px;


}
	
#f3{

height: 590px;
width: 900px;
margin-top:-610;
margin-left:750px;
}




#mic{
height:80px; width: 240px;  margin-left:10px; 
}

#rit
{
height:90px; width: 240px; margin-left:1285px; margin-top:-90px; 

}
label{
margin-left:30px;

}

</style>	
<script type="text/javascript">
	$(document).ready(function() {
		$("#iname").change(function(){
			var option = $(this).val();
			// console.log(option);
			$.ajax({
				url: "item.php",
				method: "post",
				data: {
					'iname': option
				},
				dataType: "text",
				success: function(data) {
					$('#results').html(data);
					// console.log(data);
				},
				error: function(data) {
					alert("Error");
				}
			});
		});
	});
	$(document).ready(function() {
		$("#select").change(function(){
			var option = $(this).val();
			var slipno = $('#slip').val();
			console.log(option);
			if(option != "" && slipno != "") {
				// console.log(option);
				$.ajax({
					url: "returnitem.php",
					method: "post",
					data: {
						'select': option,
						'slip' : slipno
					},
					dataType: "text",
					success: function(data) {
						$('#output').html(data);
						// console.log(data);
					},
					error: function(data) {
						alert("Error");
					}
				});
			}
		});

		$("#slip").change(function(){
			var slipno = $(this).val();
			var option = $('#select').val();
			console.log(slipno);
			if(option != "" && slipno != "") {
				// console.log(option);
				$.ajax({
					url: "returnitem.php",
					method: "post",
					data: {
						'select': option,
						'slip' : slipno
					},
					dataType: "text",
					success: function(data) {
						$('#output').html(data);
						// console.log(data);
					},
					error: function(data) {
						alert("Error");
					}
				});
			}
		});
	});
</script>	
</head>
<body>

<img id="mic" src="micron.jpg" /><br>
<img id="rit" src="rit.jpg" /><br><br>

<a style="margin-left:1350px; font-size:25px;color:black; " href="login.php">Back to Login</a>
<a style="margin-left:10px;margin-top:-50px; font-size:25px;color:black; " href="dashboard.php">Stock Analysis</a>
<fieldset id="f1">
<legend style="margin-left:30px;">ISSUE</legend>
<form action="" method="POST" >

<label name="eid">Emp_id :</label><select id="eid" name="eid" style="margin-top:40px; margin-left:42px; width:172px;" >
<option style="display:none;">-------Select Emp_id-------</option>
<option id="mic_001" value="mic_001">MIC_001</option>
<option id="mic_002" value="mic_002">MIC_002</option>
<option id="mic_003" value="mic_003">MIC_003</option>
<option id="mic_004" value="mic_004">MIC_004</option>
</select><br><br>
<div id=results>
<label >Item Name :</label><input id="iname" name="itemname" style="margin-left:23px; width:172px;" type="text"><br><br>
<label >ItemCode :</label><input name="itemcode" style="margin-left:28px; width:172px;" type="text"><br><br>
</div>
<label >Quantity :</label><input name="quantity" style="margin-left:35px; width:172px;" type="text"><br><br>
<label >Body :</label><input name="body" style="margin-left:58px; width:172px;" type="text" ><br><br>
<label >Machine :</label><input name="machine" style="margin-left:36px; width:172px;" type="text"><br><br>
<label >Description :</label><input name="description" style="margin-left:20px; width:172px;" type="text"><br><br>
<label >Material :</label><input name="material" style="margin-left:40px; width:172px;" type="text"><br><br>
<label >Operation :</label><input name="operation" style="margin-left:30px; width:172px;" type="text"><br><br>
<label >Sub Operation :</label><input name="sub_operation" style="margin-left:2px; width:172px;" type="text"><br><br>
<label >Slip Number :</label><input name="slip" style="margin-left:16px; width:172px;" type="text"><br><br>
<input type="submit" style="margin-left:120px;" name="insert" value="DONE">
</form>
</fieldset><br><br>


<fieldset id="f2">
<legend style="margin-left:30px;">RETURN</legend>
<form method="post">
<div id= "output">
<label name="eid">Emp_id :</label><select id="select" name="select" style="margin-top:40px; margin-left:42px; width:172px;" >
<option style="display:none;">-------Select Emp_id-------</option>
<option id="mic_001" value="mic_001">MIC_001</option>
<option id="mic_002" value="mic_002">MIC_002</option>
<option id="mic_003" value="mic_003">MIC_003</option>
<option id="mic_004" value="mic_004">MIC_004</option>
</select><br><br>
<label >Slip Number :</label><input name="slip" id ="slip" style="margin-left:12px; width:172px;" type="text"><br><br>
<label >Item Name :</label><input name="itemname" style="margin-left:23px; width:172px;" type="text"><br><br>
<label >ItemCode :</label><input name="itemcode" style="margin-left:28px; width:172px;" type="text"><br><br>
<label >Quantity :</label><input name="quantity" style="margin-left:35px; width:172px;" type="text"><br><br>
<label >Body :</label><input name="body" style="margin-left:58px; width:172px;" type="text" ><br><br>
<label >Machine :</label><input name="machine" style="margin-left:36px; width:172px;" type="text"><br><br>
<label >Description :</label><input name="description" style="margin-left:20px; width:172px;" type="text"><br><br>
<label >Material :</label><input name="material" style="margin-left:40px; width:172px;" type="text"><br><br>
<label >Operation :</label><input name="operation" style="margin-left:30px; width:172px;" type="text"><br><br>
<label >Sub Operation :</label><input name="sub_operation" style="margin-left:2px; width:172px;" type="text"><br><br>

</div>
<label >Product :</label><input name="prod1" style="margin-left:42px; width:172px;" type="number" min=0 max=100 ><br><br>
<label >Pending :</label><input name="return1" style="margin-left:40px; width:172px;" type="number" min=0 max=100 ><br><br><br>
<input type="submit" style="margin-left:120px; margin-top: -20px;" name="done" value="DONE">
</form>
</fieldset>




<fieldset id="f3">
<legend style="margin-left:20px;">SEARCH</legend>
<form action="" method="POST">
<label>Search:</label><select id="choice" name="choice" style="margin-top:40px; margin-left:22px; width:172px;" >
<option style="display:none;">-------Select Emp_id-------</option>
<option value="database">DATABASE</option>
<option value="mic_001">MIC_001</option>
<option value="mic_002">MIC_002</option>
<option value="mic_003">MIC_003</option>
<option value="mic_004">MIC_004</option>
<option disabled="">-------Select Stock ID-------</option>
<option value="001">001</option>
<option value="002">002</option>
<option value="003">003</option>
</select>
<label>Item Name:</label><select id="itemname" name="itemname" style="margin-top:40px; margin-left:22px; width:172px;" >
<option style="display:none;">-------Select Item Name-------</option>
<option value="cnmg">CNMG</option>
<option value="lnmg">LNMG</option>
</select>
<br>
<label style="margin-left:28px;">Month:</label><select id="month" name="month" style="margin-top:10px; margin-left:25px; width:172px;" >
<option style="display:none;">-------Select Month-------</option>
<option value="1">January</option>
<option value="2">Febrary</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<input style="margin-left:200px; margin-top:20px;" type="submit" name="ok" value="SEARCH">
</form>
</fieldset><br><br>



    
<?php

if (empty($POST['check'])) {
	


$conn=new mysqli("localhost","root","","test");

$check = "SELECT eid FROM mic_emp WHERE return_count > 0;";

$res = $conn->query($check);
if ($res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
	$x=$row['eid'];
    echo "<script>document.getElementById('$x').disabled=false</script>";
	
    }
} 
}
?>

<table border="1px" style="margin-left: 800px; margin-top: -480px; border-collapse: collapse; width: 850px;">
<tr >  <th colspan="20" > Employee Details </th> </tr>

     
<th>Emp_id</th>
<th>Slip No</th>
<th>Item name</th>
<th>Item code</th>
<th>Quantity</th>
<th>Body</th>
<th>Machine</th>
<th>Description</th>
<th>Material</th>
<th>Operation</th>
<th>Sub Operation</th>
<th>Product</th>
<th>Pending</th>
<th>Date</th>




<?php

if(isset($_POST['ok']))
{

 
$value= $_POST['choice'];  

$itemname = $_POST['itemname'];

$mon = $_POST['month'];

if ($value == 'database') {
	
$conn = new mysqli("localhost","root","","microne");

$query="SELECT * FROM emp_table WHERE iname='$itemname' AND month(dot)='$mon';";
    
$result = $conn->query($query);
    
if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {


    
?>
    
<tr>
<td><?php echo $row['eid']; ?></td>
<td><?php echo $row['slip']; ?></td>
<td><?php echo $row['iname']; ?></td>
<td><?php echo $row['icode']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['body']; ?></td>
<td><?php echo $row['machine']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['material']; ?></td>
<td><?php echo $row['operation']; ?></td>
<td><?php echo $row['suboperation']; ?></td>
<td><?php echo $row['product']; ?></td>
<td><?php echo $row['pending']; ?></td>
<td><?php echo $row['dot']; ?></td>
</tr>
    
<?php
}    
}
}

else if($value > 0)
{   
$conn = new mysqli("localhost","root","","microne");

$query="SELECT * FROM emp_table WHERE icode='$value' AND itemname='$itemname' AND month(dot)='$mon';";
    
$result = $conn->query($query);
    
if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {


    
?>
    
<tr>
<td><?php echo $row['eid']; ?></td>
<td><?php echo $row['slip']; ?></td>
<td><?php echo $row['iname']; ?></td>
<td><?php echo $row['icode']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['body']; ?></td>
<td><?php echo $row['machine']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['material']; ?></td>
<td><?php echo $row['operation']; ?></td>
<td><?php echo $row['suboperation']; ?></td>
<td><?php echo $row['product']; ?></td>
<td><?php echo $row['Pending']; ?></td>
<td><?php echo $row['dot']; ?></td>
</tr>

<?php
}    
}
}

else
{   
$conn = new mysqli("localhost","root","","microne");

$query="SELECT * FROM mic_emp WHERE eid='$value' AND itemname='$itemname' AND month(dot)='$mon';";
    
$result = $conn->query($query);
    
if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {


    
?>

<tr>
<td><?php echo $row['eid']; ?></td>
<td><?php echo $row['slip']; ?></td>
<td><?php echo $row['iname']; ?></td>
<td><?php echo $row['icode']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['body']; ?></td>
<td><?php echo $row['machine']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['material']; ?></td>
<td><?php echo $row['operation']; ?></td>
<td><?php echo $row['suboperation']; ?></td>
<td><?php echo $row['product']; ?></td>
<td><?php echo $row['Pending']; ?></td>
<td><?php echo $row['dot']; ?></td>
</tr>
    
<?php
}    
}
}
}
?>


<?php

if(isset($_POST['done']))
{

$eid = $_POST['select'];
$slip = $_POST['slip'];

$prod = $_POST['prod1'];

$return = $_POST['return1'];
$date=date('y-m-d');

$conn = new mysqli("localhost","root","","microne");

$sql = "UPDATE emp_table SET product = $prod, pending = $return WHERE eid = '$eid'AND slip ='$slip';";

$conn->query($sql);

//$sql1 = "SELECT product FROM stock where sid=(SELECT sid FROM `mic_emp` WHERE eid='$eid' AND dot='$date')";

//$result1 = $conn->query($sql1);
   
//if ($result1->num_rows > 0) {
   
//while($row = $result1->fetch_assoc()) {  

//$sid = $row['sid'];

//$value = $row['product'];

//$product = $value -$prod;

//$sql2 = "UPDATE stock SET product=$product WHERE sid = $sid;";

//$conn->query($sql2);  


}
?>

<?php
if(isset($_POST['insert']))
{

$eid = $_POST['eid'];
$iname = $_POST['itemname'];
$icode = $_POST['itemcode'];
$quantity = $_POST['quantity'];
$body = $_POST['body'];
$machine = $_POST['machine'];
$description = $_POST['description'];
$material = $_POST['material'];
$operation = $_POST['operation'];
$suboperation = $_POST['sub_operation'];
$slip = $_POST['slip'];
$date = date("Y-m-d");  

$conn = new mysqli("localhost","root","","microne");

$query ="SELECT count FROM stock WHERE itemname='$iname'";


$res = $conn->query($query);


if ($res->num_rows > 0) {
    
   	while($row = $res->fetch_assoc()) {
        
        if($row['count'] <= 0){
            
            echo "<script>alert('Stock is Empty')</script>";
            
            
        }
        
else {	
  if($row['count']>=$quantity)
  {

	$sql2 = "INSERT INTO emp_table(eid,iname,icode,quantity,body,machine,description,material,operation,suboperation,slip,dot) VALUES ('$eid','$iname','$icode',$quantity,'$body','$machine','$description','$material','$operation','$suboperation','$slip','$date');";

   	$conn->query($sql2);
    $sql3 = "SELECT * FROM stock WHERE itemname='$iname';";

$result = $conn->query($sql3);




if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
  
  $value = $row["count"];
  
  $change = $value - $quantity;

  $sql4 = "UPDATE stock SET count = $change WHERE itemname = '$iname'";

  $conn->query($sql4);
  } 

}
}
else
  {echo "<script>alert('Stock Insufficient')</script>";
	}
}



      
}
}
}
?>

</body>
</html>