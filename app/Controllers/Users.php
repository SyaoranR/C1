<?php

class Users extends Controller {

    public function register(){

        $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if (isset($form)):
            $data = [
                'name' => trim($form['name']),
                'email' => trim($form['email']),
                'pass' => trim($form['pass']),
                'pass_confirm' => trim($form['pass_confirm']),
            ];
            var_dump($form);
        else:
            $data = [
                'name' => '',
                'email' => '',
                'pass' => '',
                'pass_confirm' => '',
            ];
        endif;
        $this->view('users/register', $data);
    }

}