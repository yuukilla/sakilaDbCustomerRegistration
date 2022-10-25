<?php

require_once __DIR__ . '/src/view.php';

render( '__header', [ 'title' => "SakilaDB Register" ] );

render( 'task' );

render( '__footer' );