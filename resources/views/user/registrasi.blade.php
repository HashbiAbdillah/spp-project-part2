@extends('template.view')
@section('content')
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Daftar</h3></div>
                                    <div class="card-body">
                                    <form action="{{route('registrasi.submit')}}" method="post">
                                        @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="name" type="text" required/>
                                                <label for="inputnama">Nama petugas </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="username" type="text" />
                                                <label for="inputnama">Buat username pengguna </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" type="password" />
                                                <!-- passwordnya 123 buat tes -->
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Role</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="level">
                                                    <option value="petugas">Petugas</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary">Daftar</button>
                                            </div>
                                            <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Kembali</a>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ahahahahahe 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>