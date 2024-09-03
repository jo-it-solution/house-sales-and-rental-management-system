<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <!--Sammy commented out logo 
            
         <a href="home.php" class="logo"><i class="fas fa-house"></i>MyHome</a> 
      End
      -->
      <a href="home_Oro.php" class="logo"><img src="images/logo1.jpg" style="padding-top:10%;height:45px;width:45px;"><span style="color:orange;">KELLO</span><span style="border:2px dashed orange;">ቤቶች</span></a>
      <li>  <a href="https://t.me/kelobet"><span></span><i class="fab fa-telegram"></i></a></li>
          
         <ul>

            <!-- <li><a href="post_property.php">post property<i class="fas fa-paper-plane"></i></a></li>
             -->
            
             <li>  <a href = "https://t.me/kelobet" style="background-color:orange;color:black;">send message<span></span><i class="fab fa-telegram"></i></a></li>
            
             <li><a href="listings_Oro.php">tarreeffama hunda<i class="fas fa-home"></i></a></li>
            
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <!-- <li><a href="#">my listings<i class="fas fa-angle-down"></i></a> -->
               <li><a href="#">qabeentaa kan<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <!-- <li><a href="dashboard.php">dashboard</a></li>
                     <li><a href="post_property.php">post property</a></li>
                     <li><a href="my_listings.php">my listings</a></li> -->
                     <li><a href="forsale_Oro.php">kan gurguramu</a></li>
                     <li><a href="forrent_Oro.php">kan kireeffamu</a></li>
                     
            
                     
                  </ul>
               </li>
               <li><a href="#">filannoowwan<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search_Oro.php">barbaacha</a></li>
                     <li><a href="listings_Oro.php">tarreeffama hunda</a></li>
                     <?php if($user_id != ''){ ?>
                        <li><a href="dashboard_Oro.php">daashboordii</a></li>
                     <li><a href="post_property_Oro.php">qabeentaa maxxansi</a></li>
                     
                  <?php } ?></li>
                  </ul>
               </li>



               <li><a href="#">gargaarsa<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about_Oro.php">waa'ee keenya</a></i></li>
                     <li><a href="contact_Oro.php">nu qunnamaa</a></i></li>
                     <li><a href="contact_Oro.php#faq">FAQ</a></i></li>
                  </ul>
               </li>


               <li><a href="#">Afaan Oromo<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="home.php">English</a></i></li>
                     <li><a href="home_Oro.php">Afaan Oromo</a></i></li>
                     <li><a href="home_am.php#faq">አማርኛ</a></i></li>
                  </ul>
               </li>

            </ul>
         </div>

         <ul>
            <li><a href="saved_Oro.php">kan olka'aame <i class="far fa-heart"></i></a></li>
            <li><a href="#">akka'untii<i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login_Oro.php">amma seenaa</a></li>
                  <li><a href="register_Oro.php">haaraa galmaa'i</a></li>
               
              
                  
                  <?php if($user_id != ''){ ?>
                  <li><a href="update.php">profaayila haaressi</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('marsariitii kan irraa bau barbaadduu?');">keessa ba'aa</a>
               <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->