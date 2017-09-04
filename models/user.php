<?php
class UserModel extends Model {
    public function register() {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']) {
            // hash password
            $password = sha1($post['password']);

            // verify input
            if($post['name'] == '' || $post['email'] == '') {
                Messages::setMessage('Name and Email must not be empty.', true);
                return;
            }
            if(strlen($post['password']) < 4) {
               Messages::setMessage('Password must have at least 4 characters.', true); 
               return;
            }
            // Insert

            $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();
            // Verify
            if($this->lastInsertId()) {
                // Redirect
                header('Location: ' . ROOT_URL . 'users/login');
            }
        }
        return;
    }

    public function login() {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']) {
            // hash password
            $password = sha1($post['password']);

            // Select
            $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $row = $this->single();

            if($row) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id"    => $row['id'],
                    "name"  => $row['name'],
                    "email" => $row['email']
                );
                header('Location: ' . ROOT_URL . 'shares');
            } else {
                Messages::setMessage('Incorret Login', true);
            }
        }
        return;
    }
}