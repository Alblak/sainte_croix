<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Eleves</title>
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
                <h4>Eleves</h4>
            </div>
            <!-- pour afficher les massage  -->
            <div class="alert-info alert text-center"> Message </div>
            <!-- Le form qui enregistrer les données  -->
            <div class="col-xl-12 ">
                <form action="" method="POST" class="shadow p-3">
                    <div class="row">
                        <?php if (isset($_GET['ideleve'])) {
                            ?>
                            <h4 class="text-center">Modifier un Eleve </h4>
                        <?php
                        } else {
                            ?>
                            <h4 class="text-center">Ajouter un Eleve </h4>
                        <?php
                        }
                        ?>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Nom <span class="text-danger">*</span></label>
                            <input required type="text" name="nom" class="form-control" placeholder="Entrez le nom"
                                value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Postnom <span class="text-danger">*</span></label>
                            <input required type="text" name="postnom" class="form-control"
                                placeholder="Entrez le postnom" value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Prenom <span class="text-danger">*</span></label>
                            <input required type="text" name="prenom" class="form-control"
                                placeholder="Entrez le prenom" value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Genre <span class="text-danger">*</span></label>
                            <select required id="" name="genre" class="form-select">

                                <option value="" desabled>Choisir un genre</option>
                                <option value="M">Masculin</option>
                                <option value="F">Feminin</option>

                            </select>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Lieu de naissance <span class="text-danger">*</span></label>
                            <input required type="text" name="LieuNaissance" class="form-control"
                                placeholder="Entrez le N° Tel" value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Date de naissance <span class="text-danger">*</span></label>
                            <input required type="Date" name="DateNaissance" class="form-control"
                                placeholder="Entrez le N° Tel" value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Adresse <span class="text-danger">*</span></label>
                            <input required type="text" name="adress" class="form-control"
                                placeholder="Entrez l'adresse" value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Parent ou Tutaire <span class="text-danger">*</span></label>
                            <input required type="text" name="" class="form-control"
                                placeholder="Entrez le Nom d'un parent et/ou tutaire" value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Telephone du parent et/ou tutaire <span class="text-danger">*</span></label>
                            <input required type="text" name="telephone" class="form-control"
                                placeholder="Entrez le N° Tel" value="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  col-sm-6 p-3">
                            <label for="">Photo de l'eleve <span class="text-danger">*</span></label>
                            <input required type="text" name="adress" class="form-control"
                                placeholder="Choisir la photo de l'eleve" value="">
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
                            <th>Nom</th>
                            <th>Postnom</th>
                            <th>prenom</th>
                            <th>Genre</th>
                            <th>Adresse</th>
                            <th>Tel</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">Description</th>
                            <td>Description</td>
                            <td>Description</td>
                            <td>Description</td>
                            <td>Description</td>
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