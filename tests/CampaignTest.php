<?php

use Fuzzybaird\Campaign\Campaign;
use Fuzzybaird\Compaigns\app\campaigns\NewUserCampaign;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UnitTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    function a_campaign_can_have_many_steps()
    {
        // $campaign = new NewUserCampaign;
        for ($i=0; $i < 10; $i++) { 
            print($i);
        }
        $campaign = new Campaign;
        $campaign
            ->addStep(function($step){
                $step->label('Contact us if you have any questions');
                $step->delay()->days(5);
                $step->email(new ContactUsForQuestionsEmail);
            })->addStep(function($step){
                $step->delay()->weeks(3);
                $step->email(new ContactOurClientEmail);
            });
        $campaign->runSteps();
        $this->assertEquals(2,$campaign->countSteps());
    }
}
class ContactUsForQuestionsEmail{}
class ContactOurClientEmail{}