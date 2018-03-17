<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\MinkContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }

    /**
     * @Then :arg1 elements contains :arg2 element and count equalt to "=:arg3
     */
/*
    public function elementsContainsElementAndCountEqualtTo($arg1, $arg2, $arg3)
    {
        $this->assertSession()->elementExists('css', $arg1);


    }
  */
}
