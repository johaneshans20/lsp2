@extends('dashboard.partials.dashboard')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Kursus</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="content mt-5">
            <div class="card card-info card-outline">
                <div class="card-body">
                    <form action="/dataKursus" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Kursus</label>
                            <input type="text" name="nama_kursus" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama Kursus">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Deskripsi Kursus</label>
                            <input type="text" name="deskripsi_kursus" class="form-control" id="exampleFormControlInput1"
                                placeholder="Deskripsi">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Waktu Kursus</label>
                            <input type="date" name="waktu" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Lama Kursus</label>
                            <input type="text" name="lama_kursus" class="form-control" id="exampleFormControlInput1"
                                placeholder="lama kursus"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1').replace(/^0[^.]/, '0');">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Tambah Kursus</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
    </div>
    </div>
@endsection
