<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

// Integration de DNA api pour transferer les noms de domaines
require_once __DIR__.'/../../../vendor/php-dna/src/dna.php';
use DomainNameApi\DomainNameAPI_PHPLibrary;

use PDF;

class HoistingController extends Controller
{


    public function generatePDF()
    {
        $data = ['foo' => 'bar']; // Données à passer à la vue
        $pdf = PDF::loadView('pdf.myview', $data); // Charger la vue 'pdf.myview' avec les données
        return $pdf->download('mon_pdf.pdf'); // Télécharger le PDF avec un nom de fichier personnalisé
    }

    public function showProfile()
    {
        return view('user-profile');
    }

    public function domainTransfer(Request $request)
    {
        if(empty(session()->get('user')->email)){
            return redirect('connexion');
        }
        
        $domainName = $request->domain;
        $authCode = $request->authcode;
        $period = 3;

        // ----------
        $user = session()->get('user');
        $email = $user->email;
        $password = $user->password;

        $checkUser = $this->checkIfUserIsAuth($email,$password);

        if ($checkUser == false) {
            return redirect('connexion');
        }else{

            // Utiliser la classe Dna de la bibliothèque
            $dna = new DomainNameAPI_PHPLibrary($email, $password);

            /**
             * Transfer Domain
             * @param string $DomainName
             * @param string $AuthCode
             * @param int $Period
             * @return array
             */

            $result = $dna->Transfer($domainName, $authCode,$period);
            dd($result);
            return view('domain-transfer',['result' => $result]);
        }   
    }


    public function modifyNameServer(Request $request)
    {
        if(empty(session()->get('user')->email)){
            return redirect('connexion');
        }

        $domainName = $request->domainName;
        $dns1 = 'ns1.bunyam.in';
        $dns2 = 'ns2.bunyam.in';
        // ----------

        $user = session()->get('user');
        $email = $user->email;
        $password = $user->password;

        $checkUser = $this->checkIfUserIsAuth($email,$password);

        $dna = new DomainNameAPI_PHPLibrary($email, $password);

        if ($checkUser == false) {

            return redirect('connexion');

        }else{

            $ns_change = $dna->ModifyNameServer($domainName,['ns1' => $dns1, 'ns2' => $dns2]);
            // dd($ns_change);
            return view('domain-change',['result' => $dns_change]);
        }
    
    }


    public function checkIfUserIsAuth($email,$password)
    {      
        $user = DB::table('users')->where('email',$email)->first();

        if ($user == null) {
            return false;
        }else{
            return true;
        }
    }

    public $packages = [
        array(
            'id' => 1,
            'title' => 'Starter',
            'period' => 'An',
            'price' => 20000,
            'afterPrice' => 25000,
            'devise' => 'XAF',
            'description' => 'Haute performance, hebergement moins cher pour un lancement parfait',
            'caract1' => '1 Noms de domaine offert',
            'caract1' => 'Espace Disque 50Go',
            'caract1' => 'Bande Passante illimitée',
            'caract1' => 'Adresses Email10',
            'caract1' => 'Sous-Domaines 10',
            'caract1' => 'Bases de Donnees illimitée',
            'caract1' => 'Comptes FTP illimitée',
            'caract1' => 'Espace admin Cpanel',
            'caract1' => 'Certificat Auto SSL Offert'
        ),
        array(
            'id' => 2,
            'title' => 'Business',
            'period' => 'An',
            'price' => 25000,
            'afterPrice' => 35000,
            'devise' => 'XAF',
            'description' => 'Bonne performance, hebergement moins chere avec DD pour un projet moyen',
            'caract1' => '1 Noms de domaine offert',
            'caract1' => 'Espace Disque 100Go',
            'caract1' => 'Bande Passante illimitée',
            'caract1' => 'Adresses Email 30',
            'caract1' => 'Sous-Domaines 30',
            'caract1' => 'Bases de Donnees illimitée',
            'caract1' => 'Comptes FTP illimitée',
            'caract1' => 'Espace admin Cpanel',
            'caract1' => 'Certificat Auto SSL Offert'
        ),
        array(
            'id' => 3,
            'title' => 'Premium',
            'period' => 'An',
            'price' => 35000,
            'afterPrice' => 45000,
            'devise' => 'XAF',
            'description' => 'Super performance pour des projets lourd ,à un prix raisonnable.',
            'caract1' => '1 Noms de domaine offert',
            'caract1' => 'Espace Disque 150Go',
            'caract1' => 'Bande Passante illimitée',
            'caract1' => 'Adresses Email 50',
            'caract1' => 'Sous-Domaines 50',
            'caract1' => 'Bases de Donnees illimitée',
            'caract1' => 'Comptes FTP illimitée',
            'caract1' => 'Espace admin Cpanel',
            'caract1' => 'Certificat Auto SSL Offert'
        ),
    ];


