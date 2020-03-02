<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\data_table;
use App;
class reports extends Controller
{

	public function index(){
		
		
		return view('login');
	}

	public function home(){
		$data_table = data_table::all();
		$datas = [];
		foreach($data_table as $data){
			$data_array = array(
				"id"			=> $data->id,
				"no_struk" 		=> $data->no_struk,
				"no_register" 	=> $data->no_register,
				"tanggal" 		=> $data->tanggal,
				"kasir" 		=> $data->tanggal,
				"no_kunjungan"  => $data->no_kunjungan,
				"customer"		=> $data->customer,
				"item"			=> $data->item,
				"qty"			=> $data->qty,
				"harga"			=> $data->harga,
				"jumlah"		=> $data->jumlah,
				"total_qty"		=> $data->total_qty,
				"total_bayar"	=> $data->total_bayar,
				"promo"			=> $data->promo,
				"saldo_konsumen"=> $data->saldo_konsumen,
				"retur_penjualan" => $data->retur_penjualan,
				"piutang"		=> $data->piutang,
				"kembalian"		=> $data->kembalian,
				"sisa_saldo"	=> $data->sisa_saldo

			);
			array_push($datas, $data_array);
		}
		return view('welcome', array("datas" => $datas));
	}

	public function get_table(Request $request){
		$date1 = $request->get('date1');
		$date2 = $request->get('date2');

		$data_table = data_table::whereBetween('tanggal', array($date1, $date2))->get();

		$datas = [];
		foreach($data_table as $data){
			$data_array = array(
				"id"			=> $data->id,
				"no_struk" 		=> $data->no_struk,
				"no_register" 	=> $data->no_register,
				"tanggal" 		=> $data->tanggal,
				"kasir" 		=> $data->tanggal,
				"no_kunjungan"  => $data->no_kunjungan,
				"customer"		=> $data->customer,
				"item"			=> $data->item,
				"qty"			=> $data->qty,
				"harga"			=> $data->harga,
				"jumlah"		=> $data->jumlah,
				"total_qty"		=> $data->total_qty,
				"total_bayar"	=> $data->total_bayar,
				"promo"			=> $data->promo,
				"saldo_konsumen"=> $data->saldo_konsumen,
				"retur_penjualan" => $data->retur_penjualan,
				"piutang"		=> $data->piutang,
				"kembalian"		=> $data->kembalian,
				"sisa_saldo"	=> $data->sisa_saldo
			);
			
			array_push($datas, $data_array);
		}
		echo view('table', array("datas" => $datas))->render();
	}

	public function clear_database(){
		//data_table::truncate();
		$delete = DB::table('tb_pajak')->delete();
		
		
	}


