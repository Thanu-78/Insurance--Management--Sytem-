
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <!--  <link rel="stylesheet" href="style.css"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>payment Form</title>
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
        padding: 30px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
      }
      .container{
        max-width: 700px;
        width: 50%;
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
    <div class="title">premium</div><br>
    <div class="content">
        <form name = "form1" action='view.php' method = 'POST' enctype = "multipart/form-data" >
        <div class="user-details">
          <div class="input-box">
            <span class="details">Policy number</span>
            <input type="text" name = "pol" value ="" required pattern="[0-9]{9}">
            <br><br><h5><b>enter 9 digit number</b> </h5>
          </div>
          
     
        <div class="button">
          <input type="submit" value="submit">
        </div>
        <div class = "button">    
          <input type = "reset" value = "reset"/>    
        </div>
      </form>
    </div><br><br>
    <ul>
			<li style="float:right;"><a href="../index.php"> <h4>Back to homepage</h4></a></li>
		</ul>
</body>
</html>    