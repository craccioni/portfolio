<?php


  $result="";

    if(isset($_POST['submit'])){
        require 'php/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='PwtN3pV5p@gmail.com';
    $mail->Password='ptLm8Bz#@D';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('PwtN3pV5p@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Mensagem do meu Website: '.$_POST['name'];
    $mail->Body='<h1 style="color: #424242">Nome: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Telefone: '.$_POST['phone'].'<br>Messagem: '.$_POST['msg'].'</h1>';

    if(!$mail->send()){
      $result="Ocorreu um erro, por favor tente novamente.";
    } else {
      $result="Obrigada, ".$_POST['name'].", por entrar em contato!";
    }
  }

?>

<!DOCTYPE html>
<html>

<head>
    
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Camila Raccioni - Desenvolvedora Web</title>
    <meta name="description" content="Website - Portfolio">
    <meta name="author" content="Camila Raccioni">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">

    <!-- Fontes
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allerta" rel="stylesheet">

    <!-- Ícones
    ================================================== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Favicon
    ================================================== -->
    <link rel="icon" href="img/coding.png" />
    <!-- https://favicon.io/favicon-converter/ -->

    <!-- JQuery 
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    

</head>

<body>
    



    <!-- Header
    ================================================== -->
    <header class="main">
        <div class="navbar-fixed hide-on-small-only">
            <nav class="black z-depth-0">
                <div class="nav-wrapper section table-of-contents"> 
                    <ul class="left">
                        <li><a href="#inicio">home</a></li>                        
                        <li><a href="#about">sobre</a></li>
                        <li><a href="#resume">currículo</a></li>
                        <!--<li><a href="#portfolio">portfolio</a></li>-->
                        <li><a href="#contato">contato</a></li>      
                    </ul>
                </div>
            </nav>
        </div>


    <!-- SideNav 
    --------------------------------->
    <div class="mobilenav table-of-contents">
        <ul id="slide-out" class="sidenav grey darken-4">
            <li class="mobilecont">
                <div class="user-view">
                    <div class="background">
                        <img src="img/back5.png" alt="Plano de Fundo Cinza">
                    </div>
                    <a id="miniavatar"><img class="circle responsive-img" src="img/avatar.png" alt="Meu Avatar"></a>
                    <a id="sidenavname"><span class="white-text name">Camila Raccioni</span></a>
                    <a id="sidenavmail" href="mailto:camila.raccioni@hotmail.com?Subject=Website%20Message"><span class="white-text email">camila.raccioni@hotmail.com</span></a>
                </div>
            </li>
            <li><a class="white-text list" href="#inicio"><i class="material-icons">home</i>Início</a></li>
            <li><a class="white-text list" href="#about"><i class="material-icons">info_outline</i>Sobre</a></li>
            <li><a class="white-text list" href="#resume"><i class="material-icons">library_books</i>Currículo</a></li>
            <!--<li><a class="white-text list" href="#portfolio"><i class="material-icons">work_outline</i>Portfolio</a></li>-->
            <li><a class="white-text list" href="#contato"><i class="material-icons">person</i>Contato</a></li>            
            <li class="sidenav-footer grey darken-4">
                <div class="row">  
                    <div class="social-icons">
                        <div class="col s2">
                            <a title="GitHub" href="https://github.com/ishtarkali"><i class="fa fa-github"></i></a></i>
                        </div>
                        <div class="col s2">
                            <a title="LinkedIn" href="https://www.linkedin.com/in/camilaraccioni"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="col s2">
                            <a title="Outlook" href="mailto:camila.raccioni@hotmail.com"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="col s2">
                            <a title="Facebook" href="https://www.facebook.com/raccioni?ref=br_rs"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="col s2">
                            <a title="Google +" href="https://plus.google.com/u/0/+CamilaRaccioni?tab=wX"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- SideNav Trigger -->
    <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-med-and-up btn-floating btn-large waves-effect waves-light teal lighten-2 right pulse"><i class="material-icons">menu</i></a>

    </header>

    <main>

    <div id="inicio" ></div>
    <div id="particles-js">
    <!-- Home Section
    ================================================== -->
    <div class="principal" id="home">
        <div class="home">
            <div class="titulo">
                <h1>CAMILA RACCIONI</h1><br>
                <h3>programadora, desenvolvedora front e back-end criando websites e identidades visuais para companhias e pessoas com o moderno framework  materialize</h3>          
            </div>
        </div>
    </div>
    </div>

       
    <!-- About Section
    ================================================== -->
    
    <div name="section2" id="about">
        <div class="container" >
            <div class="row">
                <div class="col l6 hide-on-small-only center-align pull-l1">
                    <img id="avatar" src="img/avatarS.png" alt="" class="circle responsive-img" alt="Meu Avatar">
                </div>  
                <div class="bout col s12 m6 l6 push-m2 pull-l1">
                    <h5>SOBRE</h5>
                    <p>Estudante de Ciência da Computação apaixonada por design e desenvolvimento WEB, criando websites para todos os gostos e necessidades para facilitar seus negócios e projetos e torná-los atraentes para conquistar cada vez mais novos clientes.</p>
                </div>
                <div class="cont col s12 m4 l4 push-m2 pull-l1">
                    <h5>CONTATO</h5>
                    <ul class="perfil" >
                        <li><p>Camila Raccioni</p></li>
                        <li><p>Piracicaba, São Paulo, Brasil</p></li>
                        <li><p>(18) 98120-6623</p></li>
                        <li><p>camila.raccioni@hotmail.com</p></li>
                    </ul>                    
                </div> 
            </div>
        </div>
        <div class="downloadbtn">
            <a id="downloadbtn" class="waves-effect waves-light btn-small teal lighten-2" href="pdf/Currículo - Camila Raccioni.pdf" download><i class="material-icons left">file_download</i>Download do currículo</a>
        </div>
    </div>
    

    <!-- Resume Section
    ================================================== -->
    <!-- Educação
    ================================================== -->    
    <div name="section3" id="resume">

        <!-- Educação
        ================================================== -->  
        <div id="education" class="container">
            <div class="row">
                <div class="col s12 center-align qualidades">
                    <i class="medium material-icons">school</i>
                    <h5 class="center-align">EDUCAÇÃO</h5>
                </div>
            </div>
            <div class="row center">
                <div class="col s12 l4 pull-l1">
                    <h3>Faculdade Anhanguera de Piracicaba</h3>
                    <p class="info center">Ensino Superior <span>&bull;</span> <em class="date">07/2017 - 06/2021</em></p>
                    <p class="center gray">Ciência da Computação <span>&bull;</span> Piracicaba <span>&bull;</span> Noturno</p>         
                </div>
                <div class="col s12 l4">
                    <h3>Universidade Estadual Paulista <br>"Júlio de Mesquita Filho"</h3>
                    <p class="info center">Ensino Superior <span>&bull;</span> <em class="date">02/ 2011 - 01/2015</em></p>
                    <p class="center gray">Ciências Biológicas <span>&bull;</span> Campus de Assis <span>&bull;</span> Integral</p>         
                </div>
                <div class="col s12 l4 push-l1">
                    <h3>Colégio São Vicente de Paulo</h3><br>
                    <p class="info center">Ensino Médio <span>&bull;</span> <em class="date">02/2008 - 12/2010</em></p>
                    <p class="center gray">São Pedro - SP</p>
                </div>
            </div>
        </div>
        
        <!-- Experiência
        ================================================== -->  
        <div class="gradient"></div>        
        <div id="xp" class="container" >
            <div class="row">
                <div class="col s12 center-align qualidades">
                    <i class="medium material-icons">work</i>
                    <h5>EXPERIÊNCIA</h5>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4 pull-l1">
                    <h3>Desenvolvimento WEB</h3>
                    <p class="info">SEMAE Piracicaba: Serviço Municipal de Água e Esgoto <span>&bull;</span> <em class="date">05/2018</em></p><br>
                    <p>Atuação como estagiária, durante 8 meses na autarquia municipal SEMAE, realizando suporte técnico-informático aos usuários internos e construção do website para responder às necessidades da empresa utilizando o framework Materialize, as linguagens de programação PHP, Java e Javascript, a linguagem de marcação HTML e o Scriptcase, uma plataforma de desenvolvimento de aplicações PHP.</p>         
                </div>        
                <div class="col s12 l4">
                    <h3>Estágio Professora</h3>
                    <p class="info">Coordenação de Aperfeiçoamento de Pessoal de Nível Superior (CAPES) <span>&bull;</span> <em class="date">02/2012 - 05/2013</em></p><br>
                    <p>Atuação como estagiária durante 1 ano e 7 meses pelo Programa Institucional de Bolsas de Iniciação à Docência (PIBID) em salas de aula de ensino médio e fundamental na cidade de Assis - SP, auxiliando o professor efetivo na preparação e ministração de aulas de biologia e executando projetos educativos, como feiras de ciências e execução de atividades lúdicas para melhor fixação do conteúdo trabalhado em salas de aula.</p>
                </div>
                <div class="col s12 l4 push-l1">
                    <h3>Auxiliar Administrativo</h3>
                    <p class="info">Serralheria São Geraldo <span>&bull;</span> <em class="date">02/2008 - 12/2010</em></p><br>
                    <p>Atuação durante 2 anos como secretária na empresa Serralheria São Geraldo MC de São Pedro - SP, realizando atendimento presencial e telefônico ao cliente, organização de documentos pelo Office 2003 (utilizando Word e Excel), emissão de notas fiscais eletrônicas (Emissor de NFe), assistência administrativa, controle de fluxo de pessoas e organização do local de trabalho e controle de arquivos.</p>
                </div>
            </div>
        </div>      
  
        
        <!-- Competências
        ================================================== -->
        <div class="gradient"></div>  
        <div id="competencia" class="container">
            <div class="row">
                <div class="col s12 center-align qualidades">
                    <i class="medium material-icons">build</i>
                    <h5>COMPETÊNCIAS</h5>
                </div>
                <div class="col s12 m6 l6 push-l1">
                    <h3>Línguas Estrangeiras</h3>
                    <p>Inglês <span>&bull;</span> Avançado</p>
                    <p>Espanhol <span>&bull;</span> Intermediário</p>    
                    <p>Alemão <span>&bull;</span> Iniciante</p>
                </div>

                <div class="col s12 m6 l6 push-l1">
                    <h3>Bases de Dados</h3>
                    <p>SQL <span>&bull;</span> Básico</p>
                    <p>Oracle <span>&bull;</span> Básico</p>    
                    <p>Windows Server <span>&bull;</span> Básico</p>  
                </div>
            </div>        

            <div class="row">
                <div class="col s12 m6 l6 comp2 push-l1">
                    <h3>Sistemas Operacionais</h3>
                    <p>Windows 95 a 10 <span>&bull;</span> Avançado</p>
                    <p>Kali Linux <span>&bull;</span> Básico</p>

                	<h3 class="hardware">Hardware</h3>
                    <p>Micro-computadores <span>&bull;</span> Avançado</p>
                    <p>Impressoras <span>&bull;</span> Intermediário</p>
                </div>            

                <div class="col s12 m6 l6 comp2 push-l1">
                    <h3>Linguagens de Programação</h3>                
                    <p>C e C++ <span>&bull;</span> Avançado</p>
                    <p>HTML 5 e CSS <span>&bull;</span> Avançado</p>    
                    <p>JavaScript <span>&bull;</span> Básico</p>
                    <p>PHP <span>&bull;</span> Básico</p>       
                    <p>Python <span>&bull;</span> Básico</p>          
                    <p>Ruby <span>&bull;</span> Iniciante</p>         
                    <p>Visual Basic <span>&bull;</span> Iniciante</p>
                </div>
            </div>
        </div>
        

        <!-- Extracurriculares
        ================================================== -->  
        <div class="gradient"></div>
        <div id="extra">
            <div class="container">
                <div class="row">
                    <div class="col s12 center-align qualidades">
                        <i class="medium material-icons">note_add</i>
                        <h5>EXTRACURRICULARES</h5>
                    </div>
                    <div class="col s12 push-l4 atividades">                          
                        <p class="group">Discussões Literárias e Religiosas <span>&bull;</span><em class="date"> UNESP Assis</em></p>
                        <p class="group">Grupos de Estudo de Filosofia <span>&bull;</span><em class="date"> UNESP Assis</em></p>
                        <p class="group">Japonês Básico <span>&bull;</span><em class="date"> UNESP Assis</em></p>
                        <p class="group">Alemão Intermediário <span>&bull;</span><em class="date"> UNESP Assis</em></p>
                    </div>
                </div>                
            </div>
        </div>

    </div> <!-- End Resume -->



    <!-- Portfolio Section 
    ================================================== 
    <div id="portfolio" style="background-color: #e5e5e5; text-align: center; ">
    	<i class="fa fa-gears" style="color: yellow; font-size:48px;"></i>
        <h5 style="text-align: center; color: yellow;">SEÇÃO EM CONSTRUÇÃO</h5>        
    </div>-->

    <div class="gradient"></div>  
     
    <!-- Contact Section
    ================================================== -->
    <div id="contato"> 
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6 push-l3">
                    <div class="card-panel z-depth-3 formulario">
                        <div class="card-panel teal lighten-2 center cartao">
                            <i class="large material-icons simbolo hide-on-small-only">mail_outline</i>
                            <h5 class="white-text valign center">ENTRE EM CONTATO COMIGO!</h5>
                        </div>
                        <h3 class="text-center text-success"><?= $result; ?></h3>
                        <form id="contact" method="post">     
                            <div class="input-field">
                                <i class="material-icons prefix">person</i>
                                <input name="name" id="name" type="text" class="validate" required="" aria-required="true">
                                <label for="name">Nome</label>
                            </div>                        
                        	<div class="input-field">
                                <i class="material-icons prefix">mail</i>
                                <input name="email" id="email" type="text" class="validate" required="" aria-required="true">
                                <label for="email">Email</label>
                        	</div>                      
                            <div class="input-field">
                              <i class="material-icons prefix">phone_iphone</i>
                              <input name="phone" id="phone" type="text" class="validate">
                              <label for="icon_telephone">Celular</label>
                            </div>
                            <div class="input-field">
                              <i class="material-icons prefix">message</i>
                              <textarea name="msg" id="msg" class="materialize-textarea" required="" aria-required="true"></textarea>
                              <label for="msg">Mensagem</label>                              
                            </div>            
                            <div class="input-field center-align">
                                <button type="submit" name="submit" value="submit" id="send" class="btn waves-effect waves-light center-align" id="contact_submit" dta-submit="...Enviando"><i class="material-icons right">send</i>ENVIAR</button>
                            </div>                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>

    <!-- Footer
    ================================================== -->
    <footer class="grey darken-4 page-footer hide-on-small-only">
        <div class="container">
            <div class="row">
                <ul class="justify">
                    <li><a title="GitHub" href="https://github.com/ishtarkali"><i class="fa fa-github"></i></a></li>
                    <li><a title="LinkedIn" href="https://www.linkedin.com/in/camilaraccioni"><i class="fa fa-linkedin"></i></a></li>
                    <li><a title="Outlook" href="mailto:camila.raccioni@hotmail.com"><i class="fa fa-envelope"></i></a></li>
                    <li><a title="Facebook" href="https://www.facebook.com/raccioni?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
                    <li><a title="Google +" href="https://plus.google.com/u/0/+CamilaRaccioni?tab=wX"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container grey-text text-lighten-2 copyright">&copy;  Copyright <script>new Date().getFullYear()>document.write(+new Date().getFullYear());</script> &bull; Desenvolvido por Camila Raccioni</div>
        </div>
    </footer>

    <footer class="grey darken-4 page-footer hide-on-med-and-up">
        <div class="container">
            <div class="row">
                <div class="container grey-text text-lighten-2 copyright">&copy;  Copyright <script>new Date().getFullYear()>document.write(+new Date().getFullYear());</script> &bull; Desenvolvido por Camila Raccioni</div>
            </div>
        </div>
    </footer>


    <!-- Loading Screen
    ================================================== 
    <div class="preloader-background">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>-->


    <!-- Scripts
    ================================================== -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>  
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.1/js/materialize.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.1/velocity.min.js'></script>
    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script src="js/particles.js"></script>
    <script src="js/index.js"></script>

</body>

</html>