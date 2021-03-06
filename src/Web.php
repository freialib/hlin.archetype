<?php namespace hlin\archetype;

/**
 * @copyright (c) 2014, freia Team
 * @license BSD-2 <http://freialib.github.io/license.txt>
 * @package freia Library
 */
interface Web {

	/**
	 * @return string lowercase http name
	 */
	function requestMethod();

	/**
	 * Unlike PHP's built-in $_SERVER variable this ignores the QUERY_STRING
	 *
	 * @return string
	 */
	function requestUri();

	/**
	 * @return string
	 */
	function requestBody();

	/**
	 * @return array
	 */
	function requestPostData();

	/**
	 * @return array
	 */
	function requestQueryData();

	/**
	 * @return string
	 */
	function requestRawQueryData();

	/**
	* @return array
	*/
	function requestFiles();

	/**
	 * @see http://www.php.net//manual/en/function.header.php
	 */
	function header($header, $replace = true, $http_response_code = null);

	/**
	 * Sent content to the client.
	 */
	function send($contents, $status = 200, array $headers = null);

	/**
	 * ...
	 */
	function printf($format);

	/**
	 * @see http://www.php.net/manual/en/function.http-response-code.php
	 * @return int
	 */
	function http_response_code($code = null);

	/**
	 * Redirect type can be 303 (see other), 301 (permament), 307 (temporary)
	 *
	 * [!!] This method will not exit the execution itself
	 */
	function redirect($url, $type = 303);

} # interface
