<?php
namespace phputil\kahlan;

/**
 * Kahlan matcher that matches an exception with the given class name.
 */
class ToThrowAnExceptionWithClassName {

    protected static $actualClassName = '';
    protected static $expectedClassName = '';

    /**
     * Matches an exception with the given class name.
     */
    public static function match( $actual, $expected ) {
        self::$expectedClassName = $expected;
        try {
            $actual();
            return false;
        } catch ( \Exception $e ) {
            $className = get_class( $e );
            self::$actualClassName = $className;
            return $className === $expected;
        }
    }

    public static function description() {
        return [
            'description' => 'be an exception named "' . self::$expectedClassName . '"',
            'data' => [
                'actual' => self::$actualClassName,
                'expected' => self::$expectedClassName
            ]
        ];
    }
}

?>