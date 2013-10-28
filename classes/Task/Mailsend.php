<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Help task to display general instructons and list all tasks
 *
 * @package    Kohana
 * @category   Task
 * @author     Kohana Team
 * @copyright  (c) 2013 PicoLabs Inc.
 */
class Task_Mailsend extends Minion_Task {
	protected function _execute(array $params) {
		$result = EmailQueue::sendEmails();
	}
}
