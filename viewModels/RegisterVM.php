<?php

/**
 * View model for user registration functions.
 *
 * @author jam
 * @version 210307
 */
class RegisterVM {

    public $enteredPW;
    public $enteredConfPW;
    public $registrationType;
    public $errorMsg;
    public $statusMsg;
    public $newUser;
	public $categories;
	private $categoryDAM;
	private $userDAM;
    
    // User type constants used for switching in the controller.
    const VALID_REGISTRATION = 'valid_registration';
    const INVALID_REGISTRATION = 'invalid_registration';
    
    public function __construct() {
		$this->categoryDAM = new CategoryDAM();
		$this->userDAM = new UserDAM();
        $this->errorMsg = '';
        $this->statusMsg = array();
        $this->enteredPW = '';
        $this->enteredConfPW = '';
        $this->registrationType = self::INVALID_REGISTRATION;
        $this->newUser = null;
		$this->categories = $this->categoryDAM->readCategories();
    }

   public static function getInstance() {
        $vm = new self();
        
        $varArray = array('email' => emailPOST('email'),
                'lastName' => hPOST('lastName'),
                'firstName' => hPOST('firstName'),
                'phoneNumber' => hPOST('phoneNumber'),
				'ShipAddressID' => (null),
				'billingAddressID' => (null),
				'storeName' => (null));
        $vm->newUser = new User($varArray);
        $vm->enteredPW = hPOST('password');
        $vm->enteredConfPW = hPOST('confirmPassword');
		
        if ($vm->validateUserInput()) {
			$vm->newUser->password
			    = password_hash($vm->enteredPW, PASSWORD_DEFAULT);
			$vm->userDAM->writeUser($vm->newUser);
            $vm->registrationType = self::VALID_REGISTRATION;
        }
        return $vm;
    }
      
    private function validateUserInput() {
        $success = false;
			

        $FN = $this->newUser->firstName;
        $LN = $this->newUser->lastName;
        $EM = $this->newUser->email;
        $PN = $this->newUser->phoneNumber;
		$PW = $this->enteredPW;
		$CP = $this -> enteredConfPW;

        if (($FN === '') || ($LN === '') || ($PN === '')){
            $this -> errorMsg = ("An input is missing");
        } else if (!$EM)
            $this -> errorMsg = ("Enter a valid email");
         else if (!hasFormatMatching($PN, '/^(?:([2-9]\d{2})\ ?|[2-9]\d{2}(?:-?|\ ?))[2-9]\d{2}[- ]?\d{4}$/'))
            $this->errorMsg = ("Please refer to example for phone number format. Example: 123-456-7890");
         else if (!hasFormatMatching($FN, '/^[^~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?๐฿]*$/'))
            $this -> errorMsg = ("special character detected in first name");
        else if (!hasFormatMatching($LN, '/^[^~!@#$%^&()_+={}[]|\:;“’<,>.?๐฿]$/'))
            $this -> errorMsg = ("special character detected in last name");
         else if (!hasFormatMatching($PN, '/^[^`~!@#$%^&()_+={}[]|\:;“’<,>.?๐฿]$/')){
            $this -> errorMsg = ("special character detected phone number");
        } else if ($PW !== $CP){
			$this -> errorMsg = ("Password did not match");
		}
         else {
			  
            $success = true;
        }
		
		return $success;
    }
}
