<!DOCTYPE html>
<?php
$x = False;
$value="views/";
if (str_contains($_SERVER['REQUEST_URI'], "/views/")){
    $x = True;
    $value="";
}
//echo $x;
?>

<header id="header">
        <div class="inner">

                <!-- Logo -->
                        <?php
                            if($x){
                                echo "<a href='../index.php' class='logo'>";
                            } else {
                                echo "<a href='index.php' class='logo'>";
                            }
                        ?>
                            <span class="fa fa-car"></span> <span class="title">CAR RENTAL WEBSITE</span>
                        </a>

                <!-- Nav -->
                        <nav>
                                <ul>
                                        <li><a href="#menu">Menu</a></li>
                                </ul>
                        </nav>

        </div>
</header>

<!-- Menu -->
<nav id="menu">
        <h2>Menu</h2>
        <ul>
                <li>
                    <?php
                            if($x){
                                echo "<a href='../index.php' class='logo'>";
                            } else {
                                echo "<a href='index.php' class='logo'>";
                            }
                        ?>
                    Home</a></li>

                <li><a href="<?php echo $value;?>offers.html">Offers</a></li>

                <li><a href="<?php echo $value;?>fleet.php">Fleet</a></li>

                <li>
                        <a href="#" class="dropdown-toggle">About</a>

                        <ul>
                                <li class="active"><a href="<?php echo $value;?>about.html">About Us</a></li>
                                <li><a href="<?php echo $value;?>team.html">Team</a></li>
                                <li><a href="<?php echo $value;?>blog.html">Blog</a></li>
                                <li><a href="<?php echo $value;?>testimonials.html">Testimonials</a></li>
                                <li><a href="<?php echo $value;?>faq.html">FAQ</a></li>
                                <li><a href="<?php echo $value;?>terms.html">Terms</a></li>
                        </ul>
                </li>
                <li><a href="<?php echo $value;?>contact.html">Contact Us</a></li>
        </ul>
</nav>


