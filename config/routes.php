<?php
/**
 * Date: 2017/12/1 15:40
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('','app\controllers\HomeController@home');

Macaw::dispatch();
