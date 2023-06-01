<!DOCTYPE html>
<?php 
    include("db/config.php");
    
    
?>

<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="Image\H1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highnasty</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/lstyle.css">
    <!-- css color and mod -->
    <link rel="stylesheet" href="css/ldmstyle.css">
</head>
<body>
    
    <!-- header -->

    <section class="header">

        <div style="float: left; margin-right: 10px;">
        <img src="Image/HLOGO.png" alt="Description of the image" width="50">
        </div>
        <a href="#" class="logo">  Highnasty</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">solutions</a>
            <a href="#product">discover</a>
            <a href="#team">team</a>
            <a href="#blog">development</a>
            <a href="#contact">contact</a>
            <img src="Image/moon.png" id="lightdark" style="margin-left: 10px; margin-right: 10px;">
            <a href="loginn.php"><i class="fas fa-user"></i>Sign In</a>
        </nav>

        <div class="icons">
            <div id="cart-btn" ></div>
            <div id="account-btn" ></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </section>
    <!-- header -->
    

    <!-- shopping cart -->

    <div class="cart-items-container">

        <div id="close" class="fas fa-times"></div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="Image/cart-img-1.jpg" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$18.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="Image/cart-img-2.jpg" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$18.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="Image/cart-img-3.jpg" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$18.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="Image/cart-img-4.jpg" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$18.99/-</div>
            </div>
        </div>
        <a href="#" class="btn"> checkout</a>
    </div>


    <!-- shopping cart -->

    <!-- account form -->

    <div class="account-form">
        <div id="close-form" class="fas fa-times"></div>

        <div class="buttons">
            <span class="btn active login-btn">login</span>
            <span class="btn register-btn">register</span>
        </div>

        <form action="" class="login-form active">
            <h3>Login now</h3>
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
                <a href="#">forgot password</a>
            </div>
            <input type="submit" value="login" class="btn">
        </form>

        <form action="" class="register-form">
            <h3>register now</h3>
            <input type="email" placeholder="enter your email" class="box">
            <input type="password" placeholder="enter your password" class="box">
            <input type="password" placeholder="confirm your password" class="box">
            <input type="submit" value="register" class="btn">
        </form>

    </div>

    <!-- account form -->

    <!-- home -->

    <section class="home" id="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(Image/1.jpg) no-repeat;">
                    <div class="content">
                        <h3>EXPLORE A PLACE...</h3>
                        <span>Where you can connect to a student organization, a gaming group, or a global creative community.Where you and a few friends can spend time together. A place where you can talk every day and hang out more often.</span>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(Image/2.jpg) no-repeat;">
                    <div class="content">
                        <h3>EXPLORE A PLACE...</h3>
                        <span>Where you can connect to a student organization, a gaming group, or a global creative community.Where you and a few friends can spend time together. A place where you can talk every day and hang out more often</span>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(Image/3.jpg) no-repeat;">
                    <div class="content">
                        <h3>EXPLORE A PLACE...</h3>
                        <span>Where you can connect to a student organization, a gaming group, or a global creative community.Where you and a few friends can spend time together. A place where you can talk every day and hang out more often</span>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(Image/4.jpg) no-repeat;">
                    <div class="content">
                        <h3>EXPLORE A PLACE...</h3>
                        <span>Where you can connect to a student organization, a gaming group, or a global creative community.Where you and a few friends can spend time together. A place where you can talk every day and hang out more often</span>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(Image/5.jpg) no-repeat;">
                    <div class="content">
                        <h3>EXPLORE A PLACE...</h3>
                        <span>Where you can connect to a student organization, a gaming group, or a global creative community.Where you and a few friends can spend time together. A place where you can talk every day and hang out more often</span>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- home -->

    <!-- about us -->

    <section class="about" id="about">
        <h1 class="heading"> <span>about</span> us</h1>

        <div class="row">

            <div class="image">
                <img src="Image/H1.png" alt="">
            </div>

            <div class="content">
                <h3>welcome to highnasty</h3>
                <p>A Collaboration Application is a model for overseeing the execution of a project. It can provide a framework for managing expectations, delegating responsibilities, and creating procedures. A Collaboration Application may use specialized project management software or make use of common professional software packages. A Collaboration Application covers a broad range of elements in a project plan. The system helps you to organize and access this information when needed.</p>
                
            </div>

        </div>

    </section>


    <!-- about us -->

    <!-- solution -->

    <section class="services" id="services">

        <h1 class="heading">For all types  <span> of groups </span></h1>

        <div class="box-container">

            <div class="box">
                <img src="Image/IT.png" alt="">
                <h3>Information Technology</h3>
                <p>Address pressing problems quickly, streamline your operational processes through automation, and effectively inform and train users, all within a shorter timeframe.</p>
            </div>

            <div class="box">
                <img src="Image/Eng.png" alt="">
                <h3>Engineering</h3>
                <p>Accelerate the delivery of superior code by consolidating developers, code modifications, and tools into a single location.</p>
            </div>

            <div class="box">
                <img src="Image/service-3.png" alt="">
                <h3>24/7 support</h3>
                <p>Provide exceptional customer service by ensuring that your agents have easy access to the necessary tools, information, and knowledgeable experts.</p>
            </div>

        </div>

    </section>

    <!-- solution -->

    <!-- discover -->

    <section class="product" id="product">

        <h1 class="heading" id="heading">ON HIGHNASTY <span> FIND YOUR COMMUNITY</span></h1>

        <div class="box-container">

            <div class="box">
                
                <img src="Image/Gaming.jpg" alt="">
                <h3>Gaming</h3>
                
            </div>

            <div class="box">
                <img src="Image/Entertainment.jpg" alt="">
                <h3>Entertainment</h3>
            </div>

            <div class="box">
                <img src="Image/Science1.jpg" alt="">
                <h3>Science & Technology</h3>
            </div>

            <div class="box">   
                <img src="Image/Educ.jpg" alt="">
                <h3>Education</h3>
            </div>

            <div class="box">
                <img src="Image/Music.jpg" alt="">
                <h3>Music</h3>
            </div>

            <div class="box">
                <img src="Image/NFT.jpg" alt="">
                <h3>NFT</h3>
            </div>

        </div>

    </section>

    <!-- discover-->

    <!-- team -->

    <section class="team" id="team">

        <h1 class="heading"> our <span>team</span></h1>

        <div class="swiper team-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="Image/Faith.jpg" alt="">
                        <div class="share">
                            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                            <a href="https://twitter.com/" class="fab fa-twitter"></a>
                            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Faith Ligutan</h3>
                        <span>Software Engineer</span> 
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="Image/Mads.jpg   " alt="">
                        <div class="share">
                            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                            <a href="https://twitter.com/" class="fab fa-twitter"></a>
                            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Nheld Madla</h3>
                        <span>Assoc. Software Engineer</span> 
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="Image/Tilan.jpg" alt="">
                        <div class="share">
                            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                            <a href="https://twitter.com/" class="fab fa-twitter"></a>
                            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Jefferson Tilan</h3>
                        <span>Project Manager</span> 
                    </div>
                </div>


                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="Image/Jc.jpg" alt="">
                        <div class="share">
                            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                            <a href="https://twitter.com/" class="fab fa-twitter"></a>
                            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>John Carl Aguibay</h3>
                        <span>System Analyst</span> 
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="Image/Art.jpg" alt="">
                        <div class="share">
                            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                            <a href="https://twitter.com/" class="fab fa-twitter"></a>
                            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                            <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Art Lique</h3>
                        <span>Programmer/ Designer</span> 
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- team -->

    <!-- development -->

    <section class="blog" id="blog">

        <h1 class="heading"> our <span> development</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="Image/Safety.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Safety</h3>
                    <p>Highnasty is a platform that offers users the opportunity to communicate with friends, family, and various communities through its diverse servers. The platform is committed to being inclusive and offers resources to help users personalize their experience and stay safe, regardless of their age or profession. From small groups to large communities, Highnasty aims to create a welcoming environment for all users.</p>       
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Image/Support.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Support</h3>
                    <p>The message informs the user that the sender is not affiliated with the system support staff and provides customer service information to help the user. The user is advised to contact the representatives directly at the provided phone numbers.</p>                
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="Image/Career.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Career</h3>
                    <p>Collaboration aims to create an inclusive society where no one feels alienated and where real human connection is only a mouse click, text message, or phone call away. a location where everyone feels at home. We have the opportunity to have a good influence on millions of individuals throughout the globe thanks to this mission.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- development -->

    <!-- contact -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us</h1>

        <div class="row">

            <div class="image">
                <img src="Image/contact.png" alt="">
            </div>

            <form method="post">
                <h3>get in touch</h3>

                <span>your name</span>
                <input type="text" name="con_name" class="box" onkeyup="textonly(this)" maxlength="45" required>

                <span>your number</span>
                <input type="text" name="con_number" class="box" onkeyup="numberonly(this)" maxlength="11" required>

                <span>your email</span>
                <input type="email" name="email" class="box" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>

                <span>your message</span>
                <textarea class="box" cols="30" name="message" rows="10" required></textarea>

                <input type="submit" value="send message" name="send" class="btn">

            </form>

        </div>

    </section>
    <?php
            
            
            if(isset($POST['send']));
            {
                @$con_name = $_POST['con_name'];
                @$con_number = $_POST['con_number'];
                @$email = $_POST['email'];
                @$message = $_POST['message'];
                
                mysqli_query ($conn, "INSERT INTO `tbl_contact` (con_name,con_number,email, message) VALUES ('$con_name','$con_number','$email', '$message')") or die (mysql_error());
            }
        ?>

    <!-- contact -->

    <!-- credit -->

    <section class="credit">
        ALPHA CORPORATION
    </section>



    <!-- credit -->




    

<script type="text/javascript">
                function numberonly(input) {

                    var num = /[^0-9]/gi;
                    input.value = input.value.replace(num,"");
                    // body...
                }
            </script>
            <script type="text/javascript">
                function textonly(input) {

                    var text = /[^a-z]/gi;
                    input.value = input.value.replace(text,"");
                    // body...
                }
            </script>




    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/scripts.js"></script>

    <script>
        
        var lightdark = document.getElementById("lightdark");

        lightdark.onclick = function(){
            document.body.classList.toggle("dark-theme");
            if(document.body.classList.contains("dark-theme")){
                lightdark.src = "Image/sun.png"
            }else{
                lightdark.src = "Image/moon.png"
            }
        }

    </script>

</body>
</html>