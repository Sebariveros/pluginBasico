<?php
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
 *
*
* @package    local
* @subpackage pluginBasico
* @copyright  2015  Sebastián Riveros
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/
require_once(dirname(__FILE__) . '/../../config.php');
require_once("form.php");
global $PAGE, $CFG, $OUTPUT, $DB;
require_login();
$url = new moodle_url('/local/puglinBasico/index.php');
$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url($url);
$PAGE->set_pagelayout('standard');
$title ="Ayuda universitaria";
$PAGE->set_title($title);
$PAGE->set_heading($title);
echo $OUTPUT->header();

$form = new getemail();
echo $form->display();
