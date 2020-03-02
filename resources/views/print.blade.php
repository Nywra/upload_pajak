<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<style type="text/css">
	img{
		height: 12.5mm;
		width: 35mm;
		display: block;
  		margin-left: auto;
  		margin-right: auto;
		text-align: center;
	}

	body{
		max-width: 80mm;
		height: 120mm;
		font-family: calibri;
	}

	@media print 
	{
	   @page
	   {
	    margin: 0.1in;
	    //padding: 0.05in;
	    size: portrait;
	  }
	}
	
	table {
        border-collapse: collapse;
        border-style: hidden;
    }
    
    th{
        font-weight:400;
    }
	
	hr{
	    border: solid black 1px;
	    padding:0px;
	    margin:0 0 0 0;
	}

	p{
	}

	label{
		font-size:3.5mm;
	}

	div{
		font-size:3.5mm;
	}
</style>	
</head>
<body>
<div class="container-fluid">
	<div class="row">
		
	</div>
	<div class="row justify-content-center">
	    <div class="col text-center">
			<img src="{{asset('img/logo.jpg')}}">
		</div>
		<div class="col-3" style="margin-top:-15px">
			<p style="text-align:center;">
				JL.RAYA CIBADUYUT NO.60,<br>
				66 BANDUNG JAWA BARAT<br>
				Tlp 022-5423013-5423014<br>
			</p>						
		</div>
	</div>
    <hr style='margin-top:-10px; margin-botom:0'>
	<div class="row">
		<div class="col">
			<table border='0'>
				<tr>
					<td>NO STRUK</td>
					<td> : {{$datas->no_struk}}</td>
				</tr>
				<tr>
					<td>NO REGISTER</td>
					<td> : {{$datas->no_register}}</td>
				</tr>
				<tr>
					<td>TANGGAL</td>
					<td> :  {{$datas->tanggal}}</td>
				</tr>
				<tr>
					<td>KASIR</td>
					<td> :  {{$datas->kasir}}</td>
				</tr>
				<tr>
					<td>NO KUNJUNGAN</td>
					<td> :  {{$datas->no_kunjungan}}</td>
				</tr>
				<!--<tr>-->
				<!--	<td>CUSTOMER</td>-->
				<!--	<td> : {{$datas->customer}}</td>-->
				<!--</tr>-->
			</table>
			
		</div>
	</div>
	
	<div class="row">
	    <div class="col" style="margin-top:7px">
	        <label>LIST BARANG</label>
	    </div>
	</div>
    <hr>
    
    
			@php
				//dd($datas);
			@endphp
			<table border='0' style="width: 100%">
			  
			  <thead style="border:1px solid black;">
					<tr>
						<th class="text-right">ITEM</th>
						<th class="text-center">QTY</th>
						<th class="text-center">HARGA</th>
						<th class="text-center">JUMLAH</th>
					</tr>
				</thead>
			  <tbody>
					<tr>
						<td style="width:150px">{{$datas->item}}</td>
						<td class="text-center" style="text-align:right">{{$datas->qty}}</td>
						<td class="" style="text-align:right">{{number_format($datas->harga)}}</td>
						<td class="text-right" style="text-align:right">{{number_format($datas->jumlah)}}</td>
					</tr>
				</tbody>
			</table>
			<hr>
	<table style="width: 100%" border='0'>
		<tr>
			<th style="text-align: left">TOTAL QTY : {{$datas->total_qty}}</th>
			<th  style="text-align: right"></th>
		</tr>
		<tr>
			<th style="text-align: left">TOTAL BAYAR</th>
			<th  style="text-align: right">Rp. {{number_format($datas->total_bayar)}}</th>
		</tr>
		<tr>
			<th style="text-align: left">PROMO</th>
			<th  style="text-align: right">Rp. {{number_format($datas->promo)}}</th>
		</tr>
		<!--<tr>-->
		<!--	<th style="text-align: left">SALDO KONSUMEN</th>-->
		<!--	<th  style="text-align: right">Rp. {{number_format($datas->saldo_konsumen)}}</th>-->
		<!--</tr>-->
		<!--<tr>-->
		<!--	<th style="text-align: left">RETURN PENJUALAN</th>-->
		<!--	<th  style="text-align: right">Rp. {{number_format($datas->retur_penjualan)}}</th>-->
		<!--</tr>-->
		<!--<tr>-->
		<!--	<th style="text-align: left">PIUTANG</th>-->
		<!--	<th  style="text-align: right">Rp. {{number_format($datas->piutang)}}</th>-->
		<!--</tr>-->
		<tr>
			<th style="text-align: left">KEMBALIAN</th>
			<th  style="text-align: right">Rp. {{number_format($datas->kembalian)}}</th>
		</tr>
		<!--<tr>-->
		<!--	<th style="text-align: left">SISA SALDO</th>-->
		<!--	<th  style="text-align: right">Rp. {{number_format($datas->sisa_saldo)}}</th>-->
		<!--</tr>-->
	</table>
    <hr style="margin-bottom:-10px">
	<div class="row justify-content-center">
		<div class="col-3">
			<p style="text-align:center;">
				TERIMAKASIH<br>
				SEMOGA ANDA PUAS ATAS<br>
				PELAYANAN KAMI<br>
			</p>						

		</div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	window.print();
</script>
