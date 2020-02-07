<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\ShoppingCart\Facade\Cart;

class PanierController extends Controller
{
    public function AjoutPanier(Request $request)
    {
        Cart::add($request->id, $request->libelle, 1, $request->prix)
            ->associate('app\Produit');

            return redirect()->back();
    }
}
