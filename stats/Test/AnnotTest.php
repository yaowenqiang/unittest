<?php
    namespace stats\Test;
    use stats\Baseball;
    require_once "Baseball.php";
    class BaseballTest2 extends \PHPUnit_Framework_TestCase
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
        public function tearDown()
        {
            unset($this->instance);
        }
        /**
         * undocumented public function ()
         {

         }
         *
         * @return void
         * @author Steve Francia <steve.francia@gmail.com>
         */
        /* public function testOps() */
        /* { */
        /*     $obp = .363; */
        /*     $slg = .469; */
        /*     $ops = $this->instance->calc_ops($obp,$slg); */
        /*     $expectedops = $obp + $slg; */
        /*     $this->assertEquals($expectedops,$ops); */
        /* } */
        /**
         * @dataProvider providerCaltArgs
         * @covers Baseball::cal_avg
         * @return void
         * @author Steve Francia <steve.francia@gmail.com>
         */
        /* public function testCalc($atbats,$hits) */
        /* { */
        /*     if(!is_numeric($atbats)){ */
        /*         $avg = "Not a number"; */
        /*         return $avg; */
        /*         exit(); */
        /*     } */
        /*     $baseball = new Baseball(); */
        /*     $result = $baseball->calc_avg($atbats,$hits); */
        /*     $expectResult = $hits/$atbats; */
        /*     $formatexpectedresult = number_format($hits/$atbats,3); */
        /*     $this->assertEquals($formatexpectedresult,$result); */
        /* } */
        /**
         * undocumented public function ()
         {

         }
         *
         * @return void
         * @author Steve Francia <steve.francia@gmail.com>
         */
        public function providerCaltArgs()
        {
            return array(
                array('389','129'),
                array('somestring',129),
                array(389,'somestring'),
                array('somestring','somestring')
            );
        }
        /**
         * PHPUnit relies heavily on reflection,as do other mocking frameworks
         * available in version >= 5.3.2
         *
         * @return void
         * @author Steve Francia <steve.francia@gmail.com>
         */
        public function invokeMethod(&$object,$methodName,array $parameters = array())
        {
            $reflection = new \ReflectionClass(get_class($object));
            $method = $reflection->getMethod($methodName);
            $method->setAccessible(true);
            return $method->invokeArgs($object,$parameters);
        }
        /**
         * undocumented public function ()
         {

         }
         *
         * @return void
         * @author
         **/
        public function testcalcAvg()
        {
            $avg = number_format(129/369,3);
            $expectResult = $this->invokeMethod($this->instance,'calc_avg',array(369,129));
            $this->assertEquals($avg,$expectResult);
        }
    }
?>
