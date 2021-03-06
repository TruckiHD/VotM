<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Village Of The Moon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<section class="sub-header1">
    <nav>
        <a href="index.html"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="download.html ">DOWNLOAD</a></li>
                <li><a href="blog.php">NEWS</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Developing <span class="auto-input4"></span></h1>
</section>

<!-----Blog page Content----->

<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <div class="blog-version">
                <h3>Updates</h3>
                <div class="version-box">
                    <h4>Verison 0.2.2</h4>
                    <p>With the update 0.2.2 many bugs were fixed and the settings menu was completed. You now have the possibility to set the speed of the time and also to pause it. Since many people are still complaining about the performance, the main focus until the next update will be on getting this game to run smoothly everywhere. This version was also released for the game testers. If you want to become a game tester yourself, please visit our official <a href="https://discord.gg/W9f7HJEbRq" class="btnimpressum">Discord</a>. Last but not least, it is worth mentioning that village of the moon can now be played in 5 languages. The languages are English, German, French, Spanish and Polish.</p>
                    <br>
                </div>
                <div class="version-box">
                    <h4>Verison 0.2.1</h4>
                    <p>In this update, the entire camera system has been revised once again. This means that you can now use the keyboard to move the camera and if you press the middle mouse button you can rotate the camera. In addition, a few changes were made to the user interface and the map, new objects were added to the game and last but not least, performance was optimised.</p>
                    <br>
                </div>
                <div class="version-box">
                    <h4>Verison 0.2.0</h4>
                    <p>In this new version, the first version of the settings menu has been added. You can now adjust the graphics to give people with low-end computers a chance to enjoy this game smoothly. In addition, it is now possible to set the volume of the game and the music. Of course, there is not only the improved settings menu but also many smaller improvements. From version 0.2.2 it will also be possible to test the game as a game tester. If you want to apply as a game tester, please visit our <a href="https://discord.gg/W9f7HJEbRq" class="btnimpressum">Discord</a>.</p>
                    <br>
                </div>
            </div>
            <div class="comment-box">
                <h3>Leave a comment (IN DEVELOPMENT)</h3>
                <form class="comment-form" action="" method="post">
                    <input type="text" name="name" placeholder="Enter Name">
                    <input type="email" name="email" placeholder="Enter Email">
                    <textarea rows="5" name="message" placeholder="Your comment"></textarea>
                    <button type="submit" class="hero-btn red-btn" name="post">POST COMMENT</button>
                </form>
            </div>
            <div class="content-commentation">

            </div>
        </div>
        <div class="blog-right">
            <h3>Version History</h3>
            <div>                
                <span>Optimizations</span>
                <span>0.2.2</span>
            </div>
            <div>                
                <span>Camera Movement</span>
                <span>0.2.1</span>
            </div>
            <div>                
                <span>Settings</span>
                <span>0.2.0</span>
            </div>
            <div>                
                <span>Intro</span>
                <span>0.1.4</span>
            </div>
            <div>                
                <span>3D Main Menu</span>
                <span>0.1.3</span>
            </div>
            <div>                
                <span>Finished Main Menu UI</span>
                <span>0.1.2</span>
            </div>
            <div>                
                <span>First Basic Update</span>
                <span>0.1.1</span>
            </div>
            <div>                
                <span>Start</span>
                <span>0.1.0</span>
            </div>
        </div>
    </div>
</section>

<!-----facilities----->

<!-----Footer----->

<section class="footer">
    <h4>About Us</h4>
    <p>We are a very small development team consisting of only a few people. <br>Feel free to check out our social media links!</p>
    <div class="icons">
        <a href="https://www.facebook.com/Village-Of-The-Moon-104653532120151"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/VillageOfTheM"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/villageofthemoonstudios/"><i class="fa fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCz6V_hQlrecVNT4LMpHNNaQ"><i class="fa fa-youtube-play"></i></a>
    </div>
    <p>Copyright ?? by VOTM Studios</p>
</section>

<!--------JavaScript for Toggle Menu------->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
        var typed = new Typed(".auto-input4", {
        strings: ["News", "Updates"],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true
    })
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=305537821"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){window.dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '305537821');
</script>
</body>
</html>