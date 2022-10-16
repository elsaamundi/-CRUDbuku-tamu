<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create – Update Database</title>
</head>
<body>
    <h3>Data Pegawai</h3>
    <a href="/bukutamu">Kembali</a>
    <br>
    <br>
@foreach($bukutamu as $b)
<form action="/bukutamu/update" method="post">
    {{ csrf_field() }} 
    <input type="hidden" name="idtamu" value="{{ $b->idtamu }}"> <br/>
    Nama : <br> 
    <input type="text" required="required" name="nama" value="{{ $b->nama_tamu }}"> <br/>
    No Telephone : <br> 
    <input type="text" required="required" name="hp" value="{{ $b->hp_tamu }}"> <br/>
    Email : <br> 
    <input type="text" required="required" name="email" value="{{ $b->email_tamu }}"> <br/>
    Pesan : <br> 
    <textarea required="required" name="pesan"> {{ $b->pesan_tamu }}</textarea> <br><br>
    <input type="submit" value="Simpan Data">
    
</form>

@endforeach

</body>
</html>