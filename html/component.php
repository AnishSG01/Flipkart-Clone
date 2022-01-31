<?php

function component($productname, $productprice, $productimage){

    
    
    $element = '
    
    <div class="col-md-2 col-sm-6 my-3 my-md-0 example">
    <form method="post">
        <div class="card shadow">
            <div class="dotdimg">
                <img src="'.$productimage.'" alt="image1" class="img-fluid card-img-top doto-img">
            </div>
            <div class="card-body">
                <h5 class="card-title">'.$productname.'</h5><br>
                <h5>
                    <span class="price">$'.$productprice.'</span>
                </h5>
                <button type="submit" name="add" class="btn btn-warning my-3">Add to cart </button>
                <input type="hidden" name="pname" value="'.$productname.'">
                <input type="hidden" name="price" value="'.$productprice.'">
                <input type="hidden" name="pimg" value="'.$productimage.'">
            </div>
        </div>
    </form>
</div>
    
    ';
    
    
echo $element;

}

function navbar(){
   
    echo '
    
    <nav class="heading_navigation flex" id="navigation_heading">
    <div class="nav_container flex">
        <!--logo in navigation bar -->
        <div class="logo flex">
            <a href="../html/index.html" class="flip_logo"><img src="../images/logo.png" alt="logo"></a>
            <a href="../html/index.html" class="anchor plus">Explore<span class="plus_lan">Plus <img src="../images/plus.png" alt="logo"></span></a>
        </div>
            <!-- SEARCH BAR -->
            <div class="search_bar_container">
                <div class="search_bar">
                    <form class="search flex">
                        <input type="text" placeholder="Search for products , brands and more" 
                        class="search_box">
                        <button class="btn_search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <!-- login button -->
            <div class="login">
                <a href="../html/lg.php" class="login_btn" id="login_btn">login</a>
                <div class="login_dropdown none">
                    <ul class="login_dropdown_list">
                        <li class="login_drop_li sign_li flex">
                            <p class="new_login">New customer?</p>
                            <a href="sp.php" class="sign_up">Sign Up</a>
                        </li>
                        <li class="login_drop_li">My Profile</li>
                        <li class="login_drop_li">Flipkart Plus zone</li>
                        <li class="login_drop_li">Orders</li>
                        <li class="login_drop_li">Wishlist</li>
                        <li class="login_drop_li">Rewards</li>
                        <li class="login_drop_li">Gift Cards</li>
                    </ul>
                </div>
            </div>

            <!-- more button -->
            <div class="more">
                <span class="more_lan">More <i class="fa fa-angle-down"></i></span>
                <div class="more_dropdown none">
                    <div class="pointer more_pointer"></div>
                    <ul class="more_dropdown_list">
                        <li class="more_drop_li">
                            <i class="more_icon fa fa-bell"></i>
                            Notification Preferences
                        </li>
                        <li class="more_drop_li">
                            <i class="more_icon fa fa-shopping-basket"></i>
                            Sell on Flipkart
                        </li>
                        <li class="more_drop_li">
                            <i class="more_icon fa fa-question"></i>
                            24X7 Customer Care
                        </li>
                        <li class="more_drop_li">
                            <i class="more_icon fa fa-line-chart"></i>
                            Advertise
                        </li>
                        <li class="more_drop_li">
                            <i class="more_icon fa fa-download"></i>
                            Download App
                        </li>
                    </ul>
                </div>
            </div>

            <!-- cart button -->
            <div class="cart">
                <a href="../html/cart.php"><span class="cart_lan"><i class="fa fa-shopping-cart"></i> Cart  </span></a>
            </div>
    </div>
</nav>

    ';

}

function footer(){
    echo '
    
    <footer class="footer">
    <div class="footer_container">
        <div class="footer_col">
            <div class="footer_row">
                <h2>About</h2>
                <div class="footer_list">
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="../html/main.php">home</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Flipkart Stories</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Flipkart Wholesales</a></li>
                        <li><a href="../html/logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_col">
            <div class="footer_row">
                <h2>Help</h2>
                <div class="footer_list">
                    <ul>
                        <li><a href="#">Payments</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Cancellations & Returns</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Report Infringement</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_col">
            <div class="footer_row">
                <h2>Policy</h2>
                <div class="footer_list">
                    <ul>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">EPR Compliance</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_col">
            <div class="footer_row">
                <h2>Social</h2>
                <div class="footer_list">
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twittert</a></li>
                        <li><a href="#">Youtube</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_col">
            <div class="footer_row left_border instructions">
                <h2>Mail us:</h2>
                <p>Flipkart Internet Private Limited,

                    Buildings Alyssa, Begonia &
                    
                    Clove Embassy Tech Village,
                    
                    Outer Ring Road, Devarabeesanahalli Village,
                    
                    Bengaluru, 560103,
                    
                    Karnataka, India</p>
            </div>
        </div>
        <div class="footer_col">
            <div class="footer_row instructions">
                <h2>Registered office address:</h2>
                <p>Flipkart Internet Private Limited,

                Buildings Alyssa, Begonia &

                Clove Embassy Tech Village,

                Outer Ring Road, Devarabeesanahalli Village,

                Bengaluru, 560103,

                Karnataka, India

                CIN : U51109KA2012PTC066107

                Telephone: 1800 202 9898</p>
            </div>
        </div>
    </div>
</footer>
    
    ';
}


function cartcomponent($productname, $productprice, $productimage){

    
    
    $element = '
    
    <div class="col-md-2 col-sm-6 my-3 my-md-0 example">
    <form method="post">
        <div class="card shadow">
            <div class="dotdimg">
                <img src="'.$productimage.'" alt="image1" class="img-fluid card-img-top doto-img">
            </div>
            <div class="card-body">
                <h5 class="card-title">'.$productname.'</h5><br>
                <h5>
                    <span class="price">$'.$productprice.'</span>
                </h5><br>
                <button type="submit" name="remove" class="btn btn-warning my-3">Remove </button>
                <input type="hidden" name="pname" value="'.$productname.'">
                <input type="hidden" name="price" value="'.$productprice.'">
                <input type="hidden" name="pimg" value="'.$productimage.'">
            </div>
        </div>
    </form>
</div>
    
    ';
    
    
echo $element;

}
?>