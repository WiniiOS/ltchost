<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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

        // $data = array('name' => $request->name,'email' => $request->email,'telephone' => $request->telephone);

        // $request->session()->put('cachedData', $data);

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

    public function connexion()
    {
        return view("login");
    }

    public function register()
    {
        return view("sign-up");
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
                return redirect('/');
            }else{
                return redirect('/connexion')->withErrors(['Le mot de passe est incorrect'])->withInput();
            }
        }

    }

    // Methode qui donne access à une route en cas d'authentification
    public function layoutAccess(Request $request){

        if ($request->session()->has('user')) {
            return view('404',[
                'user' => $request->session()->get('user')
            ]);
        }else{
            return redirect('/')->withErrors(["Veuillez vous authentifier avant de payer un ticket"])->withInput();
        }
    }

    public function getOne($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    // fonction pour récupèrer tous les users
    public function all_users()
    {
        // On recupere tous les users en base de donnée
        $users = User::all();

        return view('users',[
            'users' => $users
        ]);

    }

    // Fonction qui met à jour les données d'un user
    public function update($id,Request $request){

        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => $request->password,
        ]);

        return back()->with('message', 'Utilisateur édité avec succès');

    }

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

    // Fonction qui récupère 10 users
    public function get_some_users()
    {
        $users = User::orderBy('name')->take(10)->get();

        return view('index-slider',[
            'users' => $users
        ]);
        
    }
    
}
