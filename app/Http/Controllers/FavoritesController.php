<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function stote($id)
    {
        \Auth::user()->favorite($id);
        
        return back();
    }
    
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        
        return back();
    }
    
}
