<?php

class Tutorialmagento_Helloworld_Model_Mysql4_Helloworld_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
    public function _construct(){
        parent::_construct();
        $this->_init('helloworld/helloworld');
    }
}