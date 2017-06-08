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

	public function param($id)
	{

		$a = produk::find('id');
		return $a;
	}

	public function parameter($a)
	{
		return view('welcome2', compact('a'));
	}
}




