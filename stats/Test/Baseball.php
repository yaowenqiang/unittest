<?php
namespace stats;
class Baseball
{
    /**
     * Add two given values together and diide by 2
     *
     * @return void
     * @author Steve Francia <steve.francia@gmail.com>
     */
    public function calc_avg($ab,$hits)
    {
        if(!is_numeric($ab)){
            $avg = "Not a number";
            return $avg;
            exit();
        }
        if ($ab ==0) {
            $avg = "0.000";
        }
        else
        {
            $avg = number_format($hits/$ab,3);
        }
        return $avg;
    }
    /**
     * On Base Percentage
     *
     * @return void
     * @author Steve Francia <steve.francia@gmail.com>
     */
    public function calc_obp($ab,$bb,$hp,$sac,$hits)
    {
        if (!($total=$ab + $bb + $hp + $sac)) {
            $avg = "0.000";
        }
        else
        {
            $obp = number_format(($hits + $bb + $hp + $sac) / $ab,3);
        }
        return $obp;
    }//end calc_obp

    /**
     * calcuate slugging percentage
     *
     * @return void
     * @author Steve Francia <steve.francia@gmail.com>
     */
    public function calc_slg($ab,$singles,$doubles,$triples,$hr)
    {
        if ($ab == 0) {
            $slg = "0.000";
        }
        else
        {
            $slg = number_format((($singles*1)+($doubles*2)+($triples*3)+($hr*4))/$ab,3);
        }
        return $slg;
    }//end calc_slg
    /**
     * undocumented function
     *
     * @return
     * @author Steve Francia <steve.francia@gmail.com>
     */
    public function calc_ops($opb,$slg)
    {
        $ops = $slg + $obp;
        return $ops;
    }
}

