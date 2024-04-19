<?php

class Pages extends Controller {

    public function index() {             
        if(Session::logged()):
            // UNCOMMENT WHEN NOT IN DEVELOPMENT
            // COMMENT ONLY FOR TESTING
            Url::redirect('posts');
        endif;
        
        //  $this->view('pages/home', 
        //  ['titulo' => 'Initial Page']);
        $data = [
            'title' => 'Initial Page',
            'desc' => 'PHP7 Course'
        ];

        // calling route
        $this->view('pages/home', $data);
    }
    

    public function about() {
        $data = [
            'title' => 'About Us'
            //'descricao' => 'Curso PHP7'
        ];

        // calling route
        $this->view('pages/about', $data);

    }
    
    public function error() {
        $data = [
            'title' => 'Not Found'
            //'descricao' => 'Curso PHP7'
        ];

        // calling route
        $this->view('pages/error', $data);

    }
    
}


/*
 *
 * public function about($id, $city) {
 *     echo $id.'<hr>';
 *     echo $city.'<hr>';
 * } 
 * 
 * public function index() {  
 *     $this->view('pages/home');     
 * } 
 * 
 */