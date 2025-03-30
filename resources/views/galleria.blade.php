<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <!-- cdn Font -->
    <link href="https://fonts.cdnfonts.com/css/bleeding-cowboys" rel="stylesheet">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="style3.css">

</head>

<body class="body3">

    <!-- Inizio Navbar -->
    <nav class="navbar navbar-expand-lg navbar3 sticky-top">
        <div class="container-fluid">
            <img class="me-4" style="height: 45px" src="media/Red_Dead_Redemption_2_Logo.png" alt=""
                class="img-fluid">
            <h2 class="navbar-brand-custom mt-2 ">Wheeler, Rawson and Co.</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('paginaHome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('paginaNegozio') }}">Negozio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('paginaServizi') }}">Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('paginaGalleria') }}">Galleria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('paginaChiSiamo') }}">Chi Siamo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fine Navbar -->


    {{-- sezione audio --}}
    <div class="container-fluid">
        {{-- <audio id="myAudio" src="media/ThatsThe WayItIsThe MusicofRedDeadRedemption2.mp3"></audio> --}}
        <audio id="myAudio" src="media/ColonnaSonoraFinale.mp3"></audio>

        <div class="row"><button class="my-element">Clicca l'icona e attiva la musica per goderti un esperienza
                compleata <i class="fa-solid fa-volume-xmark sound-off"></i> </button></div>
    </div>
    {{-- sezione audio --}}



    {{-- 1 sezione --}}
    <section class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center mt-5 "> <img class=" arrotondamento img-1 img-fluid"
                    src="media/wolf01.jpg" alt="Immagine di un lupo in penombra al buio,con un tuono sullo sfondo">
            </div>
        </div>
    </section>



    {{-- seconda sezione --}}
    <section class="container-fluid">
        <div class="row d-flex">
            <div class="col-6 d-flex space-beetwen mt-5 ">
                <img class="arrotondamento img-1 img-fluid " src="media/img02.jpg"
                    alt="arthur a cavallo,immagine sempre in penombra al buio">
            </div>
            <div class="col-6 text-center d-flex justify-content-center align-items-center secondary-text-color p-0">
                <h1 class="text-center">Darkness</h1>
            </div>
        </div>
    </section>


    {{-- terza sessione --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 d-flex flex-column  align-items-center justify-content-center secondary-text-color">
                <h2 class="text-center">Arthur Morgan <br></h2>
                <div>
                    <h3 class="text-center ">Son</h3>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <img class="img-fluid" src="media/arthur03.jpg" alt="arthur morgan cammina seguendo la luna al buio">
            </div>
        </div>
    </div>


    {{-- Quarta sezione --}}

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3 d-flex justify-content-center"><img src="media/arthurMask.jpg"
                    alt="Foto di arthur morgan mascherato" class="img-fluid"></div>
            <div class="col-12 col-md-3 col-lg-3"><img src="media/elegant-arthur.jpg"
                    alt="Arthur vestio elegante con capelli ordinati" class="img-fluid img-arthur-elegant"></div>
            <div class="col-12 col-md-3 col-lg-3"><img src="media/arthur04.jpg"
                    alt="foto bellissima di arthur con bandoliera" class="img-fluid"></div>
            <div class="col-12 col-md-3 col-lg-3"><img src="media/arthurMorganSmoke.jpg"
                    alt=" foto di arthur mentre fuma" class="img-fluid"></div>
        </div>
    </div>

    {{-- Quinta sezione --}}

    <section class="container-fluid secondary-text-color ">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3 order-2 order-md-1 order-lg-1">
                <img src="media/duch05.jpg" alt="Foto di duch van der linde" class="img-fluid">
            </div>
            <div class="col-12 col-md-3 col-lg-3 order-3 order-md-2 order-lg-2">
                <img src="media/duch02.jpg" alt="Foto di duch van der linde mentre fuma" class="img-fluid">
            </div>
            <div
                class="col-12 col-md-6 col-lg-6 d-flex flex-column align-items-center justify-content-center secondary-text-color order-1 order-md-1 order-lg-1 mt-sm-5 mb-sm-5">
                <h2 class="text-center ">Duch Van Der Linde<br></h2>
                <div>
                    <h3 class="text-center ">Father</h3>
                </div>
            </div>
        </div>
    </section>



    <section class="container-fluid secondary-text-color ">
        <div class="row overFlowRow overflow-auto d-flex flex-nowrap">
            @foreach ($galleryFuorilegge as $item)
                <div class="col-md-3 d-flex align-div ">
                    <div class="container-img-picture ">
                        <a class="outLaw-ancor"
                            href="{{ route('paginaDettagliFuorilegge', ['uri' => $item['uri']]) }}">
                            <h3 class="text-center">{{ $item['nome'] }}</h3>
                            <img class="img-fluid img-picture" src="{{ $item['immagine'] }}"
                                alt="{{ $item['alt'] }}">
                        </a>
                        <button type="button" class="btn btn-dark mt-5">
                            <a class="outLaw-ancor mt-4"
                                href="{{ route('paginaDettagliFuorilegge', ['uri' => $item['uri']]) }}">Maggiori
                                Dettagli</a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12"><img src="media/blackwater.jpg" alt="immagine della citta di blackwater"
                    class="img-fluid"></div>
            <div class="col-12"><img src="media/Blackwater02.webp" alt="seconda immagine della citta di blackwater"
                    class="img-fluid"></div>

        </div>
    </div>

    {{-- Sezione rapina battello parte1 --}}

    <section class="container-fluid">
        <div class="row">
            <div class="col-12"><img src="media/Le_Grand_Korrigan01.webp"
                    alt="immagine di un battello nella citta di blackwater" class="img-fluid"></div>

            <div class="row">
                <div class="col-sm-4 col-md-2 col-lg-2"><img src="media/battello.webp"
                        alt="arthur si dirige verso il battello con una barca" class="img-fluid"></div>
            </div>
            <div class="col-3 mt-5">

                <img src="media/battello2.jpg" alt="immagine dell'interno del battello" class="img-fluid">
            </div>

            <div class="col-3 mt-5">
                <img src="media/rdr2-robbery.avif"
                    alt="arthur minaccia un uomo con la pistola per aprire la cassaforte" class="img-fluid">
            </div>
            <div class="col-6 text-center secondary-text-color mt-5">
                <h3 class="mt-5">Robbery</h3>
                <div class="col-12">
                    <h3 class="mt-5">Gold</h3>
                </div>
                <div class="col-12">
                    <h3 class="mt-5">Money</h3>
                </div>
            </div>
        </div>
    </section>

    {{-- Sezione rapina battello --}}


    {{-- Sezione rapina battello parte1 --}}

    <section class="container-fluid mt-5">
        <div class="row">

            <div class="col-sm-4 col-md-2 col-lg-2"><img src="media/dinamite-arthur.avif"
                    alt="arthur va via mentre sullo sfondo si vedono le casseforti aperte con la dinamite"
                    class="img-fluid"></div>

            <div class="col-sm-3 col-md-4 col-lg-4"><img src="media/micah-snake.jpg" alt="immagina di micah bell"
                    class="img-fluid"></div>

            <div class="col-12 col-md-6 col-lg-6"><img class="img-fluid" src="media/duch01.jpg"
                    alt="immagine di duch van der linde durante la rapina al battello">
            </div>


        </div>
        </div>
    </section>


    <div class="text-center secondary-text-color mt-5">
        <h2>PINKERTON</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12"><img class="img-fluid" src="media/pinkerton(1).jpg"
                        alt="immagine dei pinkerton, (l'attuale FBI americana)"></div>
            </div>
        </div>
    </div>

    {{-- Sezione rapina battello --}}


    <section class="container-fluid mt-5">
        <div class="row">

            <div class="col-3"><img src="media/red-dead-redemption-2-deadeye-1.jpg"
                    alt="arthur e bill durante una sparatoria" class="img-fluid"></div>
            <div class="col-3"><img src="media/rapina2.webp" alt="arthur e bill durante una sparatoria"
                    class="img-fluid"></div>
            <div class="col-3"><img src="media/jhonShot.jpg" alt="jhon  durante una sparatoria" class="img-fluid">
            </div>
            <div class="col-3"><img src="media/shoot.jpg" alt="arthur fa fuoco con il suo revolver"
                    class="img-fluid"></div>


        </div>
        </div>
    </section>


    {{-- crosello fuga --}}
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>

                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="media/fuga1.jpg" class="d-block w-100"
                                alt="duch conduce la banda in fuga sulla neve dopo la rapina al battello ">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="media/fuga2.jpg" class="d-block w-100"
                                alt="la banda in fuga sulla neve dopo la rapina al battello">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="media/fuga3.jpg" class="d-block w-100" alt="arthur che torna da caccia">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="media/MichaSnow.jpg" class="d-block w-100"
                                alt="micah in fuga dopo la rapina al battello">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>T5</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>
    </section>
    {{-- carosello fuga --}}

    {{-- settima sezione --}}
    <section class="container-fluid  mt-5">
        <div class="row">
            <div
                class="secondary-text-color text-center col-12 col-md-4 col-lg-4 d-flex align-items-center justify-content-center flex-column">
                <div class="col-12 mt-5">
                    <h2>Cold</h2>
                </div>
                <div class="col-12 mt-5">
                    <h2>Desperate flight</h2>
                </div>
                <div class="col-12 mt-5">
                    <h2>Relentless storm</h2>
                </div>
                <div class="col-12 mt-5">
                    <h2>Precarious survival</h2>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8 align-items-center justify-content-center mt-5"><img
                    class="img-fluid" src="media/section7-01.jpg"
                    alt="immagine di uno dei casolari sulla neve dove la banda si nasconde"></div>
        </div>
    </section>
    {{-- Settima sessione --}}


    {{-- ottava sezione --}}
    <section class="container-fluid">
        <div class="row">
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/slide-1.jpg"
                    alt="luogo dove la banda si nasconde"></div>
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/slide-6.jpg"
                    alt="casolare principale dove la banda si nasconde"></div>
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/slide-2.jpg"
                    alt="foto di arthur che guarda la telecamera"></div>
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/slide-3.webp"
                    alt="foto panoramica sulla neve"></div>
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/slide-4.webp"
                    alt="arthur va in cerca di jhon"></div>
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/slide-5.webp"
                    alt="lenny e javier sono di pattuglia"></div>
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/arthurFindJhon.jpg"
                    alt="arthur trova jhon ferito dai lupi">
            </div>
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/jhon ferito.jpg"
                    alt="foto di jhon bendato a letto mentre riposa">
            </div>
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/slide-7.webp"
                    alt="la neve si e sciolta foto che guarda verso valentine"></div>
            <div class=" col-12  "><img class="img-fluid maxContent" src="media/slide-8.webp"
                    alt="arthur seduto sul bordo di una montagna guarda un lago"></div>
        </div>
    </section>
    {{-- ottava sezione --}}

    {{-- Valentine --}}
    <div class="my-5">
        <h2 class="text-center secondary-text-color">VALENTINE</h2>
    </div>
    <section class="container-fluid">
        <div class="row">
            <div class="col-12 p-0"><img class="img-fluid valetineImg" src="media/goToValentine.jpg"
                    alt="arthur a piedi conduce il cavallo dalle redini dentro valentine ">
            </div>
            <div class="col-12 p-0"><img class="img-fluid valetineImg" src="media/Valentine1899.jpg"
                    alt="foto della citta di valentine">
            </div>
            <div class="col-12 p-0"><img class="img-fluid valetineImg" src="media/hunt2.jpg"
                    alt="morgan e hosea a caccia di conigli"></div>
            <div class="col-12 col-md-6 col-lg-6 order-2 order-md-1 order-lg-1"><img class="img-fluid"
                    src="media/caccia.jpeg" alt="duch a cavallo caccia un cervo con arco"></div>
            <div
                class="col-12 col-md-6 col-lg-6 order-1 order-md-2 order-lg-2 my-5 d-flex justify-content-center flex-column align-item-center">
                <h2 class=" text-center secondary-text-color">FOOD... <br> SURVIVAL.. <br> HUNT...</h2>
            </div>

            <div class="col-6 order-3">
                <img src="media/accampamento.webp " alt="la banda accampata vicino al fuoco" class="img-fluid">
            </div>
            <div class="col-6 order-3">
                <img src="media/accampamento2.jpg " alt="la banda accampata vicino al fuoco" class="img-fluid">
            </div>
        </div>
    </section>

    {{-- carosello fight --}}
    <section class="container-fluid">
        <div class="row">
            <div class="row d-flex justify-content-center">
                <div class="col-12 text-center secondary-text-color my-5">
                    <h2>Money, Tahiti, and we're free.</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="media/A&D.jpg" alt="un immagine di duch con la mano sulla spalla di arthur"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-12 mt-5">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="media/job1.jpg" class="d-block w-100 img-fluid"
                                alt="immagine di arthur mentre spara">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job2.jpg" class="d-block w-100 img-fluid"
                                alt="arthur salta da un vagone all'altro di un treno">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job3.jpg" class="d-block w-100 img-fluid"
                                alt="arthur entra in un negozio mascherato per rapinarlo">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job4.jpg" class="d-block w-100 img-fluid"
                                alt="immagine di un altro colpo della banda con arthur che spara con una gataling e sadie con un fucile ">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job5.jpg" class="d-block w-100 img-fluid"
                                alt="arthur e jhon combattono contro i nemici">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job6.jpg" class="d-block w-100 img-fluid"
                                alt="immagine di jhon con fucile in spalla">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job7.jpg" class="d-block w-100 img-fluid"
                                alt="immagine di charles con arco">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job8.jpg" class="d-block w-100 img-fluid"
                                alt="arthur con coltello mascherato">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job9.jpg" class="d-block w-100 img-fluid"
                                alt="immagine di arthur con doppie pistole">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job10.jpg" class="d-block w-100 img-fluid"
                                alt="duch e arthur rapinano una banca">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job11.jpg" class="d-block w-100 img-fluid"
                                alt="arthur a cavallo in fuga da una rapina ad un treno">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job12.jpg" class="d-block w-100 img-fluid"
                                alt="immagine di arthur con doppie pistole">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job13.jpg" class="d-block w-100 img-fluid" alt="immagine di charles">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job14.jpg" class="d-block w-100 img-fluid"
                                alt="morgan uccide un nemico col calcio del fucile">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job15.jpg" class="d-block w-100 img-fluid"
                                alt="arthur minaccia un uomo a terra con una doppietta a canne mozze">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job16.jpg" class="d-block w-100 img-fluid"
                                alt="arthur e un altra rapina in banca">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job17.jpg" class="d-block w-100 img-fluid"
                                alt="arthur al riparo dal fuoco nemico">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job18.jpg" class="d-block w-100 img-fluid"
                                alt="arthur durante una sparatoria">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job19.jpg" class="d-block w-100 img-fluid" alt="arthur combatte">
                        </div>
                        <div class="carousel-item">
                            <img src="media/job20.jpg" class="d-block w-100 img-fluid" alt="arthur fa una rapina">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- carosello fight --}}

    {{-- sezione salvataggio jack --}}
    <section class="container-fluid">
        <div class="row d-flex justify-content-center secondary-text-color ">
            <div class="col-6 d-flex align-items-center my-5"> <img class="img-fluid" src="media/assaultStart.jpg"
                    alt="immagina della banda che si dirige verso la villa braitwaite per recuperare jack "></div>
            <div class="col-6 d-flex align-items-center my-5">
                <h2 class="text-center ">Mrs. Braithwaite, I'm here to pick up the baby.<br></h2>
            </div>

            <div class="col-6 d-flex align-items-center my-5">
                <h2 class="text-center ">I won't give you anything. You and your dirty gang have no power here.<br>
                </h2>
            </div>
            <div class="col-6 d-flex align-items-center my-5"> <img class="img-fluid"
                    src="media/Braithwaite_Family_RDR2.webp" alt="Mrs Braithwaite ed i suoi figli"></div>

            <div class="col-6 col-md-2 col-lg-2 d-flex align-items-center my-5"> <img class="img-fluid"
                    src="media/red-dead-redemption-2-fire3.webp" alt="duch e hosea interrogano Mrs Braithwaite"></div>
            <div class="col-6 col-md-2 col-lg-2 d-flex align-items-center my-5"> <img class="img-fluid"
                    src="media/DuchChange.webp"
                    alt="duch trascina Mrs Braithwaite fuori dalla villa tirandola per capelli"></div>
            <div class="col-6 col-md-2 col-lg-2 d-flex align-items-center my-5"> <img class="img-fluid"
                    src="media/red-dead-redemption-2-fire2.jpg" alt="arhur cammina tra le fiamme "></div>
            <div class="col-6 col-md-2 col-lg-2 d-flex align-items-center my-5"> <img class="img-fluid"
                    src="media/red-dead-redemption-2-fire.webp"
                    alt="bill hosea e arthur vanno via con la villa di Mrs Braithwaite in fiamme"></div>


            <div class="col-12"> <img class="img-fluid" src="media/missBraitwaite.webp"
                    alt="Mrs Braithwaite corre verso la sua villa infiamme"></div>

            <div class="col-12 mt-5"> <img class="img-fluid" src="media/finalAssault.jpg"
                    alt="la banda va via dopo aver raso tutto a fuoco"></div>
            <div class="col-12 d-flex align-items-center my-5">
                <h2 class="text-center ">I wouldn't be so sure about that.<br></h2>
            </div>

            <div class="col-6 col-md-2 col-lg-2 d-flex align-items-center my-5"> <img class="img-fluid"
                    src="media/jhon_jack.jpg" alt="padre e figlio di nuovo insieme"></div>
            <div class="col-6 col-md-2 col-lg-2 d-flex align-items-center my-5"> <img class="img-fluid"
                    src="media/arthur_jack.jpg" alt="zio arthur e jack"></div>
            <div class="col-12  d-flex justify-content-center align-items-center my-5"> <img class="img-fluid"
                    src="media/jhon_jack2.jpg" alt="jhon e jack giocano"></div>

            <div class="mt-5">
                <h2 class="text-center secondary-text-color">Welcome back,Jack</h2>
            </div>


        </div>
    </section>

    {{-- Sezione tubercolosi --}}
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-5 secondary-text-color">What is it?</h2>
            </div>

            <div class="col-12">
                <img src="media/arthurTubercolsi1.jpg" alt="arthur malato va dal dottore " class="img-fluid">
            </div>
            <div class="col-12">
                <h2 class="text-center my-5 secondary-text-color">It's not good news</h2>
            </div>
            <div class="col-12">
                <img src="media/arthutTubercolosi2.jpg" alt="il dottore visita arthur" class="img-fluid">
            </div>
            <div class="col-12">
                <img src="media/tuberculosis.jpg" alt="arthur realizza di essere gravemente malato di tubercolosi"
                    class="img-fluid">
            </div>
            <div class="col-12">
                <h2 class="text-center my-5 secondary-text-color">You got tuberculosis..</h2>
            </div>
            <div class="col-12">
                <img src="media/arthur-is-diagnosed-with-tb.avif"
                    alt="arthur al tavolo dell'accampamento mentre pensa" class="img-fluid">
            </div>

            <div class="col-12">
                <h2 class="text-center my-5 secondary-text-color">How much longer do I have?</h2>
            </div>
            <div class="col-6"><img class="img-fluid" src="media/pensieroso.jpg"
                    alt="immagine di arthur a cavallo durante il tramonto "></div>
        </div>
    </section>
    {{-- Sezione tubercolosi --}}

    {{-- Sezione Redenzione --}}
    <section class="container-fluid">
        <div class="row">
            <div class="col-6"><img class="img-fluid" src="media/la-redenzione-nascosta.webp"
                    alt="immagine di arthur"></div>
            <div class="col-12 d-flex flex-column justify-content-center align-item-center">
                <h2 class=" text-center secondary-text-color">REDEMPTION</h2>

            </div>
            <div class="col-6"></div>
            <div class="col-6"><img class="img-fluid" src="media/pensieroso2.jpg" alt="immagine di arthur"></div>
            <div class="col-10 my-5"><img class="img-fluid" src="media/redenzione2.jpg"
                    alt="arthur aiuta una donna"></div>

            <div class="col-6 d-flex flex-column justify-content-center align-item-center">
                <h2 class=" text-center secondary-text-color">SINS...</h2>

            </div>
            <div class="col-6"><img class="img-fluid" src="media/sins2.jpg"
                    alt="arthur picchia un buon pastore per i debiti di straus"></div>

            <div class="col-6 mt-5"><img class="img-fluid" src="media/snake2.jpg"
                    alt="foto di micah a braccia incrociate con le sue pistole in mano"></div>

            <div class="col-6 d-flex flex-column justify-content-center align-item-center">
                <h2 class=" text-center secondary-text-color">RAT.</h2>
            </div>

        </div>
    </section>
    {{-- sezione redenzione --}}

    {{-- im afraid --}}
    <section class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-10 order-2 order-md-1 order-lg-1"><img class="img-fluid"
                    src="media/I'MAFRAID.jpg" alt="foto di arthur che sta per piangere"></div>
            <div class="col-12 col-md-2 col-lg-2 order-1 order-md-2 order-lg-2 my-5">
                <h2 class=" text-center secondary-text-color">I'M AFRAID...</h2>
            </div>
        </div>
    </section>

    {{-- who section --}}
    <section class="container-fluid">
        <div class="row">

            <div class="col-12  my-5">
                <h2 class=" text-center secondary-text-color">Right now! Who stands with me? Who stands against me</h2>
            </div>
            <div class="col-12 d-flex justify-content-center"><img class="img-fluid" src="media/who.jpg"
                    alt="duch punta le sue due pistole una ad un gruppo una ad un altro">
            </div>
            <div class="col-6"><img class="img-fluid" src="media/sjdac.jpg"
                    alt="foto di arthur jhon sadie e charles"></div>
            <div class="col-6"><img class="img-fluid" src="media/daf.jpg" alt="foto di micah e i suoi amici"></div>
        </div>
    </section>

    {{-- sezione goJhon --}}
    <section class="container-fluid">
        <div class="row">
            <div class="col 12">
                <img class="img-fluid" src="media/horse.png"
                    alt="arthur accarezza il suo cavallo ferito mentre muore">
            </div>
            <div class="col-12">
                <h2 class="text-center my-5 secondary-text-color">You gotta run and don't look back. This is over.</h2>
            </div>
            <div class="col 12 d-flex justify-content-center">
                <img class="img-fluid" src="media/goJhon.jpg"
                    alt="Arthur salva Jhon e gli passa il suo prezioso cappello">
            </div>
        </div>
    </section>
    {{-- sezione goJhon --}}

    {{-- SEZIONE FINALE  --}}
    <div class="container-fluid">
        <div class="row ">
            <h2 class="text-center my-5 secondary-text-color">You are my brother.</h2>
            <h2 class="text-center my-5 secondary-text-color">I know</h2>
            <div class="col-12 d-flex justify-content-center mt-4">
                <img src="media/cervo.avif" alt="foto di un cervo che beve l'acqua al tramonto" class="img-fluid">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img src="media/seeYouSoonArthutMorgan.jpg"
                    alt="scena finale di arthur mentre muore guardando il tramonto" class="img-fluid">
            </div>
            <div class="col-12 d-flex justify-content-center mt-4">
                <img src="media/Wedding.webp" alt="matrimonio tra jhon e abigail" class="img-fluid">
            </div>

            <div class="col-12 d-flex justify-content-center">
                <img src="media/revenge.jpg" alt="jhon uccide micah" class="img-fluid">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img src="media/final.jpg" alt="i pinkerton guardano casa di jhon da lontano" class="img-fluid">
            </div>
            <h2 class="text-center my-5 secondary-text-color">Thanks for watching.</h2>
        </div>
    </div>

    <!-- footer -->

    <footer class="container-fluid footer3">
        <div class="row justify-content-center text-center mt-4">
            <div class="col-12 col-md-3 d-flex flex-column mt-4">
                <h3>Compagnie di Commercio</h3>
                <span class="mt-3">
                    <p>Lemoyne Trading Company <i class="fa-solid fa-horse"></i></p>
                </span>
                <span>
                    <p>Valentine Mercantile Guild <i class="fa-solid fa-wagon"></i></p>
                </span>
                <span>
                    <p>Rhodes Carriage and Transport <i class="fa-solid fa-sack-dollar"></i></p>
                </span>
            </div>
            <div class="col-12 col-md-3 mt-4">
                <h3>Avamposti e Città</h3>
                <span>
                    <address>Valentine - Saloon Principale</address>
                </span>
                <span>
                    <address>Rhodes - Ufficio Postale</address>
                </span>
                <span>
                    <address>Saint Denis - Stazione Ferroviaria</address>
                </span>
            </div>
            <div class="col-12 col-md-3 mt-4">
                <h3>Informazioni di Contatto</h3>
                <span>
                    <p>Richiedi informazioni all'ufficio postale di Valentine</p>
                </span>
                <span>
                    <p>Invia un telegramma alla stazione di Blackwater</p>
                </span>
                <span>
                    <p>Richiedi informazioni al barman del saloon di Saint Denis</p>
                </span>
            </div>
            <div class="col-12 mt-5 mt-4">
                <h3>Metodi di Pagamento</h3>
                <span>
                    <i class="fa-solid fa-sack-dollar"></i> Dollari Americani,
                </span>
                <span>
                    <i class="fa-solid fa-coins"></i> Pepite d'Oro,
                </span>
                <span>
                    <i class="fa-solid fa-scroll"></i> Titoli di Credito.
                </span>
                <div class="col-12 mt-3">© 1899 Wheeler, Rawson & Co. Tutti i diritti riservati.</div>
                <div class="col-12 mt-3">© POWERADE BY PENTRELLI GIUSEPPE.</div>

            </div>
        </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


        <!-- Bootstrap Script -->
        <script src="main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        {{-- Fontawesome script --}}
        <script src="https://kit.fontawesome.com/b1b53eed38.js" crossorigin="anonymous"></script>

        {{-- Custom script --}}

        <script>
            const myAudio = document.getElementById('myAudio');
            const myElements = document.querySelector('.my-element');
            const soundOff = document.querySelector('.sound-off');


            myElements.addEventListener('click', () => {
                if (myAudio.paused) {
                    myAudio.play();
                    soundOff.className = 'fa-solid fa-volume-high';
                } else {
                    myAudio.pause();
                    soundOff.className = 'fa-solid fa-volume-xmark';
                }
            });
        </script>
</body>

</html>
