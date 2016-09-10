<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2014-03-08 at 10:33:39.
 */
class AccountHandlerTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var AccountHandler
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new AccountHandler;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {
		
	}

	/**
	 * @covers AccountHandler::getDataForId
	 * @covers AccountHandler::getDataFor
	 */
	public function testSimpleGetter() {
		DB::getInstance()->exec('DELETE FROM `runalyze_account` WHERE `id` = 1 OR `id` = 13');

		DB::getInstance()->insert('account',
			array('id', 'username', 'name', 'mail'),
			array(1, 'Testuser', 'Max Mustermann', 'mail@test.de')
		);

		$this->assertTrue( is_array(AccountHandler::getDataForId(1)) );
		$this->assertEquals( false, AccountHandler::getDataForId(13) );

		$this->assertTrue( is_array(AccountHandler::getDataFor('Testuser')) );
		$this->assertEquals( false, AccountHandler::getDataFor('Tester') );
	}

	/**
	 * @covers AccountHandler::tryToRegisterNewUser
	 */
	public function testTryToRegisterNewUser() {
		// TODO: Attention, process sets config-vars and imports default settings
		// Database has to be cleaned afterwards
	}

	/**
	 * @covers AccountHandler::sendPasswordLinkTo
	 */
	public function testSendPasswordLinkTo() {
		// Can't be tested
	}

	/**
	 * @covers AccountHandler::setAndSendDeletionKeyFor
	 */
	public function testSetAndSendDeletionKeyFor() {
		// Can't be tested
	}

}