	public function import_excell(Request $request){

		$file = $request->file('file_upload');
		$filename = $file->getClientOriginalName();
		$file_ext = $file->getClientOriginalExtension();
		$file_path = $file->getRealPath();
		$file_size = $file->getSize();
		$file_mime = $file->getMimeType();

		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load($file_path);
		$sheetData = $spreadsheet->getSheet(0)->toArray();

		$no = 0;
		for($i = 1;$i < count($sheetData);$i++)
		{
	 		if($i > $no){
	 		    $harga = ($sheetData[$i][9] != null)?str_replace(",","",$sheetData[$i][9]):0;
	 		    if($harga == null){
	 		        $harga = 0;
	 		    }
	 		    
	 		    $jumlah = ($sheetData[$i][10] != null)?str_replace(" ","",str_replace(",","",$sheetData[$i][10])):0;
	 		    if($jumlah == null){
	 		        $jumlah = 0;
	 		    }
	 		    
	 		    $total_qty = ($sheetData[$i][11] != null)?str_replace(",","",$sheetData[$i][11]):0;
	 		    if($total_qty == null){
	 		        $total_qty = 0;
	 		    }
	 		    
	 		    $total_bayar = ($sheetData[$i][12] != null)?preg_replace('/\s+/', '', str_replace(",","",$sheetData[$i][12])):0;
	 		    if($total_bayar == null){
	 		        $total_bayar = 0;
	 		    }
	 		    
	 		    $promo = ($sheetData[$i][13] != null)?preg_replace('/\s+/', '',str_replace(",","",$sheetData[$i][13])):0;
	 		    if($promo == null){
	 		        $promo = 0;
	 		    }
	 		    
	 		    $saldo_konsumen = ($sheetData[$i][14] != null)?preg_replace('/\s+/', '',str_replace(",","",$sheetData[$i][14])):0;
	 		    if($saldo_konsumen == null){
	 		        $saldo_konsumen = 0;
	 		    }
	 		    
	 		    $retur_penjualan = ($sheetData[$i][15] != null)?preg_replace('/\s+/', '',str_replace(",","",$sheetData[$i][15])):0;
	 		    if($retur_penjualan == null){
	 		        $retur_penjualan = 0;
	 		    }
	 		    
	 		    $piutang = ($sheetData[$i][16] != null)?preg_replace('/\s+/', '',str_replace(",","",$sheetData[$i][16])):0;
	 		    if($piutang == null){
	 		        $piutang = 0;
	 		    }
	 		    
	 		    $kembalian = ($sheetData[$i][17] != null)?preg_replace('/\s+/', '',str_replace(")","",str_replace("(", "-", str_replace(",","",$sheetData[$i][17]))))
		 										:0;
		 		if($kembalian == null){
		 		    $kembalian = 0;
		 		}
		 		
		 		$sisa_saldo = ($sheetData[$i][17] != null)?
		 										preg_replace('/\s+/', '',str_replace(")","",str_replace("(", "-", str_replace(",","",$sheetData[$i][18]))))
		 										:0;
		 		if($sisa_saldo == null){
		 		    $sisa_saldo = 0;
		 		}
	 			if($sheetData[$i][1] != null){
		 			$orgDate = str_replace(".", ":",$sheetData[$i][3]);  
	    			$newDate = date("Y-m-d H:i:s", strtotime($orgDate));
		 			$data = array(
		 				"no_struk" 			=> $sheetData[$i][1],
		 				"no_register" 		=> $sheetData[$i][2],
		 				"tanggal" 			=> $newDate,
		 				"kasir" 			=> $sheetData[$i][4],
		 				"no_kunjungan" 		=> $sheetData[$i][5],
		 				"customer" 			=> $sheetData[$i][6],
		 				"item" 				=> $sheetData[$i][7],
		 				"qty" 				=> $sheetData[$i][8],
		 				"harga" 			=> $harga,
		 				"jumlah" 			=> $jumlah,
		 				"total_qty" 		=> $total_qty,
		 				"total_bayar" 		=> $total_bayar,
		 				"promo" 			=> $promo,
		 				"saldo_konsumen" 	=> $saldo_konsumen,
		 				"retur_penjualan"	=> $retur_penjualan,
		 				"piutang"			=> $piutang,
		 				"kembalian"			=> $kembalian,
		 				"sisa_saldo"		=> $sisa_saldo,
		 			);
		 			
		 			DB::table('tb_pajak')->insert($data);	//return redirect('/');
		 		} 
	 		}
	 		
	    }
		 return redirect('/Home');
		}

		public function print(Request $request){
			$uri = explode("/",$request->path());
			$get_data = DB::table('tb_pajak')->where('id',$uri[1])->first();

			return view("print", array("datas" => $get_data));
		}


		public function cetak(Request $request){
			$uri = explode("/",$request->path());
			$get_data = DB::table('tb_pajak')->where('id',$uri[1])->first();
			$pdf = App::make('dompdf.wrapper');
			$print_map = view("print", array("datas" => $get_data))->render();

			$pdf->loadHTML($print_map);
			return $pdf->stream();
		}
	}
