<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
        public function index()
    {
        
        $options = [
            'albania' => 'Albania',
            'andorra' => 'Andorra',
            'austria' => 'Austria',
            'belgium' => 'Bélgica',
            'bosnia-and-herzegovina' => 'Bosnia y Herzegovina',
            'bulgaria' => 'Bulgaria',
            'croatia' => 'Croacia',
            'cyprus' => 'Chipre',
            'czech-republic' => 'República Checa',
            'denmark' => 'Dinamarca',
            'estonia' => 'Estonia',
            'finland' => 'Finlandia',
            'france' => 'Francia',
            'germany' => 'Alemania',
            'greece' => 'Grecia',
            'hungary' => 'Hungría',
            'iceland' => 'Islandia',
            'ireland' => 'Irlanda',
            'italy' => 'Italia',
            'latvia' => 'Letonia',
            'liechtenstein' => 'Liechtenstein',
            'lithuania' => 'Lituania',
            'luxembourg' => 'Luxemburgo',
            'macedonia' => 'Macedonia',
            'malta' => 'Malta',
            'moldova' => 'Moldavia',
            'monaco' => 'Mónaco',
            'montenegro' => 'Montenegro',
            'netherlands' => 'Países Bajos',
            'norway' => 'Noruega',
            'poland' => 'Polonia',
            'portugal' => 'Portugal',
            'romania' => 'Rumania',
            'russia' => 'Rusia',
            'san-marino' => 'San Marino',
            'serbia' => 'Serbia',
            'slovakia' => 'Eslovaquia',
            'slovenia' => 'Eslovenia',
            'spain' => 'España',
            'sweden' => 'Suecia',
            'switzerland' => 'Suiza',
            'ukraine' => 'Ucrania',
            'united-kingdom' => 'Reino Unido',
        ];
        
        $optionsProvince = [
            'alava' => 'Álava',
            'albacete' => 'Albacete',
            'alicante' => 'Alicante',
            'almeria' => 'Almería',
            'avila' => 'Ávila',
            'badajoz' => 'Badajoz',
            'barcelona' => 'Barcelona',
            'burgos' => 'Burgos',
            'caceres' => 'Cáceres',
            'cadiz' => 'Cádiz',
            'castellon' => 'Castellón',
            'ciudad-real' => 'Ciudad Real',
            'cordoba' => 'Córdoba',
            'cuenca' => 'Cuenca',
            'gerona' => 'Gerona',
            'granada' => 'Granada',
            'guadalajara' => 'Guadalajara',
            'guipuzcoa' => 'Guipúzcoa',
            'huelva' => 'Huelva',
            'huesca' => 'Huesca',
            'jaen' => 'Jaén',
            'la-rioja' => 'La Rioja',
            'las-palmas' => 'Las Palmas',
            'leon' => 'León',
            'lerida' => 'Lérida',
            'lugo' => 'Lugo',
            'madrid' => 'Madrid',
            'malaga' => 'Málaga',
            'murcia' => 'Murcia',
            'navarra' => 'Navarra',
            'orense' => 'Orense',
            'palencia' => 'Palencia',
            'pontevedra' => 'Pontevedra',
            'salamanca' => 'Salamanca',
            'santa-cruz-de-tenerife' => 'Santa Cruz de Tenerife',
            'segovia' => 'Segovia',
            'sevilla' => 'Sevilla',
            'soria' => 'Soria',
            'tarragona' => 'Tarragona',
            'teruel' => 'Teruel',
            'toledo' => 'Toledo',
            'valencia' => 'Valencia',
            'valladolid' => 'Valladolid',
            'vizcaya' => 'Vizcaya',
            'zamora' => 'Zamora',
            'zaragoza' => 'Zaragoza',
        ];
        
        
        $checkedList = '';
        $checkedCreate = '';
        $afterInsert = session('afterInsert','show movies');
        $country = session('country', 'country');
        $province = session('province', 'province');
        if ($afterInsert == 'show movies'){
            $checkedList = 'checked';
        } else {
            $checkedCreate = 'checked';
        }
        return view('setting.index',['checkedList' =>$checkedList, 'checkedCreate' => $checkedCreate,'options' => $options, 'country' => $country, 'province' => $province, 'optionsProvince' => $optionsProvince]);
    }
    
        public function update(Request $request)
    {
         
         session(['afterInsert' => $request->afterInsert]);
         session(['country' => $request->country]);
         session(['province' => $request->province]);
         return back();
    }
    
}
