<!DOCTYPE HTML>
<html lang="eng">

<head>
	<title>Rechnung</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link href="{{ asset('css/bootstrap-v4.css') }}" rel="stylesheet" />
	<link href="{{ asset('app/css/invoice.css') }}" rel="stylesheet" />
	<style type="text/css">
		body {
			font-family: 'Helvetica';
			font-size: 13px;
			/* text-transform: uppercase; */
			letter-spacing: 0.3px;
		}

		@media print {
			.printPageButton {
				display: none;
			}
		}

		.greentext {
			color: black;
		}

		.greenbgset {
			background-color: #ebebeb;
			color: #fff;
		}

		.tabledata th {
			background-color: #ebebeb;
			color: black;
			padding: 0px;
		}

		.tabledata td {
			border-bottom: 1px solid #ccc;
		}

		.tabledata tfoot td {
			border-bottom: none;
		}
	</style>

</head>

<body>
	<center class="mb-4 mt-2 printPageButton">
		<div class="container text-center">
			<div class="row">
				{{-- <div class="col-md-6 text-right">
					<form method="POST" action="{{ route('admingenerate.PDF') }}">
						@csrf
						<input type="hidden" name="htmlContent" id="htmlContent">
						<button type="submit" class="btn btn-primary btn btn-primary m-0"><i class="far fa-file-pdf"></i>PDF Speichern</button>
					</form>
				</div> --}}
				{{-- <div class="col-md-3 text-left">
					<button onclick="window.print()" class="btn btn-primary m-0"><i class="fas fa-print"></i> Drucken</button>
				</div> --}}
			</div>
		</div>
	</center>
