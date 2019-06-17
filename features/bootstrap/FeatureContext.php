<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Tests\TestCase;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{

    private $a;
    private $b;
    private $total;
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
     * @When eu estou na homepage
     */
    public function euEstouNaHomepage()
    {
        $this->visitPath('/');
    }

    /**
     * @Then Eu deveria ver :arg1
     */
    public function euDeveriaVer($arg1)
    {
        $this->assertPageContainsText($arg1);
    }

    /**
     * @When eu vou para :arg1
     */
    public function euVouPara($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then a url deve corresponder :arg1
     */
    public function aUrlDeveCorresponder($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given que eu tenho numero :arg1 e numero :arg2
     */
    public function queEuTenhoNumeroENumero($arg1, $arg2)
    {
        $this->a = $arg1;
        $this->b = $arg2;
        $this->total = $this->a + $this->b;
    }

    /**
     * @Then eu deveria receber :arg1
     */
    public function euDeveriaReceber($arg1)
    {
        if($arg1 != $this->total){
            throw new Exception("Valor da soma atual: " . $this->total);
        }
        $this->total;
    }


}
