<?php

class Tutorialmagento_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function sign_upAction(){
        $this->loadLayout();
        $this->renderLayout();
    }

    public function logAction(){
        $this->loadLayout();
        $this->renderLayout();
    }

    public function restaurantAction(){
        $this->loadLayout();
        $this->renderLayout();
    }

    public function loginAction(){
        $username = $this->getRequest()->getPost('username');
        $password = $this->getRequest()->getPost('password');
        if(isset($username)&&($username != '') && isset($password)&&($password != '') )
        {
            $collectionRestorant = Mage::getModel('helloworld/helloworld')->getCollection()
                            ->addFilter('Username', $username )
                            ->addFilter('Password', $password );
            if ($collectionRestorant->getSize() == 1 ){
                $this->_redirect('helloworld/index/restaurant');
            }

            /*foreach ($collection as $data){
                $user = $data->getData('Username');
                $pass = $data->getData('Password');
                if ($user != $username){
                    if ($pass == $password){
                        $this->_redirect('helloworld/index/restaurant');
                    }else{
                        //die ('wrong password');
                    }
                }else{
                    //die (' username dont exist');
                }*/
        }
        //$this->_redirect('helloworld/index/restaurant');
    }

    public function registrateAction(){
        $username = ''.$this->getRequest()->getPost('username');
        $password = ''.$this->getRequest()->getPost('password');
        if(isset($username)&&($username != '') && isset($password)&&($password != '') )
        {
            $user = Mage::getModel('helloworld/helloworld');
            $user->setData('Username', $username);
            $user->setData('Password', $password);
            $user->save();
        }
        $this->_redirect('helloworld/index/log');
    }
}