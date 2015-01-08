<?php
/**
 * Collection of static functions to work in cooperation with the extension lib (lib/div)
 *
 * PHP versions 4 and 5
 *
 * Copyright (c) 2006-2007 Elmar Hinz
 *
 * LICENSE:
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package    TYPO3
 * @subpackage div
 * @author     Elmar Hinz <elmar.hinz@team-red.net>
 * @copyright  2006-2007 Elmar Hinz
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @version    SVN: $Id: class.tx_div.php 6415 2007-09-04 08:03:27Z elmarhinz $
 * @since      0.1
 */

/**
 * Collection of static functions to work in cooperation with the extension lib (lib/div)
 *
 *
 * This is a library that results of the work of the Extension Coordination Team (ECT).
 *
 * In this class we collect diverse static functions that are usefull for extension development,
 * but that didn't made their way into t3lib_div. A part of the functions are peer functions
 * to classes of the extension lib.
 *
 * <b>Contribute your own functions</b>
 *
 * You are invited to share your own most usefull functions with the world of TYPO3 developers.
 *
 * Advantages for you:
 * - You don't need to spoil the TER with new extensions only to provide a few functions.
 * - You don't need to bother with the maintainance of an individual extension.
 * - You have a unique short extension kex (tx_div) to access the different contributed functions.
 * - It is more likely that others will really use your contribution, because this library is
 *   documented in books and magazines.
 * - Your function will become a common standard.
 *
 * You can contribute via the SVN repository, by becomming a member of the project typo3xdev
 * on sourceforge.net. Please ask the project admin (Andreas Otto) for a membership to
 * {@link http://sourceforge.net/projects/typo3xdev/ typo3xdev project on Sourceforge}.
 *
 * This collection of functions is "moderated". We want to keep the style coherent and the quality high.
 * So we will not automatically accept any contribution as it is.  We will check if your contribution
 * is usefull and adheres to the coding guidelines. We will maybe keep the leading idea of your contribution
 * but we may adapt it to fit into the style of this exension. Anyway we thank you for all your contributions.
 *
 * Style guidelines in short
 *
 * - Use camalCase.
 * - Avoid underscores and abbreviations.
 * - Use speaking function names in the imperative form.
 * - Provide documentation in Java format.
 *
 *
 * <b>Definition of data structures</b>
 *
 * <b>The list family</b>
 *
 * - listString:
 *    This is a CSV like string of values that are separated by whitespace and/or other characters.
 *    <pre>
 *     Example: 'one, two, three'
 *     Example: 'alpha beta gamma'
 *    </pre>
 *    The default splitting characters are '\s,;:': whitespace, comma, semicolon, colon.
 *    Other splitting characters can be given to the splitting functions as parameters.
 *    Elments that contain whitespace or the splitting characters are currently not supported. That may
 *    by optimized in future. Until then only use it as human written and controlled input format.
 *
 * - listArray:
 *    This is an array with integers as keys:
 *    <pre>
 *     Example: array( 'red', 'yellow', 'green')
 *     Example: split(' ', 'alpha beta gamma')
 *    </pre>
 *
 * - listObject:
 *    This is an object of the SPL type i.e. tx_lib_object with integers as keys to the internal value:
 *    <pre>
 *     Example: new tx_lib_object(array( 'red', 'yellow', 'green'))
 *     Example: new tx_lib_object(split(' ', 'alpha beta gamma'))
 *    </pre>
 *
 * <b> The hash family</b>
 *
 * - hashString:
 *    This is a string of values that are separated by whitespace and/or other characters which are ordered as pairs.
 *    The even items are the keys, the odd items are the values.
 *    <pre>
 *     Example: 'firstname Peter surname Potter email peter@example.org'
 *     Example: 'firstname: Peter,  surname: Potter,  email: peter@example.org'
 *    </pre>
 *    The default splitting characters are '\s,;:': whitespace, comma, semicolon, colon.
 *    Other splitting characters can be given to the splitting functions as parameters.
 *    Elments that contain whitespace or the splitting characters are currently not supported. That may
 *    by optimized in future. Until then only use it as human written and controlled input format.
 *
 * - hashArray:
 *    This is an array of key value pairs:
 *    <pre>
 *     Example: array( 'firstname' => 'Peter', 'surname' => 'Potter')
 *    </pre>
 *
 * - hashObject:
 *    This is an object of the SPL type i.e. tx_lib_object with keys and values:
 *    <pre>
 *     Example: new tx_lib_object(array( 'firstname' => 'Peter', 'surname' => 'Potter'))
 *    </pre>
 *
 * @package    TYPO3
 * @subpackage div
 * @author     Elmar Hinz <elmar.hinz@team-red.net>
 */

class tx_div {

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/div/class.tx_div.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/div/class.tx_div.php']);
}
?>
