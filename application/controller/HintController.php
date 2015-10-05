<?php

class HintController extends Controller
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
        $this->View->render('hint/index');
    }

    public function latest() {
        $this->View->render('hint/hint', array(
            'data' => false,
        ));
    }

    public function id($id){
        $this->View->render('hint/hint', array(
            'data' => false,
        ));
    }
}
