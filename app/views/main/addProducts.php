<?php include '../layouts/nav.php'; ?>
<style>
    <?php include 'Css/add_products.css'; ?>
</style>

<h2>Add products</h2>
<p>Add products to your product list.</p>

<div class="container">
    <form action="../../controllers/Main.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="pname">Product Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="pname" name="name" placeholder="Product name..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="price">Price</label>
            </div>
            <div class="col-75">
                <input type="number" id="price" name="price" placeholder="Product price..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="description">Description</label>
            </div>
            <div class="col-75">
                <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>
            </div>
        </div>

        <div class="row">
            <input type="submit" value="Submit">
        </div>

    </form>
</div>
