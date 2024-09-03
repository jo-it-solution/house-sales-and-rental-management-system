<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <!--Sammy commented out logo 
            
         <a href="home.php" class="logo"><i class="fas fa-house"></i>MyHome</a> 
      End
      -->
      <a href="home_am.php" class="logo"><img src="images/logo1.jpg" style="padding-top:10%;height:45px;width:45px;"><span style="color:orange;">KELLO</span><span style="border:2px dashed orange;">ቤቶች</span></a>

         <ul>
            
         <li>  <a href = "https://t.me/kelobet" style="background-color:orange;color:black;">send telegram<span></span><i class="fab fa-telegram"></i></a></li>
            
         <li><a href="listings_am.php">ሁሉም ዝርዝሮች<i class="fas fa-home"></i></a></li>
            
         </ul>
        
      </section>
     
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">ንብረት ለ<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="forsale_am.php">የሚሸጥ</a></li>
                     <li><a href="forrent_am.php">የሚከራይ</a></li>
                     
                  </ul>
               </li>
               <li><a href="#">አማራጮች<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search_am.php">የማጣሪያ ፍለጋ</a></li>
                     <li><a href="listings_am.php">ሁሉም ዝርዝሮች<i class="fas "></i></a></li>
            
                     
                     <?php if($user_id != ''){ ?>

                            <li><a href="post_property_am.php"> ንብረት የመለጠፍ</a></li>
                            <li><a href="dashboard_am.php">ዳሽቦርድ</a></li>
                          <li><a href="my_listings_am.php">የእኔ ዝርዝሮች</a></li>
                          <li><a href="components/user_logout_am.php" onclick="return confirm('logout from this website?');"></a>
                           <?php } ?></li>


                     
                    
                     
                  </ul>
               </li>
               <li><a href="#">መርዳት<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about_am.php">ስለ እኛ</a></i></li>
                     <li><a href="contact_am.php">አግኙን</a></i></li>
                     <li><a href="contact_am.php#faq">ተደጋጋሚ ጥያቄ ቀረበ</a></i></li>
                  </ul>
               </li>

               <li><a href="#">አማርኛ<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="home.php">English</a></i></li>
                     <li><a href="home_Oro.php">Afaan Oromo</a></i></li>
                     <li><a href="home_am.php#faq">አማርኛ</a></i></li>
                  </ul>
               </li>

            </ul>
         </div>

         <ul>
            <li><a href="saved_am.php">ተቀምጧል <i class="far fa-heart"></i></a></li>
            <li><a href="#">መለያ <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login_am.php">አሁን ግባ</a></li>
                  <li><a href="register_am.php">አዲስ ይመዝገቡ</a></li>
               
               <!--   || $admin_id == ''-->
                  <?php if($user_id != ''){ ?>
                  <li><a href="update_am.php">መገለጫ አዘምን</a></li>
                  <li><a href="components/user_logout_am.php" onclick="return confirm('ከዚህ ድህረገፅ መውጣት?');">ውጣ</a>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->