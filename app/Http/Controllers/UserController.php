<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Strategy\typeAPI;
use App\DataBase\UserDataMaster;

class UserController extends Controller
{
    public function getValidate(Request $request){
        $tipo = new typeAPI; //Se instancia la clase para verificar el comportamiento
        return $tipo->execute($request);
    }

    public function update(Request $request){   
        return UserDataMaster::update_users($request);
    }

    //Funcion que trae la lista de los detalles del usuario trabajador / empresa
    public function providerdetails(Request $request)
    {
        return UserDataMaster::details($request);
    }
}
