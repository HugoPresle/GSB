<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{
    public function getAll()
    {
        $produits = Produit::all();
        return view('produitAll',compact('produits'));
    }
    
    public function find($ProdCategorie)
    {
        if ($ProdCategorie=="Sweatshirt") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)->get();
            return view('produitSweat',compact('produits'));
        }
        elseif ($ProdCategorie=="T-Shirt") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)->get();
            return view('produitTshirt',compact('produits'));
        }
        else 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)->get();
            return view('produitAutre',compact('produits'));
        }
    }

    
    public function OrderBy($ProdCategorie,$trie)    
    {
        if ($ProdCategorie=="Sweatshirt") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)
                ->orderBy('ProdPrix',"$trie")
                ->get();
            return view('produitSweat',compact('produits'));
        }
        elseif ($ProdCategorie=="T-Shirt") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)
                ->orderBy('ProdPrix',"$trie")
                ->get();
            return view('produitTshirt',compact('produits'));
        }
        elseif ($ProdCategorie=="Autre") 
        {
            $produits=Produit::where('ProdCategorie',$ProdCategorie)
                ->orderBy('ProdPrix',"$trie")
                ->get();
            return view('produitAutre',compact('produits'));
        }
        else
        {
            $produits = Produit::orderBy('ProdPrix', "$trie")->get();
            return view('produitAll',compact('produits'));
        }
        
    }
    public function AddPannier()
    {
        $produits = Produit::add();
        return view('produitAll',compact('produits'));
    }
}
