<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!-- popup form #1 --><span class="login_br_for_big_screen"><br/><br/><br/><br/><br/><br/></span>
<a href="#x" class="overlay" id="login_form"></a>

<div class="popup" style="margin-top:0px;">
    <h2 style="z-index: 999;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</h2>
    <form class="form-horizontal" action="../services/signin.php" method="POST">
        <?php
        if(!isset($_SESSION['values']))
        {
            ?>

            <div>
                <label for="login">&nbsp;&nbsp;Username</label>
                <span class="login_textbox_br"><br/></span>&nbsp;&nbsp;<input type="text" id="login"  value="" name="username" autocomplete="off"/>
            </div>
            <div>
                <label for="password">&nbsp;&nbsp;Password</label>
                <span class="login_textbox_br"><br/></span> &nbsp;&nbsp;<input type="password" id="password" value="" name="password"/>
            </div>
            <a href="#join_form" id="join_pop">&nbsp;&nbsp;Forgot Password?</a><BR/>
            <span style="float: right">
                                    <input type="submit" value="Log In" class="submit_btn"/>&nbsp;&nbsp;&nbsp;
                                    <input type="button" class="submit_btn"onclick="location.href='#close'" value="Cancel"/><!-- <a class="submit_btn" href="#close">Cancel</a>--></span>
        <?php
        }
        else
        {
            ?>
            <div>
                <label for="login">&nbsp;&nbsp;Username</label>
                <span class="login_textbox_br"><br/></span>&nbsp;<input type="text" id="login"autocomplete="off" value="<?php echo $_SESSION['values']['username']; ?>" name="username"/>
            </div>
            <div>
                <label for="password">&nbsp;&nbsp;Password</label>
                <span class="login_textbox_br"><br/></span> &nbsp;&nbsp;<input type="password" id="password" value="" name="password"/>
            </div><br/>

            <a href="#join_form" id="join_pop">&nbsp;&nbsp;Forgot Password?</a><BR/>
            <span style="float: right"> <input type="submit" value="Log In" class="submit_btn"/>&nbsp;&nbsp;
                                    &nbsp;<input type="button" class="submit_btn"onclick="location.href='#close'" value="Cancel"/><!--<a class="submit_btn" href="#close">Cancel</a>--></span>

        <?php

        }?>

    </form>
</div>
<!-- popup form #2 -->
<a href="#x" class="overlay" id="join_form"></a>
<div class="popup" style="margin: 0 auto;">
    <h2>&nbsp;&nbsp;&nbsp;&nbsp;FORGOT PASSWORD</h2>
    <form action="../services/updatepswd.php" name="" method="post">
        <div>
            <label for="login">&nbsp;&nbsp;USER NAME</label>
            &nbsp;&nbsp;<input type="text" id="login" value="" name="username" autocomplete="off"/>
        </div>
                            <span style="float: right"> <input type="submit" value="SEND" class="submit_btn"/>&nbsp;&nbsp;&nbsp;
                            <input type="button" class="submit_btn"onclick="location.href='#close'" value="Cancel"/></span>
    </form>

</div>