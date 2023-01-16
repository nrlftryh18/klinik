                <!doctype html>
                <html lang="en">
                <head>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

                    <title>klinik</title>
                </head>
                <body>
                    <h1 class="text-center">Tambah Data pasien</h1>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="call-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="/insertdata" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="teks" name="nama" class="form-control" id="exampleInputnama1" >
                                    <div id="namalHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                    <label for="exampleInputlamat1" class="form-label">Alamat</label>
                                    <input type="alamat" name="alamat" class="form-control" id="exampleInputalamat1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputusia1" class="form-label">Usia</label>
                                        <input type="usia" name="usia" class="form-control" id="exampleInputusia1" >
                                        <div id="emailHelp" class="form-text"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">No.hp</label>
                                            <input type="no.hp" name="no.hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Riwayat medis</label>
                                                <input type="riwayat medis" name="riwayat medis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Keluhan</label>
                                                    <input type="keluhan" name="keluhan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    <div id="emailHelp" class="form-text"></div>
                                                    </div>
                                                    
                                                <div class="mb-3">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                        </div>  
                        </div>
                    </div>


                    <!-- Optional JavaScript; choose one of the two! -->

                    <!-- Option 1: Bootstrap Bundle with Popper -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

                    <!-- Option 2: Separate Popper and Bootstrap JS -->
                    <!--
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
                    -->
                </body>
                </html>