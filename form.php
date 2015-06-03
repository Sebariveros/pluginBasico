<?php
require_once("$CFG->libdir/formslib.php");

class getemail extends moodleform {

	function definition() {
		global $CFG;

		$mform =& $this->_form; // Don't forget the underscore!

		$mform->addElement('text', 'email', "escribe tu email");
        $mform->addElement('button', 'enviar', get_string("enviar"));
	}                           // Close the function
}                               // Close the class








