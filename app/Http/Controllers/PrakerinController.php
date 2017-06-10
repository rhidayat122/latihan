<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
class PrakerinController extends Controller
{
    //
    public function percobaan()
    {
    	$a = "1";
    	$b = "2";
    	return view('index', compact('a', 'b'));
    }



	public function sepakbola()
	{
		$me = "Messi";
		$ro = "Ronaldo";
		$re = "Reus";
		$be = "Beckhams";
		$zi = "Zidan";
		return view('sepakbola', compact('me', 'ro', 're', 'be', 'zi'));
	}



	public function makanan()
	{
		$mi = "Indomie";
		$ba = "Bakso";
		$je = "Jengkol";
		$pe = "Peuteuy";
		$tu = "Tumis";
		return view('makanan', compact('mi', 'ba', 'je', 'pe', 'tu'));
	}



	public function pakaian()
	{
		$ju = "Baju";
		$ce = "Celana";
		$ka = "Kaus";
		$to = "Topi";
		$ga = "Gaun";
		return view('pakaian', compact('ju', 'ce', 'ka', 'to', 'ga'));
	}



	public function musim()
	{
		$pa = "Panas";
		$di = "Dingin";
		$sa = "Salju";
		$se = "Semi";
		$ge = "Galau";
		return view('musim', compact('pa', 'di', 'sa', 'se', 'ge'));
	}



	public function olahraga()
	{
		$pi = "Pimpong";
		$bu = "Bulu Tangkis";
		$re = "Renang";
		$at = "Athletic";
		$la = "Lari";
		return view('olahraga', compact('pi', 'bu', 're', 'at', 'la'));
	}

	public function param2($id)
	{

		$a = produk::find('id');
		return $a;
	}

	public function parameter($a)
	{

		if ($a="binatang") {
		return view('welcome2', compact('a'));
	}
	}

	public function param($pilih,$jenis=null)
    {
        $campur = ['binatang'=>['kucing'=>['Persia','Garong','Anggora'],
                                'burung'=>['piit','japati','puyuh'],
                                'ikan'=>['Sepat','Tuna','Hiu']],
                   'komputer'=>['Asus'=>['Laptop','pc','smartphone'],
                                'Dell'=>['Laptop','Pad','Monitor'],
                                'Toshiba'=>['Laptop','Monitor','Pc']],
                   'buah'=>['Mangga'=>['lokal','campur','import'],'Jeruk'=>['bangkok','lokal','sopak'],'Apel'=>['tokyo','indo','malang'] ]];
        if ($pilih){
        $baru=(array_keys($campur[$pilih]));
                   }
        if ($jenis){
        $baru=($campur[$pilih][$jenis]);
                   }
         return view('all',compact('baru','pilih','jenis'));
         

    }
}




