<?php

/**
 * @author MGriesbach@gmail.com
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link http://github.com/MSeven/cakephp_queue
 */
class QueueSchema extends CakeSchema {

/**
 * Before handler
 *
 * @param array $event event
 * @return bool always true
 */
	public function before($event = array()) {
		return true;
	}

/**
 * After handler
 *
 * @param array $event event
 * @return void
 */
	public function after($event = array()) {
	}

	public $queuedTasks = array(
		'id' => array(
			'type' => 'integer',
			'null' => false,
			'default' => null,
			'length' => 10,
			'key' => 'primary'
		),
		'jobtype' => array(
			'type' => 'string',
			'null' => false,
			'length' => 45
		),
		'data' => array(
			'type' => 'text',
			'null' => true,
			'default' => null
		),
		'group' => array(
			'type' => 'string',
			'length' => 255,
			'null' => true,
			'default' => null
		),
		'reference' => array(
			'type' => 'string',
			'length' => 255,
			'null' => true,
			'default' => null
		),
		'created' => array(
			'type' => 'datetime',
			'null' => true,
			'default' => null
		),
		'notbefore' => array(
			'type' => 'datetime',
			'null' => true,
			'default' => null
		),
		'fetched' => array(
			'type' => 'datetime',
			'null' => true,
			'default' => null
		),
		'progress' => array(
			'type' => 'float',
			'null' => true,
			'default' => null,
			'length' => '3,2'
		),
		'completed' => array(
			'type' => 'datetime',
			'null' => true,
			'default' => null
		),
		'failed' => array(
			'type' => 'integer',
			'null' => false,
			'default' => '0',
			'length' => 3
		),
		'failure_message' => array(
			'type' => 'text',
			'null' => true,
			'default' => null
		),
		'workerkey' => array(
			'type' => 'string',
			'null' => true,
			'length' => 45
		),
		'indexes' => array(
			'PRIMARY' => array(
				'column' => 'id',
				'unique' => 1
			)
		)
	);

}

