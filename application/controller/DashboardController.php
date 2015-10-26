<?php

/**
 * This controller shows an area that's only visible for logged in users (because of Auth::checkAuthentication(); in line 16)
 */
class DashboardController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // this entire controller should only be visible/usable by logged in users, so we put authentication-check here
        Auth::checkAuthentication();
    }

    /**
     * This method controls what happens when you move to /dashboard/index in your app.
     */
    public function index()
    {
        $this->View->render('dashboard/index', array('refresh' => true, 'num' => '0.000001'));
    }

    public function test() {
        Auth::checkAdminAuthentication();
        $this->View->renderWithoutHeaderAndFooter('test');
    }

    public function notify($command) {
        if($command == "read") {
            if(UserModel::setNotifyTimestamp()) {
                Redirect::home();
            } else {
                Redirect::error('forbidden');
            }
        } else {
            Redirect::home();
        }
    }
}
