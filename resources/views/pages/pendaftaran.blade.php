@extends('layout',['tittle'=> "FORMULIR PENDAFTARAN SISWA BARU"])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue row">
    <div class="col-md-3">
        <div class="bg-blue text-center py-2">
            <h2><b>LOGIN</b></h2>
        </div>
        <div class="bg-secondary-blue px-5 py-5">
            <form action="">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                  </div>
                  <div class="d-flex justify-content-center">
                      <button class="btn  bg-blue border border-dark border-1" type="submit">Login</button>
                  </div>
            </form>
        </div>
    </div>
    <div class="col-md-9">
        <div class="bg-blue py-2 px-4">
            <h2><b>BIODATA SISWA</b></h2>
        </div>
        <div class="bg-secondary-blue px-5 py-5">
            <form action="" class="fs-4">
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA SISWA</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NAMA SISWA">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="TEMPAT LAHIR">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="TANGGAL">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="BULAN">
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="TAHUN">
                      </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                    <div class="col-sm-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>JENIS KELAMIN</option>
                            <option value="Pria">PRIA</option>
                            <option value="Wanita">WANITA</option>
                          </select>
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NIK">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="ALAMAT">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">AGAMA</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="AGAMA">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NO TELPON</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NO TELPON">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Apakah siswa penerima KPS</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="YA/TIDAK">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NO KPS</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="YA/TIDAK">
                      <small class="fs-5">*Jika Tidak Memiliki  Harap Diisi “0”</small>
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO KK</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO AKTE</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">EMAIL</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="EMAIL">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS TINGGAL</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="JENIS TINGGAL">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ALAT TRANSPORTASI</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="ALAT TRANSPORTASI">
                    </div>
                </div>
            </form>
        </div>


        <div class="bg-blue py-2 px-4 mt-5">
            <h2><b>BIODATA AYAH</b></h2>
        </div>
        <div class="bg-secondary-blue px-5 py-5">
            <form action="" class="fs-4">
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA AYAH</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NAMA AYAH">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="TEMPAT LAHIR">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="TANGGAL">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="BULAN">
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="TAHUN">
                      </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NIK">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="PENDIDIKAN TERAKHIR">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PEKERJAN</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="PEKERJAN">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">STATUS</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="MASIH HIDUP/MENINGGAL">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PENGHASILAN</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="PENGHASILAN">
                    </div>
                </div>
                
            </form>
        </div>

        <div class="bg-blue py-2 px-4 mt-5">
            <h2><b>BIODATA IBU</b></h2>
        </div>
        <div class="bg-secondary-blue px-5 py-5">
            <form action="" class="fs-4">
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA IBU</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NAMA IBU">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="TEMPAT LAHIR">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="TANGGAL">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="BULAN">
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="TAHUN">
                      </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NIK">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="PENDIDIKAN TERAKHIR">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PEKERJAN</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="PEKERJAN">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">STATUS</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="MASIH HIDUP/MENINGGAL">
                    </div>
                </div>
                <div class="row mb-3 px-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">PENGHASILAN</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="PENGHASILAN">
                    </div>
                </div>
                
            </form>
        </div>

        <button class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 rounded">KIRIM</button>
        <p class="fs-4">*Dengan Mengirim, berarti menyetujui untuk mengikuti segala ketentuan dan tata tertib 
            yang sudah di berlakukan oleh Paud Assbiyan.
            </p>
        
    </div>

    

</div>
@endsection