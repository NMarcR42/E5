<?php

require_once 'param.php';
require_once 'PlatProposeDAO.php';


print(json_encode(PlatProposeDAO::ajouter($_POST['idPlat'],$_POST['idService'],$_POST['Date_P'],$_POST['quantiteeProposee'],$_POST['prixVente'])));

