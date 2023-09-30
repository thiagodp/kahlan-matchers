<?php
require_once 'vendor/autoload.php';

describe( 'ToThrowAnExceptionThatMatches', function() {

    it( 'matches the given regex', function() {
        expect( function() {
            throw new Exception( 'Something went wrong!' );
        } )->toThrowAnExceptionThatMatches( '/wrong/' );
    } );

    it( 'can be negated', function() {
        expect( function() {
            throw new Exception( 'A message!' );
        } )->not->toThrowAnExceptionThatMatches( '/ops/' );
    } );

} );