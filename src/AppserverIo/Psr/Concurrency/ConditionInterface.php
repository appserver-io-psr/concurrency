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
 * @author    Johann Zelger <zelger@me.com>
 * @copyright 2016 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/concurrency
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Concurrency;

/**
 * Condition object implementation
 *
 * @author    Johann Zelger <zelger@me.com>
 * @copyright 2016 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/concurrency
 * @link      http://www.appserver.io
 */
interface ConditionInterface
{
    /**
     * Broadcast to all Threads blocking on a call to Cond::wait().
     *
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     *
     * @return bool A boolean indication of success
     */
    public static function broadcast($condition);
    
    /**
     * Creates a new Condition Variable for the caller.
     *
     * @return int A handle to a Condition Variable
     */
    public static function create();
    
    /**
     * Destroy a condition
     *
     * Destroying Condition Variable handles must be carried out explicitly by the programmer when they are
     * finished with the Condition Variable.
     * No Threads should be blocking on a call to Cond::wait() when the call to Cond::destroy() takes place.
     *
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     *
     * @return bool A boolean indication of success
     */
    public static function destroy($condition);

    /**
     * Signal a Condition
     *
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     *
     * @return bool A boolean indication of success
     */
    public static function signal($condition);
    /**
     * Wait for a signal on a Condition Variable, optionally specifying a timeout to limit waiting time.
     *
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     * @param int $mutex A handle returned by a previous call to Mutex::create() and owned (locked) by the caller.
     * @param int $timeout An optional timeout, in microseconds
     *
     * @return bool A boolean indication of success
     */
    public static function wait($condition, $mutex, $timeout = null);
}
