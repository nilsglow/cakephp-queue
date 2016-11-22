<?php

namespace TestApp\Model\Table;

use Queue\Model\Table\QueuedJobsTable as BaseQueuedTasksTable;

class QueuedJobsTable extends BaseQueuedTasksTable {

	/**
	 * @var bool
	 */
	public $cacheSources = false;

	/**
	 * Clear current worker key to generate new
	 *
	 * @return void
	 */
	public function clearKey() {
		$this->_key = null;
	}

}
