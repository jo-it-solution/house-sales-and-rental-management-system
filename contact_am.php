<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'መልእክት አስቀድሞ ተልኳል!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'መልእክት በተሳካ ሁኔታ ተልኮለታል!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header_am.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="ስምህን አስገባ" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="የእርስዎን ኢሜይል ያስገቡ" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="ቁጥርህን አስገባ" class="box">
         <textarea name="message" placeholder="መልእክትህን አስገባ" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="መልዕክት ላክ" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>ቦታ ማስያዝ እንዴት እንደሚሰረዝ?</span><i class="fas fa-angle-down"></i></h3>
         <p>ቦታ ማስያዝዎን ለመሰረዝ ወደ መለያዎ ይግቡ፣ ወደ "My Bookings" ይሂዱ፣ ቦታ ማስያዙን ይምረጡ እና "ቦታ ማስያዝን ሰርዝ" ን ጠቅ ያድርጉ። ለማረጋገጥ ማንኛውንም ጥያቄ ይከተሉ። ስረዛው እንደተሳካ የማረጋገጫ ኢሜይል ይደርስዎታል።</p>
      </div>

     

     

      <div class="box">
         <h3><span>ከገዢዎች ጋር እንዴት መገናኘት እንደሚቻል</span><i class="fas fa-angle-down"></i></h3>
         <p> ገዢዎችን ለማግኘት ወደ "ሁሉም ዝርዝሮች" ክፍል ይሂዱ እና ንብረትዎን ይምረጡ እና "ጥያቄ መላክ" የሚለውን ጠቅ ያድርጉ. ደህንነቱ የተጠበቀ ግንኙነትን በማረጋገጥ በመድረክ በኩል መልዕክቶችን መላክ ይችላሉ። በአማራጭ፣ የሚገኝ</p>
      </div>

      <div class="box">
         <h3><span>የእኔን ተወዳጅ ዝርዝር እንዴት ማስቀመጥ እንደሚቻል?</span><i class="fas fa-angle-down"></i></h3>
         <p> የሚወዱትን ዝርዝር ለማስቀመጥ በቀላሉ በንብረት ገጹ ላይ ያለውን "አስቀምጥ" ወይም "ወደ ተወዳጆች አክል" የሚለውን ቁልፍ ጠቅ ያድርጉ። በቀላሉ ለማጣቀሻ እና ለማነፃፀር የተቀመጡ ዝርዝሮችዎን በኋላ በመለያዎ "ተወዳጆች" ክፍል ውስጥ ማግኘት ይችላሉ።</p>
      </div>

      <div class="box">
         <h3><span></span><i class="fas fa-angle-down"></i></h3>
         <p></p>
      </div>

   </div>

</section>

<!-- faq section ends -->










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer_am.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>