<section class="p-t-10">
	<div class="container" style="background-color: #fff; background-color: #fff;padding: 30px; max-width: 980px;">
		<table style="width: 100%">
			<tr style="border-bottom:2px solid #000000; middle-align:center">
				<td><img src="{{ asset('img\Volimea_Marke.jpg') }}" style="width:250px;"></td>
				<td style="text-align: right">
					<h4 class="greentext mb-0">{{ $sale->reference_no }}</h4>
					{{-- <svg id="barcode" class="float-right"></svg> --}}
				</td>
			</tr>
		</table>
		<br> <br>
		<table class="w-100">
			<tr>
				<td>
					<i><b>Von</b></i>
				</td>
				<td class="col-md-3">
				</td>
				<td>
					<b>Bestellnummer #{{$sale->reference_no}}</b>
				</td>
			</tr>
			<tr>
				<td>
					<b>Volimea GmbH & Cie.KG,
				</td>
				<td>
				</td>
				<td>
					<b>Rechnungsdatum: {{ $sale->created_at->formatLocalized('%d.%m.%Y,%H:%M:%S') }}</b>
				</td>
			</tr>
			<tr>
				<td>
					Josef-Rodenstock-Straße 5
					37308 Heilbad Heiligenstadt
				</td>
				<td colspan="2">
				</td>
			</tr>
			<tr>
				<td class="pt-4">
					Telefon: +49 (0) 3606 – 50 666 0
				</td>
				<td colspan="2">
				</td>
			</tr>
			<tr>
				<td>
					E-Mail: shop@volimea.de
				</td>
				<td colspan="2">
				</td>
			</tr>
		</table>
		<table class="w-100 mt-4">
			<tr>
				<td class="col-md-4 px-0">
					<b>Lieferadresse</b>
				</td>
				<td class="col-md-4 px-0">
					<b>Rechnungsadresse</b>
				</td>
				<td class="col-md-4 px-0"></td>
			</tr>
			<tr>
				<td class="col-md-4 px-0">
					@if($sale->shipping_address)
						{{$sale->shipping_address->first_name??""}}&nbsp;{{$sale->shipping_address->last_name??""}}
					@else
						{{$sale->billing_address->first_name??""}}&nbsp;{{$sale->billing_address->last_name??""}}
					@endif
				</td>
				<td class="col-md-4 px-0">
					@if($sale->billing_address)
						{{$sale->billing_address->first_name??""}}&nbsp;{{$sale->billing_address->last_name??""}}
					@else
						{{$sale->shipping_address->first_name??""}}&nbsp;{{$sale->shipping_address->last_name??""}}
					@endif
				</td>
				<td class="col-md-4 px-0"></td>
			</tr>
			<tr>
				<td class="col-md-4 px-0">
					@if($sale->shipping_address)
						Email:{{$sale->shipping_address->email??""}}
					@else
						Email:{{$sale->billing_address->email??""}}
					@endif
				</td>
				<td class="col-md-4 px-0">
					@if($sale->billing_address)
						Email:{{$sale->billing_address->email??""}}
					@else
						Email:{{$sale->shipping_address->email??""}}
					@endif
				</td>
				<td class="col-md-4 px-0"></td>
			</tr>
			<tr>
				<td class="col-md-4 px-0">
					@if($sale->shipping_address)
						Telefon:{{$sale->shipping_address->phone??""}}
					@else
						Telefon:{{$sale->billing_address->phone??""}}
					@endif
				</td>
				<td class="col-md-4 px-0">
					@if($sale->billing_address)
						Telefon:{{$sale->billing_address->phone??""}}
					@else
						Telefon:{{$sale->shipping_address->phone??""}}
					@endif
				</td>
				<td class="col-md-4 px-0"></td>
			</tr>
			<tr>
				<td class="col-md-4 px-0">
					@if($sale->shipping_address)
						Straße:{{$sale->shipping_address->street??""}}
					@else
						Straße:{{$sale->billing_address->street??""}}
					@endif
				</td>
				<td class="col-md-4 px-0">
					@if($sale->billing_address)
						Straße:{{$sale->billing_address->street??""}}
					@else
						Straße:{{$sale->shipping_address->street??""}}
					@endif
				</td>
				<td class="col-md-4 px-0"></td>
			</tr>
			<tr>
				<td class="col-md-4 px-0">
					@if($sale->shipping_address)
						Postleitzahl:{{$sale->shipping_address->zip_code??""}}
					@else
						Postleitzahl:{{$sale->billing_address->zip_code??""}}
					@endif
				</td>
				<td class="col-md-4 px-0">
					@if($sale->billing_address)
						Postleitzahl:{{$sale->billing_address->zip_code??""}}
					@else
						Postleitzahl:{{$sale->shipping_address->zip_code??""}}
					@endif
				</td>
				<td class="col-md-4 px-0"></td>
			</tr>
			<tr>
				<td class="col-md-4 px-0">
					@if($sale->shipping_address)
						Stadt:{{$sale->shipping_address->city??""}}
					@else
						Stadt:{{$sale->billing_address->city??""}}
					@endif
				</td>
				<td class="col-md-4 px-0">
					@if($sale->billing_address)
						Stadt:{{$sale->billing_address->city??""}}
					@else
						Stadt:{{$sale->shipping_address->city??""}}
					@endif
				</td>
				<td class="col-md-4 px-0"></td>
			</tr>
			<tr>
				<td class="col-md-4 px-0">
					@if($sale->shipping_address)
						Land:{{ trans('b2c_file.' . ($sale->shipping_address->country?? ''))}}
					@else
						Land:{{ trans('b2c_file.' . ($sale->billing_address->country?? ''))}}
					@endif
				</td>
				<td class="col-md-4 px-0">
					@if($sale->billing_address)
						Land:{{ trans('b2c_file.' . ($sale->billing_address->country?? ''))}}
					@else
						Land:{{ trans('b2c_file.' . ($sale->shipping_address->country?? ''))}}
					@endif
				</td>
				<td class="col-md-4 px-0"></td>
			</tr>
		</table>
		<hr style="border: 1px solid #ccc;">
		<table class="tabledata"
			   style="width: 100%; margin-top:20px;text-align:center; border-spacing: 3px; border-collapse: separate;">
			<thead>
			<tr>
				<th style="padding:6px">#</th>
				<th style="padding:6px">Artikel  &amp; Beschreibung</th>
				{{-- <th style="padding:6px">Variante</th> --}}
				<th style="padding:6px">Menge</th>
				<th style="padding:6px">Einzelpreis</th>
				{{-- <th style="padding:6px;text-align:right">MEHRWERTSTEUER</th> --}}
				<th colspan="5" style="padding:6px;text-align:right">Gesamt</th>
			</tr>
			</thead>
			<tbody>
			@if ($items)
				@foreach ($items as $item)
					<tr>
						<td style="padding:6px" valign="top">1</td>
						<td style="padding:6px" valign="top">
							{{ $item->product->name ?? '' }}
							<small>(#{{ $item->product->code ?? '' }})</small><br>
							@if (!empty($item) && !empty($item->variantColor))
								<p>(Farbe: {{ $item->variantColor->variant_color }})</p>
							@endif
						{{-- <td style="padding:6px" valign="top">{{ $item->variantColor->variant_color ?? Null }}</td> --}}
						<td style="padding:6px" valign="top">{{ $item->qty ?? 1 }}</td>
						<td style="padding:6px;text-align:right" valign="top"><i
									class="fas fa-pound-sign"></i>
							{{ currency_format($item->net_unit_price, 2) }}
						</td>
						{{-- <td style="padding:6px;text-align:right" valign="top"><i
									class="fas fa-pound-sign"></i>
							{{ currency() }}{{ number_format($item->tax, 2) }}</td> --}}
						<td colspan="5" style="padding:6px;text-align:right" valign="top"><i
									class="fas fa-pound-sign"></i>
							{{ currency_format($item->total, 2) }}</td>
					</tr>
				@endforeach
			@endif
			</tbody>
			<tfoot>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th style="text-align:right">Gesamtmenge der Bestellung : &nbsp;</th>
				<td style="text-align:right;font-size:14px;font-weight:bold">{{ $sale->total_qty }}</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th style="text-align:right">Zwischensumme: &nbsp;</th>
				<td style="text-align:right;font-size:14px;font-weight:bold">
					{{ currency_format($sale->total_price, 2) }}</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th style="text-align:right">Rabatt: &nbsp;</th>
				<td style="text-align:right;font-size:14px;font-weight:bold">{{ currency_format($sale->order_discount, 2) }}</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th style="text-align:right">Mehrwertsteuer : &nbsp;</th>
				<td style="text-align:right;font-size:14px;font-weight:bold">{{ currency_format($sale->order_tax, 2) }}</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th style="text-align:right">Kosten für die Lieferung : &nbsp;</th>
				<td style="text-align:right;font-size:14px;font-weight:bold">
					{{ currency_format($sale->shipping_cost, 2) }}</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th style="text-align:right">Gesamtbetrag: &nbsp;</th>
				<td style="text-align:right;font-size:14px;font-weight:bold">
					{{ currency_format($sale->grand_total, 2) }}
				</td>
			</tr>
			</tfoot>
		</table>
		<table class="tabledata"
			   style="width: 100%; margin-top:20px;text-align:center; border-spacing: 3px; border-collapse: separate;">
			<tr>
				<td>
					<hr>
					<center>
						VOLIMEA GmbH & Cie. KG Josef-Rodenstock-Straße 5,<br>
						 37308 Heilbad Heiligenstadt, Deutschland,<br>
						Telefon: +49 (0) 3606 – 50 666 0,<br>
						Telefax: +49 (0) 3606 – 50 666 10,<br>
						E-Mail: info@volimea.de,  Shop: https://shop.volimea.de/<br>
						Registergericht: Amtsgericht Jena, Registernummer: HRA 500 509,<br>
						Ust-ID-Nr.: DE 253 005 465,Amtsgericht Jena HRB 501 269<br>

					</center>

				</td>
			</tr>
		</table>
	</div>
</section>

<script src="{{ asset('app/js/plugins/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/barcode.min.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function() {
		JsBarcode("#barcode", "OR004324", {
			lineColor: "#000",
			width: 1.5,
			height: 20,
			displayValue: false
		});
	});
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
{{-- <script type="text/javascript">
	function CreatePDFfromHTML() {
    var HTML_Width = $("#downloadContainer").width();
    var HTML_Height = $("#downloadContainer").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($("#downloadContainer")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) {
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("purchase-order.pdf");
        // $("#report-workplace").hide();
    });
}

</script> --}}

<!-- Include jsPDF library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	// This code captures the HTML content of the entire page
	document.addEventListener('DOMContentLoaded', function () {
		document.getElementById('htmlContent').value = document.documentElement.innerHTML;
	});
</script>

</body>

</html>
