<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=forge5',
    'username' => 'postgres',
    'password' => 'barcelona97.',
    'charset' => 'utf8',
     'schemaMap' => [
      'pgsql'=> [
        'class'=>'yii\db\pgsql\Schema',
        'defaultSchema' => 'public' //specify your schema here
      ]
    ], // Postg

      
       
];
