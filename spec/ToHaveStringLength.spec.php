<?php
require_once 'vendor/autoload.php';

describe( 'ToHaveStringLength', function() {

    it( 'has the given length', function() {
        expect( 'Pelé' )->toHaveStringLength( 4 );
        expect( '😉' )->toHaveStringLength( 1 );
    } );

    it( 'can be negated', function() {
        expect( 'Pelé' )->not->toHaveStringLength( 5 );
    } );

} );