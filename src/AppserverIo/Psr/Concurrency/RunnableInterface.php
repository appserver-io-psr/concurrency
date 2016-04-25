<?php

/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Johann Zelger <jz@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/concurrency
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Concurrency;

/**
 * Interface Runnable
 *
 * Simple interface for runnables
 *
 * @author    Johann Zelger <zelger@me.com>
 * @copyright 2016 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/concurrency
 * @link      http://www.appserver.io
 */
interface RunnableInterface
{
    /**
     * Runs specific logic of runnable class
     *
     * @return void
     */
    public function run();
}
