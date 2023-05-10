<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Facture;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function index()
    {
        $products = Cart::content();

        return view('panier', ['products' => $products]);

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
        // $user = session()->get('user');
        // if (empty($user)) {
        //     return redirect('connexion');
        // }

        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicata->isNotEmpty()) {
            return redirect('/')->with('success','Le produit a déjà été ajouté au panier.');
        }

        // Pour les packages
        if( $request->id <= 3 ) {

            $product = Product::find($request->id);
            // Order : Id, Name, Quantity & Price
            $cartItem = Cart::add($product->id,$product->title,1,$product->price)
                        ->associate('Product');

        }else{
            // Cas des noms de domaines
            $cartItem = Cart::add($request->id,$request->title,1,$request->price)
                    ->associate('Product');
        }

        return redirect('/')->with('success','Le produit a bien été ajouté.');

    }


    public function sendMailFacture(Request $request)
    {
        $user_email = 'franckndi5@gmail.com' ;
        $name = 'Franck';
        $reference ='MONIÉ324AS';
        // $data['reference'] = $reference ;
        $data['email'] = 'franckndi5@gmail.com' ;
        $data['title'] = 'Votre facture est disponible' ;
        $data['body'] = '' ;

        $pdf = PDF::loadView('invoice', $data);

        Mail::send("emails.invoice_mail", $data, function ($message) use ($reference,$user_email,$name, $pdf) {
                $message->to($user_email,$name)
                        ->subject('Votre facture est disponible')
                        ->attachData($pdf->output(), 'facture_'.$reference.'.pdf');
        });

        return response()->json(['message' => 'Facture envoyée avec succès']);
    }

    public function storeInvoice($data,$user)
    {
        //on crée un enregistrement de notre User en BD
        Facture::create([
            'clientId' => $data->clientId,
            'reference' => $data->reference,
            'date_payement' => $data->date_payement,
            'mode_de_reglement' => $data->mode_de_reglement,
            'reference_du_payement' => $data->reference_du_payement,
            'produits' => $data->produits,
            'total_ht' => $data->total_ht,
            'total_ttc' => $data->total_ttc,
        ]);

        return redirect('connexion');
    }

    public function storeSubscription($data,$user)
    {
        //on crée un enregistrement de notre User en BD
        Subscription::create([
            'user_id' => $request->clientId,
            'name' => $request->reference,
            'stripe_id' => $request->date_payement,
            'mode_de_reglement' => $request->mode_de_reglement,
            'reference_du_payement' => $request->reference_du_payement,
            'produits' => $request->produits,
            'total_ht' => $request->total_ht,
            'total_ttc' => $request->total_ttc,
        ]);

        return redirect('connexion');
    }


    public function generatePDF()
    {
        $data = ['foo' => 'bar']; // Données à passer à la vue
        // Charger la vue 'pdf.myview' avec les données
        $pdf = PDF::loadView('invoice', $data); 
        // Pdf::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')
        // Télécharger le PDF avec un nom de fichier personnalisé
        return $pdf->download("facture_ltc_host_ref.pdf");
    }

}
