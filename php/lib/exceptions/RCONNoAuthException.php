<?php
/**
 * This code is free software; you can redistribute it and/or modify it under
 * the terms of the new BSD License.
 *
 * @author Sebastian Staudt
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package Steam Condenser (PHP)
 * @subpackage Exceptions
 * @version $Id$
 */

require_once "exceptions/SteamCondenserException.php";

/**
 * @package Steam Condenser (PHP)
 * @subpackage Exceptions
 */
class RCONNoAuthException extends SteamCondenserException
{
	public function __construct()
	{
		parent::__construct("Not authenticated yet.");
	}
}
?>
