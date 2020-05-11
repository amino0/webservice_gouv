<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function go(Request $request){
       
        $list = json_decode(file_get_contents('http://10.193.71.206:8000/api/individus'));       
    
        //$list =  DB::select("SELECT * FROM creation");
        return view('/welcome', compact('list'));   
       
    }
    public function envoyer(Request $request){
        $nom = $request->nom;
        $email = $request->email;
        $societe = $request->societe;
        $motif = $request->motif;
        DB::table('creation')->insert(
            ['nom' => $nom, 
            'email' =>$email,
            'societe' =>$societe,
            'motif' =>$motif,
          
            ]);
            $last =  DB::select("SELECT * FROM creation ORDER BY id DESC LIMIT 1  ");
           
           



     
        return view('/congratulation', compact('last'));      
    }
    public function action($id){
        $list = json_decode(file_get_contents('http://10.193.71.206:8000/api/individu/'.$id));       
        return view('/action', compact('list'));   
    }
    public function cree(Request $request){
        $nom_user = $request->nom_user;
        $kilo_enfant = $request->kilo_enfant;
        $date_naissance = $request->date_naissance;
        $genre = $request->genre;
        $info_hop = $request->info_hop;
        $nom_bebe = $request->nom_bebe;
        $nom_parent = $request->nom_parent;
        $eid =   $request->input('amin');
        DB::table('individus')->insert(
            ['nom_user' => $nom_user, 
            'kilo_enfant' =>$kilo_enfant,
            'date_naissance' =>$date_naissance,
            'genre' =>$genre,
            'info_hop' =>$info_hop,
            'nom_complet' =>$nom_bebe,
            'nom_pere_mere' =>$nom_parent,
            'e_id' =>$eid,
          
            ]);
        
     
      $response = Http::put("http://10.193.71.206:8000/api/individu/$eid?is_registre=1");


     
      return redirect()->route('go'); 
    }
    public function refuser(Request $request){
        
        $eid =   $request->input('user');
     
        $response = Http::put("http://192.168.1.6:8000/api/individu/$eid?is_registre=0");
  
  
       
        return redirect()->route('go'); 
    }
}
