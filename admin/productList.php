<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'db.php';

// Fetch all records from the Books table
$sql = "SELECT * FROM plants";
$result = mysqli_query($conn, $sql);

?>

<head>
    <style>
        <?php require "assets/css/style.css" ?>
    </style>
</head>

<body>
    <?php require 'sidebar.php'; ?>

    <section class="home">
        <h1>Products Lists</h1>
        <a href="insert.php"><span class="material-symbols-outlined">
                library_add
            </span>Insert New Plant</a>
        <br><br>

        <table class="productlist">
            <thead>
                <tr>
                    <td>Id</td>
                    <td></td>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Price</td>
                    <!-- <td class="prodDesc">Description</td> -->
                    <td>stock</td>
                    <td>action</td>
                </tr>
            </thead>

            <tbody>

            <?php
    // Check if there are any records
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["plantId"] . "</td>";
            echo "<td><img src='/zenplant" . $row["imageUrl"] . "' alt=''> </td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td>$ " . $row["price"] . "</td>";
            echo "<td>5</td>";
            echo "<td>";
            // echo "<a href='/zenplant/admin/test.php'>Test</a> | ";
            echo "<a href='/zenplant/admin/edit.php?id=" . $row["plantId"] . "'>Edit</a> | ";
            echo "<a href='/zenplant/admin/delete.php?id=" . $row["plantId"] . "' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No plant found</td></tr>";
    }
    ?>


                <!-- <tr>
                    <td>1</td>
                    <td>
                        <img src="/zenplant/user/assets/img/plant/MonsteraDeliciosa.jpg" alt="">
                    </td>
                    <td>
                        Monstera Deliciosa
                    </td>
                    <td>Araceae</td>
                    <td>$27</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit sint consectetur veniam saepe a dolorem tempore ipsam porro quia adipisci.</td>
                    <td>3</td>
                    <td>
                        <div>
                            <a href=""><span class="material-symbols-outlined">
                                    visibility
                                </span></a>
                            <a href=""><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                            <a href=""><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                        </div>
                    </td>
                </tr> -->

            </tbody>


        </table>
    </section>
</body>