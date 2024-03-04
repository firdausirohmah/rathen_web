<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <!-- @foreach($data as $d)
  <img src="{{asset('uploads/'.$d->media->filename)}}" alt="">
  nama: {{$d->name}} <br> 
  nama tim: {{$d->team_name}} <br> 
  pesan: {{$d->pesan}} <br> 
  rating: {{$d->rating}} <br> 

  @endforeach -->
    
    
    <form action="{{route('rating.add')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="kesesuaian">Bagaimana kesesuain desain dengan hasil produksi</label>
            <input type="radio" name="kesesuaian" id="kesesuaian" value="1" class="form-check-input">1 : sangat tidak puas
            <input type="radio" name="kesesuaian" id="kesesuaian" value="2" class="form-check-input">2 : tidak puas
            <input type="radio" name="kesesuaian" id="kesesuaian" value="3" class="form-check-input">3 : biasa saja
            <input type="radio" name="kesesuaian" id="kesesuaian" value="4" class="form-check-input">4 : puas 
            <input type="radio" name="kesesuaian" id="kesesuaian" value="5" class="form-check-input">5 : sangat puas
        </div>
        <div class="form-group">
            <label for="kualitas">bagaimana kualitas produk yang diterima</label>
            <input type="radio" name="kualitas" id="kualitas" value="1" class="form-check-input">1
            <input type="radio" name="kualitas" id="kualitas" value="2" class="form-check-input">2
            <input type="radio" name="kualitas" id="kualitas" value="3" class="form-check-input">3
            <input type="radio" name="kualitas" id="kualitas" value="4" class="form-check-input">4
            <input type="radio" name="kualitas" id="kualitas" value="5" class="form-check-input">5
        </div>
        <div class="form-group">
            <label for="fitur">Bagaimana dengan fitur yang ditawarkan</label>
            <input type="radio" name="fitur" id="fitur" value="1" class="form-check-input">1
            <input type="radio" name="fitur" id="fitur" value="2" class="form-check-input">2
            <input type="radio" name="fitur" id="fitur" value="3" class="form-check-input">3
            <input type="radio" name="fitur" id="fitur" value="4" class="form-check-input">4
            <input type="radio" name="fitur" id="fitur" value="5" class="form-check-input">5
        </div>
        <div class="form-group">
            <label for="waktu_produksi">Bagaimana priode waktu produksi</label>
            <input type="radio" name="waktu_produksi" id="waktu_produksi" value="1" class="form-check-input">1
            <input type="radio" name="waktu_produksi" id="waktu_produksi" value="2" class="form-check-input">2
            <input type="radio" name="waktu_produksi" id="waktu_produksi" value="3" class="form-check-input">3
            <input type="radio" name="waktu_produksi" id="waktu_produksi" value="4" class="form-check-input">4
            <input type="radio" name="waktu_produksi" id="waktu_produksi" value="5" class="form-check-input">5
        </div>
        <div class="form-group">
            <label for="pelayanan">bagaimaan pelayanan dan komunikasi dengan admin</label>
            <input type="radio" name="pelayanan" id="pelayanan" value="1" class="form-check-input">1
            <input type="radio" name="pelayanan" id="pelayanan" value="2" class="form-check-input">2
            <input type="radio" name="pelayanan" id="pelayanan" value="3" class="form-check-input">3
            <input type="radio" name="pelayanan" id="pelayanan" value="4" class="form-check-input">4
            <input type="radio" name="pelayanan" id="pelayanan" value="5" class="form-check-input">5
        </div>
        <div class="form-group">
            <label for="alasan">3 alasan utama kaka membuat jersey di rathen</label>
            <select class="form-select" aria-label="multiple select example" name="alasan[] " id="alasan" multiple>
                <option value="Kualitas produk bagus">Kualitas Produk Bagus</option>
                <option value="Design-design yang keren">Design-design yang keren</option>
                <option value="Memiliki banyak jenis pilihan logo yang premium">Memiliki banyak jenis pilihan logo yang premium</option>
                <option value="Memiliki pilihan kain yang unik dan berbeda">Memiliki pilihan kain yang unik dan berbeda</option>
                <option value="Fitur mewah lasercut">Fitur mewah lasercut</option>
                <option value="Proses produksi yang cepat">Proses produksi yang cepat</option>
                <!-- tambahkan option lainya yang diminta client sesuaikan saja value sama yang ditampilkan-->
            </select>
        </div>
        <div class="form-group">
            <label for="penialaian">Apa saja bsisnis proses atau pelayanan kami yang sudah sangat baik</label>
            <textarea name="penilaian" id="penilaian" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="pesan">Apa saja perbaikan dan inovasi yang perlu kami lakukan agar produk dan pelayanan kami lebih baik lagi</label>
            <textarea name="pesan" id="pesan" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama_tim">Nama Tim</label>
            <input type="text" name="nama_tim" id="nama_tim" class="form-control">
        </div>
        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Submit</button>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>