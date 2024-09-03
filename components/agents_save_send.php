<?php

if(isset($_POST['save'])){
   if($agent_id != ''){

      $save_id = create_unique_id();
      $property_id = $_POST['property_id'];
      $property_id = filter_var($property_id, FILTER_SANITIZE_STRING);

      $verify_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and agent_id = ?");
      $verify_saved->execute([$property_id, $agent_id]);

      if($verify_saved->rowCount() > 0){
         $remove_saved = $conn->prepare("DELETE FROM `saved` WHERE property_id = ? AND agent_id = ?");
         $remove_saved->execute([$property_id, $agent_id]);
         $success_msg[] = 'removed from saved!';
      }else{
         $insert_saved = $conn->prepare("INSERT INTO`saved`(id, property_id, agent_id) VALUES(?,?,?)");
         $insert_saved->execute([$save_id, $property_id, $agent_id]);
         $success_msg[] = 'listing saved!';
      }

   }else{
      $warning_msg[] = 'please login first!';
   }
}

if(isset($_POST['send'])){
   if($agent_id != ''){

      $request_id = create_unique_id();
      $property_id = $_POST['property_id'];
      $property_id = filter_var($property_id, FILTER_SANITIZE_STRING);

      $select_receiver = $conn->prepare("SELECT agent_id FROM `property` WHERE id = ? LIMIT 1");
      $select_receiver->execute([$property_id]);
      $fetch_receiver = $select_receiver->fetch(PDO::FETCH_ASSOC);
      $receiver = $fetch_receiver['agent_id'];

      $verify_request = $conn->prepare("SELECT * FROM `requests` WHERE property_id = ? AND sender = ? AND receiver = ?");
      $verify_request->execute([$property_id, $agent_id, $receiver]);

      if(($verify_request->rowCount() > 0)){
         $warning_msg[] = 'request sent already!';
      }else{
         $send_request = $conn->prepare("INSERT INTO `requests`(id, property_id, sender, receiver) VALUES(?,?,?,?)");
         $send_request->execute([$request_id, $property_id, $agent_id, $receiver]);
         $success_msg[] = 'request sent successfully!';
      }

   }else{
      $warning_msg[] = 'please login first!';
   }
}

?>