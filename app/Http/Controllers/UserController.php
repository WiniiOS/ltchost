<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Facture;
use App\Models\Domain;
use App\Models\Hebergement;
use App\Models\Transactions;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(Request $request)
    {
        $this->middleware('guest')->except('logout');
        $this->request = $request;
    }

    public function showSpace(Request $request)
    {
        $routeCkeck = route('connexion') . '?previous=' . $request->fullUrl() ;
        $user = session()->get('user');
        if (empty($user)) {
            return redirect($routeCkeck);
        }
        return view('espace-client',['user_data' => $user]);
    }

    public function save(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'telephone' => ['required'],
            'password' => ['required','min:8'],
            'confirmPassword' => ['required'],
        ]);

        $pass1 = $request->password;
        $pass2 = $request->confirmPassword;

        if ($pass1 != $pass2) {
            return redirect('/sign-up')->withErrors(['Les mots de passe ne correspondent pas!'])->withInput();
        }

        //on crée un enregistrement de notre User en BD
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => sha1($request->password),
        ]);

        return redirect('connexion');
    }

    public function authentify(Request $request){

        $request->validate([
            'email' => ['required','email'],
            'password' => ['required','min:8']
        ]);

        //on check si le user existe et on le redirige
        $email = $request->email;
        $sha1password = sha1($request->password);

        // recupere les data du user
        $user = User::where('email', $email)->first();

        if ($user == null) {
            return redirect('/connexion')->withErrors(["Cet utilisateur n'existe pas!"])->withInput();
        }else{

            if ($user->password == $sha1password) {

                // on enregistre sa variable de session
                $request->session()->put('user', $user);

                // On gere la redirection a la page precedente
                if ($request->has('previous')) {
                    $redirectTo = $request->get('previous');
                    return redirect($redirectTo);
                }else{
                    return '/';
                }

            }else{
                return redirect('/connexion')->withErrors(['Le mot de passe est incorrect'])->withInput();
            }
        }

    }

    public function connexion()
    {
        return view("login");
    }

    public function register()
    {
        return view("sign-up");
    }

    public function getOne($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    // fonction pour récupèrer tous les users
    public function allUsers()
    {
        // On recupere tous les users en base de donnée
        $users = User::all();
        return view('users',[
            'users' => $users
        ]);
    }

    // Fonction qui met à jour les données d'un user
    public function update(Request $request){

        $user = User::find($request->$id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone
        ]);
        return back()->with('message', 'Vos informations ont été modifié avec succès');
    }

    // Fonction de deconnexion
    public function logout(Request $request)
    {
        $request->session()->forget('user'); 
        return redirect('/');
    }

    // Fonction qui supprime un user
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return 'Utilisateur supprimée avec success';
    }

    function getFactureById($id) {

        $factures = Facture::all();
        return $factures;
    }

    // route vers le formulaire modifer dns
    public function showSpacedns(){
        return view('espace-clientdns');
    }

    // route vers le formulaire modifer dns
    public function showSpacedmdp(){
        return view('espace-clientmdp');
    }

}
 