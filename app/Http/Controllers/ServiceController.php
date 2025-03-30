<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller

{
    
public function paginaServiziFunction() { 

    $videoSections = [
        'Caccia Animali Leggendari' => [
            [
                'titolo' => 'BISONTE BIANCO LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/ZDtEKGbRjvg?si=VRKNyS2UlX5tE2xw', 
                'id' => 'caccia-0',
            ],
            [
                'titolo' => 'COYOTE LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/iMzMmIdfZUk?si=GkxjRTynsgjIV5IB', 
                'id' => 'caccia-1',
            ],
            [
                'titolo' => 'CINGHIALE LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/JqmeRKNTc5I?si=Fv5E2pZPt3evBbYb', 
                'id' => 'caccia-2',
            ],
            [
                'titolo' => ' CASTORO LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/WqxTcotiSuQ?si=wj8sP-PsFRIIf_V-', 
                'id' => 'caccia-3',
            ],
            [
                'titolo' => 'LUPO LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/vZqOhiqYjKE?si=NWn1MP2ki8nSCGwJ', 
                'id' => 'caccia-4',
            ],
            [
                'titolo' => 'COY5TE LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/iMzMmIdfZUk?si=GkxjRTynsgjIV5IB', 
                'id' => 'caccia-5',
            ],
            [
                'titolo' => 'CERVO MASCHIO LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/KoMj-1TmQwc?si=icWH0uY9C-EqIjwn', 
                'id' => 'caccia-6',
            ],
            [
                'titolo' => 'WAPITI LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/iMzMmIdfZUk?si=GkxjRTynsgjIV5IB', 
                'id' => 'caccia-7',
            ],
            [
                'titolo' => 'ARIETE BIG HORN LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/ou2fJVPnv4I?si=F6DLtIrh9DH3lxQR', 
                'id' => 'caccia-8',
            ],
            [
                'titolo' => 'ALCE LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/AOAoFRU4s2I?si=z_KwIoW7FlQmnK1l', 
                'id' => 'caccia-9',
            ],           
            [
                'titolo' => 'ALLIGATORE GIGANTE LEGGENDARIO',
                'url' => 'https://www.youtube.com/embed/-INVDEhp-dI?si=HjEpL-eUtdOC4hUm', 
                'id' => 'caccia-10',
            ],            
            [
                'titolo' => 'VOLPE LEGGENDARIA',
                'url' => 'https://www.youtube.com/embed/Qn4DPKsugOc?si=pGVhys5S5A3gi5uW', 
                'id' => 'caccia-11',
            ],

        ],
        'Misteri' => [
            [
                'titolo' => 'INCONTRI INQUIETANTI IN RED DEAD REDEMPTION 2',
                'url' => 'https://www.youtube.com/embed/8z45LN1n32I?si=A6avle8ZZowOTBO_', 
                'id' => 'misteri-0',
            ],
            [
                'titolo' => 'IL MISTERO DELLA PRINCIPESSA ISABEAU',
                'url' => 'https://www.youtube.com/embed/kn7jpvtPP-E?si=I89sDSheMqieHoJP', 
                'id' => 'misteri-1',
            ],
            [
                'titolo' => 'QUESTO VILLAGGIO È MALEDETTO!',
                'url' => 'https://www.youtube.com/embed/rR6TbLQLa10?si=MjkkGr9y61-Xy9T4', 
                'id' => 'misteri-2',
            ],
            [
                'titolo' => 'SCOPERTO NUOVO UFO SU RED DEAD REDEMPTION 2!',
                'url' => 'https://www.youtube.com/embed/rR6TbLQLa10?si=MjkkGr9y61-Xy9T4', 
                'id' => 'misteri-3',
            ],
            [
                'titolo' => 'INCONTRARE LO "STRANO TIZIO" IN RED DEAD REDEMPTION 2',
                'url' => 'https://www.youtube.com/embed/Ve7dRoCR9R0?si=V3Nb53XtnpKfsGe4', 
                'id' => 'misteri-4',
            ],
            [
                'titolo' => 'ALLA RICERCA DI GAVIN - MISTERO RED DEAD REDEMPTION 2',
                'url' => 'https://www.youtube.com/embed/2q18Q8cbKbM?si=lrDaaEkkiC25-iZD', 
                'id' => 'misteri-5',
            ],
            [
                'titolo' => 'LA FORESTA DEI SUSSURRI - MISTERO RED DEAD REDEMPTION 2',
                'url' => 'https://www.youtube.com/embed/foJ_DXRLhx8?si=hlkWG3NO7kFmmWl3', 
                'id' => 'misteri-6',
            ],
            [
                'titolo' => 'LA DONNA POSSEDUTA - RED DEAD REDEMPTION 2 - EASTER EGG ',
                'url' => 'https://www.youtube.com/embed/2q18Q8cbKbM?si=lrDaaEkkiC25-iZD', 
                'id' => 'misteri-7',
            ],
            [
                'titolo' => 'STRANI INCONTRI RED DEAD REDEMPTION 2',
                'url' => 'https://www.youtube.com/embed/ZUnNPr4pM4Q?si=F89t0mTXbraZssUp', 
                'id' => 'misteri-8',
            ],
        ],
        'Caccia al tesoro' => [
            [
                'titolo' => 'Red Dead Redmption 2-Tesoro segreto da 1.500,00 Dollari $$$[ENIGMA DELLE STATUE]',
                'url' => 'https://www.youtube.com/embed/-94cVZwvd9g?si=J6z8pAFl4D61eDnt', 
                'id' => 'cercatore-0',
            ],
            [
                'titolo' => 'RDR2 ITA | Mappa del Tesoro: Banda di Jack Hall',
                'url' => 'https://www.youtube.com/embed/uRJvAvk-5gI?si=8SgskdYYQTmvf0Mp', 
                'id' => 'cercatore-1',
            ],
            [
                'titolo' => 'RDR2 ITALIA | LA MAPPA DELLA VIA DEGLI ELEMENTI | AMULETO DI BECCO DI CORNACCHIA |',
                'url' => 'https://www.youtube.com/embed/IVEi2Gc-C9k?si=3BIba1ySoiTeKecP', 
                'id' => 'cercatore-2',
            ],
            [
                'titolo' => 'RDR2 ITALIA | Mappa abbozzata |',
                'url' => 'https://www.youtube.com/embed/KfVZcLBIH0w?si=I3jDE_4_8U5w7yrH', 
                'id' => 'cercatore-3',
            ],
            [
                'titolo' => 'RDR2 ITALIA | MAPPA DELLA TERRA DELLA RICCHEZZA',
                'url' => 'https://www.youtube.com/embed/_OXReq1iJvs?si=sq7GW_oP9d0j9L0E', 
                'id' => 'cercatore-4',
            ],
            [
                'titolo' => 'RDR2 ITA | MAPPA DELLA VIA DEL VELENO | POISONOUS TRAIL TREASURE |',
                'url' => 'https://www.youtube.com/embed/YZ2W4cHaa0I?si=wn8aDmh6x50-V9o4', 
                'id' => 'cercatore-5',
            ],
        ],
        'Storie' => [
            [
                'titolo' => 'TUTTA La STORIA di RED DEAD REDEMPTION 2 Raccontata IN 30 MINUTI!',
                'url' => 'https://www.youtube.com/embed/-zYBTzTebGc?si=G39mSfN50id7N6hQ', 
                'id' => 'storie-0',
            ],
            [
                'titolo' => 'I MEMBRI DELLA BANDA VAN DER LINDE - RED DEAD REDEMPTION 2',
                'url' => 'https://www.youtube.com/embed/LOXIt4ubb_0?si=0qOeaOJv4M5dDBRG', 
                'id' => 'storie-1',
            ],            [
                'titolo' => 'Red Dead Redmption 2-Tesoro segreto da 1.500,00 Dollari $$$[ENIGMA DELLE STATUE]',
                'url' => 'https://www.youtube.com/embed/C_f3-u0BltI?si=70wtMohxEJ-8Xp3S', 
                'id' => 'storie-2',
            ],
        ],
        'Video tributi' => [
            [
                'titolo' => 'A Good Man | Arthur Morgan | RDR2',
                'url' => 'https://www.youtube.com/embed/91xwKJLy9jw?si=QYpXn0dfHRqTAfkB', 
                'id' => 'tributi-0',
            ],
            [
                'titolo' => 'Arthur Morgan || Another Love',
                'url' => 'https://www.youtube.com/embed/KNXlo863QPM?si=e6bEl_WcoYyX5osP', 
                'id' => 'tributi-1',
            ],
            [
                'titolo' => 'Arthur Morgan | Wonderful Life',
                'url' => 'https://www.youtube.com/embed/nbp0-OZv11U?si=8rPfCIJV1zoMJNwL', 
                'id' => 'tributi-2',
            ],
            [
                'titolo' => 'Arthur Morgan Tribute - I gave you all I had',
                'url' => 'https://www.youtube.com/embed/UtfgBfkgZMM?si=etxr-kOzmyBySU6d', 
                'id' => 'tributi-3',
            ],            [
                'titolo' => 'Arthur Morgan Tribute | Thats the way it is',
                'url' => 'https://www.youtube.com/embed/Qy-FOKdTYeE?si=BRMLr6SuOXswyFMW', 
                'id' => 'tributi-4',
            ],            [
                'titolo' => 'Arthur Morgan || Its Okay',
                'url' => 'https://www.youtube.com/embed/1gBfNPQQPss?si=Zo4EmVQGkeJ2lJ91', 
                'id' => 'tributi-5',
            ],
            
        ],
    ];

    
    return view('Servizi', ['videoSections' => $videoSections]);


}

}
