
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration Form</title>
     <style>
     *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
      }
      body{
        height: 100vh;
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
       #dot-1:checked ~ .category label .one,
       #dot-2:checked ~ .category label .two,
       #dot-3:checked ~ .category label .three{
         background: #9b59b6;
         border-color: #d9d9d9;
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

    </style>
   </head>
<body>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
    <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" > 
        <div class="user-details">
          <div class="input-box">
            <span class="details">Agent_code</span>
            <input type="text" name = "Agent_code" required pattern="[0-9]{3}[A-Z a-z]{3}[0-9]{3}"/>
          </div>
          
          <div class="input-box">
            <span class="details">Agent_name</span>
            <input type="text" name = "Agent_Name" value = "" required />
          </div>
          <div class="input-box">
            <span class="details">Date of birth</span>
            <input type="date" name = "DOB" value = "" required />
          </div>
          <div class="input-box">
            <span class="details">Address:</span>
            <input type="text" name = "Address" value = "" required />
          </div>
          <div class="input-box">
            <span class="details">Pincode:</span>
            <input type="text" name = "Pincode" value = ""  required />
          </div>
          <div class="input-box">
            <span class="details">Branch:</span>
            <input type="text" name = "Branch" value = ""  required/>
          </div>
          <div class="input-box">
            <span class="details">Contact Number:</span>
            <input type="text" name="Contact_Number" value="" required/>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <div class = "button">    
          <input type = "reset" value = "reset"/>    
        </div>
      </form>
    </div>
    <ul>
			<li style="float:right;"><a href="../index.php"> <h4>Back to homepage</h4></a></li>
		</ul>
</body>
</html>    