<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .jumbotron {
            background: #007bff;
            color: white;
        }
        .jumbotron h1 {
            font-size: 2.5rem;
        }
        .dropdown-menu a {
            color: #007bff;
        }
        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Asset Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="asset_request_form.php"><i class="fas fa-file-alt"></i> Asset Request Form (Word)</a>
                        <a class="dropdown-item" href="complain_form.php"><i class="fas fa-exclamation-circle"></i> Complain Form (Word)</a>
                        <a class="dropdown-item" href="asset_list.php"><i class="fas fa-list"></i> Asset List</a>
                        <a class="dropdown-item" href="add_asset.php"><i class="fas fa-plus-circle"></i> Add Asset</a>
                        <a class="dropdown-item" href="items_in_stock.php"><i class="fas fa-box-open"></i> Items in Stock</a>
                        <a class="dropdown-item" href="add_items_in_stock.php"><i class="fas fa-cart-plus"></i> Add Items in Stock</a>
                        <a class="dropdown-item" href="items_in_repair.php"><i class="fas fa-tools"></i> Items in Repair</a>
                        <a class="dropdown-item" href="add_items_in_repair.php"><i class="fas fa-wrench"></i> Add Items in Repair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>Welcome to Asset Management System</h1>
        <p>Efficiently manage your assets with our comprehensive system</p>
    </div>

    <div class="container">
        <div class="row">
            <!-- Optionally add some content or sections here if needed -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
