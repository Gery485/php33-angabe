<?php
$title = "Zimmer löschen";
include '../layouts/top.php';
?>

    <div class="container">
        <h2><?= $title ?></h2>

        <form class="form-horizontal" action="delete.php?id=29" method="post">
            <input type="hidden" name="id" value="29"/>
            <p class="alert alert-error">Wollen Sie das Zimmer wirklich löschen?</p>
            <div class="form-actions">
                <button type="submit" name="submit" class="btn btn-danger">Löschen</button>
                <a class="btn btn-default" href="index.php">Abbruch</a>
            </div>
        </form>

    </div> <!-- /container -->

<?php
include '../layouts/bottom.php';
?>