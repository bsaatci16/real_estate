<?php include 'includes/header.php'; ?>
<div class="container mt-4">
    <h1>Gayrimenkul Listesi</h1>
    <div class="row">
        <!-- Gayrimenkul kartları burada yer alacak -->
        <?php
        include 'db/connection.php';

        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $query = "SELECT * FROM properties WHERE title LIKE '%$search%' OR city LIKE '%$search%'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-md-4">';
            echo '<div class="card mb-4">';
            echo '<img src="assets/images/sample.jpg" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['title'] . '</h5>';
            echo '<p class="card-text">' . $row['short_description'] . '</p>';
            echo '<a href="property_detail.php?id=' . $row['id'] . '" class="btn btn-primary">Detayları Gör</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
