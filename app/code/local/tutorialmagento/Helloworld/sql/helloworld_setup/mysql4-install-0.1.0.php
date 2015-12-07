<?php
$installer = $this;
$installer->startSetup();
$installer->run("
CREATE TABLE `users` (
`ID` int(11) NOT NULL,
`Username` VARCHAR(255) NOT NULL,
`Password` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->endSetup();