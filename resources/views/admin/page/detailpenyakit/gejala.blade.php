@extends('partials.sidebaradmin')

@section('title' , 'Detail Penyakit | Gejala' , 'active')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Detail Penyakit | Gejala</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="/home">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="/admin/detailpenyakit">Detail Penyakit</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="/admin/detailpenyakit_gejala">Gejala</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title"><b>Detail Penyakit | Gejala</b></h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											&NonBreakingSpace;Tambahkan
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal new-->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-light">
														Tambahkan Detail Penyakit</span> 
														<span class="fw-mediumbold">
															| Gejala
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-sm-12">
															<div class="form-group form-group-default">
																<form action="{{ route('detailpenyakit_gejala.store') }}" method="POST">
																		@csrf
																	<div>
																	<label>Penyakit</label>
																	<select id="kode_penyakit" class="form-control" name="kode_penyakit" style="border: 1px solid #f1f1f1; line-height:40px; padding:10px;">
																		<option value="">Pilih Penyakit</option>
																		@foreach ($penyakit as $dt)
																		<option value="{{ $dt->kode_penyakit }}">{{ $dt->kode_penyakit }} - {{ $dt->nama_penyakit }}</option>
																		@endforeach
																	</select>
																	{{-- <input type="text" class="form-control" name="kode_penyakit" placeholder="masukan kode penyakit" style="border: 1px solid #f1f1f1; line-height:40px; padding-left:10px;"> --}}
																	<br>
																	<label>Gejala</label>
																	<select id="kode_gejala" class="form-control" name="kode_gejala" style="border: 1px solid #f1f1f1; line-height:40px; padding:10px; width:100%;">
																		<option value="">Pilih Gejala</option>
																		@foreach ($gejala as $data)
																			{{-- @foreach ($data->dpGejala as $dt) --}}
																			<option value="{{ $data->kode_gejala }}">{{ $data->kode_gejala }}-{{ $data->nama_gejala }}</option>
																			{{-- @endforeach --}}
																		@endforeach
																		
																	</select>
																	{{-- <input type="text" class="form-control" name="nama_penyakit" placeholder="masukan nama penyakit" style="border: 1px solid #f1f1f1; line-height:40px; padding-left:10px;"> --}}
																	</div>
																	<div class="modal-footer no-bd">
																		<input type="submit" class="btn btn-primary" name="submit" value="Add">
																		{{-- <button type="submit" id="addRowButton" class="btn btn-primary" name="submit">Add</button> --}}
																		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	</div>
																</form>
															</div>
														</div>
													</div>		
												</div>
											</div>
										</div>
									</div>

									
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Penyakit</th>
													<th>Gejala</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											{{-- <tfoot>
												<tr>
													<th>No</th>
													<th>Nama Penyakit</th>
													<th>Action</th>
												</tr>
											</tfoot> --}}
											<tbody>
												@foreach ($datadetailgejala as $dt)
													
												<tr>
													<td>{{ $loop->iteration }}</td>
													<td>{{ $dt->kode_penyakit }} -{{ $dt->penyakit['nama_penyakit'] }}</td>
													<td>{{ $dt->kode_gejala }} -{{ $dt->gejala['nama_gejala'] }}</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal"  title="" data-target="#updateRowModal{{ $dt->id }}" class="btn btn-link btn-warning btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit">&NonBreakingSpace; Edit</i>
															</button>

																{{-- modal update --}}
																<div class="modal fade" id="updateRowModal{{ $dt->id }}" tabindex="-1" role="dialog" aria-hidden="true">
																	<div class="modal-dialog" role="document">
																		<div class="modal-content">
																			<div class="modal-header no-bd">
																				<h5 class="modal-title">
																					<span class="fw-mediumbold">
																					Edit</span> 
																					<span class="fw-light">
																						Detail Penyakit
																					</span>
																				</h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<div class="modal-body">
																					<div class="row">
																						<div class="col-sm-12">
																							<div class="form-group form-group-default">
																								<form action="{{ route('detailpenyakit_gejala.update', $dt->id) }}" method="POST">
																									@method('put')
																									@csrf
																									<div>
																										<label>Penyakit</label>
																										<select id="kode_penyakit" class="form-control" name="kode_penyakit" style="border: 1px solid #f1f1f1; line-height:40px; padding:10px;">
																											<option value="{{ $dt->kode_penyakit }}" hidden>{{ $dt->kode_penyakit }}-{{ $dt->penyakit['nama_penyakit'] }}</option>
																											@foreach ($penyakit as $data)
																											<option value="{{ $data->kode_penyakit }}">{{ $data->kode_penyakit }}-{{ $data->nama_penyakit }}</option>
																											@endforeach
																										</select>
																										{{-- <input type="text" class="form-control" name="kode_penyakit" placeholder="masukan kode penyakit" style="border: 1px solid #f1f1f1; line-height:40px; padding-left:10px;"> --}}
																										<br>
																										<label>Gejala</label>
																										<select id="kode_gejala" class="form-control" name="kode_gejala" style="border: 1px solid #f1f1f1; line-height:40px; padding:10px; width:100%;">
																											<option value="{{ $dt->kode_gejala }}" hidden>{{ $dt->kode_gejala }}-{{ $dt->gejala['nama_gejala'] }}</option>
																											@foreach ($gejala as $data)
																												{{-- @foreach ($data->dpGejala as $dt) --}}
																												<option value="{{ $data->kode_gejala }}">{{ $data->kode_gejala }}{{ $data->nama_gejala }}</option>
																												{{-- @endforeach --}}
																											@endforeach
																											
																										</select>
																										{{-- <input type="text" class="form-control" name="nama_penyakit" placeholder="masukan nama penyakit" style="border: 1px solid #f1f1f1; line-height:40px; padding-left:10px;"> --}}
																									</div>
																								<div class="modal-footer no-bd">
																									<input type="submit" class="btn btn-warning" name="submit" value="Update">
																									{{-- <button type="submit" id="addRowButton" class="btn btn-primary" name="submit">Add</button> --}}
																									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																								</div>
																							</form>
																							</div>
																						</div>
																					</div>		
																			</div>
																			
																		</div>
																	</div>
																</div>

															
															<form action="{{ route('detailpenyakit_gejala.destroy', $dt->id) }}" method="POST">
																@csrf
																@method('delete')
																<button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																	<i class="fa fa-trash">&NonBreakingSpace; Delete</i>
																</button>
															</form>
														</div>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		</div>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>

	<script src="../../js/jquery.3.6.1.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2();
	});
	</script>

	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" data-target="#addRowModal" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			// $('#addRowButton').click(function() {
			// 	$('#add-row').dataTable().fnAddData([
			// 		$("#addNamaPenyakit").val(),
			// 		action
			// 		]);
			// 	$('#addRowModal').modal('hide');

			// });
		});
	</script>

@endsection

