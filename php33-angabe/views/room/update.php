<?php
$title = "Zimmer bearbeiten";
include '../layouts/top.php';
?>

<div class="container">
    <div class="row">
        <h2><?= $title ?></h2>
    </div>

    <form class="form-horizontal" action="update.php?id=29" method="post">

        <div class="row">
            <div class="col-md-2">
                <div class="form-group required ">
                    <label class="control-label">Zimmernummer *</label>
                    <input type="text" class="form-control" name="nr" maxlength="4" value="01">
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="form-group required ">
                    <label class="control-label">Name *</label>
                    <input type="text" class="form-control" name="name" maxlength="64" value="Tres-Zap">
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group required ">
                    <label class="control-label">Personen *</label>
                    <input type="number" class="form-control" name="size" min="1" value="4">
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="form-group required ">
                    <label class="control-label">Preis *</label>
                    <input type="text" class="form-control" name="price" value="57,75">
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <div class="form-group required ">
                    <label class="control-label">Balkon *</label>
                    <input type="checkbox" class="form-control" name="balcony" checked="checked">
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Aktualisieren</button>
            <a class="btn btn-default" href="index.php">Abbruch</a>
        </div>
    </form>

</div> <!-- /container -->

<?php
include '../layouts/bottom.php';
?>
