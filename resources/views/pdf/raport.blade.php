<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cetak Laporan</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			* {
				box-sizing: border-box;
			}

			body {
				font-family: Arial, Helvetica, sans-serif;
			}

			.kop {
				background-color: white;
				height: 8%;
				margin-bottom: 0px;
				width: 100%;
			}

			.logo {
				float: left;
				background-color: white;
				text-align: right;
				height: 100%;
				width: 13%;
			}

			.instansi {
				background-color: white;
				height: 100%;
				font-size: 20px;
				text-align: center;
				width: 100%;
			}

			.garis {
				background-color: black;
				height: 0.2%;
				width: 100%;
			}

			/* Style the header */
			header {
				background-color: white;
				padding: 30px;
				margin-top: 0px;
				padding: 0px;
				text-align: center;
				font-size: 18px;
				font: arial;
				color: Black;
			}

			/* Create two columns/boxes that floats next to each other */
			nav {
				float: left;
				width: 95%;
				height: 1600px;
				/* only for demonstration, should be removed */
				background: white;
				padding: 20px;
			}

			/* Style the list inside the menu */
			nav ul {
				list-style-type: none;
				padding: 0;
			}

			article {
				float: left;
				padding-top: 20px;
				width: 29%;
				background-color: white;
				height: 200px;
				/* only for demonstration, should be removed */
			}

			/* Clear floats after the columns */
			section::after {
				content: "";
				display: table;
				clear: both;
			}

			/* Style the footer */

			#customers {
				font-family: Arial, Helvetica, sans-serif;
				border-collapse: collapse;
				width: 100%;
			}

			#customers td,
			#customers th {
				border: 1px solid #ddd;
				padding: 8px;
			}

			#customers tr:nth-child(even) {
				background-color: #f2f2f2;
			}

			#customers tr:hover {
				background-color: #ddd;
			}

			#customers th {
				padding-top: 12px;
				padding-bottom: 12px;
				text-align: left;
				background-color: grey;
				color: white;
			}

			/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
			@media (max-width: 600px) {

				nav,
				article {
					width: 100%;
					height: auto;
				}
			}
		</style>
	</head>
	<body>
		<div class="kop">
			<div class="instansi"> <h2>Muridku</h2>
			</div>
		</div>
		<div class="garis"></div>
		<header>
			<h4>Laporan Nilai</h4>
		</header>
		<section>
			<nav>
				<table>
					
					<tr>
						<td style="width:10%">Mata Pelajaran</td>
						<td style="width:2%">:</td>
						<td style="width:40%">{{$header->mataPelajaran->name}}</td>
					</tr>
					<tr>
						<td style="width:10%">Tahun Ajaran</td>
						<td style="width:2%">:</td>
						<td style="width:40%">{{$header->tahunAjaran->name}}</td>
					</tr>
					<tr>
						<td style="width:10%">Kelas</td>
						<td style="width:2%">:</td>
						<td style="width:40%">{{$header->kelas->name}}</td>
					</tr>
					<tr>
						<td style="width:40%">{{$header->semester}}</td>
					</tr>
					
				</table>
                <table id="customers">
				<tr>
                    <th width="150px">NIS</th>
                    <th>Nama</th>
                    <th >TUGAS</th>
                    <th >UTS</th>
                    <th >UAS</th>
                    <tbody>
                        @foreach ($siswa as $item)
                            <tr>
                                <td>{{$item->nis}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->nilai?->tugas}}</td>
                                <td>{{$item->nilai?->uts}}</td>
                                <td>{{$item->nilai?->uas}}</td>
                            </tr>
                        @endforeach
                    </tbody>
			</table>
			</nav>
		</section>
	</body>
</html>
