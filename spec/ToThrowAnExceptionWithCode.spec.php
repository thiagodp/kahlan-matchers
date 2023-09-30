<?php
require_once 'vendor/autoload.php';

describe( 'ToThrowAnExceptionWithCode', function() {

    it( 'matches an exception with the given code', function() {
        expect( function() {
            throw new Exception( 'ignored', 1 );
        } )->toThrowAnExceptionWithCode( 1 );
    } );

    it( 'can be negated', function() {
        expect( function() {
            throw new Exception( 'ignored', 1 );
        } )->not->toThrowAnExceptionWithCode( 0 );
    } );

} );