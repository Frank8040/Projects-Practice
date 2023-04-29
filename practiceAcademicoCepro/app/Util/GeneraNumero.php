<?php

namespace App\Util;

use App\Models\Mantenimiento\InformeEsparrago;
use App\Models\Mantenimiento\MantenimientoPreventivo;
use App\Models\Mantenimiento\OrdenTrabajo;

class GeneraNumero
{
    public static function genera_numero_orden_trabajo()
    {
        return str_pad(OrdenTrabajo::select('numero')
                ->max('numero') + 1, 6, "0", STR_PAD_LEFT);
    }

    public static function genera_numero_mantenimiento_preventivo()
    {
        return str_pad(MantenimientoPreventivo::select('numero')
                ->max('numero') + 1, 6, "0", STR_PAD_LEFT);
    }

    public static function genera_numero_informe_esparrago()
    {
        return str_pad(InformeEsparrago::select('numero')
                ->max('numero') + 1, 6, "0", STR_PAD_LEFT);
    }

}
