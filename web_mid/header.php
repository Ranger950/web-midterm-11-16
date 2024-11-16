<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">NUK Store</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="chart.php"><span class="glyphicon glyphicon-signal"></span> 熱銷商品</a></li>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> 購物車</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> 設定</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> 創立會員</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>