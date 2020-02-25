<?php

require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/Db.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/Validate.php";


class User
{
protected $user_name;
protected $user_email;
protected $user_password;
protected $user_date; #дата регистрации пользователя



 public function login($user_name, $user_password)
 {
     $this->user_name = trim($user_name);
     $this->user_password = hash('sha256', $user_password);
     $result = Db::getdbconnect()->query("SELECT * FROM users WHERE Name = '$this->user_name'");
     $user = $result->fetch_array();
      
         if ($this->user_password == $user['password']) {
             session_start();
             $_SESSION['name'] = $this->user_name;
             echo "вы были успешно залогинены";
             header("Location:localhost:8080");
             return true;
         } else {
             echo "Нет пользователя с таким именем";
         }
         echo "Что-то пошло не так! Обратитсь к адмистратору сайта";
 }



 public function logout(){
     $_SESSION['name'] = "";
     session_abort();
     header($_SERVER["HTTP_HOST"]);
     return true;
 }

 public function register($name, $email, $password, $dubl_password)
 {
     $this->user_name = trim($name);
     $this->user_email = trim($email);

//     $this->user_password = hash('sha256', $password);
//     $this->dubl_password = hash('sha256', $dubl_password);
     $this->user_password = trim($password);
     $this->dubl_password = trim($dubl_password);
     $this->user_date = date("Y-m-d");



     # проводить валидизация пароля до его хеширования,
     # а в БД отправлять хешированную версию
     $result = Db::getdbconnect()->query("SELECT * FROM users WHERE Name = '$this->user_name'");
     $row_cnt = $result->num_rows;
     if ($row_cnt == 1) {
         echo "имя используется!  Попробуйте другое!";
     } elseif(Validate::validate_name($this->user_name)  &&
                Validate::validate_email($this->user_email)
            && Validate::validate_password($this->user_password)) {

         $this->user_password = hash('sha256', $this->user_password);
         
//     $sql = "INSERT INTO users  VALUES (NULL, '$this->user_name',
//            '$this->user_email','$this->user_password, NULL)";//
     $sql = "INSERT INTO users  VALUES (NULL, '$this->user_name',
            '$this->user_email','$this->user_password', '$this->user_date')";


       echo Db::getdbconnect()->query($sql);
            echo "все нормально";
            echo $this->user_date;

             echo "<h1>Вы успешно зарегестрированы </h1>
        
        <script>
            setTimeout(()=>{
                window.location.assign('http://localhost:8080/admin');
            }, 2000)
        </script>";
         
         } else {
             echo "вы не смогли пройти простейшую валидизацию. Кроме того, русские буквы запрещены на сервере";
         }
 }

}



