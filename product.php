<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Document</title>
</head>
<body>
<?php
include 'header.php';
?>

<!-- LOGIN POP UP -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vous devez être connecté pour ajouter au panier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- MAIL FORM -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Addresse mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        <small id="emailHelp" class="form-text text-muted"><a href="#">mot de passe oublié</a></small>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"> se souvenir de moi
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success mx-auto">se connecter</button>
                    <hr>
                    <h5 class="modal-title" id="exampleModalLabel">Ou créez un compte</h5>
                    <button type="alerte" class="btn btn-primary">s'inscrire</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- BREADCRUMB -->

<nav class="breadcrumb">
    <a class="breadcrumb-item" href="#">Home</a>
    <a class="breadcrumb-item" href="#">Search</a>
    <a class="breadcrumb-item active" href="#">One Plus 5T</a>
</nav>

<!-- PRODUCT -->

<div class="container">
    <div class="row">
        <div class="col-md-1">
            <div class="thumb-pics">
                <div class="thumb-pic rounded img1"></div>
                <div class="thumb-pic rounded img2"></div>
                <div class="thumb-pic rounded img3"></div>
                <div class="thumb-pic rounded img4"></div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="principal-pic rounded" id="zoom_01" data-zoom-image="img/oneplus.jpg" ></div>
            <!-- <img class="phone rounded" id="zoom_01" src="../img/oneplus.jpg" data-zoom-image="../img/oneplus.jpg" alt="one plus phone"> -->

        </div>
        <div class="col-md-6">
            <div class="product-info">
                <div class="product-name"><span class="badge badge-secondary">New</span> OnePlus 5 Dual SIM 128GB A5000 Noir SIM Free</div>
                <div class="price"><h3>489e</h3></div>
                <div class="color">Couleur - Noir</div>
                <div class="row ">
                    <div class="col-md-4">
                        <button type="button" class="btn btn-primary cta" data-toggle="modal" data-target="#exampleModal">
                            Ajouter au panier
                        </button>
                    </div>
                    <div class="col-md-8">
                        <img class="btn-fav1" src="img/heart.png"/>
                        <!-- <i class="fa fa-heart red-fa" aria-hidden="true"></i> -->
                    </div>
                </div>
                <div class="description"> <h6>Descriptif :</h6></div>
                <div class="decsription-content">
                    Optic AMOLED écran tactile capacitif, <br>16 millions de couleurs, 5.5 inches (~73.0% screen-to-body ratio), <br> 1080 x 1920 pixels (~ 401 densité de pixels ppp)
                    Android 7.1.1 (Nougat), <br>Octa-core (4x2.45 GHz Kryo & 4x1.9 GHz Kryo)
                    128 GB
                </div>
                <div class="more"><a href="#">...en savoir plus</a></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs mt-3 mb-4">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#details">Détails techniques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#avis">avis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#faq">FAQ</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="details" role="tabpanel">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">Marque</th>
                            <td>One plus</td>
                        </tr>
                        <tr>
                            <th scope="row">Ecran</th>
                            <td>5.5 pouces</td>
                        </tr>
                        <tr>
                            <th scope="row">type d'appareil photo:</th>
                            <td>3 caméras (un Appareil-Photo avant + Deux Arrière Caméra)</td>
                        </tr>
                        <tr>
                            <th scope="row">Caméra arrière</th>
                            <td>20.0MP + 16.0MP</td>
                        </tr>
                        <tr>
                            <th scope="row">Caméra avant</th>
                            <td>16 Mégapixels</td>
                        </tr>
                        <tr>
                            <th scope="row">Type d'écran tactile:</th>
                            <td>Ecran capacitif</td>
                        </tr>
                        <tr>
                            <th scope="row">Définition de l'enregistrement</th>
                            <td>1080P</td>
                        </tr>
                        <tr>
                            <th scope="row">batterie</th>
                            <td>3300 mAh</td>
                        </tr>
                        <tr>
                            <th scope="row">CPU</th>
                            <td>Qualcomm Snapdragon835</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="avis" role="tabpanel">Lorem ipsum.</div>
                <div class="tab-pane" id="faq" role="tabpanel">
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        J'ai besoin de payer des droits de douane?
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-block">
                                    vous pouvez être à des droits de douane et taxes pour quelque chose acheté en ligne. les acheteurs sont responsables des impôts de douane.
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Qu'est-ce que vous déclarer à la douane?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-block">
                                        nous déclarons normalement le prix inférieur sur la facture/de loi pour aider à éviter le droit de douane, mais si vous avez une demande sur déclaration, s'il vous plaît nous laisser un message dans l'ordre avant la livraison.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            est-il assuré?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<srcipt src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></srcipt>
<script src="js/jquery.elevatezoom.js"></script>
<script src="js/main.js"></script>
</body>
</html>