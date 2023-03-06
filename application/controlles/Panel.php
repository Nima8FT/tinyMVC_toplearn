<?php 

namespace Application\Controlles;

class Panel extends Controller {

    public function index() {
        return $this->view('panel.index');
    }

}

?>