<?php
include 'Database.php';

class Sweets extends Database{

    public function admin_newregi($a_fname,$a_lname,$a_password,$a_age,$a_bday){
        $sql = "INSERT INTO login(a_fname,a_lname,a_password,a_age,a_bday)VALUES('$a_fname','$a_lname','$a_password','$a_age','$a_bday')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            // echo '<div class="container">
            // <div class = "alert alert-success mx-auto mt-5 w-75 text-center">REGISTERED SUCCESSFULLY</div>';
    
            // echo '<p class = "text-center"><a class="btn btn-primary btn-lg text-center" href="admin_login.php" role="button">LOGIN</a></p>
            // </div>';

            header('location:admin_login.php');
            
        }else{
            echo '<div class="container">
            <div class = "alert alert-primary mx-auto mt-5 w-75 text-center">REGISTERED FAILED</div>';
            
            echo '<p class = "text-center"><a class="btn btn-success btn-lg text-center" href="admin_newregi.php" role="button">BACK</a></p>
            </div>';


        }
    }

    function admin_login($a_lname,$a_password){
        $sql = "SELECT * FROM login WHERE  a_lname = '$a_lname' AND a_password = '$a_password'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['a_id'];
            $_SESSION['fname'] = $row['a_fname'];
            $_SESSION['lname'] = $row['a_lname'];
            //$_SESSION['pword'] = $row['a_password'];

            header('location:admin.php');
        }else{
            //echo "Wrong Frstname,Lastname And Aassword";
            die('ERROR '.$this->conn->error);
        
        }
    }

    function sweets_registration($sw_type,$sw_name,$sw_ingre,$sw_price,$sw_regiday,$sw_status){
        $sql = "INSERT INTO sweets_list(sw_type,sw_name,sw_ingre,sw_price,sw_regiday,sw_status)VALUES('$sw_type','$sw_name','$sw_ingre','$sw_price','$sw_regiday','$sw_status')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:sweets_list.php');
    }else{
        // echo '<div class="container">
        // <div class = "alert alert-primary mx-auto mt-5 w-75 text-center">REGISTERED FAILED</div>';
        
        // echo '<p class = "text-center"><a class="btn btn-success btn-lg text-center" href="sweets_registration.php" role="button">BACK</a></p>
        // </div>';
        die('ERROR: '.$this->conn->error);
    }
}
    function display_sweets(){
         $sql = "SELECT * FROM sweets_list";
         $result = $this->conn->query($sql);

         if($result->num_rows > 0){
               $container = array();
            while($row = $result->fetch_assoc()){
               $container[] = $row;
         }
          return $container;
         }else{
               return FALSE;
         }
        }
        function display_one_sweets($sw_id){
            $sql = "SELECT * FROM sweets_list WHERE sw_id = '$sw_id'";
            $result = $this->conn->query($sql);
    
            if($result->num_rows == 1){
                return $result->fetch_assoc();
    
            }else{
                echo "NO DATA RETRIEVED";
            }
        }
        function delete_sweets($sw_id){
            $sql = "DELETE FROM sweets_list WHERE sw_id = '$sw_id'";
            $result = $this->conn->query($sql);
    
            if($result == TRUE){
                header('location:sweets_list.php');
            }else{
                echo "ERROR DELETING PATIENT";
            }
        }
        function update_sweets($sw_id,$sw_type,$sw_name,$sw_ingre,$sw_price,$sw_regiday,$sw_status){
            $sql = "UPDATE sweets_list SET sw_type = '$sw_type',sw_name = '$sw_name',sw_ingre = '$sw_ingre',sw_price = '$sw_price',sw_regiday = '$sw_regiday',sw_status = '$sw_status' WHERE sw_id = '$sw_id'";
            $result = $this->conn->query($sql);
    
            if($result == TRUE){
                header('location:sweets_list.php');
            }else{
                    die('error: '.$this->conn->error);
                }
        }
        function lesson_registration($lessons_category,$lessons_name,$lessons_price,$course_status,$regis_date,$lessons_info){
            $sql = "INSERT INTO lessons_list(lessons_category,lessons_name,lessons_price,course_status,regis_date,lessons_info)VALUES('$lessons_category','$lessons_name','$lessons_price','$course_status','$regis_date','$lessons_info')";
            $result = $this->conn->query($sql);
    
            if($result == TRUE){
                header('location:lesson_list.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }
    function display_lessons(){
        $sql = "SELECT * FROM lessons_list";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
              $container = array();
           while($row = $result->fetch_assoc()){
              $container[] = $row;
        }
         return $container;
        }else{
              return FALSE;
        }
       }
       function display_one_lessons($lessons_id){
           $sql = "SELECT * FROM lessons_list WHERE lessons_id = '$lessons_id'";
           $result = $this->conn->query($sql);
   
           if($result->num_rows == 1){
               return $result->fetch_assoc();
   
           }else{
               echo "NO DATA RETRIEVED";
           }
       }
       function member_registration($m_username,$m_bday,$m_password,$m_mail,$m_tel,$m_address){
        $sql = "INSERT INTO members(m_username,m_bday,m_password,m_mail,m_tel,m_address)VALUES('$m_username','$m_bday','$m_password','$m_mail','$m_tel','$m_address')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:member_list.php');
    }else{
        die('ERROR: '.$this->conn->error);
    }
}
        function display_members(){
        $sql = "SELECT * FROM members";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
              $container = array();
        while($row = $result->fetch_assoc()){
              $container[] = $row;
    }
        return $container;
    }else{
        return FALSE;
    }
   }
   function display_one_members($m_id){
    $sql = "SELECT * FROM members WHERE m_id = '$m_id'";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
        return $result->fetch_assoc();

    }else{
        echo "NO DATA RETRIEVED";
    }
}
     function member_login($m_username,$m_password){
       $sql = "SELECT * FROM members WHERE  m_username = '$m_username' AND m_password = '$m_password'";
       $result = $this->conn->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['m_id'];
        $_SESSION['username'] = $row['m_username'];
        $_SESSION['password'] = $row['m_password'];

        header('location:online_page.php');
    }else{
        die('ERROR '.$this->conn->error);
    
    }
}
    public function add_order($item_name,$item_quantity,$item_subtotal,$item_total_amount,$payment_mode,$address,$user_id){
        $sql = "INSERT INTO order_list(or_swname, or_quantity, or_subtotal, or_total_amount, or_payment, or_address, member_id) VALUES ('$item_name','$item_quantity','$item_subtotal','$item_total_amount','$payment_mode','$address','$user_id')";
        $result = $this->conn->query($sql);

        if($result == true){
         
            session_unset($_SESSION['sw_price']);
            session_unset($_SESSION['sw_name']);
            session_unset($_SESSION['quantity']);
            session_unset($_SESSION['total']);
            header('location:costumer_order_list.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }

    }
    public function getUserOrders($id){

    }
    
    
  }


?>