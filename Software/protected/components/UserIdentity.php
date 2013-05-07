<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user= Usuarios::model()->find("login = '".$this->username."' AND senha = '".md5($this->password)."'");

		if($user===null){

			$this->errorCode=self::ERROR_USERNAME_INVALID;
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		} else {
			$this->_id=$user->id;
			$this->username=$user->login;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}
	

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}