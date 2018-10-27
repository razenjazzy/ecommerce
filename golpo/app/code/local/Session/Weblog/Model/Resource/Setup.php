<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Session_Weblog_Model_Resource_Setup extends Mage_Core_Model_Resource_Setup {

    public function startSetup() {
        $this->getConnection()->startSetup();
        return $this;
    }

    public function endSetup() {
        $this->getConnection()->endSetup();
        return $this;
    }

}
