<?php
include 'header.php';
?>

<h2 class="text-center">Add new Player</h2>
<div class="container">
    <form action="form.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter last name">
        </div>
        <div class="form-group">
            <label for="bornYear">Born Year</label>
            <input type="number" class="form-control" name="bornYear" id="bornYear" placeholder="Enter born year">
        </div>
        <div class="form-group">
            <label for="team">Team</label>
            <input type="text" class="form-control" name="team" id="team" placeholder="Enter team">
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" name="country" id="country" placeholder="Enter country">
        </div>
        <div class="form-group">
            <label for="sallery">Sallery</label>
            <input type="number" class="form-control" name="sallery" id="sallery" placeholder="Enter sallery">
        </div>

        <button type="submit" class="btn btn-primary float-left">Submit</button>
        <button class="btn btn-danger float-right" href="index.php">Go back</button>
    </form>
   
</div>