<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .all {
            display: flex;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            height: 100vh;
            width: auto;
        }
        .left {
            flex: 1;
            border: 2px transparent;
            background-image: url(background.png);
            background-repeat: no-repeat;
            background-size: cover;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;       
        }
        .left h1, .left h2 {
            color: white;
            text-align: center;
            margin: 0;
        }
        .left h2 {
            color: black;
            text-shadow: 
                -1px -1px 0 #fff,  
                1px -1px 0 #fff,
                -1px 1px 0 #fff,
                1px 1px 0 #fff;
        }
        .left img {
            width: 350px;
            margin-left: -110px;
        }
        .right {
            flex: 1; 
            padding: 20px; 
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
        .right h2 {
            color: black;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 600;
            font-size:60px;
        }
        .right h3 {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            font-size:35px;
        }
        .left .content {
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-shadow: 0 5px 5px gray;
            margin-top:50px;    
        }
        .left .content h1, .left .content h2 {
            margin-top: 0;
            margin-bottom: 10px;
            padding: 15px;
            margin-left: -75px;
        }
        .left .content h1 {    
            margin-left: 25px;
            font-size: 110px;
            font-family: 'Madelyn', sans-serif; 
            font-weight: 200;                                    
        }
        .left .content h2 {
            margin-left: -180px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 45px;
        }
        .right{
            width: 300px;
            border-right:5px solid black;
            border-width:60px;
            margin-top:0;
        }
        .right .input-container {
            position: relative;
            padding: 10px;
            margin-top: 10px;
            width: 600px;
            border-bottom: 3px solid black;
            box-sizing: border-box;
            margin-left:110px;
        }
        .right .input-container input {
            border: none;
            outline: none;
            background: transparent;
            width: calc(100% - 40px);
            font-size: 16px;
            padding-bottom: 5px;
            margin-right: 20px;
        }
        .right .input-container i {
            position: absolute;
            right: 10px;
            transform: translateY(-50%);
            color: black;
            cursor: pointer;
            font-weight: 800;
            font-size: 50px;
        }
        .login_button{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .login_button button {
    padding: 20px 40px; /* Increased padding for a larger button */
    font-size: 30px;
    cursor: pointer;
    margin-left: -1px;
    border-radius: 120px;
    background-image: linear-gradient(to right, blue, blue, black);
    font-weight: 600;
    color: white;
    height: 70px; /* Increased height */
    width: 250px; /* Increased width */
    text-decoration:underline;
    transition: background-color 0.3s, transform 0.2s;
}

        .login_button button:hover{
            background-color: darkblue;
            transform: scale(1.05);
        }
        .login_button button:active{
            background-color: black;
            transform: scale(0.95);
            transition: transform 0.1s;
        }
        .create{
            display: flex;
            margin-top: 20px;
            align-items: center;
            margin-left: 110px;
        }
        .create button{
            margin-left: 20px;
            border:none;
            background-color: transparent;
            text-decoration: underline;
            color: blue;
            font-weight: 700;
            font-size: 30px;
            cursor: pointer;
            transition: transform 0.2s, color 0.2s;
        }
        .create button:hover {
    color: darkblue;
}

.create button:active {
    transform: scale(0.95);
}



        
    </style>
</head>
<body>
    <div class="all">
        <div class="left">
            <img src="new logo.png" alt="image">
            <div class="content">
                <h1><link href="https://fonts.cdnfonts.com/css/madelyn-2" rel="stylesheet">
                R.V.M.</h1>
                <h2>Cashiering System</h2>
            </div>
        </div>
        <div class="right">
            <h2>LOGIN</h2>
            <div class="input-container">
                <h3>Email</h3>
                <input type="text" name="email">
                <i class="fas fa-user-tie"></i>
            </div>  
            <div class="input-container">
                <h3>Password</h3>
                <input type="password" name="password" id="password">
                <i class="fas fa-eye" id="togglePassword"></i> 
            </div> 
            <div class="login_button">
                <button>LOG IN</button>
            </div> 
            <div class="create">
                <h3>create account?</h3>
                <button>SIGN UP</button>
            </div>
        </div>
    </div>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
