@extends('dashboard.partials.dashboard')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang
                {{ Auth::User()->name }}
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
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
        {{-- <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">nama mahasiswa</th>
                    <th scope="col">nama kursus</th>
                    <th scope="col">file</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($dmaha as $dp) --}}
        {{-- @foreach ($mhs1 as $dp1) --}}
        {{-- <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dp->user->name }}</td>
                        <td>{{ $dp->kursus->nama_kursus }}</td>
                        <td>{{ $dp->nama_dokumen }}</td>
                        <td>
                            @if ($dp->status == 0)
                                belum disetujui
                            @else
                                sudah disetujui
                            @endif
                        </td> --}}
        {{-- <td>{{ $dp1->nama_dokumen }}</td> --}}
        {{-- <td>

                            <form action="/konfirmasi/{{ $dp->id_user }}" method="POST" class="d-inline">

                                @csrf
                                <button class="btn btn-danger text-white"
                                    onclick="return confirm('Anda yakin ingin hapus?')" type="submit">hapus</button>
                            </form>
                        </td>
                    </tr> --}}
        {{-- @endforeach --}}
        {{-- @endforeach

            </tbody>
        </table> --}}
    </main>
@endsection
