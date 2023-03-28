<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function domainSearchResult(Request $request)
    {
        $domain = $request->input('domain');
        $extension = $request->input('domainType');
        $fullDomain = "$domain"."$extension";
        $apiKey = 'at_LHKPZ8Q1Y3lQe5aV5WaMazqhLswAO';
        $url = "https://domain-availability.whoisxmlapi.com/api/v1?"."apiKey={$apiKey}&domainName={$fullDomain}";

        $response = Http::get($url);
        $data = $response->json();

        // dd($data);

        return view('domain-search-result', [
            'data' => $data
        ]);

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
    

    public function email_hosting()
    {
        return view('email-hosting');
    }

    public function sharedHosting()
    {
        return view('shared-hosting');
    }

}
