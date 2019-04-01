<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create User Account</title>

    
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Register User </h2>
                        <p>User Informations</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">

                            {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="emp_id" class="required">Employee ID</label>
                                    <input type="text" name="emp_id" id="emp_id" />
                                </div>
                                <div class="form-input">
                                    <label for="username" class="required">Username</label>
                                    <input type="text" name="username" id="username" />
                                </div>
                                
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>

                                <div class="form-input">
                                        <label for="password" class="required">Password</label>
                                        <input type="password" name="password" id="password" />
                                    </div>

                                <div class="form-input">
                                    <label for="password_confirmation" class="required">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" />
                                </div>
                            </div>
                            <div class="form-group">
							
                        </div>
                        
                    </div>
						<div class="form-submit">

                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            
                        
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>