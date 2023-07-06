<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{


    public function logincontrole()
    {
        // dd('rak nadi');
        
        try{
           
        $user = Auth::user();
        switch ($user) {
            case $user->hasRole('Admin'):
                return  view('DashbordAdmin');
                break;
            case $user->hasRole('Superviser'):    
                 return  view('DashbordSuperviser');
                break;
            case $user->hasRole('Stagiare'):
                    return   view('DashbordStagiare');
                break;
            case $user->hasRole('Companie'):
                    return   view('DashbordCompanie');
                break;
            default:
                return back();
        }
    }catch(Exception $e){
    return back();

}

    }


}
