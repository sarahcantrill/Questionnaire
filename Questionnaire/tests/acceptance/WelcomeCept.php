<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Ensure that Laravel works');
$I->amOnPage('/');
$I->see('Laravel');
