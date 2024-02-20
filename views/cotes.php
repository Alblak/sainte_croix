<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Option</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php require_once('style.php') ?>
</head>

<body>

    <!-- Appel de menues  -->
    <?php require_once('aside.php') ?>

    <main id="main" class="main">
        <div class="row">
            <div class="col-12">
                <h4 class="text-center">Enregistrement de cote</h4>
            </div>
            <!-- pour afficher les massage  -->
            <div class="alert-info alert text-center">Message</div>
            <div class="col-xl-12 col-lg-12 col-md-6 ">
                <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                    <h5 class="">classe:(Description)</h5>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                    <h5 class="">Cours:(Description)</h5>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                    <h5 class="">Tutilaire du cours:(Description)</h5>
                </div>
            </div>
            <!-- Le form qui enregistrer les données  -->
            <div class="col-xl-12 col-lg-12 col-md-6 table-responsive px-3 pt-3">
                <form action="" class="shadow p-3">
                    <table class="table table-sm text-center shadow">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Noms</th>
                                <th>Maxima</th>
                                <th>Cote</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>
                                    MUHINDO
                                    KOMBI
                                    Glad
                                </td>
                                <td>20 Pts</td>
                                <td>
                                    <input required type="text" class="form-control"
                                        placeholder="Saisir la cote de Glad">
                                </td>                               
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-xl-12 col-lg-12 col-md-12 mt-10 col-sm-12 p-3 aling-center">
                        <input type="submit" class="btn btn-success w-100" value="Enregistrer">
                    </div>
                </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-6 ">
            <h4 class="text-center">Fiche de cote</h4>
                <table class="table table-sm text-center shadow">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Noms</th>                            
                            <th>Cote</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>
                                MUHINDO
                                KOMBI
                                Glad
                            </td>
                            <td> <span class="text-danger bolder">8</span>/20</td>                            
                            <td>
                                <a href="" class="btn btn-sm btn-success">
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