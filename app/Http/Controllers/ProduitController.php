<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{
    public function getAll()
    {
        $produits = Produit::paginate(6);
        return view('Accueil',compact('produits'));
    }
    
    public function find($categorie)
    {
        if ($categorie=="Sweatshirt") 
        {
            $produits=Produit::where('categorie',$categorie)->paginate(6);
            return view('Sweatshirts',compact('produits'));
        }
        elseif ($categorie=="T-Shirt") 
        {
            $produits=Produit::where('categorie',$categorie)->paginate(6);
            return view('T-Shirts',compact('produits'));
        }
        elseif ($categorie=="Accessoire") 
        {
            $produits=Produit::where('categorie',$categorie)->paginate(6);
            return view('Accessoires',compact('produits'));
        }
    }

    
    public function OrderBy($categorie,$trie)    
    {
        if ($categorie=="Sweatshirt") 
        {
            $produits=Produit::where('categorie',$categorie)
                ->orderBy('prix',"$trie")
                ->paginate(6);
            return view('Sweatshirts',compact('produits'));
        }
        elseif ($categorie=="T-Shirt") 
        {
            $produits=Produit::where('categorie',$categorie)
                ->orderBy('prix',"$trie")
                ->paginate(6);
            return view('T-Shirts',compact('produits'));
        }
        elseif ($categorie=="Accessoire") 
        {
            $produits=Produit::where('categorie',$categorie)
                ->orderBy('prix',"$trie")
                ->paginate(6);
            return view('Accessoires',compact('produits'));
        }
        else
        {
            $produits = Produit::orderBy('prix', "$trie")->paginate(6);
            return view('Accueil',compact('produits'));
        }
        
    }
    public function AddPannier()
    {
        $produits = Produit::add();
        return view('Accueil',compact('produits'));
    }
}
