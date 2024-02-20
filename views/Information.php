<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Informations</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php require_once('style.php'); ?>

</head>

<body>

    <!-- Appel de menues  -->
    <?php require_once('aside.php') ?>

    <main id="main" class="main">
        <div class="row">
            <div class="col-12">
                <h4>Informations</h4>
            </div>
            <!-- pour afficher les massage  -->
            <div class="alert-info alert text-center"> Message </div>
            <!-- Le form qui enregistrer les données  -->
            <div class="col-xl-12 ">
                <form action="" method="POST" class="shadow p-3">
                    <div class="row">
                        <?php if (isset($_GET['idinfo'])) {
                            ?>
                            <h4 class="text-center">Modifier une information </h4>
                        <?php
                        } else {
                            ?>
                            <h4 class="text-center">Ajouter une information </h4>
                        <?php
                        }
                        ?>
                        
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Intituler <span class="text-danger">*</span></label>
                            <input required type="text" name="" class="form-control"
                                placeholder="Intituler votre information" value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                        <label for="">Description <span class="text-danger">*</span></label>                            
                            <textarea required name="" placeholder="Decrivez votre information ..." class="form-control" id="about" style="height: 100px"></textarea>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 mt-10 col-sm-12 p-3 aling-center">
                            <input type="submit" name="valider" class="btn btn-success w-100" value="Enregistrer">
                        </div>


                    </div>
                </form>
            </div>
            <!-- La table qui affiche les données  -->
            <div class="col-xl-12 table-responsive px-3 mt-3">
                <table class="table table-sm text-center shadow">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Intituler</th>
                            <th>Description</th>                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Description</td>
                            <td>Description</td>                            
                            <td>
                                <a href="#" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a onclick=" return confirm('Voulez-vous vraiment supprimer ?')" href="#"
                                    class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash3-fill"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main><!-- End #main -->
    <?php require_once('script.php') ?>

</body>

</html>