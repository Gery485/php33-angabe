<?php
$title = "Zimmerverwaltung";
include '../layouts/top.php';
?>

    <div class="container">
        <div class="row">
            <h2><?= $title ?></h2>
        </div>
        <div class="row">
            <p>
                <a href="create.php" class="btn btn-success">Erstellen <span class="glyphicon glyphicon-plus"></span></a>
            </p>

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Zimmernummer</th>
                    <th>Name</th>
                    <th>Personen</th>
                    <th>Preis</th>
                    <th>Balkon</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>Tres-Zap</td>
                    <td>4</td>
                    <td>€57,75</td>
                    <td>JA</td>
                    <td><a class="btn btn-info" href="view.php?id=29"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;<a
                                class="btn btn-primary" href="update.php?id=29"><span
                                    class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a
                                class="btn btn-danger" href="delete.php?id=29"><span
                                    class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Tres-Zap</td>
                    <td>4</td>
                    <td>€57,75</td>
                    <td>JA</td>
                    <td><a class="btn btn-info" href="view.php?id=29"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;<a
                                class="btn btn-primary" href="update.php?id=29"><span
                                    class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a
                                class="btn btn-danger" href="delete.php?id=29"><span
                                    class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Tres-Zap</td>
                    <td>4</td>
                    <td>€57,75</td>
                    <td>JA</td>
                    <td><a class="btn btn-info" href="view.php?id=29"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;<a
                                class="btn btn-primary" href="update.php?id=29"><span
                                    class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a
                                class="btn btn-danger" href="delete.php?id=29"><span
                                    class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Tres-Zap</td>
                    <td>4</td>
                    <td>€57,75</td>
                    <td>JA</td>
                    <td><a class="btn btn-info" href="view.php?id=29"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;<a
                                class="btn btn-primary" href="update.php?id=29"><span
                                    class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a
                                class="btn btn-danger" href="delete.php?id=29"><span
                                    class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Tres-Zap</td>
                    <td>4</td>
                    <td>€57,75</td>
                    <td>JA</td>
                    <td><a class="btn btn-info" href="view.php?id=29"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;<a
                                class="btn btn-primary" href="update.php?id=29"><span
                                    class="glyphicon glyphicon-pencil"></span></a>&nbsp;<a
                                class="btn btn-danger" href="delete.php?id=29"><span
                                    class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div> <!-- /container -->

<?php
include '../layouts/bottom.php';
?>