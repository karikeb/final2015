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
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
            $username=strtolower($this->username);
            $user=User::model()->find('LOWER(username)=?',array($username));
            //print_r($user);
           // die();
            if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(!$user->validatePassword($this->password)){
                    echo "error en password";
                    echo $this->password;
                    //die();
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
                }else{
                    echo "paso los else";
                   // die();
                        $this->_id=$user->id;
                        $this->username=$user->username;
                        $this->errorCode=self::ERROR_NONE;
                }
			
		return $this->errorCode==self::ERROR_NONE;
	}
        
        public function getId(){
            return $this->_id;
        }
}