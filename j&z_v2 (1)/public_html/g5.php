<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered & Responsive Carousel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }

        .carousel-inner {
            border-radius: 10px;
            overflow: hidden;
        }

        .carousel-item {
            border-radius: 10px;
        }

        .carousel-item img {
            border-radius: 10px;
            object-fit: cover;
            height: 300px; /* Adjust the height as needed */
        }

        .carousel-control-prev, .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 50%;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            color: #fff;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 20px;
            color: #fff;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="gallery/gelo1.jpg" class="d-block w-100" alt="Slide 1">
                        <div class="carousel-caption">
                            <h5>Gelo's House</h5>
                            <p>Initial Planning</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="gallery/gelo2.jpg" class="d-block w-100" alt="Slide 2">
                        <div class="carousel-caption">
                            <h5>Gelo's House</h5>
                            <p>Angela, Reb, and Jason</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="gallery/shop_visit1.jpg" class="d-block w-100" alt="Slide 3">
                        <div class="carousel-caption">
                            <h5>J&Z Infront's Cashier</h5>
                            <p>Your description here...</p>
                        </div>
                    </div>
					<div class="carousel-item">
                        <img src="gallery/shop_visit2.jpg" class="d-block w-100" alt="Slide 4">
                        <div class="carousel-caption">
                            <h5>J&Z Dining's Area</h5>
                            <p>Waiting for their order, here we have Angela, Reb, & AJ</p>
                        </div>
                    </div>
					<div class="carousel-item">
                        <img src="gallery/shop_visit2.jpg" class="d-block w-100" alt="Slide 5">
                        <div class="carousel-caption">
                            <h5>J&Z Infront's Store</h5>
                            <p>Located in Maligaya, Tarlac</p>
                        </div>
                    </div>
					<div class="carousel-item">
                        <img src="gallery/store_front.jpg" class="d-block w-100" alt="Slide 6">
                        <div class="carousel-caption">
                            <h5>J&Z Infront's Store</h5>
                            <p>Located in Maligaya, Tarlac</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
