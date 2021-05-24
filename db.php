<?php
    $config = array( 
        'db' => array(
            Server => '127.0.0.1',
            User => 'root',
            Password => 'root' ,
            Name_db => 'nelil'
        )
    );

    $mysql = mysqli_connect( 
           $config[db]['Server'],
           $config[db]['User'],
           $config[db]['Password'],
           $config[db]['Name_db']
    );

    if(mysqli_connect_errno())
    {
        echo mysqli_connect_error();
        exit();
    }
?>