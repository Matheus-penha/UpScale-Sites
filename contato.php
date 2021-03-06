<?php include 'novophp/sendEmail.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QT8E9F5754"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QT8E9F5754');
    </script>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!--font awesome-->
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">

    <!--css próprio-->
    <link rel="stylesheet" href="css/style.css">

    <!--Fontes de texto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital@1&display=swap" rel="stylesheet">

    <title>UpScale Sites</title>
</head>
<body>

    <?php echo $alert; ?>

    <header id="header-content">
        <nav class="navbar navbar-fixed-top navbar-expand-lg sticky-top headerNav">
            <div class="container">
                <a class="navbar-brand h1 mb-0 text-reset headerText" href="index.html"><img src="imagens/logoUpScale.png" class="img-fluid navLogo" alt="Logo da empresa"></a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2"><i class="fas fa-bars"></i></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ml-auto top-navigation">
                        <li class="nav-item"><a class="nav-link" href="../#business-sec">Planos</a></li>
                        <li class="nav-item"><a class="nav-link" href="../#work-sec">Como trabalhamos</a></li>
                        <li class="nav-item"><a class="nav-link" href="../#wtwedo-sec">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="contact-sec">
        <div class="container-fluid mt-5 footer-container mb-5">
            <h1 class="text-center mt-5 mb-5 footer-text-contact"><i class="fab fa-telegram-plane mr-4 display-5"></i>Contato</h1>

            <div class="row justify-content-center mb-5 border-bottom">           

                   <div class="col-sm-12 col-md-10 col-lg-8">
                    <form method="POST" action="novophp/sendEmail.php" id="contactForm">
                    <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="inputName">Seu nome</label>
                                <input type="text" class="form-control" id="inputName" name="nome" placeholder="Nome" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="inputEmail">Telefone</label>
                            <input type="text" class="form-control" id="inputTel" name="telefone" placeholder="Telefone/Celular" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="inputText">Digite sua mensagem</label>
                            <textarea class="form-control" id="inputText" name="mensagem" rows="5" required placeholder="Mensagem"></textarea>
                            <button type="submit" name="submit" class="btn btn-primary d-flex ml-auto mt-3 mb-1">Enviar</button>
                        </div>
                    </div>  
                    </form>          
                </div>               
            </div>

    </section>

    <footer class="footer-sec">
       
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-n3 ml-sm-n4 ml-md-2 ml-lg-5 first-content-column"><!--d-flex justify-content-center-->
                    <h4 class="footer-list-title mt-5 ml-5 pl-2">Mapa do site</h4>
                    <ul class="footer-ul-links ml-5">
                    <li><a class="nav-link ml-n5 mr-3" href="../#business-sec">Planos</a></li>
                        <li><a class="nav-link ml-n5 mr-3" href="../#work-sec">Como trabalhamos</a></li>
                        <li><a class="nav-link ml-n5 mr-3" href="../#wtwedo-sec">Serviços</a></li>
                        <li><a class="nav-link ml-n5 mr-3" href="contato.php">Contate-nos</a></li>
                    </ul>                    
                </div>

                <div class="col-lg-4 col-md-4 col-sm-5 mb-n3 ml-sm-n4 ml-md-2 ml-lg-4 col-12">
                    <h4 class="footer-list-title mt-5 ml-5">Contatos</h4>
                    <ul class="footer-ul-links">
                       <li><a class="nav-link ml-n2" href="https://api.whatsapp.com/send/?phone=5517997040961&text&app_absent=0" target="_blank"><i class="fab fa-whatsapp whats-color mr-1"></i> (17)99704-0961</a></li>    
                       <li><a class="nav-link d-sm-inline-flex ml-n2" href="#" target="_blank"><i class="fas fa-envelope mr-1 mt-sm-1" style="color: #fff;"></i> upscalecontato@gmail.com</a></li>    
                       <li><a class="nav-link ml-n2" href="#/" target="_blank"><i class="fab fa-instagram mr-1" style="color: #fff;"></i> UpScale</a></li>                                 
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-3 ml-sm-n4 col-12">
                    <h4 class="footer-list-title mt-5 ml-md-4 pl-md-5 ml-5">Dúvidas comuns</h4>
                    <ul class="footer-ul-links ml-md-4 pl-md-5">
                        <li><a class="nav-link ml-n2"> Tempo de entrega</a></li>      
                       <li><a class="nav-link ml-n2"> Pagamento</a></li>      
                       <li><a class="nav-link d-sm-inline-flex ml-n2">Tem que pagar mensalidade?</a></li>   
                               
                    </ul>
                </div>
            </div>   
            <p class="text-center footer-last-text">Copyright &copy; UpScale Sites</p>             
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>