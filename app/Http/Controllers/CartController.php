<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
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

    public $totalPanier = 0;

    public function showCart()
    {
        $cart = session()->get('cart');
        return view('cart', [
            'cart' => $cart,
            'total' => session()->get('total')
        ]);
    }

    public function add(Request $request, $id)
    {
        $packages = $this->packages;
        $pack = $packages[$id - 1];
        // on initialise la variable cart(panier) 
        $cart = session()->get('cart', []);        
        array_push($cart, [
            'product' => $pack,
            'quantity' => 1
        ]);

        $this->totalize($cart);
        
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    public function totalize($mycart)
    {
        // on get la variable cart(panier) 
        $cart = $mycart;
        $total = 0;
        foreach ($cart as $item) {
            $qte = $item['quantity'];
            $price = $item['product']['price'];
            $total += $qte*$price;
        }
        session()->put('total', $total);
    }

    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        $reorganizedCart = array_values($cart);
        for($i = 0; $i <= count($reorganizedCart); $i++){
            if (isset($reorganizedCart[$i]) && $reorganizedCart[$i]['product']['id'] == $id ) {
                unset($reorganizedCart[$i]);
                // Réorganisation des index restants
                $newCart = array_values($reorganizedCart);
                session()->put('cart', $newCart);
            }
        }
        $this->totalize($cart);

        return redirect()->route('cart');
    }
}
