<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<?php
        $email = '';
        $password = '';

        if(isset($_POST["submit"])){
            $email = $_POST['email'];
            $password = $_POST['password'];
        }

            $user = [
                [
                    'fullname' => 'luthfi',
                    'email'    => 'luthfi@gmail.com',
                    'password' => '123456'
                ]
            ];
            
            foreach ($user as $value) {
                if ($value['email'] == $email && $value['password'] == $password) {
                    echo 'ada' ;
                    break;	
                } elseif ($value['email'] == $email) {
                    echo 'Password Salah' ;
                    break;
                } else {
                    echo 'silakan registrasi' ;
                    break;
                } 
            }  
        ?>
  <center>
    <div id="formlogin">
      <h1>LOGIN</h1>
      <form id="login" action="" method="post">
        
        <label for="inputEmail4" class="form-label"></label>
        <input type="email" class="inputtext" id="email" name="email"  required minlength="4" maxlength="20" 
        placeholder="Masukan Email">
        
        <input type="password" class="inputtext"  id="password" name="password" required minlength="6" maxlength="20" 
        placeholder="Masukan Password"> 
        
        <input type="submit" class="tombol" name="" value="LOG IN"> 
      </form>
        <br>


        <div class="copyright">
           <p> Alredy have an account?Register </p> 
        </div>
    </div>
  </center>
</body>
</html>