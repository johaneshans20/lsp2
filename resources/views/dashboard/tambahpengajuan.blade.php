@extends('dashboard.partials.dashboard')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah pengajuan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="content mt-5">
            <div class="card card-info card-outline">
                <div class="card-body">
                    <form action="/tambahdatapgjn" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Kursus</label>
                            <select name="id_kursus" class="form-control">
                                <option>Pilih kursus</option>
                                @foreach ($kursus as $kr)
                                    <option value="{{ $kr->id }}">{{ $kr->nama_kursus }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group d-flex flex-column">
                            <label for="exampleFormControlFile1">upload krs</label>
                            <input type="file" name="nama_dokumen" class="form-control-file"
                                id="exampleFormControlFile1">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Tambah pengajuan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
    </div>
    </div>
@endsection
