<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
<!-- body -->
<div class="container">
    <h1>Edit Course</h1>
    <form action="../controllers/courses" method="post">
        <div class="form-group">
            <label for="name">Course Name</label>
            <input type="text" class="form-control" id="name" name="name" required value="<?= $courses->course_name; ?>">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" id="Description" name="Description" required value="<?= $courses->Description; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
<?php require 'layouts/footer.view.php'; ?>