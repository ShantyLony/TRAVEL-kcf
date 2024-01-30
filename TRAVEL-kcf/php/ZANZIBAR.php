<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travelink</title>

    <!-- Css link -->
    <link rel="stylesheet" href="../asset/CSS/styleMenu.css" />
    <link rel="stylesheet" href="../asset/CSS/styleHome.css" />
    <link rel="stylesheet" href="../asset/CSS/destination.css" />
    <script src="../asset/JS/desti.js" defer></script>

    <!-- style fatma -->
    <link rel="stylesheet" href="../asset/CSS/ACTI.css">
    <link rel="stylesheet" href="../asset/CSS/lightbox.css">
    <script src="../asset/JS/lightbox.js" defer></script>
    <script src="../asset/JS/main.js" defer></script>


    <!-- Bootstrap Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Bootstrap Link -->

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome Cdn -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet" />
    <!-- Google Fonts -->
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="HOME2.php" id="logo"><img class="logo" src="../image/logo.png" alt="" /></a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="HOME2.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#book">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallary">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">A propos</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="text" placeholder="Search"> -->
                    <button class="btn btn-primary" type="button">Déconnexion</button>
                </form>
            </div>
        </div>
    </nav>

    <!--Navbar End -->

    <div class="carousel">
        <div class="slide">
            <h2 class="slogan">Zanzibar <br /></h2>

            <img src="../image/Z1.jpg " alt="Image 1" />
        </div>

        <div class="slide">
            <h2 class="slogan">Zanzibar</h2>
            <img src="../image/Z1" alt="Image 2" />
        </div>

        <div class="slide">
            <h2 class="slogan">Zanzibar</h2>
            <img src="../image/Z1.jpg" alt="Image 3" />
        </div>

        <div class="slide">
            <h2 class="slogan">Zanzibar</h2>
            <img src="../image/Z1.jpg" alt="Image 2" />
        </div>
        <div class="slide">
            <h2 class="slogan">Zanzibar</h2>
            <img src="../image/Z1.jpg" alt="Image 2" />
        </div>
    </div>

    <!-- Home Section End -->

    <!-- Section Book Start -->
    <section class="book" id="book">
        <div class="container">
            <div class="main-text">
                <h1><span>P</span>rogramme du séjour aux Zanzibar</h1>
            </div>

            <div class="row ">
                <div class="col-md-6 py-3 py-md-0 ">
                    <div class="card">

                        <video autoplay muted loop>
                            <source src="../video/gira.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>


                <div class="col-md-6 py-3 py-md-0">
                    <div class="scrollables">
                        <strong>Jour 1 :</strong>
                        <p class="anime">


                            Arrivée aux Zanzibar et transfert à votre hôtel. Votre voyage
                            comprendra un séjour dans des hôtels confortables
                            situés dans des quartiers stratégiques de la ville, ce qui
                            facilite l'accès aux sites touristiques emblématiques.
                            Profitez de la plage et des eaux cristallines.
                            Détendez-vous et profitez des installations de l'hôtel.
                            Dîner dans un restaurant local pour goûter à la délicieuse cuisine locale.

                        </p>

                        <strong>Jour 2:</strong>
                        <p class="anime">


                            Excursion en bateau pour découvrir les magnifiques récifs coralliens.
                            Plongée en apnée pour explorer la vie marine colorée.
                            Déjeuner sur une île déserte.
                            Profitez d'une séance de spa pour vous détendre en fin de journée.
                            Ce voyage organisé vous permettra de déguster des plats locaux
                            authentiques avec des menus soigneusement sélectionnés.
                        </p>

                        <strong> Jour 3:</strong>
                        <p class="anime">

                            Excursion en bateau pour observer les dauphins dans leur habitat naturel.
                            Visite d'un village local pour découvrir la culture maldivienne.
                            Déjeuner dans un restaurant traditionnel maldivien.
                            Temps libre pour se détendre sur la plage ou faire du shopping.
                            Outre les visites incontournables, votre itinéraire peut également
                            inclure des activités culturelles telles que des spectacles de
                            cabaret, des croisières, ou des excursions.
                        </p>

                        <strong> Jour 4:</strong>
                        <p class="anime">

                            Excursion en bateau pour faire de la pêche au gros.
                            Déjeuner à bord avec des fruits de mer frais.
                            Après-midi libre pour se détendre à l'hôtel ou explorer les environs.
                            Dîner sur la plage pour une expérience inoubliable.Pendant votre séjour, vous
                            bénéficierez d'une assistance 24/h sur
                            24.
                        </p>

                        <strong> Jour 5:</strong>
                        <p class="anime">


                            Excursion en bateau pour visiter une île voisine.
                            Découverte de la vie locale et des traditions maldiviennes.
                            Déjeuner dans un restaurant typique de l'île.
                            Temps libre pour profiter de la plage avant le départ.
                        </p>
                    </div>
                    <a href="reservation.php" target="_blank"><button id="about-btn">Reservez ici</button></a>
                </div>
            </div>
        </div>
    </section>

    <script>
        const texte = document.querySelector('.texte');

        texte.addEventListener('click', () => {
            texte.style.whiteSpace = 'normal';
        });
    </script>

    <!-- Section Book End -->

    <div class="fixed-text"> <a href="ZANZIBAR.php" style="color: aliceblue;"><span>Z</span>
            <span>a</span>
            <span>n</span>
            <span>z</span>
            <span>i</span>
            <span>b</span>
            <span>a</span>
            <span>r</span></a>

    </div>

    <!-- CARTE MALDIVES -->

    <div class=" container">

        <div class="main-text">
            <h1><span>D</span>écouvrez le Zanzibar</h1>
        </div>

        <div class="row" style="margin-top: 50px;">

            <div class="col-md-6 py-3 py-md-0">
                <iframe class="relative flex items-center justify-center h-96 w-screen-xl  overflow-hidden" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126935.91330597743!2d39.14827065168962!3d-6.164587973736065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd0ba23b63ecb%3A0x52c848ab6efc138e!2sZanzibar%2C%20Tanzanie!5e0!3m2!1sfr!2sbe!4v1697351849884!5m2!1sfr!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-md-6 py-3 py-md-0">

                <div class="iles">
                    <h3><span>I</span>nformations sur les Zanzibar</h3><br>
                </div>

                <P> Le Zanzibar a un climat tropical avec des températures chaudes toute l'année.
                <p>Décalage
                    horaire
                    Bruxelles Maldives
                    + 2h en hiver et + 1h en été.</p>

                </p>

                <p>Ce sont plusieurs îles réparties sur tout le territoire. avec une vue splendide.
                </p>

                <p>Zanzibar, en swahili Funguvisiwa ya Zanzibar, est un archipel de l'océan Indien situé en face des côtes tanzaniennes,
                    formé de deux îles principales (Unguja et Pemba) et de plusieurs autres petites îles.
                </p>

                <ul class="mr-50 text-orange-500">
                    <li class="text-center text-black"> Température moyenne : 30°C Température minimale
                        : 24°C </li>
                    <li class="text-center text-black">Température maximale : 31°CHumidité maximale : 87
                        % </li>
                    <li class="text-center text-black"> Précipitations : 0.0 mm ></li>
                    <li class="text-center text-black"> Vent : 10 km/h </li>
                </ul>

                <a href="reservation.php"><button id="about-btn">Reservez ici</button></a>
            </div>
        </div>
    </div>

    <!-- End Content -->

    <!-- Section Packages Start -->
    <section class="packages" id="packages">
        <div class="container">
            <div class="main-text">
                <h1><span>N</span>os services</h1>
            </div>

            <div class="row" style="margin-top: 30px">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="../image/imgActivite/soiree3.jpg" alt="" />
                        <div class="card-body">
                            <h3>Activités au Zanzibar</h3>
                            <!-- <p class="cours">" Voyage en cours"</p> -->
                            <p>
                                Plongez dans un paradis tropical aux eaux cristallines, où
                                chaque moment devient une évasion inoubliable!
                            </p>

                            <a href="Acti-Zansibar.php">Découvrez plus</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="../image/Images_garstronomie/plat4.webp" alt="plat" />
                        <div class="card-body">
                            <h3>Gastronomie au Zanzibar</h3>
                            <!-- <p class="cours">" Voyage en été"</p> -->
                            <p>
                                Plongez dans l'enchantement de Zanzibar, où l'histoire
                                rencontre la beauté naturelle!
                            </p>

                            <a href="Acti-Zansibar.php">Découvrez plus</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="../image/imgActivite/groupe16.jpg" alt="logement" />
                        <div class="card-body">
                            <h3>Hébergement au Zanzibar</h3>
                            <!-- <p class="cours">" Voyage en automne"</p> -->
                            <p>
                                Explorez les paysages mystiques et la richesse culturelle de
                                l'Écosse, une terre d'aventures sans fin
                            </p>

                            <a href="Acti-Zansibar.php">Découvrez plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Packages End -->




    </div>
    </section>
    <!-- Section Services End -->


    <!-- About Start -->
    <section class="Gallary" id="Gallary">
        <div class="container">
            <div class="main-text">
                <h1>Q<span>uelques iles du Zanzibar </span></h1>
            </div>

            <div class="row" style="margin-top: 30px">

                <section id="popular-activite">
                    <!-- <h1 class="title">activites populaires</h1> -->
                    <div class="content">
                        <!-- box -->
                        <div class="box">
                            <img src="../image/PAN5.jpg" alt="">
                            <div class="content">
                                <div>
                                    <div class="iles">
                                        <h3>P<span>emba</span></h3>
                                    </div>

                                    <p>Pemba est l'île jumelle d'Unguja et est moins développée, offrant un refuge paisible pour les amoureux de la nature. Elle est célèbre pour ses plantations d'épices,
                                        ses plages immaculées, et ses sites de plongée sous-marine spectaculaires.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- box -->

                        <!-- box -->

                        <div class="box">
                            <img src="../image/imgActivite/maldi3.jpg" alt="" width="500PX">
                            <div class="content">
                                <div>

                                    <div class="iles">
                                        <h3>U<span>nguja</span></h3>
                                    </div>
                                    <!-- 
                                        <h4>détente et relaxation</h4> -->
                                    <p>
                                        Unguja (également connue sous le nom de Zanzibar) : Unguja est l'île principale de l'archipel de Zanzibar. Elle est renommée
                                        pour ses plages de sable blanc, son histoire riche, notamment Stone Town,
                                        site classé au patrimoine mondial de l'UNESCO, et ses marchés animés.</p>
                                </div>
                            </div>
                        </div>
                        <!-- box -->
                        <!-- box -->
                        <div class="box">
                            <img src="../image/MA.jpg" alt="">
                            <div class="content">
                                <div>
                                    <div class="iles">
                                        <h3>M<span>afia</span></h3>
                                    </div>


                                    <p>
                                        Mafia : Bien que Mafia soit située au large de la côte de Tanzanie, elle fait souvent partie des voyages aux îles de Zanzibar. L'île est un paradis pour la plongée avec ses récifs
                                        coralliens intacts et ses activités de plongée en apnée exceptionnelles.</p>
                                </div>
                            </div>
                        </div>
                        <!-- box -->
                        <!-- box -->
                        <div class="box">
                            <img src="../image/ILE3.jpg" alt="">
                            <div class="content">
                                <div>
                                    <div class="iles">
                                        <h3>M<span>nemba</span></h3>
                                    </div>


                                    <p>Mnemba est une petite île privée située au nord-est de Zanzibar, connue pour ses eaux cristallines et ses récifs coralliens,
                                        en faisant un lieu de prédilection pour la plongée et la plongée en apnée.</p>
                                </div>
                            </div>
                        </div>
                        <!-- box -->
                        <!-- box -->
                        <div class="box">
                            <img src="../image/gou.jpg" alt="">
                            <div class="content">
                                <div>
                                    <div class="iles">
                                        <h3>C<span>hanguu</span></h3>
                                    </div>


                                    <p>Changuu (également appelée Prison Island) : Changuu est célèbre pour son histoire, notamment une ancienne prison et la
                                        présence des tortues géantes d'Aldabra qui errent librement sur l'île.</p>
                                </div>
                            </div>
                        </div>
                        <!-- box -->
                        <!-- box -->
                        <div class="box">
                            <img src="../image/iiiil.jpg" alt="">
                            <div class="content">
                                <div>
                                    <div class="iles">

                                        <h3>T<span>umbatu</span></h3>
                                    </div>
                                    <p>
                                        Tumbatu est une île plus isolée et moins visitée, offrant une expérience authentique de Zanzibar.
                                        Vous y trouverez des villages de pêcheurs, des plages paisibles et une ambiance tranquille.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- box -->
            </div>
    </section>

    </div>

    </section>








    <!-- Footer Start -->
    <footer id="footer">
        <h1>
            <a href="HOME2.php"><img src="../image/logo.png" alt="" /></a>
        </h1>
        <p>Un voyage milles rencontres</p>
        <div class="social-links">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-pinterest-p"></i>
        </div>
        <div class="credit">
            <p>Produit <a href="https://www.bruxellesformation.brussels/annuaire/interface3/" style="color:#ff6600" target="_blank"> Interface 3 </a></p>
        </div>
        <div class="copyright">
            <p>&copy;Copyright Interface 3. Tout droits reservés</p>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>