<?php    
include "../connection.php";
    
    
$sql = "select * from agent";    
$result = mysqli_query($conn,$sql);    
?>    
<html>  
	<style>
	body {
  color: #181515;
  font-size: 20px;
  font-family: Verdana, Arial, Helvetica, monospace;
  background: linear-gradient(135deg,
	 #71b7e6, #cde0cf);
}

h1{

	color: black;

}
table{
	color:black;
	border: 10px solid white;
   /* border-collapse: collapse;  */
}

	</style>  
    <body>    
		<!-- <link href = "registration.css" type = "text/css" rel = "stylesheet" />  
	    <link href = "style1.css" type = "text/css" rel = "stylesheet" /> 
		<ul>
			<li style="float:right;"><a href="../index.php"> Back to homepage</a></li>
		</ul>		 -->
		<h1><center>Agents Data</center></h1>
		
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Agent Code</td>    
                <td>Agent Name</td>    
                <td>DOB</td>    
                <td>Address</td>    
                <td>Pincode</td>    
                <td>Branch</td>    
				<td>Contact Number</td>
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Agent_code;?>  
				</td>  
				<td>  
					<?php echo $row->Agent_name;?>  
				</td>  
				<td>  
					<?php echo $row->DOB;?>  
				</td>  
				<td>  
					<?php echo $row->Address;?>  
				</td>  
				<td>  
					<?php echo $row->Pincode;?>  
				</td>  
				<td>  
					<?php echo $row->Branch;?>  
				</td>  
				<td> 
					<?php echo $row->Contact_Num;?>  
				</td>  
				<td> <a href="delete.php?id=<?php echo $row->Agent_code;?>" onclick="return confirm('Are You Sure')">Delete    
				</a>
				</td>  
			</tr>  
		<?php } ?>  			
        </table>   	
		<ul>
			<p style="float:right;"><a href="../index.php"> <b>Back to homepage</b></a></p>
		</ul>	
    </body>    
</html>