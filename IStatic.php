<?php

/**
 * @file
 * @brief This file contains the interface IStatic.
 */

/**
 * @brief Implement this interface to get static constructor behaviour (autoloader required).
 * 
 * If a class is autoloaded, a check is done to see if the class implements
 * this interface. If so, the static function Constructor is called.
 *
 * To get as much 'static' behaviour as possible:
 * - Make class final so it can not have child classes.
 * - Extend StaticClass which throws an Exception on instantiation
 * (already implements this interface but not the Constructor function).
 * 
 * @see See StaticClass for an example.
 */
interface IStatic
{

    /**
     * @brief The Constructor function of the implementing class
     *   will automatically be called (once) by the autoloader on (first) access.
     */
    public static function Constructor();

}
