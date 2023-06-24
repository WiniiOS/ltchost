<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Facture;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Hebergement;
use App\Models\Domain;

use Carbon\Carbon;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $products = Cart::content();
        $user = session()->get('user');

        return view('panier', [
            'products' => $products,
            'user' => $user
        ]);
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('success','Le produit a été supprimé.');
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
            'caract2' => 'Espace Disque 50Go',
            'caract3' => 'Bande Passante illimitée',
            'caract4' => 'Adresses Email10',
            'caract5' => 'Sous-Domaines 10',
            'caract6' => 'Bases de Donnees illimitée',
            'caract7' => 'Comptes FTP illimitée',
            'caract8' => 'Espace admin Cpanel',
            'caract9' => 'Certificat Auto SSL Offert'
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
            'caract2' => 'Espace Disque 100Go',
            'caract3' => 'Bande Passante illimitée',
            'caract4' => 'Adresses Email 30',
            'caract5' => 'Sous-Domaines 30',
            'caract6' => 'Bases de Donnees illimitée',
            'caract7' => 'Comptes FTP illimitée',
            'caract8' => 'Espace admin Cpanel',
            'caract9' => 'Certificat Auto SSL Offert'
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
            'caract2' => 'Espace Disque 150Go',
            'caract3' => 'Bande Passante illimitée',
            'caract4' => 'Adresses Email 50',
            'caract5' => 'Sous-Domaines 50',
            'caract6' => 'Bases de Donnees illimitée',
            'caract7' => 'Comptes FTP illimitée',
            'caract8' => 'Espace admin Cpanel',
            'caract9' => 'Certificat Auto SSL Offert'
        )
    ];

    public function store(Request $request)
    {

        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicata->isNotEmpty()) {
            return redirect('/')->with('success','Le produit a déjà été ajouté au panier.');
        }

        // on verifie si c'est un nom de domaine gratuit et on met le prix a zero
        $free_domains = ['.com','.net','.cm','.org','.biz','.io'];
        $price = $request->price;


        $cartItem = Cart::add($request->id,$request->title,1,$price)
                    ->associate('Product');

        return redirect('/')->with('success','Le produit a bien été ajouté.');
    }

    public function saveTransaction(Request $request)
    {

        $userId = $request->userId;
        $montant = $request->montant;
        $payment_mode = $request->mode;
        $currency = $request->currency;
        $description = $request->description;
        $status = $request->status;
        $domainName = $request->domain_name;
        $package = $request->package;
        $expiration_date = Carbon::now()->addDays(365);
        $ref = 'L'.rand(1, 15000000).'TC'.$userId;
        $produits = json_encode(array('domain' => $domainName,'package' => $package));

        //on crée un enregistrement de notre User en BD
        Transaction::create([
            'userId' => $userId,
            'montant' => $montant,
            'mode' => $payment_mode,
            'status' => $status,
            'currency' => $currency,
            'description' => $description
        ]);

        if ($status == 'ACCEPTED') {

            $this->saveFacture($userId,$ref,$payment_mode,$produits,$montant);

            $this->saveDomain($userId, $domainName, $dns1 = '', $dns2 = '', $expiration_date);

            $this->saveHebergement($userId,$package,$expiration_date);

            $this->sendMailFacture($ref);
        }

        // for test
        $this->sendMailFacture($ref);

        return response()->json('All save test Win successfully');
        
    }

    public function saveFacture($client,$ref,$mode,$produits = '' ,$total)
    {
        //on crée un enregistrement de notre User en BD
        Facture::create([
            'clientId' => $client,
            'reference' => $ref,
            'mode' => $mode,
            'produits' => json_encode($produits),
            'total_ht' => $total,
            'total_ttc' => $total
        ]);
        return false;
    }

    public function saveHebergement($client,$packageChoisi,$dateFin)
    {

        //on crée un enregistrement de notre User en BD
        Hebergement::create([
            'userId' => $client,
            'packageChoisi' => $packageChoisi,
            'dateFin' => $dateFin,
        ]);
        return false;

    }

    public function saveDomain($client, $domain, $dns1 = '', $dns2 = '', $expirationDate)
    {
        //on crée un enregistrement de notre User en BD
        Domain::create([
            'userId' => $client,
            'domainName' => $domain,
            'dns1' => $dns1,
            'dns2' => $dns2,
            'expirationDate' => $expirationDate
        ]);
        return false;
    }

    public function sendMailFacture($reference = 'xcvfd')
    {
        $user = session()->get('user');
        $user_email = $user->email;
        $name = $user->name;

        $data['name'] = $name;
        $data['telephone'] = $user->telephone;

        $data['reference'] = $reference ;
        $data['email'] = $user_email;
        $data['title'] = 'La facture de votre souscription LTC HOST est disponible' ;
        $data['body'] = '' ;

        // la vue invoice pour le pdf
        $pdf = PDF::loadView('invoice', $data);

        // vue du mail
        Mail::send("emails.invoice_mail", $data, function ($message) use ($reference,$user_email,$name, $pdf) {
                $message->to($user_email,$name)
                        ->subject('Votre facture est disponible')
                        ->attachData($pdf->output(), 'facture_'.$name.''.$reference.'.pdf');
        });

        return false;
    }


    public function generatePDF($data)
    {
        $data = ['foo' => 'bar']; // Données à passer à la vue
        // Charger la vue 'pdf.myview' avec les données
        $pdf = PDF::loadView('invoice', $data); 
        // Télécharger le PDF avec un nom de fichier personnalisé
        return $pdf->download("facture_ltc_host_ref.pdf");
    }

}
