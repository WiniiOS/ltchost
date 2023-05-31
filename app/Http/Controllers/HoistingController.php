<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

// Integration de DNA api pour transferer les noms de domaines
require_once __DIR__.'/../../../vendor/php-dna/src/dna.php';

use \DomainNameApi\DomainNameAPI_PHPLibrary;


use PDF;

class HoistingController extends Controller
{

    public function __construct(Request $request)
    {
        $this->middleware('guest')->except('logout');
        $this->request = $request;
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

        $user = session()->get('user');
        $email = $user->email;
        $password = $user->password;

        $checkUser = $this->checkIfUserIsAuth($email,$password);

        if ($checkUser == false) {
            return redirect('connexion');
        }else{

            // Utiliser la classe Dna de la bibliothèque
            $dna = new DomainNameAPI_PHPLibrary('HackingCorp', '9ftUhAc!QVKZ@th');

            /**
             * Transfer Domain
             * @param string $DomainName
             * @param string $AuthCode
             * @param int $Period
             * @return array
             */

            $result = $dna->Transfer($domainName, $authCode,$period);
    
            return response()->json($result);
        }   
    }


    public function modifyNameServer(Request $request)
    {
        // $route = route('connexion') . '?previous=' . Request::fullUrl() ;
        // dd($route);

        if(empty(session()->get('user')->email)){
            return redirect('connexion');
        }

        // $domainName = $request->domainName;
        $domainName = "money.net";
        $dns1 = 'ns1.domainname.net';
        $dns2 = 'ns2.domainname.net';
        // ----------

        $user = session()->get('user');
        $email = $user->email;
        $password = $user->password;

        $checkUser = $this->checkIfUserIsAuth($email,$password);

        $dna = new \DomainNameApi\DomainNameAPI_PHPLibrary('HackingCorp', '9ftUhAc!QVKZ@th');

        if ($checkUser == false) {
            return redirect('connexion');
        }else{
            $ns_change = $dna->ModifyNameServer($domainName,['ns1' => $dns1, 'ns2' => $dns2]);

            dd($ns_change);

            return response()->json($ns_change);

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

    public function payment()
    {
        $API_KEY = "19307168035e47e4a0a20d24.32798184";
        $SITE_ID = "948395";
        $SECRET_KEY = "292144007625025c5f16a00.19308402";
        
    }

    public function showSpace()
    {
        if(empty(session()->get('user')->email)){
            return redirect('connexion');
        }
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

    public function showDomainTransfer($domain = 'domain.cm')
    {
        $routeCkeck = route('connexion') . '?previous=' . $this->request->fullUrl() ;

        if(empty(session()->get('user')->email)){
            return redirect($routeCkeck);
        }

        if ($domain = null) {
            return view("domain-transfer");
        }else{
            return view("domain-transfer",[ 'domain' => $domain ]);

        }
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

    // Methode qui retourne le nom de domaine sans l'extension
    function getOnlydomainName($url) {
        // Sépare le nom de domaine et l'extension du domaine
        $domain_parts = explode('.', $url);
        $extension = end($domain_parts);
        $domain_name = implode('.', array_slice($domain_parts, 0, -1));
        return $domain_name;
    }

    public function checkDomainAvailability(Request $request)
    {
        $dna = new DomainNameAPI_PHPLibrary('HackingCorp', '9ftUhAc!QVKZ@th');
        $exts = ['com', 'net', 'org', 'fr', 'io','cm','biz','info', 'news','tech','site','de','bz','tc','me'];
        $domain = $request->input('domain');
        // $domain = 'argent';

        $hasExtension = false;
        $onlyDomainName = '';
        $extType = '';

        // Vérifie si le domaine contient une extension
        $extens = ['.com', '.cm', '.net', '.fr', '.biz','.info', '.org', '.tech','.news','.site','.de','.me','.bz','.tc'];


        foreach($extens as $ext){
            if(strpos($domain, $ext) !== false){
                $hasExtension = true;
                $extType = $ext;
            }
        }
        
        if(!$hasExtension){ // Cas ou il y a pas d'extension
            $onlyDomainName = $domain;
        }else{ //Cas ou il y a une extension on retire 
            $onlyDomainName = $this->getOnlydomainName($domain);
        }

        $result = $dna->CheckAvailability([ $onlyDomainName ], $exts , 1 , 'create' );

        $data = array(
            
            array(
                '1' => 5,
                'domain' => "$onlyDomainName.com",
                'domainAvailability' => $result[0]['Status'],
                'price' => 9000,
                'subDomain' => "com",
                'currency' => 'XAF',
            ),
            array(
                'id' => 6,
                'domain' =>"$onlyDomainName.cm",
                'domainAvailability' =>  $result[1]['Status'],
                'price' => 3000,
                'subDomain' => "cm",
                'currency' => 'XAF'

            ),
            array(
                'id' => 7,
                'domain' => "$onlyDomainName.net",
                'domainAvailability' => $result[2]['Status'],
                'price' => 9000,
                'subDomain' => "net",
                'currency' => 'XAF'

            ),
            array(
                'id' => 8,
                'domain' => "$onlyDomainName.fr",
                'domainAvailability' => $result[3]['Status'],
                'price' => 9000,
                'subDomain' => "fr",
                'currency' => 'XAF'

            ),
            array(
                'id' => 9,
                'domain' => "$onlyDomainName.biz",
                'domainAvailability' => $result[4]['Status'],
                'price' => 9500,
                'subDomain' => "biz",
                'currency' => 'XAF'

            ),
            array(
                'id' => 10,
                'domain' => "$onlyDomainName.info",
                'domainAvailability' => $result[5]['Status'],
                'price' => 10000,
                'subDomain' => "in",
                'currency' => 'XAF'

            ),
            array(
                'id' => 11,
                'domain' => "$onlyDomainName.org",
                'domainAvailability' => $result[6]['Status'],
                'price' => 11000,
                'subDomain' => "org",
                'currency' => 'XAF'

            ),
            array(
                'id' => 12,
                'domain' => "$onlyDomainName.tech",
                'domainAvailability' => $result[7]['Status'],
                'price' => 39000,
                'subDomain' => "tech",
                'currency' => 'XAF'
            ),
            array(
                'id' => 13,
                'domain' => "$onlyDomainName.news",
                'domainAvailability' => $result[8]['Status'],
                'price' => 19500,
                'subDomain' => "news",
                'currency' => 'XAF'

            ),
            array(
                'id' => 14,
                'domain' => "$onlyDomainName.site",
                'domainAvailability' => $result[9]['Status'],
                'price' => 23000,
                'subDomain' => "site",
                'currency' => 'XAF'

            ),
            array(
                'id' => 15,
                'domain' => "$onlyDomainName.de",
                'domainAvailability' => $result[10]['Status'],
                'price' => 9500,
                'subDomain' => "de",
                'currency' => 'XAF'

            ),
            array(
                'id' => 16,
                'domain' => "$onlyDomainName.me",
                'domainAvailability' => $result[11]['Status'],
                'price' => 7000,
                'subDomain' => "me",
                'currency' => 'XAF'

            ),
            array(
                'id' => 17,
                'domain' => "$onlyDomainName.bz",
                'domainAvailability' => $result[12]['Status'],
                'price' => 14000,
                'subDomain' => "bz",
                'currency' => 'XAF'

            ),
            array(
                'id' => 18,
                'domain' => "$onlyDomainName.tc",
                'domainAvailability' => $result[13]['Status'],
                'price' => 19000,
                'subDomain' => "tc",
                'currency' => 'XAF'
            )
        );

        return response()->json($data);
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

    public function email_hosting()
    {
        return view('email-hosting');
    }

    public function sharedHosting()
    {
        return view('shared-hosting');
    }

    function show_alert(){
        return view('notify_url');
    }

}