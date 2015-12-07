<?php

class Tutorialmagento_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * prepare block's layout
     *
     * @return Tutorialmagento_Helloworld_Block_Helloworld
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function user(){
        $retour ='';
        $collection = Mage::getModel('helloworld/helloworld')->getCollection()
            ->setOrder('ID', 'asc');
        foreach($collection as $data){
            $retour .= $data->getData('Username').' '.$data->getData('Password')
                .' '.$data->getData('Privileges'). '<br/>';
        }
        Mage::getSingleton('adminhtml/session')->addSuccess('Good!!');
        return $retour;
    }
}