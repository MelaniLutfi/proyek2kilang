@extends('partials.sidebaradmin')

@section('title' , 'Detail Penyakit | Gejala' , 'active')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="form-header" style="padding-bottom: 40px;">
                <h4 class="page-title">Data Detail Penyakit | Gejala</h4>
					<ul class="breadcrumbs">
						<li class="nav-home">
							<a href="/admin/home">
								<i class="flaticon-home"></i>
							</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="/admin/penyakit">Manajemen Data</a>
						</li>
                        <li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="/admin/penyakit">Detail Penyakit</a>
						</li>
                        <li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="/admin/detailpenyakit_gejala">Gejala</a>
						</li>
                        <li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="/admin/penyakit">Tambahkan Gejala</a>
						</li>
					</ul>
            </div>
            <div class="form-body" style="padding-left: 27px">
                <form action="" method="POST">
                    @csrf
                <div>
                <label>Nama Penyakit</label>
                <select id="id_penyakit" class="form-control" name="id_penyakit" style="border: 1px solid #f1f1f1; line-height:40px; padding:10px;">
                    <option value="">Pilih Penyakit</option>
                    {{-- @foreach ($datapenyakit as $dt)
                    <option value="{{ $dt->id }}">{{ $dt->nama_penyakit }}</option>
                    @endforeach --}}
                </select>
                {{-- <input type="text" class="form-control" name="kode_penyakit" placeholder="masukan kode penyakit" style="border: 1px solid #f1f1f1; line-height:40px; padding-left:10px;"> --}}
                <br>
                <label>Gejala</label>
                <select id="id_gejala" class="form-control" name="id_gejala" style="border: 1px solid #f1f1f1; line-height:40px; padding:10px;">
                    <option value="">Pilih Gejala</option>
                    {{-- @foreach ($datapenyakit as $data)
                        {{-- @foreach ($data->dpGejala as $dt) --}}
                        {{-- <option value="{{ $data->nama_gejala }}">{{ $data->nama_gejala }}</option> --}}
                        {{-- @endforeach --}}
                    {{-- @endforeach --}}
                    
                </select>
                {{-- <input type="text" class="form-control" name="nama_penyakit" placeholder="masukan nama penyakit" style="border: 1px solid #f1f1f1; line-height:40px; padding-left:10px;"> --}}
                </div>
                <div class="modal-footer no-bd">
                    <input type="submit" class="btn btn-success" name="submit" value="Add">
                    {{-- <button type="submit" id="addRowButton" class="btn btn-primary" name="submit">Add</button> --}}
                    <a href="/admin/detailpenyakit_gejala" class="btn btn-default">Kembali</a>
                </div>
                </form>
            </div>    
        </div>
    </div>
</div>


@endsection