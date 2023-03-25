<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoistingController extends Controller
{
    public function index()
    {
        return view("index-slider");
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

    public function domainTransfer()
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

    public function domainSearchResult()
    {
        // http://127.0.0.1:8000/domain-search-result.php?_token=Ic7ghWGOo4DfzOAtAfcWz88vPndf3wmRWmpywS4m&domain=&domainType=com
        return view("domain-search-result");
    }
    

    public function email_hosting()
    {
        return view('email-hosting');
    }

    public function sharedHosting()
    {
        return view('shared-hosting');
    }

    public function Search(Request $request)
    {
        // $url = 'https://twsv03.adwapay.cm/getADPToken';

        // $app_code = 'AP3HFKUAVBXXCYRYZ';

        // $username = 'BLOO1';

        // $password = 'BL3HFKUAVBXXO1';

        // $response = Http::withBasicAuth($username, $password)->post($url, [
        //     'application' => $app_code
        // ]);

        // $data = $response->json();

        // return $data['data']['tokenCode'];

        // $url = 'https://twsv03.adwapay.cm/pushDialog';

        // $subscription_key = 'BL3HFKUAVBXXO1';

        // $response = Http::withHeaders([
        //     'AUTH-API-TOKEN' => $token,
        //     'AUTH-API-SUBSCRIPTION' => $subscription_key
        // ])->post($url, [
        //     "adpFootprint" => $adpFootprint,
        //     "meanCode"  => $operator
        // ]);

        // return $response->json();




        $domain = $request->input('domain');
        $apiKey = 'at_LHKPZ8Q1Y3lQe5aV5WaMazqhLswAO';
        $url = 'https://domain-availability.whoisxmlapi.com/api/v1?'
        . "apiKey={$apiKey}&domainName={$domain}";
        $data = json_decode(file_get_contents($url), true);
        //dd($data);
        return view('domainsearch');
    }

    public function AdvancedSearch(Request $request)
    {
        $domain = $request->input('domain');
        $subdomain = substr($domain, 0, strrpos($domain, '.'));
        $extension = array(
            array(
                'domain' => "$subdomain.com",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,000 XAF",
                'subDomain' => "com"
            ),
            array(
                'domain' => "$subdomain.cm",
                'domainAvailability' => "AVAILABLE",
                'price' => "3,000 XAF",
                'subDomain' => "cm"
            ),
            array(
                'domain' => "$subdomain.net",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,000 XAF",
                'subDomain' => "net"
            ),
            array(
                'domain' => "$subdomain.fr",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,000 XAF",
                'subDomain' => "fr"
            ),
            array(
                'domain' => "$subdomain.biz",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,500 XAF",
                'subDomain' => "biz"
            ),
            array(
                'domain' => "$subdomain.info",
                'domainAvailability' => "AVAILABLE",
                'price' => "10,000 XAF",
                'subDomain' => "in"
            ),
            array(
                'domain' => "$subdomain.org",
                'domainAvailability' => "AVAILABLE",
                'price' => "11,000 XAF",
                'subDomain' => "org"
            ),
            array(
                'domain' => "$subdomain.tech",
                'domainAvailability' => "AVAILABLE",
                'price' => "39,000 XAF",
                'subDomain' => "tech"
            ),
            array(
                'domain' => "$subdomain.news",
                'domainAvailability' => "AVAILABLE",
                'price' => "19,500 XAF",
                'subDomain' => "news"
            ),
            array(
                'domain' => "$subdomain.site",
                'domainAvailability' => "AVAILABLE",
                'price' => "23,000 XAF",
                'subDomain' => "site"
            ),
            array(
                'domain' => "$subdomain.de",
                'domainAvailability' => "AVAILABLE",
                'price' => "9,500 XAF",
                'subDomain' => "de"
            ),
            array(
                'domain' => "$subdomain.me",
                'domainAvailability' => "AVAILABLE",
                'price' => "7,000 XAF",
                'subDomain' => "me"
            ),
            array(
                'domain' => "$subdomain.bz",
                'domainAvailability' => "AVAILABLE",
                'price' => "14,000 XAF",
                'subDomain' => "bz"
            ),
            array(
                'domain' => "$subdomain.tc",
                'domainAvailability' => "AVAILABLE",
                'price' => "19,000 XAF",
                'subDomain' => "tc"
            )
        );

        $curl = curl_init();

        for ($i = 0; $i < count($extension); $i++) {
            
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.gandi.net/v5/domain/check?name={$extension[$i]['domain']}",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "authorization: Apikey S27MLNrlE8Qx3PXRTA6M7YzE"
                ),
              ));
    
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $data = json_decode($response, true);
                //dd($data['products'][0]['status']);
                $extension[$i]['domainAvailability'] = $data['products'][0]['status'];
            }
        } //file_get_contents($url)
        curl_close($curl);
        //dd($extension);

        /*if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        dd ($response);
        }
        
        $user = "YOUR_NAMECHEAP_USER"; // Username required to access the API 
        $key = "YOUR_NAMECHEAP_KEY"; // Password required used to access the API 
        $sandbox = true; // true for testing, false for live
        $username = null; // The Username on which a command is executed.Generally, the values of ApiUser and UserName parameters are the same. 

        $api = new NamecheapApi($user, $key, $sandbox, $username);

        // Create a new instance of the command class we want to use
        $domains = new NamecheapDomains($api);

        $vars = array('DomainList' => "mydomain.com");

        dd($domains->check($vars)->response());

        $domain = $request->input('domain');
        //print(substr($domain, 0, strrpos($domain, '.')));
        $subdomain = substr($domain, 0, strrpos($domain, '.'));
        $apiKey = 'at_LHKPZ8Q1Y3lQe5aV5WaMazqhLswAO';


        $curl = curl_init();

        for ($i = 0; $i < count($extension); $i++) {
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://domain-checker7.p.rapidapi.com/api/v2.0/domain",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "domain={$extension[$i]['domain']}",
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded",
                    "x-rapidapi-host: domain-checker7.p.rapidapi.com",
                    "x-rapidapi-key: a3846a674emsh76cbedbad9de1d0p1de70djsnfd3a6d9df227"
                ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $data = json_decode($response, true);
               dd($data);
                $extension[$i]['domainAvailability'] = $data['available'];
            }
        } //file_get_contents($url)
        curl_close($curl);
        //dd($extension);*/
    
        /**for ($i = 0; $i < 2; $i++) {
            $url = 'https://domain-availability.whoisxmlapi.com/api/v1?'
            . "apiKey={$apiKey}&domainName={$extension[$i]['domain']}";
            $data = json_decode(file_get_contents($url), true);
            //dd($data['DomainInfo']);
            $extension[$i]['domainAvailability'] = $data['DomainInfo']['domainAvailability'];
        } //file_get_contents($url)
        //dd($extension[0]['domainAvailability']); , ['results' => $extension]*/
        return view('domainsearch', ['results' => $extension]);
        /**$domainName = 'whoisxmlapi.com';
        $apiKey = 'at_LHKPZ8Q1Y3lQe5aV5WaMazqhLswAO';
        
        $url = 'https://domain-availability.whoisxmlapi.com/api/v1?'
             . "apiKey={$apiKey}&domainName={$domain}";
        
        print(file_get_contents($url));
        
        
        
        /**$message ='Your message';
        //$url = 'https://api.webcargo.io/whois?key='.$apikey.'&identifier='.$domain;
        $url = 'https://api.webcargo.io/availability?key='.$apikey.'&domain='.$domain;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec ($ch);
        $err = curl_error($ch);  //if you need
        curl_close ($ch);
        //print($err);
        dd($response);*/
    }

}
