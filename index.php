<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Server Side-Dinamis 1 (Index Page)</title>
  <style>
      body {
        background-color: #04293A;
      }
    </style>
</head>

<body>
      <header class="py-1">
        <div class="container-fluid px-4 px-lg-4 my-2">
          <div class="text-center text-white">
            <h1 class="display-8 fw-border fs-7">Film Terfavorit 2021</h1>
          </div>
        </div>
      </header>

    <div class="container">
    <button type="button" class="btn btn-primary float-end mt-3"><i class="fas fa-plus-circle"></i> Create</button>
    <div class="row">
      <div class="col-sm input-group mb-3 mt-3">
        <input type="text" class="form-control" id="search" placeholder="Cari Judul Film..." aria-label="Recipient's username" aria-describedby="button-addon2" />
        <button class="btn btn-primary" type="button" id="button-addon2">
          <i class="fas fa-search"></i>
        </button>
      </div>
      <div class="col-sm input-group mb-3 mt-3">
        <select class="form-select" id="filter" aria-label="Default select example">
          <option class="text-muted" selected>Filter film rating</option>
          <?php
          require_once 'db.php';
          $query = mysqli_query($db, "SELECT DISTINCT rating FROM film");
          while ($row = mysqli_fetch_object($query)) :
          ?>
            <option value="<?= $row->rating; ?>"><?= $row->rating; ?></option>
          <?php endwhile; ?>
        </select>
      </div>

      </div>
      <div class="col-sm input-group mb-3 mt-3">
        <select class="form-select" id="sort" aria-label="Default select example">
          <option value="ASC">Urutkan title Dari A</option>
          <option value="DESC">Urutkan title Dari Z</option>
        </select>
      </div>
    </div>
    <div class="row" id="content">
      <?php
      require_once 'db.php';
      $query = mysqli_query($db, "SELECT * FROM film");
      while ($row = mysqli_fetch_object($query)) :
      ?>
      
      <div class="col-sm-auto mt-3">
          <div class="card" style="width: 15rem"> 
            <div class="card">
            <a href="detail.php?id=<?= $row->film_id; ?>">
              <img src="https://altfilmlens.files.wordpress.com/2022/03/image-4.png?w=627" class="card-img-top" alt="" />
            </a>
              <span class="position-absolute top 0 badge" style="background-color: cadetblue"><?= $row->rating; ?></span>
              <div class="container py-3">
              <h5 class="card-title"><?= $row->title; ?> (<?= $row->release_year; ?>)</h5>
                <p class="card-text">
                  <button class="btn" style="float: right; font-size: small"><i class="bi bi-pencil-square" style="color:white;"></i>
                  <i class="bi bi-trash" style="color:white;"></i></button><?= $row->release_year; ?> </p>
                  <p><button class="button">Watch Now</button></p>
              </div>
            </div>
          </div>
        </div>
        
      <?php endwhile; ?>
    </div>
  </div>

  <footer>
    <div class="text-center p-3 mt-3" style="color: rgb(255, 255, 255);">
        Eross Raditya (202410101074)
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/aac75e06ba.js" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#search').on('keyup', function() {
        $.ajax({
          type: 'POST',
          url: 'search.php',
          data: {
            search: $(this).val()
          },
          cache: false,
          success: function(data) {
            $('#content').html(data);
          }
        });
      });

      $('#filter').on('change', function() {
        $.ajax({
          type: 'POST',
          url: 'filter.php',
          data: {
            filter: $(this).val()
          },
          cache: false,
          success: function(data) {
            $('#content').html(data);
          }
        });
      });

      $('#sort').on('change', function() {
        $.ajax({
          type: 'POST',
          url: 'sort.php',
          data: {
            sort: $(this).val()
          },
          cache: false,
          success: function(data) {
            $('#content').html(data);
          }
        });
      });
    });
  </script>
</body>

</html>