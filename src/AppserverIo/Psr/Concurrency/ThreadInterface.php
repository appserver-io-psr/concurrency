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
 * Thread interface
 *
 * @author    Johann Zelger <zelger@me.com>
 * @copyright 2016 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/concurrency
 * @link      http://www.appserver.io
 */
interface ThreadInterface extends RunnableInterface
{
    /**
     * Start method which will prepare, create and starts a thread
     *
     * @return boolean pthread create state
     */
    public function start();

    /**
     * Returns the current state of thread object
     *
     * @return int
     */
    public function getState();

    /**
     * Sets the given state for thread object
     *
     * @param int $state The state that should be set
     *
     * @return void
     */
    public function setState($state);
    
    /**
     * Checks if state matches given state
     * 
     * @param int $state The state that should match current state
     * 
     * @return boolean
     */
    public function hasState($state);

    /**
     * Joins the current thread by its thread id.
     *
     * @return boolean
     */
    public function join();
    
    /**
     * Detaches the current thread by its thread id.
     *
     * @return boolean
     */
    public function detach();
    
    /**
     * Sends a kill signal to get killed
     *
     * @return boolean
     */
    public function kill();
    
    /**
     * Returns wheater the thread is in waiting state or not
     * 
     * @return bool
     */
    public function isWaiting();

    /**
     * Returns wheater the thread was left in state error or not
     *
     * @return bool
     */
    public function isTerminated();

    /**
     * Waits for the state codition gets a signal
     * 
     * @return void
     */
    public function wait();
    
    /**
     * Notifiy the state cond for waiters to stop waiting
     * 
     * @return void
     */
    public function notify();

    /**
     * Locks thread object's mutex
     *
     * @return void
     */
    public function lock();

    /**
     * Unlocks thread object's mutex
     *
     * @return void
     */
    public function unlock();

    /**
     * Executes given closure synchronized
     *
     * @param callable $sync
     */
    public function synchronized(\Closure $sync);

    /**
     * Returns the objects threads id
     *
     * @return int
     */
    public function getThreadId();
    
    /**
     * Returns current thread id
     */
    static public function getCurrentThreadId();
}
