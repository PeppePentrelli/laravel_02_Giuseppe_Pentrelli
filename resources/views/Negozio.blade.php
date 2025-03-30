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
    <link rel="stylesheet" href="style2.css">

</head>

<body class="body2">

    <!-- Inizio Navbar -->
    <nav class="navbar navbar-expand-lg navbar2 sticky-top">
        <div class="container-fluid">
            <img class="me-4" style="height: 45px" src="media/Red_Dead_Redemption_2_Logo.png" alt=""
                class="img-fluid">
            <h2 class="navbar-brand-custom mt-2 me-5">Wheeler, Rawson and Co.</h2>
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



    <!-- BORDO SUPERIORE PAGINA -->
    <div class="container-fluid fluid-prova mt-4">
        <div class="row row-border mt-2 ">
            <div class="col-3 div-bordo mx-5 display-none">
            </div>
            <div class="col-3 top-p">
                <p>CLOTHING DEPARTMENT - HATS</p>
            </div>
            <div class="col-3 div-bordo mx-5 display-none">
            </div>
        </div>
    </div>
    <!-- BORDO SUPERIORE PAGINA -->


    <section class="container-fluid pubblicita-copertina">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid img-pubblicita-copertina" src="media/immagine-copertina.jpg"
                    alt="immagine pubblicita wheeler,rawson and Co.">
            </div>
        </div>
    </section>



    <!-- Sezione Pubblicita -->
    <div class="container mt-5">
        <div class="container-fluid prova1">
            <div class="row row-prova1">
                <div class="container prova2">
                    <div class="row row-prova2">
                        <div class="col-1 angolo-sinistro display-none"></div>
                        <div class="col-10 angolo-centrale display-none"></div>
                        <div class="col-1 angolo-destro display-none"></div>
                        <div class="col-12 colonna-laterale ">
                            <div class="row">
                                <div class="col-sm-12 col-lg-8 contenitore-img-pubblicita"><img
                                        class="img-fluid img-pubblicita" src="media/immagine-pubblicita1.png"
                                        alt="" class="img-fluid"></div>
                                <div class="col-sm-12 col-lg-4 hidden display-yes">
                                    <h3 class="font-western mt-3">WE SUPPLY HATS FOR EVERY NOTION</h3>
                                    <P class="display-yes">whether you are looking for a Cow Boys' Hat. a Bulldogger
                                        Hat, a Bowl- er Hat, a Panama Hat, a Trilby Hat, a Stovepipe Hat even a Flat Cap
                                        as well as Grand Army and USA Cav- alry hats for those that fan- cy a Saturday
                                        afternoon drinking a mint julip and remembering the joys of loathing your
                                        neighbors dur ing the War Between the States</P>
                                    <h3>ALL HATS GUARANTEED.</h3>
                                </div>
                                <div class="col-12 mt-2">
                                    <h5 class="text-start display-yes mt-3"><strong>WHEN YOU ORDER A CAP OR HAT YOU WILL
                                            SAVE</strong></h5>
                                </div>
                                <div class="col-12 mt-2">
                                    <h5 class="text-start font-western display-yes "><strong>UP TO 50 PERCENT RETAILERS
                                            PROFIT</strong></h5>
                                </div>
                                <div class="col-12 mt-2 bordo-per-paragrafi display-yes ">
                                    <p class="mt-3">for those not accustomed to ciphering and mathematics or that
                                        experienced trouble in book learning, that you can order TWO hats for the price
                                        of one purchased at a store in town. You will soon come to loathe entaier, as we
                                        do. If you were acquainted with a fraction of their depravity you would surely
                                        commit arson</p>
                                </div>
                                <div class="col-12 mt2 display-yes">
                                    <p class="weStockParagraf mt-3"><strong>We stock a wide supply of Nutria fur
                                            hats.</strong> The fur comes from small South American water rodents e known
                                        for their destructive burrowing and feeding behaviors similar to beavers.
                                        Frankly we are do- e people of South America a favor by killing and importing
                                        these creatures in mass quantities and making o hats, as by all accounts they,
                                        like a great deal of nature, are a nuisance. These are the finest hats in the d
                                        for the reason that the fur is soft, smooth, and silky. Run your hand along the
                                        band, look her in the wink, and she will know that this evening will be like
                                        none other she has ever experienced as she s into your arms and a quartet gently
                                        begins to play a concerto and this moment lives forever</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-prova3 display-none">
                        <div class="col-12 colonna-laterale-sotto"></div>
                    </div>
                    <div class="row display-none">
                        <div class="col-1 angolo-sinistro-sotto"></div>
                        <div class="col-10 angolo-centrale-sotto"></div>
                        <div class="col-1 angolo-destro-sotto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sezione Pubblicita -->


    <div class="riga-distanziatrice"></div>



    <!-- Sezione Articoli -->

    <section class="container contenitore-articoli">
        <div class="row riga-contenitore-articoli">
            <div class="col-12 d-flex justify-content-center"><img class="img-fluid"
                    src="media/presentazioneCappelli.png"
                    alt="immagine illustrativa di come creare un copricapo di opossum"></div>


            {{-- Sezioni Cappelli --}}
            @foreach ($indumenti as $indumento)
                <article class="articolo-custom col-12 col-lg-6">
                    <h6 class="mt-2">{{ $indumento['marca'] }}</h6>
                    <h3 class="mt-2 titolo-cappello">{{ $indumento['nome'] }}</h3>
                    <img class="img-fluid img-articoli mt-4" src="{{ $indumento['img'] }}"
                        alt="{{ $indumento['alt'] }}">
                    <p class="mt-2">{{ $indumento['descrizione'] }}</p>
                    <div class="col-12 row-price">
                        <p class="mt-4">PREZZO</p>
                        <h3 class="ms-auto h3-prezzo">{{ $indumento['prezzo'] }}</h3>
                    </div>
                    <div class="col-12 mb-3"><button class="secondary-bg-color"><a class="link-articolo"
                                href="{{ route('paginaDettagliNegozio', ['id' => $indumento['id']]) }}">Visualizza
                                Articolo</a></button></div>
                </article>
            @endforeach
            {{-- Sezioni Cappelli --}}

            <article class="articolo-custom col-12 col-lg-6">

                <img class="img-fluid img-articoli mt-4 pubblicita-animalista" src="/media/doNot.png"
                    alt="immagine pubblicità animalista.">


            </article>
        </div>
        </div>
        </div>
    </section>

    <!-- Sezione Articoli -->
    {{-- !pubblicita --}}
    <div class="col-12 d-flex justify-content-center"><img class="img-fluid" src="/media/outfitDepartment.png"
            alt="pubblicita dipartimento abiti wheeler,Rawson and co.">
    </div>


    <div class="col-12 d-flex justify-content-center"><img class="img-fluid" src="/media/wordLeader.png"
            alt="pubblicita dipartimento abiti wheeler,Rawson and co.">
    </div>


    <div class="col-12 d-flex justify-content-center"><img class="img-fluid" src="/media/abitoBretagna.png"
            alt="pubblicita dipartimento abiti wheeler,Rawson and co.">
    </div>
    {{-- !pubblicita --}}
    <!--Sezione Mappa  -->

    <div class="col-12 text-wrapper text-center">
        <h3><strong>Scopri di più nei nostri empori!!</strong></h3>
        <p>Ne trovi uno nelle migliori città,dai un occhiata alla mappa.</p>

    </div>
    <div class="container mappa-container">
        <div class="row mappa-row">
            <div class="col-12 map-wrapper">
                <iframe src="https://jeanropke.github.io/RDR2CollectorsMap/" frameborder="0"></iframe>
            </div>

        </div>
    </div>



    <div class="row-wantedDeadOrAlive mt-5">
        <h2 class="row-wantedDeadOrAlive text-center font-western"><strong>WANTED DEAD OR ALIVE</strong></h2>
    </div>


    {{-- sezione wanted --}}
    <div class="container-fluid pb-5">
        <audio id="myAudio" src="media/coinSound.mp3"></audio>
        <div class="row wanted-overflow">

            @foreach ($fuoriLegge as $index => $singoloFuoriLegge)
                <div class="flip-card my-element">
                    <div class="inner">
                        <div class="inner-face">
                            <section class="container-fluid mt-5 padre-ricercati text-center">
                                <div class="row-ricercati font-western">
                                    <div class="col-12">
                                        <p class="mt-2 chiodino">°</p>
                                    </div>
                                    <div class="col-6 contenitore-ricercati">
                                        <div class="col-12">
                                            <h2>WANTED</h2>
                                        </div>
                                        <div class="col-12">
                                            <h2 class="bordo-ricercati">{{ $singoloFuoriLegge['taglia'] }}</h2>
                                        </div>
                                        <div class="col-12">
                                            <h2 class="bordo-ricercati display-none">REWARD</h2>
                                        </div>
                                        <div id="carouselExample{{ $index }}"
                                            class="carousel slide immagini-carosello">
                                            <div class="carousel-inner">
                                                @foreach ($singoloFuoriLegge['immagini'] as $imageIndex => $immagine)
                                                    <div
                                                        class="carousel-item {{ $imageIndex === 0 ? 'active' : '' }}">
                                                        <img src="{{ $immagine }}"
                                                            class="img-fluid immagini-carosello" alt="...">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExample{{ $index }}"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExample{{ $index }}"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <h2 class="bordo-ricercati mt-2 nome-fuorilegge">
                                                {{ $singoloFuoriLegge['nome'] }}</h2>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="bordo-ricercati display-none">WANTED DEAD ALIVE FOR QUESTIONING
                                            </h5>
                                        </div>
                                        <div class="col-12">
                                            <address class="bordo-ricercati display-none">Sheriff C.Malloy.</address>
                                        </div>
                                        <div class="col-12">
                                            <p class="bordo-ricercati">VALENTINE SHERIFF'S OFFICE.</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    {{-- sezione wanted --}}



    <!-- footer -->

    <footer class="container-fluid footer2">
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
    </footer>

    <!-- Bootstrap Script -->
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- L'idea dello script interno mi e venuta dopo --}}
    <script>
        const audioElement = document.getElementById('myAudio');
        const myElements = document.querySelectorAll('.my-element');

        myElements.forEach(element => {
            let timeoutId;

            element.addEventListener('mouseover', () => {
                timeoutId = setTimeout(() => {
                    audioElement.play();
                }, 4000);
            });

            element.addEventListener('mouseout', () => {

                audioElement.pause();
                audioElement.currentTime = 0;
            });
        });
    </script>
</body>

</html>
