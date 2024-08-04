<?php include 'includes/header.php'; ?>
<div class="container mt-4">
    <h1>İletişim</h1>
    <form>
        <div class="form-group">
            <label for="name">İsim</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">E-posta</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="message">Mesaj</label>
            <textarea class="form-control" id="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>
