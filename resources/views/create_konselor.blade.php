<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Create Konselor</title>
  </head>
  <body>
      <div class="container">
          <div class="mt-3">
              <h2>Create Konselor</h2>
            <form method="post" action="admin">
              @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="nomor_induk">Nomor Induk</label>
                    <input type="text" class="form-control" id="nomor_induk">
                </div>
                <div class="form-group">
                    <label for="date_employee">Date Employee (HH/BB/TTTT)</label>
                    <input type="text" class="form-control" id="date_employee">
                </div>
                <div class="form-group">
                    <label for="tipe">Tipe</label>
                    <select class="form-control" id="tipe">
                      <option value="krisis">Krisis</option>
                      <option value="fasilitatif">Fasilitatif</option>
                      <option value="preventif">Preventif</option>
                      <option value="developmental">Developmental</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <a href="admin"><button class="btn btn-secondary mt-2">Back</button></a>
          </div>
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>