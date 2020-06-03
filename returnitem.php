<?php
$emp = $_POST['select'];
$sid =	$_POST['slip'];

$conn=new mysqli("localhost","root","","");

$query ="SELECT * FROM emp_table WHERE eid = '$emp' AND slip= '$sid' ;";

$res = $conn->query($query);

if ($res->num_rows > 0) {
    
   	$row = $res->fetch_assoc();
   	$eid = $row['eid'];
	$itemname = $row['iname'];
	$icode = $row['icode'];
	$quantity = $row['quantity'];
	$body = $row['body'];
	$machine = $row['machine'];
	$description = $row['description'];
	$material = $row['material'];
	$operation = $row['operation'];
	$suboperation = $row['suboperation'];
		$slip = $row['slip'];
	
	
	$output = '
		<label >Emp_id :</label><input id="iname" name="itemname" value= "'.$eid.'"style="margin-left:59px; width:172px;" type="text"><br><br>
		<label >Slip Number :</label><input id="iname" name="itemname" value = "'.$slip.'" style="margin-left:27px; width:172px;" type="text" disabled><br><br>

<label >Item Name :</label><input id="iname" name="itemname" value = "'.$itemname.'" style="margin-left:40px; width:172px;" type="text" disabled><br><br>


<label >Quantity :</label><input id="iname" name="itemname" value = "'.$quantity.'" style="margin-left:53px; width:172px;" type="text" disabled><br><br>
<label >Body :</label><input id="iname" name="itemname" value = "'.$body.'" style="margin-left:75px; width:172px;" type="text" disabled><br><br>
<label >Machine :</label><input id="iname" name="itemname" value = "'.$machine.'" style="margin-left:55px; width:172px;" type="text" disabled><br><br>
<label >Description :</label><input id="iname" name="itemname" value = "'.$description.'" style="margin-left:35px; width:172px;" type="text" disabled><br><br>
<label >Material :</label><input id="iname" name="itemname" value = "'.$material.'" style="margin-left:56px; width:172px;" type="text" disabled><br><br>
<label >Operation :</label><input id="iname" name="itemname" value = "'.$operation.'" style="margin-left:47px; width:172px;" type="text" disabled><br><br>
<label >suboperation :</label><input id="iname" name="itemname" value = "'.$suboperation.'" style="margin-left:29px; width:172px;" type="text" disabled><br><br>




				';			
    echo $output;
}
else{
	$output = '
					<label name="eid">Emp_id :</label><select id="select" name="select" style="margin-top:40px; margin-left:42px; width:172px;" >
<option style="display:none;">-------Select Emp_id-------</option>
<option id="mic_001" value="mic_001">MIC_001</option>
<option id="mic_002" value="mic_002">MIC_002</option>
<option id="mic_003" value="mic_003">MIC_003</option>
<option id="mic_004" value="mic_004">MIC_004</option>
</select><br><br>
<label >Slip Number :</label><input name="slip" id ="slip"style="margin-left:12px; width:172px;" type="text"><br><br>
<label >Item Name :</label><input name="itemname" style="margin-left:23px; width:172px;" type="text"><br><br>
<label >ItemCode :</label><input name="itemcode" style="margin-left:28px; width:172px;" type="text"><br><br>
<label >Quantity :</label><input name="quantity" style="margin-left:35px; width:172px;" type="text"><br><br>
<label >Body :</label><input name="body" style="margin-left:58px; width:172px;" type="text" ><br><br>
<label >Machine :</label><input name="machine" style="margin-left:36px; width:172px;" type="text"><br><br>
<label >Description :</label><input name="description" style="margin-left:20px; width:172px;" type="text"><br><br>
<label >Material :</label><input name="material" style="margin-left:40px; width:172px;" type="text"><br><br>
<label >Operation :</label><input name="operation" style="margin-left:30px; width:172px;" type="text"><br><br>
<label >Sub Operation :</label><input name="sub_operation" style="margin-left:2px; width:172px;" type="text"><br><br>


<label >Product :</label><input name="prod1" style="margin-left:42px; width:172px;" type="number" min=0 max=100 ><br><br>
<label >Pending :</label><input name="return1" style="margin-left:40px; width:172px;" type="number" min=0 max=100 disabled><br><br><br>
				';			
    echo $output;

}

?>