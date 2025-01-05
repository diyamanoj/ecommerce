<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Platform</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
}

h1, h2 {
    color: #333;
}

.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: none;
}

.card-title {
    font-weight: bold;
}

footer {
    position: relative;
    bottom: 0;
    width: 100%;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cart">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#orders">Orders</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5 text-center">
        <h1 class="display-4">Welcome to E-Shop!</h1>
        <p class="lead">Discover our latest products and manage your orders easily.</p>
        <a href="#products" class="btn btn-primary btn-lg">Shop Now</a>
    </div>

    <section id="products" class="container my-5">
        <h2 class="text-center mb-4">Product Management</h2>
        <div class="row">
            
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">$29.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">$39.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cart" class="container my-5">
        <h2 class="text-center mb-4">Shopping Cart</h2>
        <p>Your cart is currently empty.</p>
    </section>

  
    <section id="orders" class="container my-5">
        <h2 class="text-center mb-4">Order Management</h2>
        <p>Track your past and current orders here.</p>
    </section>

    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2025 E-Shop. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
