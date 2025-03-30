<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <link rel="stylesheet" href="style.css">
</head>

<body class="body-page1">
    <!-- Inizio Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <img class="me-4" style="height: 45px" src="media/Red_Dead_Redemption_2_Logo.png" alt=""
                class="img-fluid">
            <a class="navbar-brand" href="#">Wheeler,Rawson and Co.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('paginaHome') }}">Home</a>
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

    {{-- sezione benvenuti --}}
    <section class="container secondary-text-color text-center text-shadow-rdr2 mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <img class="img-fluid" src="media/Red_Dead_Redemption_2_Logo.png" alt="">
            </div>
            <div class="row mt-5">
                <h1>Benvenuti, Compagni Fuorilegge!</h1>
                <div class="col-12">
                    <p>Siete nel posto giusto se il ruggito del vostro cavallo preferito è la vostra colonna sonora, se
                        le
                        praterie sconfinate del West vi chiamano e se le storie di Arthur Morgan e della banda di Van
                        der
                        Linde vi hanno rubato il cuore.</p>
                    <p>Questo blog è un rifugio per tutti noi che viviamo e respiriamo Red Dead Redemption 2. Qui
                        troverete:
                    </p>
                    <ol class="list-style-none">
                        <li>
                            <h4>Approfondimenti:</h4>
                            <p>Analisi dettagliate dei personaggi, della trama e del mondo di gioco.</p>
                        </li>
                        <li>
                            <h4>Guide:</h4>
                            <p>Consigli e trucchi per padroneggiare ogni aspetto del gioco, dalle sparatorie alle
                                cavalcate.
                            </p>
                        </li>
                        <li>
                            <h4>Discussioni:</h4>
                            <p> Uno spazio per condividere le vostre esperienze, teorie e passioni con altri
                                appassionati.
                            </p>
                        </li>
                        <li>
                            <h4>Curiosità:</h4>
                            <p>Segreti nascosti, easter egg e tutto ciò che rende Red Dead Redemption 2 un capolavoro.
                            </p>
                        </li>
                    </ol>
                    <h3>Preparatevi a sellare i vostri cavalli e a unirvi a noi in questa avventura senza fine nel
                        selvaggio
                        West!</h3>
                </div>
            </div>
        </div>
    </section>
    {{-- sezione benvenuti --}}


    <!-- Inizio Header -->
    <header class="container-fluid header-page1">
        <!-- Inizio Main -->
        <main class="container main-page1">

            <!-- Prima Riga -->
            <div class="row riga-superiore">

                <div class="col-3 ">
                    <img class="img-fluid " src="media/disegno_fiori_1.png" alt="">
                </div>
                <div class="col-3 div-riquadro-original">
                    <h2 class="font-cowboy">The Original</h2>
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="media/disegno_fiori_2.png" alt="">
                </div>
            </div>
            <!--Fine Prima Riga -->

            <!-- Seconda Riga (centrale) -->
            <div class="row riga-centrale">

                <div class="col-12 colonna-tonda-centrale vh-100">

                    <div class="row riga-edizione">
                        <div class="col-12">
                            <h6 class="h6-editon mb-3">Edition No.153</h6>
                        </div>
                    </div>

                </div>

            </div>




            <h1 class="titolo-esteso font-western">WHEELER,RAWSON AND CO.</h1>

            <!-- Seconda Riga -->

            <!-- Contenitore partner -->


            <div class="col-12 contenitore-andCO">And Co.</div>


            <!-- Contenitore partnerAndCo -->

            <div class="col-12 contenitore-catalogue font-cowboy">
                <h3 class="mt-3 h3-catalogue">
                    Catalogue
                </h3>

            </div>


            <div class="row riga-finale">
                <div class="col-3 fiori-cascata-sx">
                    <img class="img-fluid fiori" src="media/fiori_a_cascata_sx.png" alt="">
                </div>
                <div class="col-6">
                    <h3 class="text-center font-western">THE CHEAPEST SUPPLY HOUSE</h3>
                    <h3 class="text-center font-western onHeart">On Hearth</h3>
                    <h3 class="text-center font-western">OUR TRADE REACHERS AROUND THE WORD</h3>
                    <div class="col-12 bg-finale">
                        <h3 class="text-center font-western h3-date">1899</h3>
                    </div>
                    <div class="col-12 contenitore-showFriend">
                        <h3 class="text-center font-cowboy mt-">PLEASE SHOW THIS CATALOGUE <br> TO YOUR FRIENDS AND
                            NEIGHBORS</h3>
                    </div>


                </div>
                <div class="col-3 fiori-cascata-dx">
                    <img class="img-fluid" src="media/fiori_a_cascata_dx.png" alt="">
                </div>



        </main>
        <!-- Fine Main -->

    </header>
    <!-- Fine Header -->

    
    <!-- footer -->
    <footer class="container-fluid ">
        <div class="row justify-content-center text-center mt-5">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
