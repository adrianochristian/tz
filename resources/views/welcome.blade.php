<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/scripts.js')}}"></script>
</head>
<script>
    window.onload = function() {
        showSlides(slideIndex);
    }

    function toggleDarkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
</script>

<body>
    <div class="container">
        <div class="left-side">
            <div class="top-container">
                <img src="{{asset('images/back.png')}}" alt="Voltar">
                <img src="{{asset('images/darkmode.png')}}" alt="Modo Escuro" onclick="toggleDarkMode()">
            </div>
            <div class="middle-container">
            </div>
            <div class="slideshow-container">
                <div class="slides">
                    <div class="mySlides">
                        <div class="cursos">
                            <span>Cursos</span>
                            <h2>Plataforma de cursos completa</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae semper mauris. Sed auctor, nisl id aliquam tincidunt, justo nunc tincidunt nunc, id tincidunt nisl nunc id nunc. Sed auctor, nisl id aliquam tincidunt, justo nunc tincidunt nunc, id tincidunt nisl nunc id nunc.</p>
                        </div>
                    </div>
                    <div class="mySlides">
                        <div class="cursos">
                            <span>Cursos 2</span>
                            <h2>Plataforma de cursos completa 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae semper mauris. Sed auctor, nisl id aliquam tincidunt, justo nunc tincidunt nunc, id tincidunt nisl nunc id nunc. Sed auctor, nisl id aliquam tincidunt, justo nunc tincidunt nunc, id tincidunt nisl nunc id nunc.</p>
                        </div>
                    </div>
                    <div class="mySlides">
                        <div class="cursos">
                            <span>Cursos 3</span>
                            <h2>Plataforma de cursos completa 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae semper mauris. Sed auctor, nisl id aliquam tincidunt, justo nunc tincidunt nunc, id tincidunt nisl nunc id nunc. Sed auctor, nisl id aliquam tincidunt, justo nunc tincidunt nunc, id tincidunt nisl nunc id nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div class="dots">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                    <div class="arrows">
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="brand">
                <img src="{{asset('images/logo.png')}}" alt="Toolzz Logo">
                <a href="#">Criar conta</a>
            </div>
            <div class="welcome-message">
                <h2>Boas-vindas!</h2>
                <p>Entre utilizando uma das opções abaixo</p>
            </div>
            <div class="social-login">
                <button class="social"><a class="fa fa-google"></a></button>
                <button class="social"><a class="fa fa-facebook"></a></button>
                <button class="social"><a class="fa fa-apple"></a></button>
                <button class="social"><a class="fa fa-twitter"></a></button>
            </div>
            <div class="separator">
                <span>ou</span>
            </div>
            <div class="login-form">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="username">Usuário</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                    <div class="checkbox-and-captcha">
                        <div class="checkbox">
                            <input type="checkbox" id="keep-signed-in">
                            <label for="keep-signed-in">Manter conectado</label>
                        </div>
                        <div class="captcha">
                        </div>
                    </div>
                    <button class="login" type="submit">Entrar</button>
                </form>
            </div>
            <div class="forgot-password">
                Esqueceu sua senha? <a href="#">Recuperar senha</a>
            </div>
        </div>
    </div>
</body>
</html>
