<?php

require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";
class User
{
    private $user_name;
 private $user_email;
 private $user_password;
 private $user_date; #дата регистрации пользователя
    protected  $pattern_name = '/\w{3,}/';
protected $pattern_mail = '/\w+@\w+\.\w+/';

 public function login($user_name, $user_password){
     $this->user_name = mysqli_real_escape_string(trim($user_name));
     $this ->user_password = hash(sha256, $user_password);

     $login_query = "SELECT FROM users WHERE Name = '$this->user_name'";
     $user = $connect-> mysqli_fetch_array($login_query);

     if(isset($user)){
         if($this->user_password == $user['Password']) {
             session_start();
             $_SESSION['name'] = $this->user_name;
         } else{
             return "Введенные данные не совпадают";
         }
     } else{
         return "Нет пользователя с таким именем";
     }
 }

 public function logout(){
     $_SESSION['name'] = "";
     session_abort();
     header($_SERVER["HTTP_HOST"]);
 }

 public function register($name, $email, $password, $dubl_password){
     $this->user_name = mysqli_real_escape_string(trim($name));
     $this->user_email = mysqli_real_escape_string(trim($email));
     $this->user_password = hash(sha256, $password);
     $this->dubl_password = hash(sha256, $dubl_password);
     $this->user_date = date("d-m-Y");


     # проводить валидизация пароля до его хеширования,
     # а в БД отправлять хешированную версию
     $name_exist = "SELECT * FROM users WHERE Name = '$this->user_name'";
     if(mysqli_num_rows($name_exist)){
         return "имя используется";
     } elseif(preg_match($this->pattern_name, $this->user_name) &&
         preg_match($this->pattern_mail, $this->user_email)
         &&  $this->user_password == $this->dubl_password){
         $sql = "INSERT INTO users VALUES (NULL, '$this->user_name',
            '$this->user_email','$this->user_password, $this->user_date')";
                mysqli_query($sql);
             echo "<h1>Вы успешно зарегестрированы </h1>
        <script>
            setTimeout(()=>{
                window.location.assign('http://localhost:8080/admin');
            }, 2000)
        </script>";
     }


 }
}


 #login
#logout
# добавление юзера регистрация
# оставление комментария
# canedit content : true

