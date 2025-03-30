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

    <header>
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center secondary-text-color h1-custom">Red Dead Redemption: La Nostra Passione, La Tua
                    Avventura</h1>
                <div
                    class="col-12 col-md-6 col-lg-6 h1-custom secondary-text-color d-flex align-items-center justify-content-center">
                    <p class="paragrafo-guida text-center">Benvenuti, compagni di avventura! Qui, tra le pagine di
                        questo spazio virtuale, condividiamo la nostra passione ardente per il selvaggio West di Red
                        Dead Redemption. Non siamo semplici giocatori, ma esploratori di un mondo che ci ha rapito
                        l'anima, un mondo dove l'onore e la redenzione si fondono con la polvere e il rombo dei treni.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6"><img class="img-fluid" src="media/community.jpeg" alt="">
                </div>
            </div>
        </div>
    </header>

    <section class="container">
        <div class="row">
            <h2 class="text-center secondary-text-color h1-custom">
                La Nostra Storia: Nati sotto il Cielo di New Hanover
            </h2>
            <div class="col-12">
                <p class="paragrafo-guida text-center secondary-text-color">"La nostra storia inizia come la vostra, con
                    un vagone in fuga e un destino incerto. Fin dai primi passi tra le nevi di Colter, siamo stati
                    catturati dalla maestosità di questo mondo, dalla profondità dei suoi personaggi e dalla libertà di
                    cavalcare verso l'orizzonte. Ogni tramonto sulle Grizzlies, ogni duello al saloon, ogni segreto
                    svelato nelle paludi di Lemoyne ha alimentato la nostra sete di conoscenza e la voglia di
                    condividere questa epopea con voi."</p>
            </div>
            <div class="col-12">
                <h3 class="text-center secondary-text-color h1-custom">Cosa Offriamo: La Bussola per il Tuo Viaggio nel
                    West </h3>
                <ul class="secondary-text-color">
                    <li>Aggiornamenti dalla Frontiera: <p class="paragrafo-guida text-center">"Vi teniamo aggiornati su
                            ogni novità, dalle patch ai DLC, dalle leggende metropolitane alle scoperte della community.
                            Nessun dettaglio sfugge al nostro occhio vigile!"</p>
                    </li>
                    <li>Guide per Pistoleri e Esploratori: <p class="paragrafo-guida text-center">Che siate novelli
                            pistoleri o veterani del West, le nostre guide vi condurranno attraverso ogni sfida,
                            svelando i segreti della caccia, del commercio e della sopravvivenza.</p>
                    </li>
                    <li>Curiosità dal Selvaggio West: <p class="paragrafo-guida text-center">"Dagli easter egg più
                            nascosti ai misteri irrisolti, vi sveliamo i segreti che si celano tra le ombre di Red Dead
                            Redemption.</p>
                    </li>
                    <li>Eventi per la Community<p class="paragrafo-guida text-center">Organizziamo eventi online e
                            offline per incontrarci, condividere le nostre storie e celebrare la nostra passione per Red
                            Dead Redemption."</p>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <h3 class="text-center secondary-text-color h1-custom">La Nostra Missione: Unire i Cuori del West</h3>
                <p class="paragrafo-guida text-center secondary-text-color ">"La nostra missione è creare una community
                    di appassionati di Red Dead Redemption, un luogo dove condividere esperienze, scoperte e passioni.
                    Vogliamo essere la vostra bussola nel selvaggio West, guidandovi attraverso le sue meraviglie e i
                    suoi pericoli. Crediamo che questo gioco sia più di un semplice passatempo: è un'esperienza che ci
                    unisce, un'avventura che ci cambia."</p>
            </div>
            <div class="col-12"><img src="" alt="" class="img-fluid"></div>

        </div>
    </section>

    <h2 class="text-center secondary-text-color h1-custom">Unisciti alla Nostra Cavalcata!</h2>
    <p class="paragrafo-guida text-center secondary-text-color">Siete pronti a cavalcare con noi? Iscrivetevi alla
        nostra newsletter per non perdere nessun aggiornamento, seguiteci sui social media per rimanere in contatto e
        partecipate ai nostri eventi per vivere insieme l'epopea di Red Dead Redemption. Il West vi aspetta!"</p>



        
        
        {{-- sezione form --}}
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-4 col-lg-4">
                <form class="form-custom">
                    <div class="mb-3">
                        <h5>Iscriviti alla nostra community</h5>
                        <label for="exampleInputEmail1" class="form-label mt-5">Inserisci il tuo Nome e Cognome</label>
                        <input type="text" required placeholder="Nome e Cognome" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp"> <label for="exampleInputEmail1"
                            class="form-label mt-5">Inserisci la tua età</label>
                        <input type="number" required placeholder="età" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <label for="exampleInputEmail1" class="form-label mt-5">Indirizzo Email</label>
                        <input type="email" required placeholder="Inserisci la tua email" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text secondary-text-color">We'll never share your email with
                            anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input placeholder="Password" type="password"
                            title="La password deve contenere almeno 8 caratteri" required class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Iscriviti</button>
                </form>
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
</body>

</html>
