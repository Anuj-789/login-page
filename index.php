
   
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background:linear-gradient(135deg, #5B86E5, #36D1DC); 
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0;
            }
    
            .login-container {
                background: white;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                width: 300px;
            }
    
            h2 {
                text-align: center;
                color: #333;
                margin-bottom: 30px;
                font-size: 24px;
            }
    
            .input-field {
                width: 100%;
                padding: 12px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }
    
            .input-field:focus {
                border-color: rgb(11, 174, 238);
                outline: none;
            }
    
            .login-btn {
                width: 100%;
                padding: 12px;
                background-color: #36D1DC;
                border: none;
                border-radius: 5px;
                color: white;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
    
            .login-btn:hover {
                background-color: #5B86E5;
            }
    
            .forgot-password {
                text-align: center;
                margin-top: 10px;
                font-size: 14px;
               
            }
    
            .forgot-password a {
                color: #36D1DC;
                text-decoration: none;
            }
    
            .forgot-password a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    
    <body>
        <div class="login-container">
            <h2>Login </h2>
            <form action="#" method="POST">
                <input type="text" class="input-field" placeholder="Username"  name="name" required>
                <input type="text" class="input-field" placeholder="email id" required name="email">
                <input type="password" class="input-field" placeholder="Password" required name="password">
                <button type="submit" class="login-btn" name="sub">Log In</button>
            </form>
            <div class="forgot-password">
                <a href="form.html">Forgot your password?</a>
            </div>
        </div>

        <?php

        $anuj = mysqli_connect('localhost','root','','users');
        
        if(isset($_POST['sub']))
        {
          $pname=$_POST['name'];
          $pemail=$_POST['email'];
          $password=$_POST['password'];

          $ins="insert into userdata(name, email, password)values ('$pname','$pemail','$password')";
          
          $execute=mysqli_query($anuj,$ins);

        }
          
        ?>
    </body>
    
    </html>
    



