<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    
    public $indumenti =[   

        [
            'id' => 1,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Cappello Panama',
            'img' => 'media/cappello1.png',
            'img2' => 'media/CappelloPanamaConModello.png',
            'alt' => 'immagine del cappello panama',
            'alt2' => 'immagine del cappello panama',
            'descrizione' => 'Cappello Panama con un\'incurvatura frontale e banda in pelle. Uno stile caratteristico ideato in Ecuador.',
            'prezzo' => '12.50$',
            'categoria' => 'cappelli',
            'colorazioni' => ['black', 'white',]
        ],
        [
            'id' => 2,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Cappello Trilby',
            'img' => 'media/cappelloTrilby.png',
            'img2' => 'media/cappelloTrillbyConModello.png',
            'alt' => 'immagine cappello tribly',
            'alt2' => 'immagine del cappello tribly indossato da arturh',
            'descrizione' => 'Cappello trilby con doppia incurvatura e banda di raso. Molto apprezzato e di gran moda in Germania.',
            'prezzo' => '10.75$',
            'categoria' => 'cappelli',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
        [
            'id' => 3,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Tuba',
            'img' => 'media/cappelloTuba.png',
            'img2' => 'media/cappelloTubaConModello.png',
            'alt' => 'immagine di un cappello a tuba',
            'alt2' => 'immagine del cappello a tuba indossato da arthur',
            'descrizione' => 'Tuba con banda in raso. L\'ultima moda diffusasi nelle grandi città.',
            'prezzo' => '29$',
            'categoria' => 'cappelli',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
        [
            'id' => 4,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Cappello Ricognitore Militare',
            'img' => 'media/cappelloRicognitoreMilitare.png',
            'img2' => 'media/cappelloRicognitoreMilitareConModello.png',
            'alt' => 'immagine del cappello da ricognitore militare',
            'alt2' => 'immagine del cappello ricognitore militare indossato da arthur',
            'descrizione' => 'Cappello da ricognitore militare con banda in corda. Particolarmente apprezzato tra coloro che hanno prestato servizio nella cavalleria.',
            'prezzo' => '11$',
            'categoria' => 'cappelli',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
        [
            'id' => 5,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Cappello Big Valley',
            'img' => 'media/cappelloBigvalley.png',
            'img2' => 'media/cappelloBigValleyConModello.png',
            'alt' => 'immagine del cappello Big Valley',
            'alt2' => 'immagine del cappello Big Valley indossato da personaggio',
            'descrizione' => 'Cappello di Big Valley a testa larga con cinturino allacciato. Un sombrero molto popolare tra i cowboy.',
            'prezzo' => '18.25$',
            'categoria' => 'cappelli',
            'colorazioni' => ['black', 'white' , 'blue' ,'grey']
    
        ],
        [
            'id' => 6,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Berretto',
            'img' => 'media/berretto.png',
            'img2' => 'media/berrettoConModello.png',
            'alt' => 'immagine di un berretto',
            'alt2' => 'immagine di un berretto indossato',
            'descrizione' => 'Berretto di lana automodellante con nuovo motivo primaverile.',
            'prezzo' => '7.25$',
            'categoria' => 'cappelli',
            'colorazioni' => ['black' ,'grey']
    
        ],
    
        [
            'id' => 7,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Spolverino',
            'img' => 'media/spolverino.png',
            'img2' => 'media/spolverinoIndossato.png',     
            'alt' => 'immagine di uno spolverino, un lungo soprabito',
            'alt2' => 'immagine di uno spolverino, un lungo soprabito indossato',
            'descrizione' => 'LO SPOLVERINO. Un lungo soprabito di buona fattura con un colletto dritto e due profonde tasche con patta abbottonate sul davanti. Davvero ben rifinito. Come esprimere grandezza mentre si danno gli ordini. Leggero e distinto.',
            'prezzo' => '7.25$',
            'categoria' => 'soprabiti',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
        [
            'id' => 8,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Giacca da ricognitore',
            'img' => 'media/giaccaDaRicognitore.png',
            'img2' => 'media/giaccaDaRicognitoreIndossata.png',
            'alt' => 'immagine di una giacca da ricognitore',
            'alt2' => 'immagine di una giacca da ricognitore indossata',
            'descrizione' => 'Giacca da ricognitore a doppiopetto in pelle di pecora. Con un colletto rigido e completamente foderata in lana. A un prezzo senza precedenti. Non puoi permetterti di lasciarti sfuggire questo affare, per nessuna ragione al mondo.',
            'prezzo' => '19.75$',
            'categoria' => 'soprabiti',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
        ],
        [
            'id' => 9,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Redingote classica',
            'img' => 'media/redingoteClassica.png',
            'img2' => 'media/redingoteClassicaIndossata.png',
            'alt' => 'immagine di una giacca a doppio petto classica',
            'alt2' => 'immagine di una giacca a doppio petto classica indossata da arthur',
            'descrizione' => 'Redingote a doppiopetto classica. Redingote a coda con taglio frontale, ampio risvolto dentellato e tasche laterali con patta. Completamente foderata e con doppiopetto. Per una gratificazione integrale.',
            'prezzo' => '18.50$',
            'categoria' => 'soprabiti',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
        ],
        [
            'id' => 10,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Soprabito di lana pettinata',
            'img' => 'media/soprabitoLanaPettinata.png',
            'img2' => 'media/soprabitoLanaPettinataIndossato.png',
            'alt' => 'immagine di un soprabito di lana indossato',
            'alt2' => 'immagine di un soprabito di lana',
            'descrizione' => 'Giacca a sacco monopetto a maniche risvoltate in lana pettinata. In lana e cotone. Foderata e con risvolto dentellato. Con polsini alla francese, proprio come piace ai francesi. Tasche frontali con patta. Uno stile elegante.',
            'prezzo' => '14.75$',
            'categoria' => 'soprabiti',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
        ],
        [
            'id' => 11,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Soprabito classico',
            'img' => 'media/soprabitoClassico.png',
            'img2' => 'media/soprabitoClassicoIndossato.png',
            'alt' => 'immagine di un classico soprabito',
            'alt2' => 'immagine di un classico soprabito Indossato',
            'descrizione' => 'Soprabito a code a doppiopetto classico. A vita alta. Con un lungo risvolto dentellato. Ideale per andare all\'opera e per i duelli.',
            'prezzo' => '10.50$',
            'categoria' => 'soprabiti',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
        ],
    
    
    
    
        [
            'id' => 12,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Camicione comune',
            'img' => 'media/camicioneComune.png',
            'img2' => 'media/camicioneComuneIndossata.png',
            'alt' => 'immagine di un camicione comune',
            'alt2' => 'immagine di un camicione comune indossata',
            'descrizione' => 'Camicione da tutti i giorni. Camicia con bottone frontale a metà, taschino e colletto a banda. E\' la miglior camicia che l\'abilità umana possa realizzare.',
            'prezzo' => '8.75$',
            'categoria' => 'camicie',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
        ],
        [
            'id' => 13,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Camicione con colletto',
            'img' => 'media/camicioneConColletto.png',
            'img2' => 'media/camicioneConCollettoIndossato.png',
            'alt' => 'immagine di un camicione col colletto',
            'alt2' => 'immagine di un camicione col colletto indossato',
            'descrizione' => 'Camicione con colletto a banda. In cotone. Camicia elegante con bottone frontale a metà, bavaglio interno e colletto. Senz\'altro una delle migliori in America.',
            'prezzo' => '8$',
            'categoria' => 'camicie',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
        ],
    
    
    
        [
            'id' => 14,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Gilet Parigino',
            'img' => 'media/giletParigino.png',
            'img2' => 'media/giletPariginoIndossato.png',
            'alt' => 'immagine di un gilet in stile parigino con un motivo sofisticato',
            'alt2' => 'immagine di un gilet in stile parigino con un motivo sofisticato indossato',
            'descrizione' => 'Un comodo ed elegante gilet parigino con un motivo sofisticato. Uno splendido capo con bottoni in tessuto abbinati. Importato da Parigi. Siamo assolutamente consapevoli di rimetterci, vendendolo a questo prezzo.',
            'prezzo' => '12.25$',
            'categoria' => 'gilet',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
        ],
        [
            'id' => 15,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Gilet Tradizionale',
            'img' => 'media/giletTradizionale.png',
            'img2' => 'media/giletTradizionaleIndossato.png',
            'alt' => 'immagine di un gilet tradizionale',
            'alt2' => 'immagine di un gilet tradizionale indossato',
            'descrizione' => 'Un gilet tradizionale senza bavero con orlo piatto, due tasche frontali oblique e retro in raso. Realizzato con cashmere pesante. Impossibile trovare una qualità più alta.',
            'prezzo' => '10.75$',
            'categoria' => 'gilet',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
    
    
    
    
        [
            'id' => 16,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Pantaloni da lavoro',
            'img' => 'media/pantaloniDaLavoro.png',
            'img2' => 'media/pantaloniDaLavoroIndossati.png',
            'alt' => 'immagine di un paio di pantaloni da lavoro',
            'alt2' => 'immagine di un paio di pantaloni da lavoro',
            'descrizione' => 'Pantaloni da lavoro in tela. Chiusura a bottone. Ogni paio venduto è pubblicità per il nostro marchio, quindi per favore indossali con decoro.',
            'prezzo' => '6.25$',
            'categoria' => 'pantaloni',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
            
        ],
        [
            'id' => 17,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Jeans',
            'img' => 'media/jeans.png',
            'img2' => 'media/jeansIndossati.png',
            'alt' => 'immagine di un paio di jeans',
            'alt2' => 'immagine di un paio di jeans indossati',
            'descrizione' => 'Jeans in Demin. Rinforzati con rivetti. Tutti i nostri capi sono confezionati per durare. Sarebbe impossibile menzionare anche solo la metà degli elogi che riceviamo per questi jeans.',
            'prezzo' => '7$',
            'categoria' => 'pantaloni',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
        [
            'id' => 18,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Jeans da sella',
            'img' => 'media/jeansDaSella.png',
            'img2' => 'media/jeansDaSellaIndossati.png',
            'alt' => 'immagine di un paio di jeans utilizzati spesso a cavallo',
            'alt2' => 'immagine di un paio di jeans utilizzati spesso a cavallo indossati',
            'descrizione' => 'Jeans in Demin da sella. Eleganti e robusti. Dobbiamo ribadire ulteriormente il fatto che offriamo prodotti di alta qualità ai prezzi più bassi?',
            'prezzo' => '7.50$',
            'categoria' => 'pantaloni',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
        [
            'id' => 19,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Pantaloni eleganti',
            'img' => 'media/pantaloniEleganti.png',
            'img2' => 'media/pantaloniElegantiIndossati.png',
            'alt' => 'immagine di un paio di pantaloni eleganti',
            'alt2' => 'immagine di un paio di pantaloni eleganti indossati',
            'descrizione' => 'Pantaloni eleganti in cotone lucido. Gamba sgualcita su misura. Questi pantaloni sono particolarmente apprezzati da molti nostri clienti per innumerevoli ragioni di cui sarebbe però troppo verboso discutere.',
            'prezzo' => '10$',
            'categoria' => 'pantaloni',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
    
        [
            'id' => 20,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Stivali vecchio west',
            'img' => 'media/stivaliVecchioWest.png',
            'img2' => 'media/stivaliVecchioWestIndossati.png',
            'alt' => 'immagine di un paio di stivali stile vecchio west',
            'alt2' => 'immagine di un paio di stivali stile vecchio west indossati',
            'descrizione' => 'Stivali vecchio West a punta ricamati e dentellati. Vera pelle di vitello. A punta e con tiranti utili per similitudini, metafore e confronti generazionali.',
            'prezzo' => '20.25$',
            'categoria' => 'stivali',
            'colorazioni' => ['black',  'blue' ,'grey']
    
        ],
        [
            'id' => 21,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Stivali da predicatore',
            'img' => 'media/stivaliDaPredicatore.png',
            'img2' => 'media/stivaliDaPredicatoreIndossati.png',
            'alt' => 'immagine di un paio di stivali da predicatore',
            'alt2' => 'immagine di un paio di stivali da predicatore indossati',
            'descrizione' => 'Stivali da predicatore da uomo in pelle di vacca e cotone. In cuoio pregiato, con doppia cucitura e ciuffi di cotone spazzolato. Gambale rigido. Robusti e funzionali. Perfetti per diffondere la buona novella.',
            'prezzo' => '27.50$',
            'categoria' => 'stivali',
            'colorazioni' => ['black', 'white', 'blue' ,'grey']
    
        ],
        [
            'id' => 22,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Stivali da sella',
            'img' => 'media/stivaliDaSella.png',
            'img2' => 'media/stivaliDaSellaIndossati.png',
            'alt' => 'immagine di un paio di stivali da sella',
            'alt2' => 'immagine di un paio di stivali da sella indossati',
            'descrizione' => 'Stivali da sella da uomo. In pelle pregiata. Punta fawler e gambale alto. Robusta suola rinforzata. Garantiti.',
            'prezzo' => '16.25$',
            'categoria' => 'stivali',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
    
    
        [
            'id' => 23,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Bretelle di pelle pregiata',
            'img' => 'media/bretellaDiPellePregiata.png',
            'img2' => 'media/bretellaDiPellePregiataIndossati.png',
            'alt' => 'immagine di bretelle in pelle pregiata',
            'alt2' => 'immagine di bretelle in pelle pregiata indossate',
            'descrizione' => 'Bretelle in pelle finissima da uomo. Separate fontalmente e a Y sulla schiena. Le nostre bretelle da contadino sono più lunghe, con fibbie in robusto nichel e con un pezzo unico sulla schiena.',
            'prezzo' => '16.25$',
            'categoria' => 'bretelle',
            'colorazioni' => ['black', 'white',  'blue' ,'grey']
    
        ],
    
        [
            'id' => 24,
            'marca' => 'Wheeler, Rawson and Co',
            'nome' => 'Speroni Kneller',
            'img' => 'media/speroniKneller.png',
            'img2' => 'media/speroniKnellerIndossati.png',
            'alt' => 'immagine di un paio di speroni.',
            'alt2' => 'immagine di un paio di speroni indossati.',
            'descrizione' => 'Speroni Kneller. Girotacco in acciaio lucido, asta e spronella a 10 punte.',
            'prezzo' => '16.25$',
            'categoria' => 'speroni',
            'colorazioni' => ['black', 'white', 'red' , 'blue' ,'grey']
    
        ],
    ];

  public  $fuoriLegge = [
        [
            'nome' => 'Peppe e Beba',
            'taglia' => '$100.000',
            'descrizione' => 'Ricercati per rapine a mano armata e disturbo della quiete pubblica.',
            'immagini' => [
                'media/wantedPeppeEBeba.jpg',
                'media/wantedPeppe.jpg',
                'media/wantedBeba.jpg',
            ],
        ],
        [
            'nome' => 'Arthur Morgan',
            'taglia' => '$700.000',
            'descrizione' => 'Ricercato per omicidio, rapina e cospirazione contro lo stato.',
            'immagini' => [
                'media/arthurMorganWanted01.avif',
                'media/arthurMorganWanted02.jpg',
                'media/arthurMorganWanted03.avif',
            ],
        ],
        [
            'nome' => 'Duch Van Der Linde',
            'taglia' => '$900.000',
            'descrizione' => 'Ricercato per omicidio, rapina, sedizione e guida di una banda criminale.',
            'immagini' => [
                'media/DuchWanted01.jpg',
                'media/DuchWanted02.avif',
                'media/DuchWanted03.webp',
            ],
        ],
        [
            'nome' => 'Jhon Marston',
            'taglia' => '$200.000',
            'descrizione' => 'Ricercato per rapina a mano armata e evasione di prigione.',
            'immagini' => [
                'media/jhonMastronWanted01.avif',
                'media/jhonMastronWanted02.avif',
                'media/jhonMastronWanted03.jpg',
            ],
        ],
        [
            'nome' => 'Hosea Matthews',
            'taglia' => '$300.000',
            'descrizione' => 'Ricercato per truffa, furto e cospirazione.',
            'immagini' => [
                'media/hoseaWanted01.jpg',
                'media/hoseaWanted02.jpeg',
                'media/hoseaWanted03.webp',
            ],
        ],
        [
            'nome' => 'Lenny Summers',
            'taglia' => '$30.000',
            'descrizione' => 'Ricercato per furto e disturbo della quiete pubblica.',
            'immagini' => [
                'media/lennyWanted01.avif',
                'media/lennyWanted02.avif',
                'media/lennyWanted03.avif',
            ],
        ],
        [
            'nome' => 'Javier Escuella',
            'taglia' => '$400.000',
            'descrizione' => 'Ricercato per omicidio, rapina e associazione a delinquere.',
            'immagini' => [
                'media/javierWanted01.webp',
                'media/javierWanted02.jpeg',
                'media/javierWanted03.jpg',
            ],
        ],
    ];

// Funzioni Pagina Negozio

public function paginaNegozioFunction() {


    return view('Negozio', [
        'indumenti' => $this->indumenti , 'fuoriLegge' => $this->fuoriLegge
    ] );
    
 

    }



    // Rotta dettagli negozio dinamica

    public function paginaDettagliNegozioFunction($id) {
     
        foreach ($this->indumenti as $indumento) {
            if ($indumento['id'] == $id) {
                return view('dettagliNegozio', ['indumento' => $indumento, 'indumenti' => $this->indumenti]);
            }
        }
    }
}
