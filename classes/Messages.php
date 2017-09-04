<?php

class Messages {

    public static function setMessage($message, $error = false) {
        if($error) {
            $_SESSION['error_message'] = $message;
        } else {
            $_SESSION['success_message'] = $message;
        }
    }
    public static function displayMessage() {
        if(isset($_SESSION['error_message'])) {
            echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
            unset($_SESSION['error_message']);
        }
        if(isset($_SESSION['success_message'])) {
            echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
            unset($_SESSION['success_message']);
        }
    }
}