<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es-ES', array (
));

$catalogueDefault = new MessageCatalogue('default', array (
));
$catalogue->addFallbackCatalogue($catalogueDefault);

return $catalogue;
