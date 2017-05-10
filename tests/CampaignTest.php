<?php
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UnitTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    function a_campaign_can_have_many_steps()
    {
        $campaign = new NewUserCampaign;

        $campaign->addStep(function($step){
            $step->delay()->fiveDays();
            $step->
        })->addStep(new NewFeatureStep());

        $this->assertEquals(2,count($campaign->steps));
    }
}