    public function addPackToCart()
    {
        $this->packages;


    }

    public function payment()
    {
        $API_KEY = "19307168035e47e4a0a20d24.32798184";
        $SITE_ID = "948395";
        $SECRET_KEY = "292144007625025c5f16a00.19308402";
        
    }

    public function showSpace()
    {
        return view('espace-client');
    }

    public function index()
    {
        return view("index-slider",[ 'data' => $this->packages ]);
    }

    public function errorPage()
    {
        return view("404");
    }

    public function showPricingComparison()
    {
        return view("pricing-comparaison");
    }

    public function showPricingPackage()
    {
        return view("pricing-package");
    }

    public function showPricingSpecifications()
    {
        return view("pricing-specifications");
    }

    public function showPricingWebHosting()
    {
        return view("pricing-web-hosting");
    }

    public function terms()
    {
        return view("terms-condition");
    }

    public function showAbout()
    {
        return view("about-us");
    }

    public function showPrivacy()
    {
        return view("privacy-policy");
    }

    public function domainChecker()
    {
        return view("domain-checker");
    }

    public function showDomainTransfer()
    {
        return view("domain-transfer");
    }

    public function domainRegistration()
    {
        return view("domain-registration");
    }

    public function showContact()
    {
        return view("contact-us");
    }

    public function showDomainSearchResultPage()
    {
        return view("domain-search-result");
    }

    public function allDomainCheck(Request $request)
    {
        $domain = $request->input('domain');
        $ext = $request->input('domainType');

        $fullDomain = "$domain"."$ext";

        $apiKey = 'at_LHKPZ8Q1Y3lQe5aV5WaMazqhLswAO';
        $url = "https://domain-availability.whoisxmlapi.com/api/v1?"."apiKey={$apiKey}&domainName={$fullDomain}";

        $searchedDomain = [
            'domain' => "$fullDomain",
            'domainAvailability' => "AVAILABLE",
            'price' => "9,000 XAF",
            'subDomain' => "$ext"
            
        ];

        $extensions = array(
            
            array(
                'domain' => "$domain.com",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,000 XAF",
                'subDomain' => "com"
            ),
            array(
                'domain' => "$domain.cm",
                'domainAvailability' => "AVAILABLE",
                'price' => "3,000 XAF",
                'subDomain' => "cm"
            ),
            array(
                'domain' => "$domain.net",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,000 XAF",
                'subDomain' => "net"
            ),
            array(
                'domain' => "$domain.fr",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,000 XAF",
                'subDomain' => "fr"
            ),
            array(
                'domain' => "$domain.biz",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,500 XAF",
                'subDomain' => "biz"
            ),
            array(
                'domain' => "$domain.info",
                'domainAvailability' => "AVAILABLE",
                'price' => "10,000 XAF",
                'subDomain' => "in"
            ),
            array(
                'domain' => "$domain.org",
                'domainAvailability' => "AVAILABLE",
                'price' => "11,000 XAF",
                'subDomain' => "org"
            ),
            array(
                'domain' => "$domain.tech",
                'domainAvailability' => "AVAILABLE",
                'price' => "39,000 XAF",
                'subDomain' => "tech"
            ),
            array(
                'domain' => "$domain.news",
                'domainAvailability' => "AVAILABLE",
                'price' => "19,500 XAF",
                'subDomain' => "news"
            ),
            array(
                'domain' => "$domain.site",
                'domainAvailability' => "AVAILABLE",
                'price' => "23,000 XAF",
                'subDomain' => "site"
            ),
            array(
                'domain' => "$domain.de",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,500 XAF",
                'subDomain' => "de"
            ),
            array(
                'domain' => "$domain.me",
                'domainAvailability' => "AVAILABLE",
                'price' => "7,000 XAF",
                'subDomain' => "me"
            ),
            array(
                'domain' => "$domain.bz",
                'domainAvailability' => "AVAILABLE",
                'price' => "14,000 XAF",
                'subDomain' => "bz"
            ),
            array(
                'domain' => "$domain.tc",
                'domainAvailability' => "AVAILABLE",
                'price' => "19,000 XAF",
                'subDomain' => "tc"
            )
        );


        for ($i = 0; $i < count($extensions); $i++) {

            $currentUrl = "https://domain-availability.whoisxmlapi.com/api/v1?"."apiKey={$apiKey}&domainName={$extensions[$i]['domain']}";

            try {

                $response = Http::get($currentUrl);  
                $data = $response->json();
                $extensions[$i]['domainAvailability'] = $data['DomainInfo']['domainAvailability']; 

            } catch (\Throwable $e) {
                echo "cURL Error #:" . $e;
            }
        
        }

        foreach ($extensions as $ext) {
            if($ext['domain'] == $searchedDomain['domain']){
                $searchedDomain['price'] = $ext['price'];
                $searchedDomain['domainAvailability'] = $ext['domainAvailability'];
            }
        }

        return view('domain-search-result', [
            'data' => $extensions, 'searchedDomain' => $searchedDomain
        ]);

    }

