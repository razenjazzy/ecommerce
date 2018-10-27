<?php
class Session_Complexworld_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
    $weblog2 = Mage::getModel('complexworld/eavblogpost');
    $weblog2->load(1);
    var_dump($weblog2);
}
public function populateEntriesAction() {
    for ($i=0;$i<10;$i++) {
        $weblog2 = Mage::getModel('complexworld/eavblogpost');
        $weblog2->setTitle('This is a test '.$i);
        $weblog2->setContent('This is test content '.$i);
        $weblog2->setDate(now());
        $weblog2->save();
    }

    echo 'Done';
}

    
    
}
