<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once "inc/head.inc.php"; ?>

<body>
<?php
    require_once "inc/header.inc.php";
?>
<div class="background">
    
        <h2>Your URL's must be direct video links to watch video in current browser</h2>

        <?php
            require_once 'form/url.form.php';
            require_once 'function/function.php';
        ?>

    <div class="view">
        <p class="view">
            <a class="btn btn-primary view" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">View Row</a>
            <button class="btn btn-primary view" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">View Column</button>
            <button class="btn btn-primary view" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">View Both</button>
        </p>
        <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
    
            <?php display_video1($result); ?>
    
            </div>
            </div>
        </div>
        </div>
    
        <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
    
                <?php display_video2($result2); ?>
    
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php
    require_once "inc/footer.inc.php";
?>
<script defer src="js/script.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>