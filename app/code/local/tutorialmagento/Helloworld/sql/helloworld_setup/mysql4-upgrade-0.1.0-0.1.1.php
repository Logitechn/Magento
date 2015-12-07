<?php
$installer = $this;
$installer->startSetup();
$installer->run("
ALTER TABLE `users`
ADD PRIMARY KEY (`ID`);
");
$installer->endSetup();