@extends('dashboard.partials.dashboard')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data pengajuan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info card-outline">
                        <div class="container">
                            <div class="container">

                            </div>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success text-center" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                </div>
                            @endif
                            @if (session()->has('danger'))
                                <div class="alert alert-danger text-center" role="alert">
                                    <strong>{{ session('danger') }}</strong>
                                </div>
                            @endif
                            <a href="/pengajuan/tambahpengajuan" class="btn btn-success col-2 mt-4">Tambah
                                pengajuan</a>
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">no</th>
                                        <th scope="col">nama kursus</th>
                                        <th scope="col">file</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($kursus as $dp)
                                        {{-- @foreach ($mhs1 as $dp1) --}}
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dp->kursus->nama_kursus }}</td>
                                            <td>{{ $dp->nama_dokumen }}</td>
                                            <td>
                                                @if ($dp->user->status == 0)
                                                    belum disetujui
                                                @else
                                                    sudah disetujui
                                                @endif
                                            </td>
                                            {{-- <td>{{ $dp1->nama_dokumen }}</td> --}}
                                            {{-- <td>
                                                <a class="btn btn-warning text-white"
                                                    href="/datamhs/{{ $dp->id }}">Edit</a>
                                                <form action="/hapuspelanggan/{{ $dp->id }}" method="POST"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger text-white"
                                                        onclick="return confirm('Anda yakin ingin hapus?')"
                                                        type="submit">hapus</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                        {{-- @endforeach --}}
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    </div>
@endsection
