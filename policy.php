<DOCTYPE html>
  <html lang="en" dir="ltr">
   <head> 
    <meta charset="UTF-8" /> 
    <!--<title> Responsive Registration Form | CodingLab </title>---> 
    <!-- <link rel="stylesheet" href="style.css" />  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Registration Form</title> 
    <style>
       *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins',sans-serif;
        }
        body{
          /* height: 100vh; */
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 10px;
          background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .container{
          max-width: 700px;
          width: 100%;
          background-color: #fff;
          padding: 25px 30px;
          border-radius: 5px;
          box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        }
        .container .title{
          font-size: 25px;
          font-weight: 500;
          position: relative;
        }
        .container .title::before{
          content: "";
          position: absolute;
          left: 0;
          bottom: 0;
          height: 3px;
          width: 30px;
          border-radius: 5px;
          background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .content form .user-details{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          margin: 20px 0 12px 0;
        }
        form .user-details .input-box{
          margin-bottom: 15px;
          width: calc(100% / 2 - 20px);
        }
        form .input-box span.details{
          display: block;
          font-weight: 500;
          margin-bottom: 5px;
        }
        .user-details .input-box input{
          height: 45px;
          width: 100%;
          outline: none;
          font-size: 16px;
          border-radius: 5px;
          padding-left: 15px;
          border: 1px solid #ccc;
          border-bottom-width: 2px;
          transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
          border-color: #9b59b6;
        }
         form .gender-details .gender-title{
          font-size: 20px;
          font-weight: 500;
         }
         form .category{
           display: flex;
           width: 80%;
           margin: 14px 0 ;
           justify-content: space-between;
         }
         form .category label{
           display: flex;
           align-items: center;
           cursor: pointer;
         }
         form .category label .dot{
          height: 18px;
          width: 18px;
          border-radius: 50%;
          margin-right: 10px;
          background: #d9d9d9;
          border: 5px solid transparent;
          transition: all 0.3s ease;
        }
  

         #dot-6:checked ~ .category label .one,
         #dot-7:checked ~ .category label .two,
         #dot-8:checked ~ .category label .three,
         #dot-9:checked ~ .category label .four
        {
           background: #9b59b6;
           border-color: #d9d9d9;
           justify-content: space-between;
;
         }
         form input[type="radio"]{
           display: none;
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

      
            select {
        width: 120px;
        height:35px;    
        margin: 10px;
    }
          
    
      </style> 
   </head> 
   <body> 
    <div class="container"> 
     <div class="title">
      Policy Registration
     </div> 
     
     <div class="content">
       
      <form name="form1" action="modified1.php" method="POST" enctype="multipart/form-data"> 
       <div class="user-details"> 
        <div class = "input-box">    
          <label>Policy Number:</label>  <br>  
          <input type = "text" name = "Policy_Num" required pattern="[0-9]{9}"/>    
          <h5>Enter 9 digit number.</h5>
      </div>
      <div class = "input-box">    
          <label><h3>Customer Number:</h3></label>    
          <select name = "Customer_Num">
<?php 
  include "../connection.php";
  $sql="select * from customer";
  $result = mysqli_query($conn,$sql);
  $i=0;
  while($row=mysqli_fetch_object($result)){
    $i++;
?>
  <option value = "<?php echo $row->Customer_Num?>"><?php echo $row->Customer_Num?></option>
  <?php } ?>
  </select>
      </div>    
      
      <div class = "input-box">    
        <label><h4>Agent Code:</h4></label>    
        <select name = "Agent_code">
<?php 
include "../connection.php";
$sql="select * from agent";
$result = mysqli_query($conn,$sql);
$i=0;
while($row=mysqli_fetch_object($result)){
  $i++;
?>
<option value = "<?php echo $row->Agent_code?>"><?php echo $row->Agent_code?></option>
<?php } ?>
</select>
    </div>  
    <div class = "input-box">    
      <label>DOC:</label>    
      <input type = "date" name = "DOC" value = "" required />    
  </div>  
<div class = "input-box">    
      <label>Product:</label>    
      <input type = "text" name = "Product" value = "" required />    
  </div>

<div class = "input-box">    
      <label>Sum Assured: </label>    
      <input type = "text" name = "Sum_assured" value = ""  required />    
  </div>
<div class = "input-box">    
      <label>Payment Period: </label>    
      <input type = "text" name = "Payment_period" value = ""  required />    
  </div>
<div class = "input-box">    
      <label>Insurance Period: </label>    
      <input type = "text" name = "Ins_period" value = ""  required />    
  </div>
                <div class="gender-details"> 
          <input type="radio" name="mode" value="MLY" id="dot-6" /> 
          <input type="radio" name="mode" value="YLY" id="dot-7" /> 
          <input type="radio" name="mode" value="QLY" id="dot-8" /> 
          <input type="radio" name="mode" value="SSS" id="dot-9" /> 
          <span class="gender-title">Premium mode</span> 
          <div class="category"> 
           <label for="dot-6"> <span class="dot one"></span>Monthly</span> </label> 
           <label for="dot-7"> <span class="dot two"></span> Yearly</span> </label>
           <label for="dot-8"> <span class="dot three"></span> Quarterly</span> </label> 
           <label for="dot-9"> <span class="dot four"></span> Single</span> </label> 

          </div> 
         </div>
       </div> 
       <div class="button"> 
        <input type="submit" value="Register" /> 
       </div> 
       <div class="button"> 
        <input type="reset" value="reset" /> 
       </div> 
      </form> 
     </div> 
    
    <ul>
      <li style="float:right;"><a href="../index.php"> <h4>Back to homepage</h4></a></li>
    </ul>
  </div> 
   </body>
  </html>