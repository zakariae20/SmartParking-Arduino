<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use App\Models\Utilisateur;
use App\Models\Card;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    
    public function liste(){
        $utilisateurs = Utilisateur::all();
        return view('utilisateur.liste',['utilisateurs' => $utilisateurs]);
    }

    public function ajouter(){
        return view('utilisateur.ajouter');
    }

    public function add(Request $request){

        $utilisateur = new Utilisateur;
        $card = new Card;
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->password = Hash::make($request->password);
        // dd($utilisateur->password);
        $utilisateur->type = "user";
        $utilisateur->save();
        $taille=8;
        $alp="abcdefghijklmnopqrstuvwxyz1234567890";
        for ($i=0;$i<$taille;$i++)
        {
            $str1=substr($alp,(rand()%(strlen($alp))),2);
            $str2=substr($alp,(rand()%(strlen($alp))),2);
            $str3=substr($alp,(rand()%(strlen($alp))),2);
            $str4=substr($alp,(rand()%(strlen($alp))),2);
            $card->card_tag=$str1." ".$str2." ".$str3." ".$str4;
        }
        $card->utilisateur_id = $utilisateur->id;
        $card->save();

        return redirect()->route('utilisateur_login');
    }
    public function admin_add_utilisateur(Request $request){

        $utilisateur = new Utilisateur;
        $card = new Card;
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->email = $request->email;
        $utilisateur->password = Hash::make($request->password);
        //dd($utilisateur->password);
        $utilisateur->type = "user";
        $utilisateur->save();
        $taille=8;
        $alp="abcdefghijklmnopqrstuvwxyz1234567890";
        for ($i=0;$i<$taille;$i++)
        {
            $str1=substr($alp,(rand()%(strlen($alp))),2);
            $str2=substr($alp,(rand()%(strlen($alp))),2);
            $str3=substr($alp,(rand()%(strlen($alp))),2);
            $str4=substr($alp,(rand()%(strlen($alp))),2);
            $card->card_tag=$str1." ".$str2." ".$str3." ".$str4;
        }
        $card->utilisateur_id = $utilisateur->id;
        $card->save();

        return redirect()->route('utlisateur_liste');
    }

    public function checkCredentials(Request $request)
    {
        $email = $request->email;
        $password = $request->input('password');
        $hashedPassword = Utilisateur::where('email', $email)
            ->value('password');
            $utilisateur = Utilisateur::where('email', $email)
            ->first();

        if (Hash::check($password, $hashedPassword) && $utilisateur->type=="admin") {
            $utilisateurs = Utilisateur::all();
            return view('utilisateur.liste',['utilisateurs' => $utilisateurs]);
        } else if (Hash::check($password, $hashedPassword) && $utilisateur->type=="user"){
            $places  = Place::all();
            return view('place.placeav',['places' => $places]);
        }else{
            return redirect()->route('utilisateur_login');
        }
    }

    public function modify($id){
        $utilisateurs = Utilisateur::find($id);
        return view('utilisateur.modify_form',['utilisateurs' => $utilisateurs]);
    }

    public function update(Request $request){
        $utilisateur = Utilisateur::find($request->id);
        $utilisateur->nom = $request->nom;
        $utilisateur->prenom = $request->prenom;
        // $utilisateur->num_tel = $request->num_tel;
        $utilisateur->email = $request->email;
        $utilisateur->password = Hash::make($request->password);
        $utilisateurs = Utilisateur::all();
        $utilisateur->save();
        // return redirect()->route('utlisateur_liste');
        return view('utilisateur.liste',['utilisateurs' => $utilisateurs]);
        // return view('utilisateur.liste');
    }

    public function delete($id){
        $utilisateur = Utilisateur::find($id);
        $utilisateur->delete();

        $utilisateurs = Utilisateur::all();
        return view('utilisateur.liste',['utilisateurs' => $utilisateurs]);
        // return view('utilisateur.liste');
        // return redirect()->route('utlisateur_liste');
    }
}

    

