<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Form Bukti Usaha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <div class="container">
    <div class="global-container">
      <div class="card login-form shadow  p-auto m-3">
     <img src="img/logo-diskopindag.png" class="logo  mx-auto d-block " alt="logo">
    <form action=" " method="POST" >
        <div class="form-group row mb-4">
     
        <div class="form-group row mb-4">
        <div class="mb-3">
            <label for="Kategori" class="form-label mb-2 pe-5 me-5">Kategori Usaha</label>
            <div class="col-sm-10">
                <select type="text" class="form-control" id="Kategori" placeholder="Kategori" name="Kategori">
                    <option value="Bisnis">Bisnis</option>
                    <option value="Teknologi">Teknologi</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Pertanian">Pertanian</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-4">
        <div class="mb-3">
            <label for="Judul" class="form-label mb-2 pe-5 me-5">Nama Usaha</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_usaha" placeholder="nama usaha" name="nama usaha">
            </div>
        </div>
        <div class="form-group row mb-4">
        <div class="mb-3">
            <label for="file" class="form-label mb-2 pe-5 me-5">Upload Bukti Usaha</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="file" name="files">
            </div>
        </div>
        <a href="/home"><button type="button" class="btn btn-primary "> Submit </button></a>
        </div>
      </form>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html> 