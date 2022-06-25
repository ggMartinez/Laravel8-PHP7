<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function testcito(Request $request){
        $coso = [
            'dato' => 'dato',
            'dato2' => 'dato2'
        ];

        $res = json_encode($coso);
        return $res;
    }

}
