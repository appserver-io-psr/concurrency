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
 * Threaded interface
 *
 * @author    Johann Zelger <zelger@me.com>
 * @copyright 2016 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/concurrency
 * @link      http://www.appserver.io
 */
interface ThreadedInterface extends \Iterator, \Countable, \ArrayAccess
{
    /**
     * Fetches a chunk of the objects properties table of the given size
     *
     * @param int $size The number of items to fetch
     *
     * @link http://www.php.net/manual/en/threaded.chunk.php
     * @return array An array of items from the objects member table
     */
    public function chunk($size);

    /**
     * Retrieves terminal error information from the referenced object
     *
     * @link http://www.php.net/manual/en/threaded.getterminationinfo.php
     * @return array|bool array containing the termination conditions of the referenced object
     */
    //public function getTerminationInfo() {}

    /**
     * Tell if the referenced object is executing
     *
     * @link http://www.php.net/manual/en/threaded.isrunning.php
     * @return bool A boolean indication of state
     */
    //public function isRunning() {}

    /**
     * Tell if the referenced object exited, suffered fatal errors, or threw uncaught exceptions during execution
     *
     * @link http://www.php.net/manual/en/threaded.isterminated.php
     * @return bool A boolean indication of state
     */
    //public function isTerminated() {}

    /**
     * Tell if the referenced object is waiting for notification
     *
     * @link http://www.php.net/manual/en/threaded.iswaiting.php
     * @return bool A boolean indication of state
     */
    //public function isWaiting() {}

    /**
     * Lock the referenced objects property table
     *
     * @link http://www.php.net/manual/en/threaded.lock.php
     * @return bool A boolean indication of state
     */
    //public function lock() {}

    /**
     * Merges data into the current object
     *
     * @param mixed $from The data to merge
     * @param bool $overwrite Overwrite existing keys flag, by default true
     *
     * @link http://www.php.net/manual/en/threaded.merge.php
     * @return bool A boolean indication of success
     */
    public function merge($from, $overwrite = true);

    /**
     * Send notification to the referenced object
     *
     * @link http://www.php.net/manual/en/threaded.notify.php
     * @return bool A boolean indication of success
     */
    //public function notify() {}

    /**
     * The programmer should always implement the run method for objects that are intended for execution.
     *
     * @link http://www.php.net/manual/en/threaded.run.php
     * @return void The methods return value, if used, will be ignored
     */
    //public function run() {}

    /**
     * Pops an item from the objects property table
     *
     * @link http://www.php.net/manual/en/threaded.pop.php
     * @return mixed The last item from the objects properties table
     */
    public function pop();
    
    /**
     * Shifts an item from the objects properties table
     *
     * @link http://www.php.net/manual/en/threaded.shift.php
     * @return mixed The first item from the objects properties table
     */
    public function shift();

    /**
     * Executes the block while retaining the synchronization lock for the current context.
     *
     * @param \Closure $function The block of code to execute
     * @param mixed $args... Variable length list of arguments to use as function arguments to the block
     *
     * @link http://www.php.net/manual/en/threaded.synchronized.php
     * @return mixed The return value from the block
     */
    //public function synchronized(\Closure $function, $args = null) {}

    /**
     * Unlock the referenced objects storage for the calling context
     *
     * @link http://www.php.net/manual/en/threaded.unlock.php
     * @return bool A boolean indication of success
     */
    //public function unlock() {}

    /**
     * Waits for notification from the Stackable
     *
     * @param int $timeout An optional timeout in microseconds
     *
     * @link http://www.php.net/manual/en/threaded.wait.php
     * @return bool A boolean indication of success
     */
    //public function wait($timeout) {}
}
