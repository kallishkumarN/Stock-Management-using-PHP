<?php
$iname = $_POST['iname'];

//$date=date('y-m-d');
$conn=new mysqli("localhost","root","","microne");

$query ="SELECT * FROM stock WHERE itemname = '$iname' ;";

$res = $conn->query($query);

if ($res->num_rows > 0) {
    
   	$row = $res->fetch_assoc();
   	$iname = $row['itemname'];
	$sid = $row['itemcode'];
	//$quantity = $row[''];
	$output = '
		<label >Item Name :</label><input id="iname" name="itemname" value= "'.$iname.'"style="margin-left:23px; width:172px;" type="text"><br><br>

<label >Item code :</label><input id="iname" name="itemname" value = "'.$sid.'" style="margin-left:23px; width:172px;" type="text" disabled><br><br>

				';			
    echo $output;
}
else{
	$output = '
					<label >Item Name :</label><input id="iname" name="itemname" style="margin-left:23px; width:172px;" type="text"><br><br>

<label >Item code :</label><input id="iname" name="itemname" style="margin-left:23px; width:172px;" type="text" disabled><br><br>
				';			
    echo $output;

}

?>