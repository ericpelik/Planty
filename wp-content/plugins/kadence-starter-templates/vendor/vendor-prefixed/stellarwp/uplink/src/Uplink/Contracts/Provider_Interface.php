<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by kadencewp on 10-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace KadenceWP\KadenceStarterTemplates\StellarWP\Uplink\Contracts;

interface Provider_Interface {
	/**
	 * Register action/filter listeners to hook into WordPress
	 *
	 * @return void
	 */
	public function register();
}
