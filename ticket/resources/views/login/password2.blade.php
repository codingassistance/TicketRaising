<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" href="/css/land.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 70%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .maincontent {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            margin-top: 60px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            <img src="/images/logo.png" style="height:60px;width:60px" alt="Light Logo" id="lightLogo">
            <p style="margin:10px 0 16px">Inspirante Technlolgies Pvt. Ltd</p>
        </div>
        <div class="social-icons-container">
            <div class="linkedin">
                <a class="social-icon--link social-icon" href="https://www.linkedin.com/company/inspirante-technologies-pvt-ltd/?originalSubdomain=in" target="_blank" rel="noreferrer">
                    <img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/linkedin/linkedin-square-solid-color.png" alt="LinkedIn">
                </a>
            </div>
            <div class="facebook">
                <a class="social-icon--link social-icon" href="https://www.facebook.com/Inspirantechnologies" target="_blank" rel="noreferrer">
                    <img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/facebook/facebook-square-solid-color.png" alt="Facebook">
                </a>
            </div>
            <div class="youtube">
                <a class="social-icon--link social-icon" href="https://www.youtube.com/channel/UCnMdEqI6xEQXvavURAXYiFg" target="_blank" rel="noreferrer">
                    <img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/youtube/youtube-square-solid-color.png" alt="YouTube">
                </a>
            </div>
            <div class="gmail">
                <a class="social-icon--link social-icon" href="https://inspirantech@gmail.com" target="_blank" rel="noreferrer">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-gmail-2981844-2476484.png?f=webp" alt="Gmail">
                </a>
            </div>
        </div>
    </nav>
    <form class="reg-form" id="passwordResetForm" action="{{ route('change') }}" method="post">
        {!! csrf_field() !!}
        <div class="maincontent">

            <h3>Reset Password</h3>
            <p>Password should have 8 characters with at least one number, one capital letter, and one symbol.</p>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" style="background-color:#f0f0f0;" value="<?php echo isset($_COOKIE['userEmail']) ? htmlspecialchars($_COOKIE['userEmail']) : ''; ?>" readonly>
            <br>
            <label for="password">New Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="cpassword">Confirm Password:</label>
            <input type="password" id="cpassword" name="cpassword" required>
            <br>
            <button type="submit">Reset Password</button>
    </form>
    </div>
    <footer class="footer" style="padding: 1px 0;">
        <div class="container">
            <div class="row">
                <p style="padding: 10px; margin: auto; color:grey;">&copy; 2023 Inspirante Technologies. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>

    <script>
        (function() {
            document.querySelector("#passwordResetForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission
                let password = document.getElementById('password').value;
                let confirmPassword = document.getElementById('cpassword').value;
                let isValid = true;
                if (password === "") {
                    isValid = false;
                    swal("Error", "Password is required field", "error");
                } else if (!isPasswordValid(password)) {
                    isValid = false;
                }
                if (confirmPassword === "") {
                    isValid = false;
                    swal("Error", "Confirm Password is required field", "error");
                } else if (confirmPassword !== password) {
                    isValid = false;
                    swal("Error", "Password and Confirm Password do not match", "error");
                }
                if (isValid) {
                    Cookies.remove('userEmail');
                    swal({
                        title: "Resetting Password...",
                        text: "Password reset successful.",
                        icon: "success",
                        timer: 3000,
                        buttons: false,
                    });
                    document.getElementById("passwordResetForm").submit();
                }
            });

            function isPasswordValid(password) {
                if (!/^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,}$/.test(password)) {
                    swal("Error", "Password should have 8 characters with at least one number, one capital letter, and one symbol", "error");
                    return false;
                }
                return true;
            }
        })();
    </script>
</body>

<?php

if (isset($_COOKIE['userEmail'])) {
    $userEmail = $_COOKIE['userEmail'];
} else {
    $userEmail = null;
}

?>


</html>