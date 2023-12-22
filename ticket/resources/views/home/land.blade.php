<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-yGBqzP6HI2KZ9J4LGV+0RQYOp5O5FN6c8OqO+xgJ4eUn4ndvUQp2IaU7k5ekVZbS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TD6aP5tlfQT3E3L9P1hP9EJ3L9tXqKA5KmblbUHP/A+5CgCsKzUjZ6q6ZmLRXzj" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

    <title>Inspirante Technologies Pvt. Ltd</title>
    <link rel="stylesheet" href="/css/land.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar code goes here -->
            <div class="sidebarbody" id="sidebarbody">
                <nav class="navbar">
                    <div class="logo_item">
                        <i class="bx bx-menu" id="sidebarOpen"></i>
                        <img src="/images/logo.png" style="height:60px;width:60px" alt="Light Logo" id="lightLogo">
                    </div>
                    <!-- social media -->
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
                            <a class="social-icon--link social-icon" href="mailto:inspirantech@gmail.com?subject=Mail from Inspirante Website (Ticket Raising)" target="_blank" rel="noreferrer">
                                <img src="https://cdn.iconscout.com/icon/free/png-256/free-gmail-2981844-2476484.png?f=webp" alt="Gmail">
                            </a>
                        </div>
                    </div>

                    <!-- social media end -->
                </nav>
                <nav class="sidebar">
                    <div class="menu_content">
                        <ul class="menu_items">
                            <div class="menu_title menu_dahsboard"></div>
                            <ul class="menu_items">
                                <div class="menu_title menu_editor"></div>
                                <!-- Start -->
                                <li class="item">
                                    <a href="/" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bxs-magic-wand"></i>
                                        </span>
                                        <span class="navlink">Home</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- start-->
                                <script>
                                    $(document).ready(function() {
                                        // Set the active link based on the current URL
                                        setActiveLink();

                                        // Add a click event listener to the nav links
                                        $('.nav_link').click(function() {
                                            // Remove the 'active' class from all nav links
                                            $('.nav_link').removeClass('active');

                                            // Add the 'active' class to the clicked nav link
                                            $(this).addClass('active');
                                        });

                                        // Function to set the active link based on the current URL
                                        function setActiveLink() {
                                            var currentUrl = window.location.href;

                                            if (currentUrl.endsWith('/')) {
                                                // If the URL ends with '/', set Home as active
                                                $('.nav_link[href="/"]').addClass('active');
                                            } else if (currentUrl.includes('#contact')) {
                                                // If the URL includes '#contact', set Contact as active
                                                $('.nav_link[href="#contact"]').addClass('active');
                                            }
                                        }
                                    });
                                </script>
                                <li class="item">
                                    <a href="#contact" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-envelope"></i>
                                        </span>
                                        <span class="navlink">Contact</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- start-->
                                <li class="item">
                                    <a href="{{url('/login')}}" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-log-in"></i>
                                        </span>
                                        <span class="navlink">Login</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- start-->
                                <li class="item">
                                    <a href="{{url('/reg')}}" class="nav_link">
                                        <span class="navlink_icon">
                                            <i class="bx bx-user-plus"></i>
                                        </span>
                                        <span class="navlink">Signup</span>
                                    </a>
                                </li>
                                <!-- End -->
                                <!-- Sidebar Open / Close -->
                                <div class="bottom_content">
                                    <div class="bottom expand_sidebar">
                                        <span> Expand</span>
                                        <i class='bx bx-log-in'></i>
                                    </div>
                                    <div class="bottom collapse_sidebar">
                                        <span> Collapse</span>
                                        <i class='bx bx-log-out'></i>
                                    </div>
                                </div>
                            </ul>
                    </div>
                </nav>
            </div>

            <!-- Main content -->
            <div class="main-content">
                <!-- Your content goes here -->
                <div class="content">
                    <div class="card-container">
                        <div class="card text-center">
                            <div class="card-body" style="background-color: #4169E1;padding:70px">
                                <h2 class="card-title" style="color: white;">Welcome to Inspirante Technologies Pvt Ltd.</h2>
                                <h5 class="card-text" style="color: rgba(255, 255, 255, 0.803);background-color: #4169E1;">Empowering innovation and solutions with cutting-edge technology for a brighter and impactful future.</h5>
                            </div>
                        </div>
                        <!-- Dashboard cards -->
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <p class="card-text">
                                                Enhance support with streamlined ticket management, seamless solutions, efficient query navigation for issue resolution.</p>
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCc9lQSU_iBlAOGzKsWbD-dyZKDatszeNc0bRI5JZYhtPN_KrYmeLN4G-lNFMENYmVPMk&usqp=CAU">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <p class="card-text">Stay updated with live ticket tracking and timely progress notifications for informed decision-making and efficient task management.</p>
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyWlVDXANfCHdu8ZRiFMADiMntf-Bjurbbw3JtE5HMS_U--7xL8PaEkyxu8RuKXQAmsPo&usqp=CAU">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3 order-sm-last mx-auto">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <p class="card-text">Get expert help at your convenience, ensuring satisfaction with issue resolution through professional support and seamless assistance.</p>
                                            <img src="data:image/jpeg;base64,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">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard card end -->
                        <br><br><br>
                        <!-- contct Section Start -->
                        <section class="contact" id="contact" style="padding-bottom: 40px;">
                            <div class="center" style="display: flex; align-items: center; justify-content: center;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border: 1px solid #ccc; padding: 20px;">
                                <section class="contact" style="width:65%;">
                                    <h3 style="text-align:center">Contact Us</h3><br>
                                    <div class="mb-4">
                                        <label for="exampleInputname" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" onclick="sendFeedback()">Submit</button>
                                    <!-- End Contact Form -->
                                </section>
                            </div>
                            <footer class="footer" style="padding: 1px 0;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-9 text-center">
                                            <p style="color:white;padding-top:20px;">&copy; 2023 CompanyName. All rights reserved.</p>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- javascript -->
    <script>
        // email script
        function sendFeedback() {
            email = document.getElementById('email').value;
            name = document.getElementById('name').value;
            message = document.getElementById('message').value;
            if (email === '' || name === '' || message === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please fill in all the fields.',
                    timer: 1000,
                    showConfirmButton: false,
                });
            } else {
                var recipients = "vandanaprabhu702@gmail.com,shetvaish@gmail.com";

                Email.send({
                    Host: "smtp.elasticemail.com",
                    Username: "vandanaprabhu702@gmail.com",
                    Password: "ECE65D1578529A982F0CCF537C56FD007684",
                    To: recipients,
                    From: 'vandanaprabhu702@gmail.com',
                    Subject: "Feedback",
                    Body: `<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
                    
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="x-apple-disable-message-reformatting">
                        <meta name="format-detection" content="telephone=no,address=no,email=no,date=no,url=no">
                
                        <meta name="color-scheme" content="light">
                        <meta name="supported-color-schemes" content="light">
                
                        
                        <!--[if !mso]><!-->
                          
                        <!--<![endif]-->
                
                        <!--[if mso]>
                          <style>
                              // TODO: fix me!
                              * {
                                  font-family: sans-serif !important;
                              }
                          </style>
                        <![endif]-->
                    
                        
                        <!-- NOTE: the title is processed in the backend during the campaign dispatch -->
                        <title></title>
                
                        <!--[if gte mso 9]>
                        <xml>
                            <o:OfficeDocumentSettings>
                                <o:AllowPNG/>
                                <o:PixelsPerInch>96</o:PixelsPerInch>
                            </o:OfficeDocumentSettings>
                        </xml>
                        <![endif]-->
                        
                    <style>
                        :root {
                            color-scheme: light;
                            supported-color-schemes: light;
                        }
                
                        html,
                        body {
                            margin: 0 auto !important;
                            padding: 0 !important;
                            height: 100% !important;
                            width: 100% !important;
                
                            overflow-wrap: break-word;
                            -ms-word-break: break-all;
                            -ms-word-break: break-word;
                            word-break: break-all;
                            word-break: break-word;
                        }
                
                
                        
                  direction: undefined;
                  center,
                  #body_table{
                    
                  }
                
                  .paragraph {
                    font-size: 14px;
                    font-family: Helvetica, sans-serif;
                    color: #000000;
                  }
                
                  ul, ol {
                    padding: 0;
                    margin-top: 0;
                    margin-bottom: 0;
                  }
                
                  li {
                    margin-bottom: 0;
                  }
                 
                  .list-block-list-outside-left li {
                    margin-left: 20px;
                  }
                
                  .list-block-list-outside-right li {
                    margin-right: 20px;
                  }
                  
                  .heading1 {
                    font-weight: 400;
                    font-size: 28px;
                    font-family: Helvetica, sans-serif;
                    color: #4A5568;
                  }
                
                  .heading2 {
                    font-weight: 400;
                    font-size: 20px;
                    font-family: Helvetica, sans-serif;
                    color: #4A5568;
                  }
                
                  .heading3 {
                    font-weight: 400;
                    font-size: 16px;
                    font-family: Helvetica, sans-serif;
                    color: #4A5568;
                  }
                  
                  a {
                    color: #cd8c30;
                    text-decoration: none;
                  }
                  
                
                
                        * {
                            -ms-text-size-adjust: 100%;
                            -webkit-text-size-adjust: 100%;
                        }
                
                        div[style*="margin: 16px 0"] {
                            margin: 0 !important;
                        }
                
                        #MessageViewBody,
                        #MessageWebViewDiv {
                            width: 100% !important;
                        }
                
                        table {
                            border-collapse: collapse;
                            border-spacing: 0;
                            mso-table-lspace: 0pt !important;
                            mso-table-rspace: 0pt !important;
                        }
                        table:not(.button-table) {
                            border-spacing: 0 !important;
                            border-collapse: collapse !important;
                            table-layout: fixed !important;
                            margin: 0 auto !important;
                        }
                
                        th {
                            font-weight: normal;
                        }
                
                        tr td p {
                            margin: 0;
                        }
                
                        img {
                            -ms-interpolation-mode: bicubic;
                        }
                
                        a[x-apple-data-detectors],
                
                        .unstyle-auto-detected-links a,
                        .aBn {
                            border-bottom: 0 !important;
                            cursor: default !important;
                            color: inherit !important;
                            text-decoration: none !important;
                            font-size: inherit !important;
                            font-family: inherit !important;
                            font-weight: inherit !important;
                            line-height: inherit !important;
                        }
                
                        .im {
                            color: inherit !important;
                        }
                
                        .a6S {
                            display: none !important;
                            opacity: 0.01 !important;
                        }
                
                        img.g-img+div {
                            display: none !important;
                        }
                
                        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                            u~div .contentMainTable {
                                min-width: 320px !important;
                            }
                        }
                
                        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                            u~div .contentMainTable {
                                min-width: 375px !important;
                            }
                        }
                
                        @media only screen and (min-device-width: 414px) {
                            u~div .contentMainTable {
                                min-width: 414px !important;
                            }
                        }
                    </style>
                
                    <style>
                        @media only screen and (max-device-width: 600px) {
                            .contentMainTable {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .single-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .multi-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .imageBlockWrapper {
                                width: 100% !important;
                                margin: auto !important;
                            }
                        }
                        @media only screen and (max-width: 600px) {
                            .contentMainTable {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .single-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .multi-column {
                                width: 100% !important;
                                margin: auto !important;
                            }
                            .imageBlockWrapper {
                                width: 100% !important;
                                margin: auto !important;
                            }
                        }
                    </style>
                    <style></style>
                    
                <!--[if mso | IE]>
                    <style>
                        .list-block-outlook-outside-left {
                            margin-left: -18px;
                        }
                    
                        .list-block-outlook-outside-right {
                            margin-right: -18px;
                        }
                
                    </style>
                <![endif]-->
                
                
                    </head>
                
                    <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #efefef;">
                        <center role="article" aria-roledescription="email" lang="en" style="width: 100%; background-color: #efefef;">
                            
                                        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" style="margin: auto;" class="contentMainTable">
                                            <tr class="wp-block-editor-spacerblock-v1"><td style="background-color:#EFEFEF;line-height:30px;font-size:30px;width:100%;min-width:100%">&nbsp;</td></tr><tr class="wp-block-editor-paragraphblock-v1"><td valign="top" style="padding:20px 20px 20px 20px;background-color:#EFEFEF"><p class="paragraph" style="font-family:Helvetica, sans-serif;text-align:right;line-height:1.15;font-size:9px;margin:0;color:#4A5568;word-break:normal">Unable to view? Read it <a href="{view}" data-type="mergefield" data-id="df81370a-ecd3-455f-9de8-f24576e72260-yTJQHrdYhYCwuUX8e_vjD" data-filename="" class="df81370a-ecd3-455f-9de8-f24576e72260-yTJQHrdYhYCwuUX8e_vjD" data-mergefield-value="view" data-mergefield-input-value="" style="color: #cd8c30;">Online</a></p></td></tr><tr class="wp-block-editor-imageblock-v1"><td style="background-color:#EFEFEF;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px" align="center"><table align="center" width="168" class="imageBlockWrapper" style="width:168px" role="presentation"><tbody><tr><td style="padding:0"><img src="https://api.smtprelay.co/userfile/fce461b2-a74a-4a02-9c15-840c04e135f3/inspirante.jpg" width="168" height="" alt="" style="border-radius:0px;display:block;height:auto;width:100%;max-width:100%;border:0" class="g-img"></td></tr></tbody></table></td></tr><tr class="wp-block-editor-paragraphblock-v1"><td valign="top" style="padding:20px 20px 5px 20px;background-color:#FFFFFF"><p class="paragraph" style="font-family:Helvetica, sans-serif;text-align:center;direction:ltr;line-height:1.15;font-size:24px;margin:0;color:#4A5568;letter-spacing:0;word-break:normal"><a href="{url}" data-type="mergefield" data-filename="" data-id="2f9d5c85-09fe-43be-a031-e21353eff654-4_nMFVYxXK77hHT8FAPat" class="2f9d5c85-09fe-43be-a031-e21353eff654-4_nMFVYxXK77hHT8FAPat" data-mergefield-value="url" data-mergefield-input-value="" style="color: #cd8c30;">Inspirante Techonologies Pvt Ltd.</a></p></td></tr><tr class="wp-block-editor-paragraphblock-v1"><td valign="top" style="padding:20px 20px 20px 20px;background-color:#fff"><p class="paragraph" style="font-family:Helvetica, sans-serif;line-height:1.15;font-size:16px;margin:0;color:#4A5568;letter-spacing:0;word-break:normal">Dear Admin,<br><br>` + name + ` has sent you a feedback about the Ticket Raising system<br><br>The feedback message is: ` + message + `<br><br>If you have any questions or require assistance, feel free to reach out to our dedicated support team at <a href="{inspirantech@gmail.com}" data-type="mergefield" data-id="3d08b48a-6a47-4681-97d2-d7a6fc793f79-IJnBS9_z5-kMvqE9QOhGX" data-filename="" data-mergefield-value="custom" data-mergefield-input-value="inspirantech@gmail.com" class="3d08b48a-6a47-4681-97d2-d7a6fc793f79-IJnBS9_z5-kMvqE9QOhGX" style="color: #cd8c30;">inspirantech@gmail.com</a>.<br><br>Thank you once again for choosing Inspirate Technologies Pvt Ltd. <br><br>We appreciate the opportunity to serve you, and we\'re confident that your experience with us will be both rewarding and enjoyable.<br><br>Best regards,<br>[Your Name]<br>[Your Title/Position]<br>Inspirate Technologies Pvt Ltd<br>[Contact Information]</p></td></tr><tr class="wp-block-editor-imageblock-v1"><td style="background-color:#fff;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0" align="center"><table align="center" width="210" class="imageBlockWrapper" style="width:210px" role="presentation"><tbody></tbody></table></td></tr><tr class="wp-block-editor-headingblock-v1"><td valign="top" style="background-color:#fff;display:block;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;text-align:center"><p style="font-family:Helvetica, sans-serif;text-align:center;line-height:23.00px;font-size:20px;background-color:#fff;color:#4A5568;margin:0;word-break:normal" class="heading2">Follow us on</p></td></tr><tr class="wp-block-editor-socialiconsblock-v1" role="article" aria-roledescription="social-icons" style="display:table-row;background-color:#fff"><td style="width:100%"><table style="background-color:#fff;width:100%;padding-top:15px;padding-bottom:32px;padding-left:32px;padding-right:32px;border-collapse:separate !important" cellpadding="0" cellspacing="0" role="presentation"><tbody><tr><td align="center" valign="top"><div style="max-width:536px"><table role="presentation" style="width:100%" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td valign="top"><div style="margin-left:auto;margin-right:auto;margin-top:-3.75px;margin-bottom:-3.75px;width:100%;max-width:141px"><table role="presentation" style="padding-left:197.5" width="100%" cellpadding="0" cellspacing="0"><tbody><tr><td><table role="presentation" align="left" style="float:left" class="single-social-icon" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" style="padding-top:3.75px;padding-bottom:3.75px;padding-left:7.5px;padding-right:7.5px;border-collapse:collapse !important;border-spacing:0;font-size:0"><a class="social-icon--link" href="https://www.youtube.com/channel/UCnMdEqI6xEQXvavURAXYiFg" target="_blank" rel="noreferrer"><img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/youtube/youtube-square-solid-color.png" width="32" height="32" style="max-width:32px;display:block;border:0" alt="X (formerly Twitter)"></a></td></tr></tbody></table><table role="presentation" align="left" style="float:left" class="single-social-icon" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" style="padding-top:3.75px;padding-bottom:3.75px;padding-left:7.5px;padding-right:7.5px;border-collapse:collapse !important;border-spacing:0;font-size:0"><a class="social-icon--link" href="https://www.linkedin.com/company/inspirante-technologies-pvt-ltd/?originalSubdomain=in" target="_blank" rel="noreferrer"><img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/linkedin/linkedin-square-solid-color.png" width="32" height="32" style="max-width:32px;display:block;border:0" alt="LinkedIn"></a></td></tr></tbody></table><table role="presentation" align="left" style="float:left" class="single-social-icon" cellpadding="0" cellspacing="0"><tbody><tr><td valign="top" style="padding-top:3.75px;padding-bottom:3.75px;padding-left:7.5px;padding-right:7.5px;border-collapse:collapse !important;border-spacing:0;font-size:0"><a class="social-icon--link" href="https://inspirantech.in/" target="_blank" rel="noreferrer"><img src="https://template-editor-assets.s3.eu-west-3.amazonaws.com/assets/social-icons/website/website-square-solid-color.png" width="32" height="32" style="max-width:32px;display:block;border:0" alt="Website"></a></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table></div></td></tr></tbody></table></td></tr>
                                        </table>
                                    
                        </center>
                    </body>
                </html>`,
                }).then(() => {
                    Swal.fire({
                        title: "Sent Successfully",
                        text: "Thank you for you time!",
                        icon: "success",
                        timer: 1000,
                        showConfirmButton: false,
                    });
                });
                document.getElementById('email').value = "";
                document.getElementById('message').value = "";
                document.getElementById('name').value = "";
            }
        };
        // email script end

        // script for sidebar
        const sidebarbody = document.querySelector(".sidebarbody");
        const sidebar = document.querySelector(".sidebar");
        const submenuItems = document.querySelectorAll(".submenu_item");
        const sidebarOpen = document.querySelector("#sidebarOpen");
        const sidebarClose = document.querySelector(".collapse_sidebar");
        const sidebarExpand = document.querySelector(".expand_sidebar");

        // Function to check and toggle sidebar based on screen width
        function checkScreenWidth() {
            if (window.innerWidth < 768) {
                sidebar.classList.add("close");
            } else {
                sidebar.classList.remove("close");
            }
        }
        checkScreenWidth();
        window.addEventListener("resize", checkScreenWidth);

        sidebarOpen.addEventListener("click", () => {
            sidebar.classList.remove("close");
        });

        sidebarClose.addEventListener("click", () => {
            sidebar.classList.add("close", "hoverable");
        });

        sidebarExpand.addEventListener("click", () => {
            sidebar.classList.remove("close", "hoverable");
        });
        document.getElementById('lightLogo').style.display = 'inline';

        submenuItems.forEach((item, index) => {
            item.addEventListener("click", () => {
                item.classList.toggle("show_submenu");
                submenuItems.forEach((item2, index2) => {
                    if (index !== index2) {
                        item2.classList.remove("show_submenu");
                    }
                });
            });
        });

        if (window.innerWidth < 768) {
            sidebar.classList.add("close");
        } else {
            sidebar.classList.remove("close");
        }
        // end script of sidebar
    </script>
</body>

</html>