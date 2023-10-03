<?php
namespace phputil\kahlan;

/**
 * Kahlan matcher to compare a multi-byte string length.
 */
class ToHaveStringLength {

    /**
     * Matches the given length.
     */
    public static function match( $actual, $expected ) {
        return mb_strlen( $actual ) == $expected;
    }

    public static function description() {
        return 'have a multi-byte string length';
    }
}

?>