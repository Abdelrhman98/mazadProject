<?php require_once"init.php";
    if(!isLogin())header("location:login.php");
    include "includes/TPL/nav.inc.php";
    include "includes/TPL/side.inc.php";
?>

<!-- xxxx -->
<section class="content">
<?php 
include ROOT_DIR . "/includes/TPL/profile.inc.php";
    include ROOT_DIR . "/includes/TPL/adminPanel.inc.php";
    include ROOT_DIR . "/makeSession.php";
?>

</section><!-- end of section conent-->

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $sessionName = $_POST['sessionName'];
        $startPrice = $_POST['startPrice'];
        $itemName = $_POST['itemName'];
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];
        $increament = $_POST['increament'];
        $autoSell = $_POST['autoSell'];
        $blind = $_POST['blind'];
        $private = $_POST['private'];
        $tags = $_POST['tags'];
        $cats = $_POST['categories'];

        $test->setTable('session');
        $all = $test->select();
        $getLast = $all[sizeof($all)-1]['id'];
        $test->setTable('item');
        $test->insert(array("tags","sessionId", "itemName"), array($tags, $getLast, $itemName));
        $all = $test->select();
        $getLast = $all[sizeof($all)-1]['id'];
        $test->setTable('session');
        $test->insert(array("autoSell", "isBlind", "startTime", "endTime", "itemId"),
                     array($autoSell, $blind, $startTime, $endTime, $getLast));

    }
?>
<!-- start of add session-->






<!--
        <div class="form col-lg-4 col-md-6 col-sm-8" id='test'>
          <div class="myCon">
               <h2 class="title"><i class="fa fa-bullseye"></i>Add Categories</h2>
                <form action="" class="signUp" method="post" autocomplete="off">
                    <div class="row">
                        <div class="firstName col-12">
                            <label for="firstName" class="col-12">Name</label>
                            <div class="border">
                                <input type="text" name="firstName" class="col-12" placeholder='more than 3 chars'/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="userName col-12">
                            <label for="userName" class="col-12">icon</label>
                            <div class="border">
                                <input type="text" class="col-12" name="userName"  placeholder='eg. mr.robot'/>
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                            <div class="email col-12">
                                <label for="email" class="col-12">Details</label>
                                <div class="border">
                                    <textarea type="text" name="email" class="col-12" ></textarea>
                                </div>
                            </div>    
                        </div>
                </form>
            </div>
            <div class="sup">
                <input type="submit" value = "Add Categories"/>
            </div>
            <p>
                * By signing up, you agree to receive Stox emails, newsletters & updates.
            </p>
        </div>
    





<!--
<div class="login col-lg-4 col-md-6 col-sm-8">
        <span class="dir-signUp">
            New to Mazad? <a href="signUp.html">Sign up</a>
        </span>
        <div class="form">
            <div class="myCon">
                <h2 class="signIn"><i class="fa fa-bullseye"></i> Sign in</h2>
                <form action="" method="post">

                    <div class="row">
                        <div class="email col-12">
                            <label for="email" class="col-12">Email address</label>
                            <div class="border">
                                <input type="email" name="email" class="col-12" placeholder='Your@mail.com' />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="password col-12">
                            <label for="password" class="col-12">Password</label>
                            <div class="border add-icon">
                                <input type="password" class="col-12" name="password" data-show="true" placeholder="Enter strong password" />
                            </div>
                        </div>
                    </div>

                    <div class="sup">
                        <input type="submit" value = "Sign in"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <div class="form col-lg-4 col-md-6 col-sm-8" id='test'>
          <div class="myCon">
               <h2 class="title"><i class="fa fa-bullseye"></i>Sign up</h2>
                <form action="" class="signUp" method="post" autocomplete="off">
                    <div class="row">
                        <div class="firstName col-6">
                            <label for="firstName" class="col-12">First Name</label>
                            <div class="border">
                                <input type="text" name="firstName" class="col-12" placeholder='more than 3 chars'/>
                            </div>
                        </div>
                        <div class="lastName col-6">
                            <label for="lastName" class="col-12">Last Name</label>
                            <div class="border">
                                <input type="text" name="lastName" class="col-12"  placeholder='more than 3 chars'/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="email col-12">
                            <label for="email" class="col-12">Email address</label>
                            <div class="border">
                                <input type="email" name="email" class="col-12"  placeholder='Your@mail.com'/>
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="userName col-12">
                            <label for="userName" class="col-12">Username</label>
                            <div class="border">
                                <input type="text" class="col-12" name="userName"  placeholder='eg. mr.robot'/>
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="phone col-12">
                            <label for="phoneNumber" class="col-12">Phone</label>
                            <div class="border">
                                <input type="tel" class="col-12" name="phoneNumber" placeholder='0-111-1111-111'/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="password col-12">
                            <label for="password"  class="col-12">Password</label>
                            <div class="border add-icon">
                                <input type="password" class="col-12" name="password" data-show="true" placeholder="Enter strong password"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="rePassword col-12">
                            <label for="comPassword" class="col-12">Password Confirmation</label>
                            <div class="border add-icon">
                                <input type="password" class="col-12" name="comPassword" data-show="true" placeholder="Rewrite password"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                           <div class="row">
                               <div class="col-4"><p class='gen'>Gender</p></div>
                                <div class="col-4">
                                    <input id="gen1" type="radio" class="col-1" name="gender" value="male" checked/>
                                    <label for="gen1" class="col-11">Male</label>
                                </div>
                                <div class="col-4">
                                    <input id="gen2" type="radio" class="col-1" name="gender" value="female"/>
                                    <label for="gen2" class="col-11">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sup">
                        <input type="submit" value = "Sign Up"/>
                    </div>
                </form>
            </div>
            <p>
                * By signing up, you agree to receive Stox emails, newsletters & updates.
            </p>
        </div>
        <svg size="220" width="220" height="220" class="css-acnwwq"><path fill="none" stroke="#ced7e0" stroke-width="36" d="M 119.99994722124349 36.000000000016584 A 84 84 0 1 0 120 36"></path><path fill="none" stroke="#ffcb66" stroke-width="26" d="M 119.99994722124349 36.000000000016584 A 84 84 0 1 0 120 36"></path><path fill="none" stroke="#7020fc" stroke-width="26" d="M 119.99994722124349 36.000000000016584 A 84 84 0 1 0 120 36"></path></svg>
        -->
        
<?php include "footer.php";
