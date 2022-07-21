@extends('dashboard.partials.dashboard')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Mahasiswa</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="content mt-5">
            <div class="card card-info card-outline">
                <div class="card-body">
                    <form action="/tambahdataMhs" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Mahasiswa : </label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NPM</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Tambah Mahasiswa</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
    </div>
    </div>
@endsection
