<?php


namespace App\Util;


use App\Http\Controllers\Controller;

class ConsultaRucDni extends Controller
{
    public static function dni($dni)
    {
        $ruta = "http://consultas.imperiumse.com/api/auth/dni/" . $dni;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $ruta,
            CURLOPT_HTTPHEADER
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
    }


    public static function ruc($ruc)
    {
        $ruta = "http://consultas.imperiumse.com/api/auth/ruc/" . $ruc;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $ruta,CURLOPT_HTTPHEADER
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
    }

}
