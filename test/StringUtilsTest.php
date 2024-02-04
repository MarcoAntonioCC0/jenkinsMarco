<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/functions.php';
require_once __DIR__ . '/../src/StringUtils.php';

final class StringUtilsTest extends TestCase {
    /**
     * @dataProvider reverseStringDataProvider
     */
    public function testReverseString($expected, $actual) {
        $this->assertEquals(reverseString($expected), $actual, "No son iguales");
    }

    /**
     * @dataProvider toUpperCaseDataProvider
     */
    public function testToUpperCase($expected, $actual) {
        $this->assertEquals(toUpperCase($expected), $actual, "No son iguales");
    }

    /**
     * @dataProvider toLowerCaseDataProvider
     */
    public function testToLowerCase($expected, $actual) {
        $this->assertEquals(toLowerCase($expected), $actual, "No son iguales");
    }

    /**
     * @dataProvider countLettersDataProvider
     */
    public function testCountLetters($expected, $actual) {
        $this->assertEquals(countLetters($expected), $actual, "No son iguales");
    }
                                //$expected es el parametro inicial, $actual es el parámetro convertido
    public static function reverseStringDataProvider() {
        return [
            ['hola', 'alo'],
        ];
    }

    public static function toUpperCaseDataProvider() {
        return [
            ['hola', 'HOLA'],
        ];
    }

    public static function toLowerCaseDataProvider() {
        return [
            ['HOLA', 'hola'],
        ];
    }

    public static function countLettersDataProvider() {
        return [
            ['hola', '4'],
        ];
    }
}
