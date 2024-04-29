<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mart-Dhaka</title>
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- custom css file -->
    <style>
        <?php include "style.css" ?>
    </style>

</head>

<body>


    <?php require("./Shared/Navbar.php"); ?>
    <div class="flex">

        <?php require("./Shared/Sidebar.php") ?>
        <div class="w-full mx-4 py-5">
            <?php
            if (isset($_GET["page"])) {
                if ($_GET["page"] === "dashboard") {
                    require("./Pages/Dashboard.php");
                } elseif ($_GET["page"] === "viewproduct") {
                    require("./Pages/ViewProduct.php");
                } elseif ($_GET["page"] === "viewdetails") {
                    require("./Pages/ProductDetails.php");
                } elseif ($_GET["page"] === "edit") {
                    require("./Pages/EditProduct.php");
                }
            } else {
                require("./Pages/Dashboard.php");
            }
            ?>
        </div>
    </div>

</body>

<script src="index.js"></script>

</html>