<?php

use PHPunit\Framework\TestCase;

require '../functions.php';

class functionsTest extends TestCase
{
    /**
     * Tests the successful use of the formatDate function
     *
     * @return void
     */
    public function testSuccessFormatDate(): void
    {
        $input = '1972-07-09';
        $expected = '9/July/1972';
        $case = formatDate($input);
        $this->assertEquals($case, $expected);
    }

    /**
     * Tests the failed use of the formatDate function
     *
     * @return void
     */
    public function testFailureFormatDate(): void
    {
        $input = '1972-33-09';
        $expected = 'Invalid Date';
        $case = formatDate($input);
        $this->assertEquals($case, $expected);
    }

    /**
     * Tests the use of the formatDate function with an incorrect data type
     *
     * @return void
     */
    public function testMalformedFormatDate(): void
    {
        $input = [1];
        $this->expectException(TypeError::class);
        formatDate($input);
    }

    /**
     * Tests the successful use of the displayRecords function
     *
     * @return void
     */
    public function testSuccessDisplayRecords(): void
    {
        $input = [
            [
            'cover' => 'test.jpg',
            'name' => 'The Rise and Fall of Ziggy Stardust and the Spiders from Mars',
            'band' => 'David Bowie',
            'release' => '1972-07-09',
            'numSongs' => '11'
            ]
        ];
        $expected = '<div class="textbox"><img src="test.jpg" alt="Album cover"><p>The Rise and Fall of Ziggy Stardust and the Spiders from Mars is an album by David Bowie. The album was released on 9/July/1972 and has 11 songs.</p></div>';
        $case = displayRecords($input);
        $this->assertEquals($case, $expected);
    }

    /**
     * Tests the failed use of the displayRecords function
     *
     * @return void
     */
    public function testFailureDisplayRecords(): void
    {
        $input = [];
        $expected = 'Missing info';
        $case = displayRecords($input);
        $this->assertEquals($case, $expected);
    }

    /**
     * Tests the use of the displayRecords function with an incorrect data type
     *
     * @return void
     */
    public function testMalformedDisplayRecords(): void
    {
        $input = false;
        $this->expectException(TypeError::class);
        DisplayRecords($input);
    }
}
