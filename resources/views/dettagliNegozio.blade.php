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
    <link rel="stylesheet" href="/style2.css">


</head>

<body class="body2">

    <!-- Inizio Navbar -->
    <nav class="navbar navbar-expand-lg navbar2 sticky-top">
        <div class="container-fluid">
            <img class="me-4" style="height: 45px" src="/media/Red_Dead_Redemption_2_Logo.png" alt=""
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


    {{-- sezione presentazione iniziale --}}
    <section class="container-fluid mt-5">
        <div class="row text-center">
            <h1 class="mb-4">{{ $indumento['nome'] }}</h1>
            <div class="col-12 col-md-6 col-lg-4 border-bottom d-flex justify-content-center order-lg-1">
                <img class="img-fluid" src="/{{ $indumento['img2'] }}" alt="{{ $indumento['alt2'] }}">
            </div>
            <div
                class="col-12 col-md-6 col-lg-4 border-bottom d-flex justify-content-center flex-column text-center mt-3 order-lg-2">
                <h6 class="mt-2">{{ $indumento['marca'] }}</h6>
                <p class="mt-2 px-5">{{ $indumento['descrizione'] }}</p>
                <div class="col-12 row-price">
                    <p class="mt-4">PREZZO</p>
                    <h3 class="ms-auto h3-prezzo">{{ $indumento['prezzo'] }}</h3>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-3 order-lg-3 border-bottom pb-3">
                <div class="accordion" id="accordionExample">
                    <h2>Disponibile nei seguenti colori</h2>
                    @if (isset($indumento['colorazioni']))
                        @foreach ($indumento['colorazioni'] as $colore)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button custom-accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->iteration }}"
                                        aria-expanded="false" aria-controls="collapse{{ $loop->iteration }}">
                                    </button>
                                </h2>
                                <div id="collapse{{ $loop->iteration }}"
                                    class="accordion-collapse collapse {{ $colore }}"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button custom-accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseNoColori" aria-expanded="false"
                                    aria-controls="collapseNoColori">
                                    Colori non disponibili
                                </button>
                            </h2>
                            <div id="collapseNoColori" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>



    {{-- accordion colori --}}

    <section class="container">

    </section>

    {{-- pubb1 --}}


    {{-- div pubblicita --}}
    <div class="col-12 col-md-12 col-lg-12 d-flex justify-content-center mt-3"><img class="img-fluid"
            src="/media/tutorialMisureAbiti.png" alt="immagine illustrativa di come prendere misure per gli abiti">
    </div>
    {{-- fine div pubblicita --}}

    {{-- pubb2 --}}
    <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-center">
            {{-- !Articolo vuoto di pubblicita --}}
            <article class="articolo-custom col-12 col-lg-6 d-flex justify-content-center ">
                <img class="img-fluid mt-4" src="/media/pubbSoprabiti.png" alt="immagine di una pubblicita">
            </article>
            {{-- !Articolo vuoto di pubblicita --}}
        </div>
    </div>

    {{-- !Pubblicita finiali --}}

    <div class="col-12 d-flex justify-content-center"><img class="img-fluid" src="/media/guarantee.png"
            alt="pubblicita dipartimento abiti wheeler,Rawson and co.">

    </div>


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

</body>

</html>
