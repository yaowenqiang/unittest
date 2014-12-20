<?php
    namespace stats\Test;
    use stats\Baseball;
    require_once "Baseball.php";
    class BaseballTest3 extends \PHPUnit_Framework_TestCase
    {
        //because OPS is sum total of on bas percentage plus slugging average,we can use the depends annotation
        public function testSlug()
        {
            $baseball = new Baseball();
            $slg = $baseball->calc_slg(389,106,12,4,7);
            $expectSlg = number_format(((106*1)+(12*2) + (4*3) + (7*4))/389,3);
            $this->assertEquals($expectSlg,$slg);
            return $slg;
        }
        public function testOnBasePerc() {
            $baseball = new Baseball();
            $obp = $baseball->calc_obp(389,23,6,7,129);
            $expectedobp = number_format((129+23+6+7)/389,3);
            $this->assertEquals($expectedobp,$obp);
            return $obp;
        }

        /**
         * @depends testslug
         * @depends testonbaseperc
         * @return void
         * @author Steve Francia <steve.francia@gmail.com>
         */
        function testOps($obp,$slg)
        {
            $baseball = new Baseball();
            $ops = $baseball->calc_ops($obp,$slg);
            $expectops = $obp + $slg;
            $this->assertEquals($expectops,$ops);
        }
        //if either testSlugging or testonbaseperc fail,testops will be skippd
    }
?>

