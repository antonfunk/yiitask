<?php

return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        'theme' => 'bootstrap',
        'components'=>array(
            'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                'site/<page:\w+>'=>'site/GetContent',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',

            ),
        ),
        )
        // Put front-end settings there
    )
);
?>