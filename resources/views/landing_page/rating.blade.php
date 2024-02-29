<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  @foreach($data as $d)
  <img src="{{asset('uploads/'.$d->media->filename)}}" alt="">
  nama: {{$d->name}} <br> 
  nama tim: {{$d->team_name}} <br> 
  pesan: {{$d->pesan}} <br> 
  rating: {{$d->rating}} <br> 

  @endforeach
    
    
    <form action="{{route('rating.add')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="radio" name="rate" id="rate" value="1" class="form-check-input">1
            <input type="radio" name="rate" id="rate" value="2" class="form-check-input">2
            <input type="radio" name="rate" id="rate" value="3" class="form-check-input">3
            <input type="radio" name="rate" id="rate" value="4" class="form-check-input">4
            <input type="radio" name="rate" id="rate" value="5" class="form-check-input">5
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
            <label for="note">Ulasan</label>
            <textarea name="note" id="note" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Submit</button>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>