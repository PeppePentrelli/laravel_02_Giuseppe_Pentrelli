<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Dead Redemption BLOG</title>
    <!-- cdn Font -->
    <link href="https://fonts.cdnfonts.com/css/bleeding-cowboys" rel="stylesheet">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap ICON-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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

    <h1 class="text-center secondary-text-color">GUIDE</h1>
    <div class="container mt-5">
        <p class="secondary-text-color paragrafo-guida mt-5">Benvenuti nel cuore pulsante del selvaggio West! Questo
            blog è la tua bussola per navigare l'immensità di Red Dead Redemption 2, sia nella sua epica modalità
            storia, sia nel dinamico mondo online. Qui, non troverai semplici walkthrough, ma guide approfondite che
            svelano ogni segreto e tecnica per padroneggiare ogni aspetto del gioco. Dalla caccia alle leggendarie
            creature delle Grizzlies, alle strategie più efficaci per riscuotere taglie senza lasciare tracce, dai
            misteri più oscuri che si celano nelle paludi di Lemoyne, alla raccolta di ogni singolo oggetto
            collezionabile sparso per la mappa, ti accompagneremo passo dopo passo. Che tu sia un novello pistolero o un
            veterano del West, troverai consigli preziosi per vivere un'esperienza di gioco senza precedenti.</p>

    </div>


    <main class="container-fluid secondary-text-color">
        @foreach ($videoSections as $sectionTitle => $videos)
            <div class="row ">
                <h2 class="text-center h1">{{ $sectionTitle }}</h2>
                @foreach ($videos as $video)
                    <div class="col-12 col-md-6 col-lg-4 my-5 d-flex flex-column " id="{{ $video['id'] }}">
                        <h3 class="text-center tronca-testo mb-3">{{ $video['titolo'] }}</h3>
                        <div class="contentiore-place-iframe">
                            <div class="loading-spinner">
                                <div class="spinner-border text-danger" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <iframe class="iframe-container" loading="lazy" src="{{ $video['url'] }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="row">
                            <div class="col2 d-flex justify-content-end">
                                <span class="d-flex flex-column align-items-center justify-content-center">
                                    <p class="mt-3 likecounter" data-video-id="{{ $video['id'] }}">0</p>
                                </span>
                                <button class="icon-button mx-1 like" data-video-id="{{ $video['id'] }}">
                                    <span><i class="bi bi-hand-thumbs-up"></i></span>
                                </button>
                                <button class="icon-button mx-1 dislike" data-video-id="{{ $video['id'] }}">
                                    <span><i class="bi bi-hand-thumbs-down"></i></span>
                                </button>
                                <button class="icon-button mx-1"><span><i class="bi bi-chat-text"></i></span></button>
                                <button class="icon-button mx-1"><span><i class="bi bi-link-45deg"></i></span></button>
                                <button class="icon-button mx-1"><span><i class="bi bi-share"></i></span></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </main>

    <h2 class="text-center secondary-text-color">Segui la mappa per trovare tutti i</h2>

    <div class="container mappa-container">
        <div class="row mappa-row">
            <div class="col-12 map-wrapper">
                <iframe src="https://jeanropke.github.io/RDR2CollectorsMap/" frameborder="0"></iframe>
            </div>

        </div>
    </div>

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


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let likeButtons = document.querySelectorAll('.like');
            let dislikeButtons = document.querySelectorAll('.dislike');

            likeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    let videoId = this.dataset.videoId;
                    let likeCounter = document.querySelector(
                        `.likecounter[data-video-id="${videoId}"]`);
                    let currentLikes = parseInt(likeCounter.textContent);
                    likeCounter.textContent = currentLikes + 1;
                });
            });

            dislikeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    let videoId = this.dataset.videoId;
                    let likeCounter = document.querySelector(
                        `.likecounter[data-video-id="${videoId}"]`);
                    let currentLikes = parseInt(likeCounter.textContent);
                    likeCounter.textContent = currentLikes - 1;
                });
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            let iframes = document.querySelectorAll('.iframe-container');
            iframes.forEach(iframe => {
                iframe.addEventListener('load', function() {
                    this.parentElement.querySelector('.loading-spinner').style.display = 'none';
                });
            });
        });
    </script>
</body>

</html>
