<?PHP // $Id: version.php,v 1.4.2 2012/07/11 20:43:00 

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Registration version information
 *
 * @package    mod
 * @subpackage registration
 * @author     Miroslav Fikar, Marc-Robin Wendt
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$module->version  = 2013012301;
$module->release  = 'v2.0.0';    // human-friendly version name
$module->requires = 2012062501;  // Requires this Moodle version
$module->cron     = 60;

?>