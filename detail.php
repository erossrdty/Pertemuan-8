<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Detail Page</title>
</head>

<body style="background-color: #04293A">
    <!-- Title -->
    <div class="my-3">
        <h1 class="text-light text-center">DETAIL FILM</h1>
    </div>
    <div class="container">
        <!-- Content -->
        <div class="row bg-white rounded-3">
            <?php
            require_once 'db.php';
            $id = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM film INNER JOIN language ON film.language_id = language.language_id WHERE film_id=$id");
            $row = mysqli_fetch_object($query);
            ?>
            <!-- Image -->
            <div class="col-2 mt-4">
                <img src="https://altfilmlens.files.wordpress.com/2022/03/image-4.png?w=627" class="card-img-top" alt="" />
            </div>
            <!-- Overview -->
            <div class="col-9 text-black mt-4">
                <h2><?= $row->title; ?> (<?= $row->release_year; ?>)</h2>
                <div class="d-flex justify-content-start">
                    <span class="badge my-auto me-2 bg-light text-dark"><?= $row->rating; ?></span>
                    <h6 class="my-auto me-2"><?= $row->special_features; ?></h6>
                    <h2 class="mb-1 me-2">&#183;</h2>
                    <h6 class="my-auto me-2"><?= $row->length; ?> min</h6>
                </div>
                <h3 class="mt-3">Overview</h3>
                <p><?= $row->description; ?></p>
                <div class="row">
                    <div class="col mt-4">
                        <h5>Language</h5>
                        <p><?= $row->name; ?></p>
                    </div>
                    <div class="col mt-4">
                        <h5>Rental Duration</h5>
                        <p><?= $row->rental_duration; ?> days</p>
                    </div>
                    <div class="col mt-4">
                        <h5>Rental Rate</h5>
                        <p>$ <?= $row->rental_rate; ?></p>
                    </div>
                    <div class="col mt-4">
                        <h5>Replacement Cost</h5>
                        <p>$ <?= $row->replacement_cost; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-grid gap-2 my-3">
                    <a href="index.php" class="btn btn-primary rounded-3 text-white"><span><i class="bi bi-arrow-left"></i></span> Back</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>