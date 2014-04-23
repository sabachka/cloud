<?php

abstract class Entity {

	/**
	 * @var number
	 */
	protected $entityID;

	public function __construct( $entityID ) {
		$this->entityID = $entityID;
	}

	/**
	 * @return number
	 */
	public function getID() {
		return $this->entityID;
	}

}