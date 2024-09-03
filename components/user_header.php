<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <!--Sammy commented out logo 
            
         <a href="home.php" class="logo"><i class="fas fa-house"></i>MyHome</a> 
      End
      -->
      <a href="home.php" class="logo"><img src="images/logo1.jpg" style="padding-top:10%;height:45px;width:45px;"><span style="color:orange;">KELLO</span><span style="border:2px dashed orange;">ቤቶች</span></a>

         <ul>
            <!-- <li><a href="post_property.php">post property<i class="fas fa-paper-plane"></i></a></li>
             -->
             <li>  <a href = "https://t.me/kelobet" style="background-color:orange;color:black;">send message<span></span><i class="fab fa-telegram"></i></a></li>
            
             <li><a href="listings.php">all listings<i class="fas fa-home"></i></a></li>
           
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <!-- <li><a href="#">my listings<i class="fas fa-angle-down"></i></a> -->
               <li><a href="#">property for<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <!-- <li><a href="dashboard.php">dashboard</a></li>
                     <li><a href="post_property.php">post property</a></li>
                     <li><a href="my_listings.php">my listings</a></li> -->
                     <li><a href="forsale.php">for sale</a></li>
                     <li><a href="forrent.php">for rent</a></li>
            
                     
                  </ul>
               </li>
               <li><a href="#">options<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search.php">filter search</a></li>
                     <li><a href="listings.php">all listings</a></li>
                     <?php if($user_id != ''){ ?>
                        <li><a href="dashboard.php">dashboard</a></li>
                     <!-- <li><a href="post_property.php">postproperty</a></li> -->
                     <li><a href="post_property.php">postproperty</a></li>
                  <?php } ?></li>
 


                  </ul>
               </li>


               <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">about us</a></i></li>
                     <li><a href="contact.php">contact us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>

               
               <li><a href="#">English<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="home.php">English</a></i></li>
                     <li><a href="home_Oro.php">Afaan Oromo</a></i></li>
                     <li><a href="home_am.php">አማርኛ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.php">login now</a></li>
                  <li><a href="register.php">register new</a></li>
               
              
                  
                  <?php if($user_id != ''){ ?>
                  <li><a href="update.php">update profile</a></li>
                  
                  
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">logout</a>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->