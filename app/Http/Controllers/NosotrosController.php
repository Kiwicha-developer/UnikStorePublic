<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\HeaderService;

class NosotrosController extends Controller
{
    public function index(){
        //Variables para el header,nav y footer
        $header = new HeaderService();
        $categorias = $header->obtenerCategorias();
        $empresa = $header->obtenerEmpresa();
        $marcas = $header->obtenerMarcas();
        $tipos = $header->obtenerTipo();
        $redes = $header->obtenerLinkRedes();
        $tipoCambio = $header->obtenerCambioDolar();
        
        
        //Variables propias del controlador
        
        return view('nosotros',[
                    'categorias' => $categorias,
                    'empresa' => $empresa,
                    'marcas' => $marcas,
                    'tipos' => $tipos,
                    'redes' => $redes,
                    'tipoCambio' => $tipoCambio,

]);
    }
}