<?php

class BeamerController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        Auth::checkAuthentication();
        parent::__construct();
    }

    public function show($set){
        $render = BeamerModel::Render($set);
        $this->View->renderWithoutHeaderAndFooter('_templates/header', array('refresh' => false, 'num' => '5'));
        $this->View->renderWithoutHeaderAndFooter('beamer/pre');

        foreach ($render as $key => $value) {
            $this->View->renderWithoutHeaderAndFooter($value);
        }

        //$this->View->renderWithoutHeaderAndFooter('beamer/after');
        $this->View->renderWithoutHeaderAndFooter('_templates/footer');

    }

    public function index($set)
    {
        Redirect::to('beamer/show/globaal');
    }

    public function config() {
        Auth::checkAdminAuthentication();
        $this->View->render('beamer/config');
    }

    public function config_post() {
        Auth::checkAdminAuthentication();
        //post to database.
        BeamerModel::post(Request::get('key'));
    }
}
