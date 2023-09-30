<?php
namespace phputil\kahlan;

/**
 * Kahlan matcher for an exception whose message matches a given Regular Expression.
 */
class ToThrowAnExceptionThatMatches {

    protected static $actualMessage = '';
    protected static $expectedRegex = 0;

    /**
     * Matches the given Regular Expression.
     */
    public static function match( $actual, $expected ) {
        self::$expectedRegex = $expected;
        try {
            $actual();
            return false;
        } catch ( \Exception $e ) {
            $message = self::$actualMessage = $e->getMessage();
            return preg_match( $expected, $message ) === 1;
        }
    }

    public static function description() {
        return [
            'description' => 'match this regular expression: ' . self::$expectedRegex,
            'data' => [
                'actual' => self::$actualMessage,
                'expected' => self::$expectedRegex
            ]
        ];
    }
}

?>