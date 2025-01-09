<?php
$title = "Zimmer anzeigen";
include '../layouts/top.php';
?>

    <div class="container">
        <h2><?= $title ?></h2>

        <p>
            <a class="btn btn-primary" href="update.php?id=29">Aktualisieren</a>
            <a class="btn btn-danger" href="delete.php?id=29">Löschen</a>
            <a class="btn btn-default" href="index.php">Zurück</a>
        </p>

        <table class="table table-striped table-bordered detail-view">
            <tbody>
            <tr>
                <th>Zimmernummer</th>
                <td>01</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>Tres-Zap</td>
            </tr>
            <tr>
                <th>Personen</th>
                <td>4</td>
            </tr>
            <tr>
                <th>Preis</th>
                <td>€57,75</td>
            </tr>
            <tr>
                <th>Balkon</th>
                <td>JA</td>
            </tr>
            </tbody>
        </table>
    </div> <!-- /container -->

<?php
include '../layouts/bottom.php';
?>