    function get_domain_and_extension($url) {
       
        // Sépare le nom de domaine et l'extension du domaine
        $domain_parts = explode('.', $url);
        $extension = end($domain_parts);
        $domain_name = implode('.', array_slice($domain_parts, 0, -1));
      
        // Retourne le nom de domaine et l'extension du domaine sous forme d'un tableau associatif
        return [
          'domain_name' => $domain_name,
          'extension' => $extension,
        ];
    }

    public function completeDomainCheck(Request $request)
    {
        $url = $request->input('domain');
        $dispatch = $this->get_domain_and_extension($url);
        // dd($dispatch);

        $domain = $dispatch['domain_name'];
        $ext = $dispatch['extension'];

        $fullDomain = $url;


        $apiKey = 'at_LHKPZ8Q1Y3lQe5aV5WaMazqhLswAO';
        $url = "https://domain-availability.whoisxmlapi.com/api/v1?"."apiKey={$apiKey}&domainName={$fullDomain}";

        $searchedDomain = [
            'domain' => "$fullDomain",
            'domainAvailability' => "AVAILABLE",
            'price' => "9,000 XAF",
            'subDomain' => "$ext"
            
        ];

        $extensions = array(
            
            array(
                'domain' => "$domain.com",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,000 XAF",
                'subDomain' => "com"
            ),
            array(
                'domain' => "$domain.cm",
                'domainAvailability' => "AVAILABLE",
                'price' => "3,000 XAF",
                'subDomain' => "cm"
            ),
            array(
                'domain' => "$domain.net",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,000 XAF",
                'subDomain' => "net"
            ),
            array(
                'domain' => "$domain.fr",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,000 XAF",
                'subDomain' => "fr"
            ),
            array(
                'domain' => "$domain.biz",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,500 XAF",
                'subDomain' => "biz"
            ),
            array(
                'domain' => "$domain.info",
                'domainAvailability' => "AVAILABLE",
                'price' => "10,000 XAF",
                'subDomain' => "in"
            ),
            array(
                'domain' => "$domain.org",
                'domainAvailability' => "AVAILABLE",
                'price' => "11,000 XAF",
                'subDomain' => "org"
            ),
            array(
                'domain' => "$domain.tech",
                'domainAvailability' => "AVAILABLE",
                'price' => "39,000 XAF",
                'subDomain' => "tech"
            ),
            array(
                'domain' => "$domain.news",
                'domainAvailability' => "AVAILABLE",
                'price' => "19,500 XAF",
                'subDomain' => "news"
            ),
            array(
                'domain' => "$domain.site",
                'domainAvailability' => "AVAILABLE",
                'price' => "23,000 XAF",
                'subDomain' => "site"
            ),
            array(
                'domain' => "$domain.de",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,500 XAF",
                'subDomain' => "de"
            ),
            array(
                'domain' => "$domain.me",
                'domainAvailability' => "AVAILABLE",
                'price' => "7,000 XAF",
                'subDomain' => "me"
            ),
            array(
                'domain' => "$domain.bz",
                'domainAvailability' => "AVAILABLE",
                'price' => "14,000 XAF",
                'subDomain' => "bz"
            ),
            array(
                'domain' => "$domain.tc",
                'domainAvailability' => "AVAILABLE",
                'price' => "19,000 XAF",
                'subDomain' => "tc"
            )
        );


        for ($i = 0; $i < count($extensions); $i++) {

            $currentUrl = "https://domain-availability.whoisxmlapi.com/api/v1?"."apiKey={$apiKey}&domainName={$extensions[$i]['domain']}";

            try {

                $response = Http::get($currentUrl);  
                $data = $response->json();
                $extensions[$i]['domainAvailability'] = $data['DomainInfo']['domainAvailability']; 

            } catch (\Throwable $e) {
                echo "cURL Error #:" . $e;
            }
        
        }

        foreach ($extensions as $ext) {
            if($ext['domain'] == $searchedDomain['domain']){
                $searchedDomain['price'] = $ext['price'];
                $searchedDomain['domainAvailability'] = $ext['domainAvailability'];
            }
        }

        return view('domain-search-result', [
            'data' => $extensions, 'searchedDomain' => $searchedDomain
        ]);

    }

    public function email_hosting()
    {
        return view('email-hosting');
    }

    public function sharedHosting()
    {
        return view('shared-hosting');
    }

}
