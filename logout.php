<?php
session_start();

// destroy the session
session_destroy();
header('Location: /PhpLearning/sessions.php');
