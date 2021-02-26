<?php
include 'classes/Sweets_order.php';
$sweetsobj = new Sweets;

if(isset($_POST['adminregister'])){
   $a_fname = $_POST['fname'];
   $a_lname = $_POST['lname'];
   $a_password = $_POST['pword'];
   $a_age = $_POST['age'];
   $a_bday = $_POST['bday'];

   $sweetsobj->admin_newregi($a_fname,$a_lname,$a_password,$a_age,$a_bday);

}elseif(isset($_POST['adminlogin'])){
   //$a_fname = $_POST['fname'];
   $a_lname = $_POST['lname'];
   $a_password = $_POST['pword'];

   $sweetsobj->admin_login($a_lname,$a_password);

}elseif(isset($_POST['save_sweets'])){
   $sw_type = $_POST['sw_type'];
   $sw_name = $_POST['sw_name'];
   $sw_price = $_POST['sw_price'];
   $sw_ingri = $_POST['sw_ingre'];
   $sw_regiday = $_POST['sw_regiday'];
   $sw_status = $_POST['sw_status'];

   $sweetsobj->sweets_registration($sw_type,$sw_name,$sw_price,$sw_ingri,$sw_regiday,$sw_status);

}elseif(isset($_POST['update_sweets'])){
   $sw_type = $_POST['sw_type'];
   $sw_name = $_POST['sw_name'];
   $sw_price = $_POST['sw_price'];
   $sw_ingri = $_POST['sw_ingre'];
   $sw_regiday = $_POST['sw_regiday'];
   $sw_status = $_POST['sw_status'];
   $sw_id = $_POST['sw_id'];

   $sweetsobj->update_sweets($sw_id,$sw_type,$sw_name,$sw_price,$sw_ingri,$sw_regiday,$sw_status);

}elseif(isset($_POST['save_lesson'])){
   $lessons_category = $_POST['le_category'];
   $lessons_name = $_POST['le_name'];
   $lessons_price = $_POST['le_price'];
   $course_status = $_POST['le_status'];
   $regis_date = $_POST['le_regiday'];
   $lessons_info = $_POST['le_info'];

   $sweetsobj->lesson_registration($lessons_category,$lessons_name,$lessons_price,$course_status,$regis_date,$lessons_info);

}elseif(isset($_POST['update_lesson'])){
   $lessons_category = $_POST['le_category'];
   $lessons_name = $_POST['le_name'];
   $lessons_price = $_POST['le_price'];
   $course_status = $_POST['le_status'];
   $regis_date = $_POST['le_regiday'];
   $lessons_info = $_POST['le_info'];
   $lessons_id = $_POST['le_id'];

   $sweetsobj->lesson_registration($lessons_id,$lessons_category,$lessons_name,$lessons_price,$course_status,$regis_date,$lessons_info);
}
   if(isset($_POST['memregister'])){
      $m_username = $_POST['m_username'];
      $m_bday = $_POST['m_bday'];
      $m_password = $_POST['m_password'];
      $m_mail = $_POST['m_mail'];
      $m_tel = $_POST['m_tel'];
      $m_address = $_POST['m_address'];
      $m_id = $_POST['m_id'];
   
      $sweetsobj->member_registration($m_username,$m_bday,$m_password,$m_mail,$m_tel,$m_address);
   

}elseif(isset($_POST['memberlogin'])){
   $m_username = $_POST['username'];
   $m_password = $_POST['password'];

   $sweetsobj->member_login($m_username,$m_password);

}
if(isset($_POST['update_member'])){
   $m_username = $_POST['m_username'];
   $m_bday = $_POST['m_bday'];
   $m_password = $_POST['m_password'];
   $m_mail = $_POST['m_mail'];
   $m_tel = $_POST['m_tel'];
   $m_address = $_POST['m_address'];

   $sweetsobj->member_registration($m_id,$m_username,$m_bday,$m_password,$m_mail,$m_tel,$m_address);


}elseif(isset($_POST['place_order'])){
   $_SESSION['sw_price'] = $_POST['sw_price'];
   $_SESSION['sw_name'] = $_POST['sw_name'];
   $_SESSION['quantity'] = $_POST['quantity'];
   $_SESSION['total'] = $_POST['sw_price']*$_POST['quantity'];
  

   header('location:final_order.php');

}elseif(isset($_POST['additional_info'])){
   $user_id = $_SESSION['id'];
   $sw_name = $_SESSION['sw_name'];
   $quantity =$_SESSION['quantity'];
   $final_price = $_POST['final_price'];
   $subtotal =   $_SESSION['total'] ;
   $payment_mode =$_POST['mode_of_payment'];
   $address = $_POST['address'];

   $sweetsobj->add_order($sw_name,$quantity,$subtotal,$final_price,$payment_mode,$address,$user_id);



}


?>