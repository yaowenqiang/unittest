<?php
    namespace stats\Test;
    use stats\Baseball;
    require "Baseball.php";
    class BaseballTest extends \PHPUnit_Framework_TestCase
    {
        public function testCalcAvgEquals()
        {
            $atbats = 389;
            $hits = 129;
            $baseball = new Baseball();
            $result = $baseball->calc_avg($atbats,$hits);
            $expectResult = $hits/$atbats;
            $this->assertEquals($expectResult,$result);
        }
    }
?>