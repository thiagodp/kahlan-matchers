<?php
require_once 'vendor/autoload.php';

describe( 'ToThrowAnExceptionWithClassName', function() {

    it( 'matches an exception with the given class name', function() {
        expect( function() {
            throw new Exception( 'ignored', 1 );
        } )->toThrowAnExceptionWithClassName( Exception::class );
    } );

    it( 'can be negated', function() {
        expect( function() {
            throw new Exception( 'ignored', 1 );
        } )->not->toThrowAnExceptionWithClassName( 'Foo' );
    } );

} );