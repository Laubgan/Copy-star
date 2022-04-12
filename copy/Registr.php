<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy star</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
    

</head>
<body>
    <a href="#" ><img id="img_up" src="IMG/up.jpg" ></a> 
<div id="wrapper">

    <header>
        
        

        <img id="img1" src="img/logo.png" >

       
  
    </header>

   
    

<div id="content_wrapper" > 

            
  
<div id="content" class="content" > 








<div class="cont">
    <form action="check.php" method="post" enctype="">   <!--php-->
    
        <input
            type="text"
            placeholder="Имя"
            name="name"
            pattern="[а-яА-ЯёЁ\s\-]+"
            required
          />
          <input
            type="text"
            placeholder="Фамилия"
            name="surname"
            pattern="[а-яА-ЯёЁ\s\-]+"
            required
          />
          <input
            type="text"
            placeholder="Отчество"
            name="patronymic"
            pattern="[а-яА-ЯёЁ\s\-]+"
          />
          <input
            type="text"
            placeholder="Логин"
            name="login"
            pattern="[a-zA-Z0-9\-]+"
            required
          />
          <input 
            type="email" 
             placeholder="Email" 
             name="email" 
            required 
          />
          <input
            type="password"
            placeholder="Пароль"
            name="password"
            pattern=".{6,}"
            required
          />
          
          <div class="check">
            <input type="checkbox" name="rules" required />
            <p>Согласие с правилами </p>
          </div>

          <button   type="submit"> Зарегистрироваться </button>
        
        
        
        <p>
            У вас есть аккаунт? - <a href="Avtor.php">Авторизуйтесь</a>
        </p>
    
    
    </form>

</div>





    









</div>

    <div class="footer" id="footer" >
        <footer>
            <div class="text_footer">
                Мы всегда готовы ответить на любые вопросы по нашему тел. +7 923 398 9013

                
            </div>
            </footer> 
        </div>


</body>
</html>