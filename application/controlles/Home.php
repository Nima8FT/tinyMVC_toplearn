<?php 

namespace Application\Controlles;

class Home extends Controller{

    public function index() {
        $lover = 'fateme';
        $this->view('app.index',compact('name','lover'));
    }

    public function create() {
        $this->redirect('home');
    }

}

?>