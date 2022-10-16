<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    
    <h2> Buku Tamu </h2>
    <br>
    <br>
    <form action="/bukutamu/storetambah" method="post">
        {{csrf_field()}}
        Nama  : <input type="text" name="nama" required="required"><br><br>
        No Telephone : <input type="number" name="hp" required="required"><br><br>
        Email : <input type="text" name="email" required="required"><br><br>
        Pesan :  <textarea required="required" name="pesan"></textarea><br><br>
        <input type="submit" value="Simpan">
    </form>
    <br>
    <br>
    <h2>Daftar Buku Tamu</h2>
    
    @foreach ($bukutamu as $b)
    
    <p>ID Tamu = {{$b -> idtamu}}</p>
    <p>Nama = {{$b -> nama_tamu}}</p>
    <p>No Telephone = {{$b-> hp_tamu}}</p>
    <p>Email = {{$b -> email_tamu}}</p>
    <p>Pesan = {{$b -> pesan_tamu}}</p>
    <a href="/bukutamu/edit/{{$b-> idtamu}}">Edit</a>
      |
    <a href="/bukutamu/hapus/{{$b->idtamu}}">Hapus</a><br><br>
    
    @endforeach
    
        
</body>
</html>