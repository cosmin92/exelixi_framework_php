<?php
/*
 * Author: Cosmin Fane Cozma
 * Date: 21/01/2019
 * File: util_functions.php
 * Copyright @ 2019 Cosmin Fane Cozma. All rights reserved
 */

namespace exelixi;

/**
 * @param $data mixed
 * @param null $message string
 */
function out($data, $message = null)
{
    if (is_null($message)) {
        echo '<p>' . $data . '</p>';
    } else {
        echo '<p>' . $message . ': ' . $data . '</p>';
    }
}

/**
 * @param array $data
 * @param null string $message
 */
function out_r(array $data, $message = null)
{
    if (!is_null($message)) {
        echo '<p>' . $message . ':' . '</p>';
    }
    foreach ($data as $key => $value) {
        echo '<p>' . $key . ': ' . $value . '</p>';
    }
}