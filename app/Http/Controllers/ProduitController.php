<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{
    public function getAll()
    {
        $produits = Produit::all();
        return view('Accueil',compact('produits'));
    }
    
    public function find($categorie)
    {
        if ($categorie=="Sweatshirts") 
        {
            $produits=Produit::where('categorie',$categorie)->get();
            return view('Sweatshirts',compact('produits'));
        }
        elseif ($categorie=="T-Shirts") 
        {
            $produits=Produit::where('categorie',$categorie)->get();
            return view('T-Shirts',compact('produits'));
        }
        elseif ($categorie=="Accessoires") 
        {
            $produits=Produit::where('categorie',$categorie)->get();
            return view('Accessoires',compact('produits'));
        }
    }

    
    public function OrderBy($categorie,$trie)    
    {
        if ($categorie=="Sweatshirts") 
        {
            $produits=Produit::where('categorie',$categorie)
                ->orderBy('prix',"$trie")
                ->get();
            return view('Sweatshirts',compact('produits'));
        }
        elseif ($categorie=="T-Shirts") 
        {
            $produits=Produit::where('categorie',$categorie)
                ->orderBy('prix',"$trie")
                ->get();
            return view('T-Shirts',compact('produits'));
        }
        elseif ($categorie=="Accessoires") 
        {
            $produits=Produit::where('categorie',$categorie)
                ->orderBy('prix',"$trie")
                ->get();
            return view('Accessoires',compact('produits'));
        }
        else
        {
            $produits = Produit::orderBy('prix', "$trie")->get();
            return view('Accueil',compact('produits'));
        }
        
    }
    public function AddPannier()
    {
        $produits = Produit::add();
        return view('Accueil',compact('produits'));
    }
}
