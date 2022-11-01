<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary bg-opacity-25 mb-5">
    <p class="note note-dark text-secondary m-3" >
        FROM TAMBAH LOKASI 
    </p>
</nav>

<form method="POST" action="simpan" class="w-50 m-auto">
<div class="mt-5 container">
  <div class="mb-3">
    <label class="form-label">Nama Lokasi</label>
    <input type="text" name="nama_lokasi" class="form-control"/>
  </div>

  <div class="mb-3">
    <label class="form-label">Penganggung Jawab</label>
    <input type="text" name="penanggung_jawab" class="form-control"/>
  </div>

  <div class="mb-3">
    <label class="form-label">Keterangan</label> 
    <textarea class="form-control" name="keterangan" rows="4"></textarea>
  </div>

  <button type="submit" value="Simpan" class="btn btn-success btn-block">Simpan</button>

</div>
</form>


<script src="https://kit.fontawesome.com/61b10549df.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>