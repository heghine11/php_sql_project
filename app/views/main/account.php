<?php include '../layouts/nav.php'; ?>
<style>
    <?php include '../account.css'; ?>
</style>

<form action="account.php" style="border:1px solid #ccc">
    <div class="container">
        <h1>Submit your order</h1>
        <p>Please fill in this form to submit your order.</p>
        <hr>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="surname"><b>Surname</b></label>
        <input type="text" placeholder="Enter Surname" name="surname" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <div class="clearfix">
            <input type="reset" class="cancelbtn" value="Cancel">
            <button type="submit" class="submitbtn">Submit</button>
        </div>
    </div>
</form>
