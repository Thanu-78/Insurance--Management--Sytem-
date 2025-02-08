<?php
include "input1.php";
$f=0;
?>
<html>    
    <head>    
        <title>Policy Information</title>    
    </head>  
	<style>
	body {
    color: #181515;
    font-size: 50px;
    font-family: Verdana, Arial, Helvetica, monospace;
    background: linear-gradient(135deg, #71b7e6, #cde0cf);
	font-color:black;	
}
h2
{
	color:	black;
}
.container{
        max-width: 700px;
        width: 25%;
        background-color: #d5f4e6;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.15);
		color:black;
      }

form .button{
          height: 45px;
          margin: 35px 0
        }
        form .button input{
          height: 100%;
          width: 100%;
          border-radius: 5px;
          border: none;
          color: #fff;
          font-size: 18px;
          font-weight: 500;
          letter-spacing: 1px;
          cursor: pointer;
          transition: all 0.3s ease;
          background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        form .button input:hover{
          /* transform: scale(0.99); */
          background: linear-gradient(-135deg, #71b7e6, #9b59b6);
          }
</style>  
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />
        <h2><u>Premium</u></h2>    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
			<div class = "container">
			<?php while($row = mysqli_fetch_object($result)){?>
				<div class = "form_group">
                    <label>Policy Number: </label><label><?php $f=1; echo $row->Policy_Num;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">
					<label>Customer Number: </label><label><?php echo $row->Customer_Num;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Agent Code: </label><label><?php echo $row->Agent_code;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>DOC: </label><label><?php echo $row->DOC;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Product: </label><label><?php echo $row->Product;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Sum Assured: </label><label><?php echo $row->Sum_Assured;?></label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Payment Period: </label><label><?php echo $row->Pay_Period;?> years</label>
				</div>
				<div class = "form_group">
				</div>
				<div class = "form_group">	
					<label>Insurance Period: </label><label><?php echo $row->Ins_Period;?> years</label>
                </div>
				<div class = "form_group">
				<input name='Pol' value="<?php echo $row->Policy_Num;?>" hidden>
				</div>
				<div class = "form_group">
				</div>				
                <div class = "form_group">    
                    <label>Premium paid?: </label>    
                    <input type = "radio" name = "pay" value = "Yes" required />Yes
					<input type = "radio" name = "pay" value = "No" required />No
				</div>
				<!-- <div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div> -->
				<div class="button">
          <input type="submit" value="submit">
        </div>
        <div class = "button">    
          <input type = "reset" value = "reset"/>    
        </div>
			<?php }
			if ($f == 0){
				echo "Policy Not Found";
				echo "<a href='premium.php'>Back to search page</a>";
			}?>
				
            </div>    
        </form>    
    </body>    
</html>