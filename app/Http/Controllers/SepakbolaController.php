<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sepakbola;

class SepakbolaController extends Controller
{
    public function test()
    {
    	$a = sepakbola::all();
    	return $a;
    }

    public function test2($id)
    {
    	$b = sepakbola::find($id);
    	return $b;
    }

    public function index()
    {
    	$id = sepakbola::all();
    	return view('index2', compact('tampilan'));
    }

    public function percobaan5()
    {
    	$buah = ['Mangga', 'Jeruk','Apel', 'Anggur', 'Manggis'];
    	return view('buah', compact('buah'));
    }

    public function ulang()
    {
    	$a = ['adi', 'tatang', 'mamat', 'juju'];
    	return view('index3', compact('a'));
    }

    public function param($data)
    {
        $mamat = ['binatang' => ['Harimau','Monyet','Ikan Tuna','Tikus','Burung Kakatua'],
				  'laptop' => ['Hp','Asus','Toshiba','Samsung','Acer','Axioo'],
                  'kendaraan' => ['Mobil','Motor','Beca','Bus','Truk']];
        $aah  = $mamat[$data];
         return view('mamat.binatang',compact('aah'));

    }
}
