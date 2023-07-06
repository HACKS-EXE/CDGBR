<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call of Duty® Games Brasil Jogos</title>
<body>
<div class="background"></div>
<div class="container">
    <div class="content">
        <h2 class="pla">Call of Duty® Games Brasil</h2>
        <div class="text-sci">
            <h2 class="pla logo">Bem vindo! <br><span>Ao futuro dos cods.</span></h2>
            <p class="pla">Ajude o projeto a continuar em pé com doações.</p>
        </div>
    </div>

    <div class="logreg-box">
        <div class="form-box login">
            <form method="post">
              <BR></BR>
              <BR></BR>
                <h2 class="pla">CDGBR T7 ONLINE</h2>
                <BR></BR>
                <div class="btn" onclick="window.external.runGame()">Inicia jogo</div>
            </form>
        </div>
    </div>
</div>
<video id="videoFundo" autoplay loop>
  <source src="zm_frontend_load.mkv" type="video/mp4">
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
.pla{
    color: #f77c09;
}
.container .content{
    position: absolute;
    top: 0;
    left: 0;
    width: 58%;
    height: 100%;
    background: transparent;
    padding: 80px;
    color: #f77c09;
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
    position: relative;
    top: 0;
    right: 0;
    width: calc(100% - 58%);
    transform: translateY(230px);
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
.btn:hover{
    color: rgb(255, 255, 255);
    background: rgb(0, 0, 0);
    align-items: center;
    text-align: center;
    gap: 15px;
    margin: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid rgb(73, 62, 62);
    cursor: pointer;
}
.btn{
    color: #e4e4e4;
    background: rgb(241, 10, 10);
    align-items: center;
    text-align: center;
    gap: 15px;
    margin: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid rgb(73, 62, 62);
    cursor: pointer;
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