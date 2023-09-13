@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!-- Slider Section (Bootstrap Carousel) -->
<div id="slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slider Images -->
        <div class="carousel-item active">
            <img src="https://ng.jumia.is/cms/0-5-brand-festival/2023/BFEST-LIVE.gif" class="d-block w-100" alt="Advertisement 1">
        </div>
        <div class="carousel-item">
            <img src="https://ng.jumia.is/cms/0-5-brand-festival/2023/Initiatives/Treasure-hunt/Sep-13/712x384-TEASING_13TH_UPDATED.jpg" class="d-block w-100" alt="Advertisement 2">
        </div>
        <!-- Add more slider items as needed -->
    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

<!-- Product Listing Section -->
<div class="container mt-5">
    <h2>Featured Products</h2>
    <div class="row">
        <!-- Product Cards (Repeat as needed) -->
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/05/4680922/1.jpg?8558" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/13/489667/1.jpg?8230" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/00/9532601/1.jpg?1314" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/96/612838/1.jpg?5967" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/05/4680922/1.jpg?8558" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/05/4680922/1.jpg?8558" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/05/4680922/1.jpg?8558" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/05/4680922/1.jpg?8558" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <img src="https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/05/4680922/1.jpg?8558" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        
        <!-- Add more product cards here -->
    </div>
    <!-- Pagination -->
    <nav aria-label="Product Pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">1 <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>

<!-- Footer Section (You can customize this part) -->
<footer class="bg-dark text-light mt-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <h5>Contact Us</h5>
                <p>Email: info@example.com</p>
                <p>Phone: +1 (123) 456-7890</p>
            </div>
            <div class="col-md-6">
                <h5>Follow Us</h5>
                <!-- Add social media icons or links here -->
            </div>
        </div>
    </div>
</footer>
@endsection