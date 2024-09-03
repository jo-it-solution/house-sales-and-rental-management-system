<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header_Oro.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>maaliif nu filattu?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorem provident voluptatum distinctio laborum veritatis vitae suscipit praesentium fugiat unde?</p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>qabeentaa barbaadaa</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>bakka bu'oota qunnami</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->
<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">bakka bu'oota keenya qunnami</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/Efrem_1.jpg" alt="">
            <div>
               <h3>Efrem Dereje</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Efrem is skilled computer science graduate as well as KELLOBETOCHs' agent. He is ready to be incontact with you!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/mesfin_1.jpg" alt="">
            <div>
               <h3>Mesfin Zerihun</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Mesfin is skilled computer science graduate as well as KELLOBETOCHs' agent. He is ready to be incontact with you!!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/" alt="">
            <div>
               <h3>Yosef Shimellis</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Josef is KELLOBETOCHs' agent as well as skilled computer science graduate.. He is ready to be incontact with you!!!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic.png" alt="">
            <div>
               <h3>Samuel Tesfaye</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Samuel is skilled computer science graduate as well as KELLOBETOCHs' agent. He is ready to be incontact with you!!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/.png" alt="">
            <div>
               <h3>Agent</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p> is skilled computer science graduate as well as KELLOBETOCHs' agent. He is ready to be incontact with you!!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/.png" alt="">
            <div>
               <h3>Agent</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Efrem is skilled computer science graduate as well as KELLOBETOCHs' agent. He is ready to be incontact with you!!</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer_Oro.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>