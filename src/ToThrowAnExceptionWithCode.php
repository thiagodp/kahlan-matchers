<?php
namespace phputil\kahlan;

/**
 * Kahlan matcher that matches an exception with the given code.
 */
class ToThrowAnExceptionWithCode {

    protected static $actualCode = 0;
    protected static $expectedCode = 0;

    /**
     * Matches an exception with the given code.
     */
    public static function match( $actual, $expected ) {
        self::$expectedCode = $expected;
        try {
            $actual();
            return false;
        } catch ( \Exception $e ) {
            self::$actualCode = $e->getCode();
            return $e->getCode() === $expected;
        }
    }

    public static function description() {
        return [
            'description' => 'be an exception with code ' . self::$expectedCode,
            'data' => [
                'actual' => self::$actualCode,
                'expected' => self::$expectedCode
            ]
        ];
    }
}

?>