<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<div class="fcontainer">

  <nav class="wrapper2">
      <div class="d">
      <a class="navbar-brand " href="#">Simple Siakad</a>
      </div>
      <div class="tombol">
        <button type="button" class="btn btn-light"><a class="Home" href="/Home">Data Mahasiswa</a></button>
      <button type="button" class="btn btn-light"><a class="Create" href="/Home/Create">Input Data</a></button>
      <button type="button" class="btn btn-light"><a class="About" href="/about">About Me</a></button>
    </div>
   </nav>
  
</div>
<h1>Detail Data Mahasiswa</h1>
<form action='/Home/{{$mhs->id}}' method="POST">
   @method('put')
   @csrf
        <p>
          <label for="">Nama Mahasiswa</label>
          <input type="text" name="nama" value="{{$mhs->nama}}">
        </p>
        <p>
          <label for="">Alamat Email</label>
          <input type="text" name="email"value="{{$mhs->email}}">
        </p>
        <p>
          <label for="">NIM</label>
          <input type="text" name="nrp" value="{{$mhs->nrp}}">
        </p>
        <p>
          <label for="">Alamat Rumah</label>
          <input type="text" name="alamat"value="{{$mhs->alamat}}">
        </p>
        <input type="submit" name="submit" value="save">
        </p>
      </form>

<div class="fcontainer">
  <nav class="wrapper">
      <div>
        <div class="gambar"><center><img src= "{{asset ('image/LogoUTM.png')}}" style="width: 70px;" class="mt-3"></center></div>
        <div class="first"><b>Jurusan Teknik Informatika<br> Unversitas Trunojoyo Madura</b><br>
          JL. Raya Telang, Kecamatan Kamal, Bangkalan <br>69162 Indonesia <br>Kampus Universitas Trunojoyo Madura

        </div>
      </div>    
       <ul class="Contact">
      <td>Contact</td><br>
      <td>Telp : 031-3011146</td><br>
      <td>Fax : 031-3011506</td><br>
      <td>Email : if.ft@Trunojoyo.ac.id</td>  
      </ul>
       <ul class="Layanan">
      <td>Layanan</td><br>
      <td>Pembayaran UKT</td><br>
      <td>Pendaftaran KP</td><br>
      <td>Pendaftaran Wisuda</td><br>
      <td>Administrasi</td>        
      </ul>
       <ul class="Resource">
      <td>Resource</td><br>
      <td>e-jurnal</td><br>
      <td>portal tugas</td><br>
      <td>website resmi kampus</td><br>
      <td>download administrasi</td>           
      </ul>
   </nav>
  
</div>
</body>
<style type="text/css">
  form{
    display: grid;
    grid-template-columns: 1fr 1fr ;
  }
  form label{
    display: block;
  }
  .fcontainer{
    display: flex;
    justify-content: center;
  }
    .wrapper{
    display: flex;
    justify-content: space-between;
    font-size: 17px;
    padding: 15px;
    width: 3000px;
    height: 285px;
    margin-top: 200px;
    background-color: deepskyblue;
  }
  .wrapper2{
    display: flex;
    justify-content: space-between;
    font-size: 17px;
    padding-left: 850px;
    width: 3000px;
    height: 70px;
    background-color: deepskyblue;
  }
  .tombol{
    margin-top: 20px;
  }
      .d{
    margin-left: -800px;
  }
    .gambar{
    margin-left: -170px;
  }
    .first{
    margin-top: 20px;
    margin-left: 50px;
  }
    .Layanan{
    margin-top: 50px;
    margin-right: 50px;
  }
  .Contact{
    margin-top: 50px;
    margin-right: 50px;
  }
    .Resource{
    margin-top: 50px;
    margin-right: 50px;
  }
</style>
</html>

