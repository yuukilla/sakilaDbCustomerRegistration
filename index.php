<?php

require_once __DIR__ . '/src/view.php';
require_once __DIR__ . '/src/helpers.php';

render( '__header', [ 'title' => "SakilaDB Register" ] );


if ( isGetRequest() ) {
    render( 'register' );
} else {
    render( 'register_backend' );
}


render( '__footer' );