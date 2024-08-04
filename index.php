<?php include 'includes/header.php'; ?>
<div class="container mt-4">
    <h1>Hoş Geldiniz</h1>
    <p>En iyi gayrimenkulleri bulun!</p>
    <form action="property_list.php" method="get">
        <input type="text" name="search" placeholder="Şehir, bölge, fiyat aralığı..." class="form-control mb-3">
        <button type="submit" class="btn btn-primary">Ara</button>
    </form>
    <h2>Öne Çıkan Gayrimenkuller</h2>
    <div class="row">
        <!-- Öne çıkan gayrimenkullerin listesi -->
        <?php
        // Örnek veritabanı bağlantısı
        include 'db/connection.php';

        $query = "SELECT * FROM properties WHERE featured = 1 LIMIT 3";
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
