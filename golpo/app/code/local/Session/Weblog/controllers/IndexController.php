<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Session_Weblog_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        echo 'Setup is complete!';
        $blogpost = Mage::getModel('weblog/blogpost');
        echo get_class($blogpost);
        ini_set('display_errors', 1);
    }

    public function testAction() {
        echo 'Setup!';
    }

    public function createNewPostAction() {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->setTitle('Code Post again!');
        $blogpost->setPost('This post was created from code!');
        $blogpost->save();
        echo 'post with ID ' . $blogpost->getId() . ' created';
    }

    public function editFirstPostAction() {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->load(1);
        $blogpost->setTitle("The First post!");
        $blogpost->save();
        echo 'post edited';
    }

    public function deleteFirstPostAction() {

        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->load(1);
        $blogpost->delete();
        echo 'post removed';
    }

    public function testModelAction() {

        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('weblog/blogpost');
        echo("Loading the blogpost with an ID of " . $params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
    }

    public function showAllBlogPostsAction() {
        $posts = Mage::getModel('weblog/blogpost')->getCollection();
        foreach ($posts as $blogpost) {
            echo '<h3>' . $blogpost->getTitle() . '</h3>';
            echo nl2br($blogpost->getPost());
        }
    }

}
