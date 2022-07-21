@extends('partials.home')
@section('body')
    <!-- content -->
    <div class="container mt-20">
        <div class="col-lg-4 offset-lg-4">
            <div class="card mt-4">
                <div class="card-body bg-info bg-gradient bg-opacity-50">
                    <div class="container">
                        <h2 class="pt-4 text-center mb-5">Silahkan Login</h2>
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
                    <form action="/authLogin" method="POST">
                        @csrf
                        <div class="col-lg mt-2">
                            <input type="text" id="username" name="username" class="form-control"
                                placeholder="NPM atau username">
                        </div>
                        <div class="col-lg mt-2">
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Password">
                        </div>
                        <div class="cotainer mt-5">
                            <div class="d-flex justify-content-center mt-5">
                                <button class="btn btn-success bg-gradient opacity-75" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end content -->
@endsection
