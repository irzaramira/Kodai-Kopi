<?php
session_start();
if(!isset($_SESSION['isAdmin'])){
    header('Location: login.php');
}
else if($_SESSION['isAdmin'] == 0){
    header("Location: index.php");
}
else{

}
?>
<html>

<form action="/Logic/insertPromo.php" enctype="multipart/form-data" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="PromoKhusus" onblur="this.value=removeSpaces(this.value);">
    </div>
    <div class="form-group">
        <label for="discount">Discount</label>
        <input type="number" name="discount" id="discount" class="form-control" placeholder="5000" onblur="this.value=removeSpaces(this.value);">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" class="form-control" placeholder="your description">
    </div>

    <input name="insertPromo" id="insertPromo" class="btn btn-block login-btn" type="submit" value="Insert Promo">
</form>

</html>

<script>
    function removeSpaces(string) {
        return string.split(' ').join('');
    }
</script>