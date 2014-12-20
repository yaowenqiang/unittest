<?php
    namespace stats\Test;
    use stats\Baseball;
    require_once "Baseball.php";
    class BaseballTest2 extends \PHPUnit_Framework_TestCase
    {
        /**
         * @dataProvider providerCaltArgs
         * @covers Baseball::cal_avg
         * @return void
         * @author Steve Francia <steve.francia@gmail.com>
         */
        public function testCalc($atbats,$hits)
        {
            if(!is_numeric($atbats)){
                $avg = "Not a number";
                return $avg;
                exit();
            }
            $baseball = new Baseball();
            $result = $baseball->calc_avg($atbats,$hits);
            $expectResult = $hits/$atbats;
            $formatexpectedresult = number_format($hits/$atbats,3);
            $this->assertEquals($formatexpectedresult,$result);
        }
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
    }
?>
