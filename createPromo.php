<html>

<form action="/Logic/insertPromo.php" enctype="multipart/form-data" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="your name">
    </div>
    <div class="form-group">
        <label for="discount">Discount</label>
        <input type="text" name="discount" id="discount" class="form-control" placeholder="5000">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" class="form-control" placeholder="your description">
    </div>

    <h3>Copy paste link di bawah dan upload ke https://www.qr-code-generator.com/ untuk mendapatkan barcode dan upload foto nya</h3>
    <h1 id="link"> Test </h1>
    <div class="form-group">
        Select image : <label for="file"> File</label>
        <input type="file" name="file" id="file"><br />
    </div>
    <input name="insertPromo" id="insertPromo" class="btn btn-block login-btn" type="submit" value="Insert Promo">
</form>

</html>

<script>
    document.getElementById("name").addEventListener("change", createLink);
    document.getElementById("discount").addEventListener("change", createLink);


    function createLink() {
        var name = document.getElementById("name").value;
        var discount = document.getElementById("discount").value;

        document.getElementById("link").innerHTML = "http://localhost/Logic/processPromo.php?name=" + name + "&discount=" + discount;
    }
</script>