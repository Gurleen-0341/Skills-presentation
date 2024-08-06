<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 800px;
            margin: 0 auto;
        }
        table tr td:last-child {
            width: 150px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <header>
        <h1>Welcome to Bright Shades</h1>
        <p>Your go-to place for stylish sunglasses!</p>
        <input type="text" placeholder="Enter your email for updates">
    </header>

    <!-- Sunglasses Section -->
    <section class="sunglasses">
        <div class="sunglass">
            <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sunglass 1">
            <h2>Classic Aviator</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/1.jpeg" alt="Sunglass 2">
            <h2>$200</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/2.jpeg" alt="Sunglass 3">
            <h2>$400</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/3.jpeg" alt="Sunglass 4">
            <h2>Classic Aviator</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/4.jpeg" alt="Sunglass 5">
            <h2>$300</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/5.jpeg" alt="Sunglass 6">
            <h2>$500</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/6.jpeg" alt="Sunglass 7">
            <h2>$600</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/7.jpeg" alt="Sunglass 8">
            <h2>$400</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/8.jpeg" alt="Sunglass 9">
            <h2>$500</h2>
            <p>stylish for any occassion</p>
        </div>
        <div class="sunglass">
            <img src="images/9.jpeg" alt="Sunglass 10">
            <h2>$400</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/10.jpeg" alt="Sunglass 11">
            <h2>$300</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/11.jpeg" alt="Sunglass 12">
            <h2>$200</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/12.jpeg" alt="Sunglass 13">
            <h2>$100</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <div class="sunglass">
            <img src="images/13.jpeg" alt="Sunglass 14">
            <h2>$400</h2>
            <p>Perfect for sunny days!</p>
        </div>
        <!-- Add more sunglasses here -->
        <!-- Repeat the structure for each sunglass -->
    </section>

    <!-- Navigation -->
    <nav>
        <a href="about.html">About Us</a>
        <a href="listings.html">Sunglasses Listings</a>
        <a href="contact.html">Contact Us</a>
    </nav>

    <footer>
        © 2023 Bright Shades
    </footer>
</body>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Product Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM products";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Product Name</th>";
                            echo "<th>Brand Name</th>";
                            echo "<th>Size</th>";
                            echo "<th>Color</th>";
                            echo "<th>Price</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['product_name']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['brand_name']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['size']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['color']) . "</td>";
                                echo "<td>$" . htmlspecialchars(number_format($row['price'], 2)) . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . htmlspecialchars($row['id']) . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . htmlspecialchars($row['id']) . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . htmlspecialchars($row['id']) . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger"><em>Oops! Something went wrong. Please try again later.</em></div>';
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
