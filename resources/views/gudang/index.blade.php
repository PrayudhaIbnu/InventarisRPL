<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>TAMBAH LOKASI</title>
</head>
<body>
    <a href="gudang/tambah">
        
        <button type="button" class="btn btn-outline-secondary m-3">
            <i class="fa-solid fa-plus"></i>  
            Tambah Lokasi     
        </button>
    </a>
<p>
<table class="table mb-0 w-75 m-auto">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Lokasi Gudang</th>
      <th scope="col">Penanggung Jawab</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        $no = 1;
    ?>
    @foreach($lokasi as $tempat)
    
    <tr>
        <td>
            {{$no++}}
        </td>
        <td>
            {{$tempat->nama_lokasi}}
        </td>
        <td>
            {{$tempat->penanggung_jawab}}
        </td>
        <td>
            {{$tempat->keterangan}}
        </td>
        <td>
            <a href="gudang/edit/{{$tempat->id_lokasi}}">
                <button class="btn btn-outline-success m-2">
                    <i class="fa-solid fa-pen-to-square"></i>
                    EDIT
                </button>
            </a>
            <a href="gudang/hapus/{{$tempat->id_lokasi}}">
                <button class="btn btn-outline-danger m-2">
                    <i class="fa-solid fa-trash"></i>
                    Hapus
                </button>
            </a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- JavaScript Bundle with Popper -->
<script src="https://kit.fontawesome.com/61b10549df.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>