<?php
/**
 * Tests for the Emacs report of PHP_CodeSniffer.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Gabriele Santini <gsantini@sqli.com>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2009 SQLI <www.sqli.com>
 * @copyright 2006-2011 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

require_once 'PHPUnit/Framework/TestCase.php';
require_once dirname(__FILE__).'/AbstractTestCase.php';

/**
 * Tests for the Emacs report of PHP_CodeSniffer.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Gabriele Santini <gsantini@sqli.com>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2009 SQLI <www.sqli.com>
 * @copyright 2006-2011 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 1.3.6
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class Core_Reports_EmacsTest extends Core_Reports_AbstractTestCase
{


    /**
     * Tests standard generation.
     * 
     * @return void
     */
    public function testGenerate()
    {
        $fullReport = new PHP_CodeSniffer_Reports_Emacs();
        $generated  = $this->getFixtureReport($fullReport);
        $this->assertEquals(8, substr_count($generated, ': error -'));
        $this->assertEquals(2, substr_count($generated, ': warning -'));

    }//end testGenerate()


}//end class

?>
