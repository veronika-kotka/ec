<?php

class DefaultController extends Controller
{
    public $layout='//layouts/admin_column1';
    
    public function actionIndex()
    {
            $this->render('index');
    }
}