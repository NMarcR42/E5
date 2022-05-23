<?php

require_once 'param.php';
require_once 'PlatProposeDAO.php';


print(json_encode(PlatProposeDAO::listeNomPlat()));
print(json_encode(PlatProposeDAO::listeService()));


