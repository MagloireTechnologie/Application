<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <style type="text/css">
.dropdown-menu li{
    position: relative;
}

.dropdown-menu .submenu {
    display : none;
    position: absolute;
    left:100%;
     top: -7px;
}

.dropdown-menu>li:hover>.submenu {
    display: block;   
}
 </style >
</head>
  <body>

<div class="container">
 <div class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
      <a class="navbar-brand" href="#">Gestock</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collpase" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>

<div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav">
           <li class="nav-item">
            <a href="" class="nav-link" >Home</a>
           </li>
          
           
           
           <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Paramètre</a>
                <ul class="dropdown-menu">

                

                <li><a href="" class="dropdown-item">Services &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Ajouter un service</a></li>
                                    <li><a href="" class="dropdown-item">Liste des services </a></li>              
                            </ul>
                       </li>




                       <li><a href="" class="dropdown-item">Employés &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Ajouter un employé</a></li>
                                    <li><a href="" class="dropdown-item">Liste des employés </a></li>              
                            </ul>
                       </li>


                       
                       <li><a href="" class="dropdown-item">Produits &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Ajouter un produit</a></li>
                                    <li><a href="" class="dropdown-item">Liste des produits </a></li>              
                            </ul>
                       </li>




                       <li><a href="" class="dropdown-item">Fournisseurs &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Ajouter un Fournisseur</a></li>
                                    <li><a href="" class="dropdown-item">Liste des Founisseurs </a></li>              
                            </ul>
                       </li>
                </ul>
            </li>





            <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Opérations</a>
                <ul class="dropdown-menu">

                <li><a href="" class="dropdown-item">Saisie de vente &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Ajouter une vente</a></li>
                                    <li><a href="" class="dropdown-item">Liste des ventes </a></li>              
                            </ul>
                       </li>

                       <li><a href="" class="dropdown-item">Saisie de règlement &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Règlement</a></li>
                                    <li><a href="" class="dropdown-item">Liste des règlements </a></li>              
                            </ul>
                       </li>
       
                       <li><a href="" class="dropdown-item">Saisie des Produits &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Ajouter un produit</a></li>
                                    <li><a href="" class="dropdown-item">Liste des produits </a></li>              
                            </ul>
                       </li>
                       <li><a href="" class="dropdown-item">Sortie de fonds &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Saisie de dépence</a></li>
                                    <li><a href="" class="dropdown-item">Liste des dépences </a></li>              
                            </ul>
                       </li>
                       <li><a href="" class="dropdown-item">Autre entrée de fonds &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Saisie d'autre entrée de fonds</a></li>
                                    <li><a href="" class="dropdown-item">Liste des autres entrée </a></li>              
                            </ul>
                       </li>
                </ul>
            </li>


            <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Rapport</a>
                <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">item 1</a></li>
                        <li><a href="" class="dropdown-item">item 2 &raquo;</a>
                            <ul class="dropdown-menu submenu">
                                    <li><a href="" class="dropdown-item">Subitem 1</a></li>
                                    <li><a href="" class="dropdown-item">Subitem 2 &raquo; </a>
                                            
                                            <ul class="dropdown-menu submenu">
                                                <li><a href="" class="dropdown-item">multilevel 1</a></li>
                                                <li><a href="" class="dropdown-item">multilevel 2 </a>
                                             </ul>
                                    </li>
                                    <li><a href="" class="dropdown-item">Subitem 3</a></li>

                            </ul>
                       </li>
                
                       <li><a href="" class="dropdown-item">item 3</a></li>

                </ul>
            </li>

      </ul>
      <ul class="navbar-nav ms-auto">
       <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Mon Compte </a>
                     <ul class="dropdown-menu">
                        <li class="nav-item"><a href="" class="dropdown-item" ><span class="glyphicon glyphicon-user"></span>Se connecter</a></li>
                        <li class="nav-item"><a href="" class="dropdown-item"><span class="glyphicon glyphicon-log-in"></span>Se Déconnecter</a></li>
                     </ul>
           </li>
      </ul>
    </div>

      </div>
  </div>
</div>
</body>
</html>