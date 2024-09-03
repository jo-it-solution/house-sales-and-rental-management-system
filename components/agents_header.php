<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <!--Sammy commented out logo 
            
         <a href="home.php" class="logo"><i class="fas fa-house"></i>MyHome</a> 
      End
      -->
      <a href="../agent/dashboard.php" class="logo"><img src="../images/logo1.jpg" style="padding-top:10%;height:45px;width:45px;">
      <span style="color:orange;">KELLO</span><span style="border:2px dashed orange;">ቤቶች</span></a>

         <ul>
            <li><a href="post_property.php">post property<i class="fas fa-paper-plane"></i></a></li>
            <li><a href="../agenttemplistings.php">approve</a></li>

         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">my listings<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="../agent/dashboard.php">dashboard</a></li>
                     <li><a href="../agent/post_property.php">post property</a></li>
                     <li><a href="../agent/my_listings.php">my listings</a></li>
                  </ul>
               </li>
               <li><a href="#">options<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="../agent/search.php">filter search</a></li>
                     <li><a href="../agent/listings.php">all listings</a></li>
                  </ul>
               </li>
               <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <!-- <li><a href="../agent/about.php">about us</a></i></li> -->
                     <li><a href="../agent/contact.php">contact admin</a></i></li>
                     <li><a href="../agent/contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="../agent/login.php">login now</a></li>
                  <!-- <li><a href="../agent/register.php">register new</a></li>
                -->
              
                  <?php if($agent_id != ''){  ?>
                  <li><a href="../agent/update.php">update profile</a></li>
                   <li><a href="../components/agent_logout.php" onclick="return confirm('logout from this website?');">logout</a>
                  <?php } 
                  
                  
                  ?>
                  
                  
               </li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->