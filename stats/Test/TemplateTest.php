<?php
    namespace stats\Test;
    use stats\Baseball;
    require_once "Baseball.php";
    class BaseballTest4 extends \PHPUnit_Framework_TestCase
    {
        /**
         * undocumented public function ()
         {

         }
         *
         * @return void
         * @author Steve Francia <steve.francia@gmail.com>
         */
        public function setUp()
        {
            $this->instance = new Baseball();
        }
        //tear down method
        public function tearDown()
        {
            unset($this->instance);
        }
        public function testCalcAvgEquals()
        {
            $atbats = 389;
            $hits = 129;
            $result = $this->instance->calc_avg($atbats,$hits);
            $expectResult = $hits/$atbats;
            $formatexpectedresult = number_format($hits/$atbats,3);
            $this->assertEquals($formatexpectedresult,$result);
            /* $this->assertEquals($expectResult,$result); */
        }
        /**
         * undocumented public function ()
         {

         }
         *
         * @return void
         * @author Steve Francia <steve.francia@gmail.com>
         */
        public function testCalcHitsAreStrings()
        {
            $atbats = 389;
            $hits = 'wefwf';
            $result = $this->instance->calc_avg($atbats,$hits);
            $formatexpectedresult = 0.000;
            $this->assertEquals($formatexpectedresult,$result);
        }
    }
?>

