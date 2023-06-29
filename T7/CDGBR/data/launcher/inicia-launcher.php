<?php
$videos = [
  'http://zaquiles.servehttp.com/lgp/Star%20Citizen%20%20Dying%20Star%20%20169%20Wallpaper%20Engine%20Video%20Wallpaper.mp4',
  'http://zaquiles.servehttp.com/lgp/“Cold%20War”%20-%20Call%20of%20Duty®%20Black%20Ops%20Cold%20War%20Main%20Theme.mp4',
  'http://zaquiles.servehttp.com/lgp/“Cold%20War”%20-%20Call%20of%20Duty®%20Black%20Ops%20Cold%20War%20Main%20Theme.mp4'
];

$randomVideo = $videos[array_rand($videos)];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call of Duty® Games Brasil Jogos</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>
<header class="header">
    <nav class="navbar">
    <a href="#">Jogos</a>
    <a href="#">Sobre</a>
    <a href="#">Configurações</a>
    <a href="#">Suporte</a>
    </nav>
</header>
<div class="background"></div>
<div class="container">
    <div class="content">
        <h2><i class='bx bxl-firebase' ></i>Call of Duty® Games Brasil</h2>
        <div class="text-sci">
            <h2 class="logo">Bem vindo! <br><span>Ao futuro dos cods.</span></h2>
            <p class="preto">Ajude o projeto a continuar em pé com doações.</p>
            <div class="social-icons">
                <a href="https://ioxtream.io/pt-BR/x/mistorgamex" target="_blank"><i class='bx bx-donate-heart'></i></a>
                <a href="https://www.youtube.com/@MistorGamex" target="_blank"><i class='bx bxl-youtube' ></i></a>
                <a href="discord://discordapp.com/invite/hFT4eJfQ3u/"><i class='bx bxl-discord-alt'></i></a>
            </div>
        </div>
    </div>

    <div class="logreg-box <?php echo $activeClass; ?>">
        <div class="form-box login">
            <form method="post">
                <h2>Entre na sua conta</h2>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-user'></i></span>
                    <input class="vai" type="text" name="username" required>
                    <label for="username">Nome</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                    <input type="password" name="password" required>
                    <label for="password">Senha</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Lembrar minha Senha</label>
                    <br><a href="#">Recupera a Senha ?</a>
                </div>
                <button type="submit" class="btn">Entra</button>

                <div class="login-register">
                    <p>Sem conta ?<br><a href="?action=register" class="register-link">Faça uma conta</a></p>
                </div>
            </form>
        </div>
        <div class="form-box register">
            <form method="post">
                <h2>Cadastre uma conta</h2>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-user'></i></span>
                    <input type="text" name="username" required>
                    <label for="username">Nome da Sua nova conta</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" name="password" required>
                    <label for="password">Senha</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" name="confirm_password" required>
                    <label for="confirm_password">Confirme a senha</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Concordo com os termos</label>
                    <br><a href="#">Recupera a Senha ?</a>
                </div>
                <button type="submit" class="btn">Cadastra</button>

                <div class="login-register">
                    <p>já tem uma conta ?<br><a href="?action=login" class="login-link">Entre nela</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<video id="videoFundo" autoplay loop>
  <source src="<?php echo $randomVideo; ?>" type="video/mp4">
  Seu navegador não suporta reprodução de vídeo.
</video>

<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    background: #020410;
}
.header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px 12.5%;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}
#videoFundo {
  position: relative;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -1;
}

.navbar a{
    position: relative;
    font-size: 16px;
    color: #e4e4e4;
    text-decoration: none;
    font-weight: 500;
    margin-right: 30px;
}
.navbar a::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 2px;
    background: #e4e4e4;
    border-radius: 5px;
    transform: translateY(10px);
    opacity: 0;
    transition: .5s;
}
.navbar a:hover::after{
    transform: translateY(0);
    opacity: 1;
}
.search-bar{
    width: 250px;
    height: 45px;
    background: transparent;
    border: 2px solid #e4e4e4;
    border-radius: 6px;
    display: flex;
    align-items: center;
}
.search-bar input{
    width: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    color: #e4e4e4;
    padding-left: 10px;
}
.search-bar input::placeholder{
    color: #e4e4e4;
}
.search-bar button{
    width: 40px;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
.search-bar button i{
    font-size: 22px;
    color: #e4e4e4;
}
.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 75%;
    height: 750px;
    background: url('') no-repeat;
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    margin-top: 20px;
}
.container .content{
    position: absolute;
    top: 0;
    left: 0;
    width: 58%;
    height: 100%;
    background: transparent;
    padding: 80px;
    color: #e4e4e4;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
}
.content .logo{
    font-size: 30px;
}
.text-sci h2{
    font-size: 40px;
    line-height: 1;
}
.text-sci h2 span{
    font-size: 25px;
}
.text-sci p{
    font-size: 16px;
    margin: 20px 0;
}
.social-icons a i{
    font-size: 22px;
    color: #e4e4e4;
    margin-right: 10px;
    transition: .5s ease;
}
.social-icons a:hover i{
    transform: scale(1.2);
}
.container .logreg-box{
    position: absolute;
    top: 0;
    right: 0;
    width: calc(100% - 58%);
    height: 100%;
    overflow: hidden;
}
.logreg-box .form-box{
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    background: transparent;
    backdrop-filter: blur(20px);
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    color: #e4e4e4;
}
.logreg-box .form-box.login{
    transform: translateX(0);
    transition: transform .6s ease;
    transition-delay: .7s;
}
.logreg-box.active .form-box.login{
    transform: translateX(630px);
    transition-delay: 0s;
}
.logreg-box .form-box.register{
    transform: translateX(630px);
    transition: transform .6s ease;
    transition-delay: 0s;
}
.logreg-box.active .form-box.register{
    transform: translateX(0);
    transition-delay: .7s;
}
.form-box h2{
    font-size: 32px;
    text-align: center;
}
.form-box .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #e4e4e4;
    margin: 30px 0;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    color: #e4e4e4;
    font-weight: 500;
    padding-right: 28px;
}
.input-box label{
    position: absolute;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    font-weight: 500;
    pointer-events: none;
    transition: .5s ease;
}
.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
}
.input-box .icon{
    position: absolute;
    top: 13px;
    right: 0;
    font-size: 19px;
}
.form-box .remember-forgot{
    font-size: 14.5px;
    font-weight: 500;
    margin: -15px 0 15px;
}
.remember-forgot a{
    color: #e4e4e4;
    text-decoration: none;
}
.remember-forgot a:hover{
    text-decoration: underline;
}
.input-box label{
    position: absolute;
    left: 0;
    transform: translateY(-90%);
    font-size: 16px;
    font-weight: 500;
    pointer-events: none;
    transition: .5s ease;
}
.btn{
    width: 100%;
    height: 45px;
    background: #c4103d;
    border: none;
    outline: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    color: #e4e4e4;
    font-weight: 500;
    box-shadow: 0 0 10px rgba(0, 0, 0, .5);
}
.dc{
    width: auto;
    height: auto;
    background: #c4103d;
    border: none;
    outline: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    color: #e4e4e4;
    font-weight: 500;
    box-shadow: 0 0 10px rgba(0, 0, 0, .5);
}
.form-box .login-register{
    font-size:  14.5px;
    font-weight: 500;
    text-align: center;
    margin-top: 25px;
}
.login-register p a{
    color: #e4e4e4;
    font-weight: 600;
    text-decoration: none;
}
.login-register p a:hover{
    text-decoration: underline;
}
    </style>
</head>
</body>
</html>