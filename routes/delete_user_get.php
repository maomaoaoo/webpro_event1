<?php

$idx = $_GET['idx'];
if (deleteUserById($idx)) {
    header('Location: /users');
} else {
    echo 'Error deleting user';
}