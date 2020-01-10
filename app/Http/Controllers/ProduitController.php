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
    
    public function find($ProdCategorie)
    {
        if ($ProdCategorie=="Sweatshirts") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)->get();
            return view('Sweatshirts',compact('produits'));
        }
        elseif ($ProdCategorie=="T-Shirts") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)->get();
            return view('T-Shirts',compact('produits'));
        }
        elseif ($ProdCategorie=="Accessoires") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)->get();
            return view('Accessoires',compact('produits'));
        }
    }

    
    public function OrderBy($ProdCategorie,$trie)    
    {
        if ($ProdCategorie=="Sweatshirts") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)
                ->orderBy('ProdPrix',"$trie")
                ->get();
            return view('Sweatshirts',compact('produits'));
        }
        elseif ($ProdCategorie=="T-Shirts") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)
                ->orderBy('ProdPrix',"$trie")
                ->get();
            return view('T-Shirts',compact('produits'));
        }
        elseif ($ProdCategorie=="Accessoires") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)
                ->orderBy('ProdPrix',"$trie")
                ->get();
            return view('Accessoires',compact('produits'));
        }
        else
        {
            $produits = Produit::orderBy('ProdPrix', "$trie")->get();
            return view('Accueil',compact('produits'));
        }
        
    }
    public function AddPannier()
    {
        $produits = Produit::add();
        return view('Accueil',compact('produits'));
    }
}
