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


<h1>Data Mahasiswa</h1>

<table class="table table-striped">
	<tr>
		<th>nrp</th>
		<th>nama</th>
		<th>alamat</th>
		<th>email</th>
		<th>action</th>
	</tr>
	@foreach($mhs as $m)
	<tr>
		<td>{{$m->nrp}}</td>
		<td>{{$m->nama}}</td>
		<td>{{$m->alamat}}</td>
		<td>{{$m->email}}</td>
		<td>
			<a href="/Home/{{$m->id}}/edit">Edit</a>
			<form action="/Home/{{$m->id}}" method="POST">
				@csrf
				@method('delete')
				<input type="submit" name="Delete" value="hapus">
			</form>
		</td>
	</tr>
	@endforeach
</table>

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

