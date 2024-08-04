<?php include 'includes/header.php'; ?>
<div class="container mt-4">
    <?php
    include 'db/connection.php';

    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $query = "SELECT * FROM properties WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $property = mysqli_fetch_assoc($result);
    ?>
    <h1><?php echo $property['title']; ?></h1>
    <div class="row">
        <div class="col-md-8">
            <img src="assets/images/sample.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-md-4">
            <h2>Başlık</h2>
            <p><?php echo $property['description']; ?></p>
            <p>Fiyat: $<?php echo number_format($property['price'], 2); ?></p>
            <form>
                <div class="form-group">
                    <label for="name">İsim</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">E-posta</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <button type="submit" class="btn btn-primary">İletişime Geç</button>
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
