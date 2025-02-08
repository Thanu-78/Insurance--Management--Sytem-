
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
        display: flex;
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
         margin: 14px 10 ;
            justify-content: space-around;
       }
       form .category label {
         display: flex;
         align-items: left;
         cursor: pointer;
       }
       form .category label .dot{
        height: 18px;
        width: 18px;
        align-items: center;
        border-radius: 50%;
        margin-right: 70px;
        background: #d9d9d9;
        border: 5px solid transparent;
        
        /* transition: all 0.3s ease; */
      }

       #dot-1:checked ~ .category label .one,
       #dot-2:checked ~ .category label .two
      {
         background: #9b59b6;
         border-color: #d9d9d9;
       }

       #dot-4:checked ~ .category label .one,
       #dot-5:checked ~ .category label .two
      {
         background: #9b59b6;
         border-color: #d9d9d9;
       }

       #dot-6:checked ~ .category label .one,
       #dot-7:checked ~ .category label .two
      {
         background: #9b59b6;
         border-color: #d9d9d9;
       }
       #dot-8:checked ~ .category label .one,
       #dot-9:checked ~ .category label .two
      {
         background: #9b59b6;
         border-color: #d9d9d9;
       }
       form input[type="radio"]{
         display: none;
         align-items: left;
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
 </head> 
 <body> 
  <div class="container"> 
   <div class="title">
    Client  
   </div> 
   <div class="content"> 
    <form name="form1" action="modified.php" method="POST" enctype="multipart/form-data"> 
     <div class="user-details"> 
      <div class="input-box"> 
       <span class="details">First Name</span> 
       <input type="text" name="First_Name" value="" required="" /> 
      </div> 
      <div class="input-box"> 
       <span class="details">Middle Name</span> 
       <input type="text" name="Middle_Name" value="" required="" /> 
      </div> 
      <div class="input-box"> 
       <span class="details">Last Name</span> 
       <input type="text" name="Last_Name" value="" required="" /> 
      </div>
      
    
      <div class="gender-details"> 
       <input type="radio" name="Gender" value = "M" id="dot-1" /> 
       <input type="radio" name="Gender" value = "F" id="dot-2" /> 
       <span class="gender-title">Gender</span> 
       <div class="category"> 
        <label for="dot-1"> <span class="dot one"></span> 
          <span class="gender">Male</span> </label> 
        <label for="dot-2"> <span class="dot two"></span>
           <span class="gender">Female</span> </label> 
       </div> 
      
      </div> 
      <div class="input-box"> 
       <span class="details">Date of birth</span> 
       <input type="date" name="DOB" value="" required="" /> 
       <!-- <input type="date" placeholder="Enter your DOB" required> --> 
      </div> 
      <div class="input-box"> 
       <span class="details">Address</span> 
       <input type="text" name="Address" value="" required="" /> 
      </div> 
      <div class="input-box"> 
       <span class="details">Pin Code</span> 
       <input type="text" name="Pincode" value="" required="" /> 
      </div> 
      <div class="input-box"> 
       <span class="details">Contact Number</span> 
       <input type="text" name="Contact_Number" value="" required="" pattern="[0-9]{10}" /> 
      </div> 
      <div class="input-box"> 
       <span class="details">Mother Name</span> 
       <input type="text" name="Mother_Name" value="" required="" /> 
      </div> 
      <!-- <div class="gender-details"> 
       <label>Mother Status: </label> 
       <input type="radio" name="Mother_Status" value="A" required="" />Alive 
       <input type="radio" name="Mother_Status" value="D" required="" />Dead 
      </div>  -->
      
      <div class="gender-details"> 
        <input type="radio" name="Mother_Status" value="A" id="dot-4" /> 
        <input type="radio" name="Mother_Status" value="D" id="dot-5" /> 
        <span class="gender-title">Mother Status</span> 
        <div class="category"> 
         <label for="dot-4"> <span class="dot one"></span> <span class="gender">Alive</span> </label> 
         <label for="dot-5"> <span class="dot two"></span> <span class="gender">dead</span> </label> 
        </div> 
       </div> 

      <div class="input-box"> 
       <span class="details">Father Name</span> 
       <input type="text" name="Father_Name" value="" required="" /> 
      </div> 
      <div class="gender-details"> 
        <input type="radio" name="Father_Status" value="A" id="dot-6" /> 
        <input type="radio" name="Father_Status" value="D" id="dot-7" /> 
        <span class="gender-title">Father Status</span> 
        <div class="category"> 
         <label for="dot-6"> <span class="dot one"></span> <span class="gender">Alive</span> </label> 
         <label for="dot-7"> <span class="dot two"></span> <span class="gender">dead</span> </label> 
        </div> 
       </div> 
      <div class="input-box"> 
       <label>Spouse Name: </label> 
       <input type="textbox" name="Spouse" value="" /> 
      </div>  
      
      <div class="gender-details"> 
        <input type="radio" name="Marital_Status" value="S" id="dot-8" /> 
        <input type="radio" name="Marital_Status" value="M" id="dot-9" /> 
        <span class="gender-title">Marital Status</span> 
        <div class="category"> 
         <label for="dot-8"> <span class="dot one"></span> <span class="gender">Single</span> </label> 
         <label for="dot-9"> <span class="dot two"></span> <span class="gender">Married</span> </label> 
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