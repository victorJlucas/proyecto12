<?php

/**
 * Modelo Shop de administración
 */
class AdminShop
{
	private $db;

	function __construct()
	{
		$this->db = MySQLdb::getInstance()->getDatabase();
	}
}