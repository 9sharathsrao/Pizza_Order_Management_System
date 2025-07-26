<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="css/remixicon.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/sidebar-menu.css" />
    <link rel="stylesheet" href="css/simplebar.css" />
    <link rel="stylesheet" href="css/apexcharts.css" />
    <link rel="stylesheet" href="css/prism.css" />
    <link rel="stylesheet" href="css/rangeslider.css" />
    <link rel="stylesheet" href="css/sweetalert.min.css" />
    <link rel="stylesheet" href="css/quill.snow.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link rel="icon" type="image/png" href="images/favicon.png" />

    <title>Farol - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">F</span>
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">R</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">L</span>
            </div>
        </div>
    </div>

    <div class="sidebar-area" id="sidebar-area">
        <div class="logo position-relative">
            <a href="index.html" class="d-block text-decoration-none">
                <img src="images/logo-icon.png" alt="logo-icon" />
                <span class="logo-text fw-bold text-dark">Farol</span>
            </a>
            <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
                <i data-feather="x"></i>
            </button>
        </div>
        <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar="">
            <ul class="menu-inner">
                <li class="menu-item">
                    <a href="chat.html" class="menu-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid menu-icon tf-icons">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="pie-chart" class="menu-icon tf-icons"></i>
                        <span class="title">Pizzas</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pizza_list.php" class="menu-link"> Pizza List </a>
                        </li>
                        <li class="menu-item">
                            <a href="pizza_form.html" class="menu-link"> Add New Pizza </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="life-buoy" class="menu-icon tf-icons"></i>
                        <span class="title">Pizza Toppings</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pizza_toppings_list.php" class="menu-link">
                                Pizza Toppings List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pizza_toppings_form.html" class="menu-link">
                                Add New Pizza Toppings
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="layers" class="menu-icon tf-icons"></i>
                        <span class="title">Pizza Types</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pizza_list.php" class="menu-link">
                                Pizza Types List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pizza_types_form.html" class="menu-link">
                                Add New Pizza Type
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="title" style="padding-left: 15px">Customers</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="customer_list.php" class="menu-link">
                                Customer List
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="customers_form.html" class="menu-link">
                                Add New Customer
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle active">
                        <i data-feather="printer" class="menu-icon tf-icons"></i>
                        <span class="title">Orders</span>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pizza_orders_list.php" class="menu-link"> Orders List </a>
                        </li>
                        <li class="menu-item">
                            <a href="orders_form.php" class="menu-link">
                                Add New Order
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
    </div>

    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            <header class="header-area bg-dark mb-4 rounded-bottom-10" id="header-area">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="left-header-content">
                            <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                                <li>
                                    <button class="header-burger-menu bg-transparent p-0 border-0 text-light" id="header-burger-menu">
                                        <i data-feather="menu"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-md-8">
                        <div class="right-header-content mt-2 mt-sm-0">
                            <ul class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                                <li class="header-right-item">
                                    <div class="dropdown admin-profile">
                                        <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor" data-bs-toggle="dropdown">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-circle wh-54" src="images/admin.jpg" alt="admin" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-none d-xxl-block">
                                                        <!-- <span class="degeneration">Admin</span> -->
                                                        <div class="d-flex align-content-center text-light">
                                                            <h3 class="text-light">Adison Jeck</h3>
                                                            <div class="down">
                                                                <i class="text-light" data-feather="chevron-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body" href="profile.html">
                                                    <i data-feather="user"></i>
                                                    <span class="ms-2">Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body" href="account.html">
                                                    <i data-feather="settings"></i>
                                                    <span class="ms-2">Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body" href="logout.html">
                                                    <i data-feather="log-out"></i>
                                                    <span class="ms-2">Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
                <h3 class="mb-sm-0 mb-1 fs-18">Add Pizza Order</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-5">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel" aria-labelledby="preview-tab" tabindex="0">
                                    <form method="post" action="add_order.php">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Pizza</label>
                                                    <?php
                                                    // Database connection
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "pizza_order_management";

                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // Query to fetch dropdown values
                                                    $sql = "SELECT PizzaID, PizzaName FROM Pizzas";
                                                    $result = $conn->query($sql);

                                                    // Check if query was successful
                                                    if (!$result) {
                                                        die("Query failed: " . $conn->error);
                                                    }

                                                    // Fetching data and creating options for dropdown
                                                    $pizzaOptions = "";
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $pizzaOptions .= "<option value='" . $row["PizzaID"] . "'>" . $row["PizzaName"] . "</option>";
                                                        }
                                                    } else {
                                                        $pizzaOptions = "<option value=''>No options available</option>";
                                                    }

                                                    // Close connection
                                                    $conn->close();
                                                    ?>
                                                    <div class="form-group position-relative">
                                                        <select id="pizza_id" name="pizza_id" class="form-control">
                                                            <option value="">Select Pizza</option>
                                                            <?php echo $pizzaOptions; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Customer</label>
                                                    <?php
                                                    // Database connection
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "pizza_order_management";

                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // Query to fetch dropdown values
                                                    $sql = "SELECT CustomerID, FirstName, LastName FROM Customers";
                                                    $result = $conn->query($sql);

                                                    // Check if query was successful
                                                    if (!$result) {
                                                        die("Query failed: " . $conn->error);
                                                    }

                                                    // Fetching data and creating options for dropdown
                                                    $customerOptions = "";
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $fullName = $row["FirstName"] . " " . $row["LastName"];
                                                            $customerOptions .= "<option value='" . $row["CustomerID"] . "'>" . $fullName . "</option>";
                                                        }
                                                    } else {
                                                        $customerOptions = "<option value=''>No options available</option>";
                                                    }

                                                    // Close connection
                                                    $conn->close();
                                                    ?>
                                                    <div class="form-group position-relative">
                                                        <select id="customer_id" name="customer_id" class="form-control">
                                                            <option value="">Select Customer</option>
                                                            <?php echo $customerOptions; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Pizza Type</label>
                                                    <?php
                                                    // Database connection
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "pizza_order_management";

                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // Query to fetch dropdown values
                                                    $sql = "SELECT PizzaTypeID, TypeName FROM Pizzatypes";
                                                    $result = $conn->query($sql);

                                                    // Check if query was successful
                                                    if (!$result) {
                                                        die("Query failed: " . $conn->error);
                                                    }

                                                    // Fetching data and creating options for dropdown
                                                    $pizzaTypeOptions = "";
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $pizzaTypeOptions .= "<option value='" . $row["PizzaTypeID"] . "'>" . $row["TypeName"] . "</option>";
                                                        }
                                                    } else {
                                                        $pizzaTypeOptions = "<option value=''>No options available</option>";
                                                    }

                                                    // Close connection
                                                    $conn->close();
                                                    ?>
                                                    <div class="form-group position-relative">
                                                        <select id="pizza_type_id" name="pizza_type_id" class="form-control">
                                                            <option value="">Select Pizza Type</option>
                                                            <?php echo $pizzaTypeOptions; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Pizza Toppings</label>
                                                    <?php
                                                    // Database connection
                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "pizza_order_management";

                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // Query to fetch dropdown values
                                                    $sql = "SELECT ToppingID, ToppingName FROM Pizzatoppings";
                                                    $result = $conn->query($sql);

                                                    // Check if query was successful
                                                    if (!$result) {
                                                        die("Query failed: " . $conn->error);
                                                    }

                                                    // Fetching data and creating options for dropdown
                                                    $pizzaToppingsOptions = "";
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $pizzaToppingsOptions .= "<option value='" . $row["ToppingID"] . "'>" . $row["ToppingName"] . "</option>";
                                                        }
                                                    } else {
                                                        $pizzaToppingsOptions = "<option value=''>No options available</option>";
                                                    }

                                                    // Close connection
                                                    $conn->close();
                                                    ?>
                                                    <div class="form-group position-relative">
                                                        <select id="topping_id" name="topping_id" class="form-control">
                                                            <option value="">Select Pizza Topping</option>
                                                            <?php echo $pizzaToppingsOptions; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Quantity</label>
                                                    <div class="form-group position-relative">
                                                        <input type="number" id="quantity" name="quantity" class="form-control" placeholder="Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Sub-Total</label>
                                                    <div class="form-group position-relative">
                                                        <input type="number" id="subtotal" name="subtotal" class="form-control" placeholder="Subtotal">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Payment Date</label>
                                                    <div class="form-group position-relative">
                                                        <input type="date" id="payment_date" name="payment_date" class="form-control" placeholder="Payment Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Payment Method</label>
                                                    <div class="form-group position-relative">
                                                        <input type="text" id="payment_method" name="payment_method" class="form-control" placeholder="Payment Method">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                                <button type="submit" class="btn btn-outline-warning fw-semibold py-2 px-4 mt-2 me-2 hover-white">
                                                    Submit
                                                </button>
                                                <button type="submit" class="btn btn-outline-danger fw-semibold py-2 px-4 mt-2 me-2 hover-white">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-grow-1"></div>

            <footer class="footer-area bg-dark text-center rounded-top-10">
                <p class="fs-14">
                    Copyright © <span class="text-primary">Pizza Order Management System</span>
                </p>
            </footer>
        </div>
    </div>

    <script data-cfasync="false" src="js/email-decode.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebar-menu.js"></script>
    <script src="js/dragdrop.js"></script>
    <script src="js/rangeslider.min.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="js/quill.min.js"></script>
    <script src="js/data-table.js"></script>
    <script src="js/prism.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/feather.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>