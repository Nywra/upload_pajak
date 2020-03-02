<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
	img{
		height: 150px;
		width: 500px;
		display: block;
  		margin-left: auto;
  		margin-right: auto;
		text-align: center;
	}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container-fluid">
	<div class="row">
		<div class="col text-center">
			<img src="/img/logo.jpg">
		</div>
	</div>
<hr>
	<div class="row justify-content-center">
		<div class="col-3">
			<p style="text-align:center; font-weight: bold">
				JL.RAYA CIBADUYUT NO.60,<br>
				66 BANDUNG JAWA BARAT<br>
				Tlp 022-5423013-5423014<br>
			</p>						

		</div>
	</div>

	<div class="row">
		<div class="col">
			<table>
				<tr>
					<td>NO STRUK</td>
					<td> : {{$datas->no_struk}}</td>
				</tr>
				<tr>
					<td>NO REGESTER</td>
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
				<tr>
					<td>CUSTOMER</td>
					<td> : {{$datas->customer}}</td>
				</tr>
			</table>
			<br>
			LIST BARANG
			<hr>
			@php
				//dd($datas);
			@endphp
			<div class="table-responsive">
				<table class="table table-striped table-borderless table-hover">
				  
				  <thead>
						<tr>
							<th class="text-right">ITEM</th>
							<th class="text-center">QTY</th>
							<th class="text-center">HARGA</th>
							<th class="text-center">JUMLAH</th>
						</tr>
					</thead>
				  <tbody>
						<tr>
							<td>{{$datas->item}}</td>
							<td class="text-center">{{$datas->qty}}</td>
							<td class="text-right">Rp. {{number_format($datas->harga)}}</td>
							<td class="text-right">Rp. {{number_format($datas->jumlah)}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<hr>
		</div>
	</div>

	<div class="row justify-content-between">
		<div class="col-2 align-self-start">
			TOTAL QTY
		</div>

		<div class="col-2 align-self-end text-right">
			{{$datas->total_qty}}
		</div>
	</div>

	<div class="row justify-content-between">
		<div class="col-2 align-self-start">
			TOTAL BAYAR
		</div>

		<div class="col-2 align-self-end text-right">
			Rp. {{number_format($datas->total_bayar)}}
		</div>
	</div>

	<div class="row justify-content-between">
		<div class="col-2 align-self-start">
			PROMO
		</div>

		<div class="col-2 align-self-end text-right">
			Rp. {{number_format($datas->promo)}}
		</div>
	</div>
	
	<div class="row justify-content-between">
		<div class="col-2 align-self-start">
			SALDO KONSUMEN
		</div>

		<div class="col-2 align-self-end text-right">
			Rp. {{number_format($datas->saldo_konsumen)}}
		</div>
	</div>

	<div class="row justify-content-between">
		<div class="col-2 align-self-start">
			RETUR PENJUALAN
		</div>

		<div class="col-2 align-self-end text-right">
			Rp. {{number_format($datas->retur_penjualan)}}
		</div>
	</div>

	<div class="row justify-content-between">
		<div class="col-2 align-self-start">
			PIUTANG
		</div>

		<div class="col-2 align-self-end text-right">
			Rp. {{number_format($datas->piutang)}}
		</div>
	</div>

	<div class="row justify-content-between">
		<div class="col-2 align-self-start">
			KEMBALIAN
		</div>

		<div class="col-2 align-self-end text-right">
			Rp. {{number_format($datas->kembalian)}}
		</div>
	</div>

	<div class="row justify-content-between">
		<div class="col-2 align-self-start">
			SISA SALDO
		</div>

		<div class="col-2 align-self-end text-right">
			Rp. {{number_format($datas->sisa_saldo)}}
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-3">
			<p style="text-align:center; font-weight: bold">
				TERIMAKASIH<br>
				SEMOGA ANDA PUAS ATAS<br>
				PELAYANAN KAMI<br>
			</p>						

		</div>
	</div>
</div>

<script type="text/javascript">
	window.print();
</script>