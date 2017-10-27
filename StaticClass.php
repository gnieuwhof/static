<?php

/**
 * @file
 * @brief This file contains the class StaticClass.
 */

/**
 * @brief Extend this class to avoid instantiation.
 * 
 * The class is abstract so it can not be instantiated.
 * 
 * Implementation example:
 * @code
 * final class Bar extends StaticClass
 * {
 *     const FOO = 'Constant in static class';
 *     
 *     public static function Constructor()
 *     {
 *         print 'This will only be called (once) on autoload<br />';
 *     }
 * }
 * @endcode
 * 
 * Behavior example:
 * @code
 * echo Bar::FOO;
 * echo Bar::FOO;
 * // output:
 * // This will only be called (once) on autoload<br />
 * // Constant in static class
 * // Constant in static class
 * @endcode
 */
abstract class StaticClass implements IStatic
{

    /**
     * @brief This constructor is final so it cannot be overridden.
     * 
     * @throws Exception Thrown if child is instantiated.
     */
    public final function __construct()
    {
        throw new Exception( 'Static class cannot be instantiated' );
    }

}
