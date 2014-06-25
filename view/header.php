
<link rel="shortcut icon" href="../images/meta_icon.png" >
<link rel="icon" href="../images/meta_icon.png" type="image/x-icon">
    <!--[if lt IE 9]>

    <script src="../js/css3-mediaqueries.js"></script>
    <![endif]-->
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
    <script type="text/javascript" src="../js/jquery_must.js" ></script>
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
        <table border="0" cellpadding="0" cellspacing="0" style=" table-layout: fixed;width:96% ;">
            <tr><td  align="left" style="overflow:hidden;"><div class="headerLink"><img src="../images/Majorlogo.png"class="mobile_logo" width="300" height="84" alt="UCapture"/>  </div></td>

                <td  align="right" style="overflow:hidden;vertical-align: middle;padding: 5px;"><font color="#00ff00" >
                        <?php
                         //session_start();
                        if(!isset($_SESSION['user_id']))
                        { ?>
                        <span class="login_header"><a href="#login_form" id="login_pop"style="padding-left:2px;padding-right: 2px; " >SIGN IN</a>/
                        <a href="userRegistration.php" id="join_pop"style="padding-left:2px;padding-right: 2px; " class="highlight">CREATE ACCOUNT</a></font><span class="break_height"> <br/><br/><br/></span></span>
                    <?php
                    }
                    elseif(isset($_SESSION['user_id']))
                    {?>
                        <a href="profile.php" id="login_pop" style="   font-size: 100%; " class="highlight1">MY ACCOUNT</a>&nbsp;
                       <span class="invite_user"> <span style="color: #000000"> <?php echo "Hi! ".$_SESSION['user_id']."  " ;?></span>
                        <a  href="../services/logout.php">Logout</a></span><span class="break_height"> <br/><br/><br/></span>
                    <?php
                    }
                    ?>
                    <span class="menu_up_mobile_only">
<a class="headerMenuactive" href="../index.php">HOME</a>&nbsp;&nbsp;&nbsp;
<a class="headerMenu" href="#">SHOP</a><span style=" letter-spacing: 15px;">&nbsp;&nbsp;</span>

<span class="headerMenuSearch"> SEARCH</span><input type="text" class="searchtextbox" placeholder="type here" value="" name=""/>

                   </span>
                </td></tr>
        </table>
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
