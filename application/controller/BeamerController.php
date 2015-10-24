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

    public function index()
    {
        $render = BeamerModel::Render();
        $this->View->renderWithoutHeaderAndFooter('_templates\header');
        foreach ($render as $key => $value) {
            $this->View->renderWithoutHeaderAndFooter($value);
        }
        $this->View->renderWithoutHeaderAndFooter('_templates\footer');
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
