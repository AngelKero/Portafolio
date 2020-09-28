<!doctype html>
<html lang="es">

<head>
    <title>Angel Zaragoza || Desarrollo WEB</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontasome CSS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"
        integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous">
    </script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Oxanium:300,400,700&display=swap"
        rel="stylesheet">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="sass/master.css">

    <!-- Animaciones para css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header id="inicio">
        <div class="container">
            <nav class="row">
                <ul class="col-12">
                    <li><a href="index.php#inicio">Inicio</a></li>
                    <li><a href="#acerca">Acerca de...</a></li>
                    <li><a href="#habilidades">Habilidades</a></li>
                    <li><a href="#">Trabajos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="contenedor-texto">
            <div class="texto">
                <h1 class="nombre" data-aos="fade-left">Angel Zaragoza</h1>
                <h2 class="profesion">Crea tu web a la medida</h2>
            </div>
        </div>
        <!-- Efecto Ola del header -->
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: rgb(255, 255, 255);"></path>
            </svg></div>
    </header>
    <main>
        <section class="container acerca-de" id="acerca">
            <div class="row foto">
                <div class="col-12" data-aos="flip-up">
                    <img src="img/profile.jpg" alt="Foto de perfil - Angel Zaragoza">
                </div>
            </div>
            <div class="row texto">
                <h3 class="col-12 titulo">Acerca de</h3>
                <p class="col-12">
                    Hola mi nombre es <span style="color: rgba(181,65,29, 1); font-weight: 600;">Angel Zaragoza</span> y soy desarrollador, estoy aqui para
                    poder crear tu <span style="color: teal; font-weight: 600;">web a la medida</span>.
                    No importa que pagina quieras hacer, sea una web para promocionar y tener mas visibilidad para tu negocio, una web personal o un blog.
                    Solamente cuentame que es lo que quieres hacer y te ayudare a llevar a cabo esa idea que tienes en mente, simplemente contactactame mediante
                    redes sociales o mandame un correo en el formulario que tendras debajo.
                </p>
                <div class="col-12 d-flex justify-content-center">
                    <a href="#" class="boton-contacto" data-aos="flip-down">Contactame  <i class="fas fa-user"></i></a>
                </div>
            </div>
        </section>
        <section class="redes-sociales bg-dark">
            <div class="container">
                <!-- Titulo -->
                <div class="row mt-3">
                    <div class="col-12">
                        <h3 class="titulo mt-4 text-white" data-aos="fade-left">Redes Sociales</h3>
                    </div>
                </div>
                <!-- Redes -->
                <div class="row lista text-white text-center">
                    <!-- Cliente -->
                    <a class="col-6 col-md-4 cliente instagram" data-aos="zoom-in" href="https://www.instagram.com/angeladrian.zaragozarodriguez/" target="_blank">
                        <p class="icono"><i class="fab fa-instagram fa-lg fa-fw"></i></p>
                        <p class="nombre">Instagram</p>
                    </a>
                    <a class="col-6 col-md-4 cliente github" data-aos="zoom-in" href="https://github.com/AngelKero" target="_blank">
                        <p class="icono"><i class="fab fa-github fa-lg fa-fw"></i></p>                       
                        <p class="nombre">GitHub</p>
                    </a>
                    <a class="col-6 col-md-4 cliente whatsapp" data-aos="zoom-in" href="https://api.whatsapp.com/send?phone=523325094748" target="_blank">
                        <p class="icono"><i class="fab fa-whatsapp fa-lg fa-fw"></i></p>
                        <p class="nombre">WhatsApp</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="habilidades" id="habilidades">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="titulo mt-4" data-aos="fade-left">Mis habilidades____</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 tecnologias">
                        <p class="mb-4 descrpcion">Actualmento me dedico mas al menejo de fron-end, pero mis habilidades mas desarrollas son:</p>
                        <div class="html">
                            <p class="tecnologia" data-aos="fade-left">HTML</p>
                            <div class="progress" data-aos="fade-right">
                                <div class="progress-bar html-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-right porcentaje">75%</p>
                        </div>
                        <div class="css">
                            <p class="tecnologia" data-aos="fade-left">CSS</p>
                            <div class="progress" data-aos="fade-right">
                                <div class="progress-bar css-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-right porcentaje">50%</p>
                        </div>
                        <div class="javascript">
                            <p class="tecnologia" data-aos="fade-left">JavaScript</p>
                            <div class="progress" data-aos="fade-right">
                                <div class="progress-bar javascript-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-right porcentaje">20%</p>
                        </div>
                        <div class="php">
                            <p class="tecnologia" data-aos="fade-left">PHP</p>
                            <div class="progress" data-aos="fade-right">
                                <div class="progress-bar php-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-right porcentaje">40%</p>
                        </div>
                        <div class="mysql">
                            <p class="tecnologia" data-aos="fade-left">MySQL</p>
                            <div class="progress" data-aos="fade-right">
                                <div class="progress-bar mysql-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-right porcentaje">30%</p>
                        </div>
                    </div>
                    <div class="col-5 d-flex flex-column justify-content-center">
                        <img src="img/laptop.jpg" alt="" class="w-100 laptop-tecnologias" data-aos="zoom-in-up">
                    </div>
                </div>
                <div class="row otras-habilidades d-flex justify-content-lg-around mt-5">
                    <div class="col-3 mb-5" data-aos="flip-left">
                        <div class="extra bg-dark">
                            <h4 class="habilidad text-center">Responsive Design</h4>
                            <p class="descripcion">Diseño adaptado a multiples pantallas.</p>
                            <p class="nivel text-right">100%</p>
                        </div>
                    </div>
                    <div class="col-3 mb-5" data-aos="flip-left">
                        <div class="extra bg-dark">
                            <h4 class="habilidad text-center">Git y Gihub</h4>
                            <p class="descripcion">Sistema de control de versiones.</p>
                            <p class="nivel text-right">35%</p>
                        </div>
                    </div>
                    <div class="col-3 mb-5" data-aos="flip-left">
                        <div class="extra bg-dark">
                            <h4 class="habilidad text-center">jQuery</h4>
                            <p class="descripcion">Libreria para JavaScript.</p>
                            <p class="nivel text-right">15%</p>
                        </div>
                    </div>
                    <div class="col-3 mb-5" data-aos="flip-left">
                        <div class="extra bg-dark">
                            <h4 class="habilidad text-center">SASS</h4>
                            <p class="descripcion">Preprocesador de CSS.</p>
                            <p class="nivel text-right">50%</p>
                        </div>
                    </div>
                    <div class="col-3 mb-5" data-aos="flip-left">
                        <div class="extra bg-dark">
                            <h4 class="habilidad text-center">AJAX</h4>
                            <p class="descripcion">Paginas dinamicas.</p>
                            <p class="nivel text-right">30%</p>
                        </div>
                    </div>
                    <div class="col-3 mb-5" data-aos="flip-left">
                        <div class="extra bg-dark">
                            <h4 class="habilidad text-center">WordPress</h4>
                            <p class="descripcion">Administra tu pagina de forma sencilla.</p>
                            <p class="nivel text-right">70%</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Animaciones para Css -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>