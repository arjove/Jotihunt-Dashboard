<?php

class NieuwsController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->View->render('nieuws/index');
    }

    public function latest() {
        $this->View->render('nieuws/nieuws', array(
            'data' => false,
        ));
    }

    public function id($id){
        $this->View->render('nieuws/nieuws', array(
            'data' => false,
        ));
    }
}
