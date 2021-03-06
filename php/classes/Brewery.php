<?php
//namespace com/michaelharrisonwebdev;
require_once("autoload.php");
/**
 * Brewery Class for Brewfinder
 *
 * @author Lea McDuffie <lea@littleloveprint.io>
 * @version 1.0
 **/
class Brewery implements \JsonSerializable {
	/**
	 * id for this Brewery; this is the primary key.
	 * @var int $breweryId
	 **/
	private $breweryId;
	/**
	 * Token to verify the brewery is valid.
	 * @var int $breweryProfileId
	 **/
	private $breweryProfileId;
	/**
	 * Token to verify the brewery profile is valid.
	 * @var string $breweryActivationToken
	 **/
	private $breweryActivationToken;
	/**
	 * Brewery address 1
	 * @var float $breweryAddress1
	 **/
	private $breweryAddress1;
	/**
	 * Brewery address 2
	 * @var float $breweryAddress2
	 **/
	private $breweryAddress2;
	/**
	 * @var string $breweryCity
	 */
	private $breweryCity;
	/**
	 * @var string $breweryContent
	 */
	private $breweryContent;
	/**
	 * @var string $breweryEmail
	 */
	private $breweryEmail;
	/**
	 * @var string $breweryHash
	 */
	private $breweryHash;
	/**
	 * @var int|null $breweryImageId
	 */
	private $breweryImageId;
	/**
	 * location x of this Brewery.
	 * @var float $breweryLocationX
	 **/
	private $breweryLocationX;
	/**
	 * location y of this Brewery.
	 * @var float $breweryLocationY
	 **/
	private $breweryLocationY;
	/**
	 * @var string $breweryName
	 */
	private $breweryName;
	/**
	 * @var string $breweryPhone
	 */
	private $breweryPhone;
	/**
	 * @var string $brewerySalt
	 */
	private $brewerySalt;
	/**
	 * @var string $breweryState
	 */
	private $breweryState;
	/**
	 * @var int $breweryZip
	 */
	private $breweryZip;

	/**
	 * Constructor for this Brewery
	 *
	 * @param int $newBreweryId
	 * @param int|null $newBreweryProfileId
	 * @param string $newBreweryActivationToken
	 * @param string $newBreweryAddress1
	 * @param string|null $newBreweryAddress2
	 * @param string $newBreweryCity
	 * @param string $newBreweryContent
	 * @param string $newBreweryEmail
	 * @param string $newBreweryHash
	 * @param int $newBreweryImageId
	 * @param float $newBreweryLocationX
	 * @param float $newBreweryLocationY
	 * @param string $newBreweryName
	 * @param string $newBreweryPhone
	 * @param string $newBrewerySalt
	 * @param string $newBreweryState
	 * @param int $newBreweryZip
	 **/
	public function __construct(int $newBreweryId, ?int $newBreweryProfileId, string $newBreweryActivationToken, string $newBreweryAddress1, ?string $newBreweryAddress2, string $newBreweryCity, string $newBreweryContent, string $newBreweryEmail, string $newBreweryHash, int $newBreweryImageId,  float $newBreweryLocationX, float $newBreweryLocationY, string $newBreweryName, string $newBreweryPhone, string $newBrewerySalt, string $newBreweryState, int $newBreweryZip) {
		try {
			$this->setBreweryId($newBreweryId);
			$this->setBreweryProfileId($newBreweryProfileId);
			$this->setBreweryActivationToken($newBreweryActivationToken);
			$this->setBreweryAddress1($newBreweryAddress1);
			$this->setBreweryAddress2($newBreweryAddress2);
			$this->setBreweryCity($newBreweryCity);
			$this->setBreweryContent($newBreweryContent);
			$this->setBreweryEmail($newBreweryEmail);
			$this->setBreweryHash($newBreweryHash);
			$this->setBreweryImageId($newBreweryImageId);
			$this->setBreweryLocationX($newBreweryLocationX);
			$this->setBreweryLocationY($newBreweryLocationY);
			$this->setBreweryName($newBreweryName);
			$this->setBrewerySalt($newBrewerySalt);
			$this->setBreweryState($newBreweryState);
			$this->setBreweryZip($newBreweryZip);
		}

		// Determine what exception type was thrown
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * Accessor method for brewery id.
	 *
	 * @return int value of brewery id.
	 **/
	public function getBreweryId(): int {
	}

	/**
	 * Mutator method for brewery id.
	 *
	 * @param int $newBreweryId
	 * @throws \RangeException is $newBreweryId is not positive
	 * @throws \TypeError if $newBreweryId is not an integer
	 **/
	public function setBreweryId(int $newBreweryId): void {

		// If brewery id is null, immediately return it.
		if($newBreweryId === null) {
			$this->breweryId = null;
			return;
		}

		// Verify the brewery id is positive.
		if($newBreweryId <=0) {
			throw(new \RangeException("brewery id is not positive"));
		}

		// Convert and store the brewery id.
		$this->breweryId = $newBreweryId;
	}

	/**
	 * Accessor method for brewery profile id.
	 *
	 * @return int value of brewery profile id
	 **/
	public function getBreweryProfileId(): int {
	}

	/**
	 * Mutator method for brewery profile id.
	 *
	 * @param int $newBreweryProfileId
	 * @throws \RangeException is $newBreweryProfileId is not positive
	 * @throws \TypeError if $newBreweryProfileId is not an integer
	 **/
	public function setBreweryProfileId(int $newBreweryProfileId): void {

		// If brewery profile id is null, immediately return it.
		if($newBreweryProfileId === null) {
			$this->breweryProfileId = null;
			return;
		}

		// Verify the brewery profile id is positive.
		if($newBreweryProfileId <= 0) {
			throw(new \RangeException("brewery profile id is not positive"));
		}

		// Convert and store the brewery id.
		$this->breweryProfileId = $newBreweryProfileId;
	}

	/**
	 * Accessor method for account activation token.
	 *
	 * @return string value of the activation token
	 **/
	public function getBreweryActivationToken(): ?string {
		return $this->breweryActivationToken;
	}
	/**
	 * Mutator method for brewery activation token.
	 *
	 * @param string $newBreweryActivationToken
	 * @throws \InvalidArgumentException if the token is not a string or insecure
	 * @throws \RangeException if the token is not exactly 32 characters
	 * @throws \TypeError if the activation token is not a string
	 **/
	public function setBreweryActivationToken(?string $newBreweryActivationToken) : void {
		if($newBreweryActivationToken === null) {
			$this->breweryActivationToken = null;
			return;
		}
		$newBreweryActivationToken = strtolower(trim($newBreweryActivationToken));
		if(ctype_xdigit($newBreweryActivationToken) === false) {
			throw(new\RangeException("user activation is not valid"));
		}
		$this->breweryActivationToken = $newBreweryActivationToken;
	}

		/**
		 * Accessor method for address 1
		 *
		 * @return string value for address 1
		 **/
		public
		function getBreweryAddress1(): string {
			return ($this->breweryAddress1);
		}

		/**
		 * Mutator method for address 1
		 *
		 * @param string $newBreweryAddress1
		 * @throws \InvalidArgumentException if $newBreweryAddress1 is not a string or insecure
		 * @throws \RangeException if $newBreweryAddress1 is > 128 characters
		 * @throws \TypeError if the $newBreweryAddress1 is not a string
		 **/
		public
		function setBreweryAddress1(string $newBreweryAddress1): void {

			// Verify address 1 is secure
			$newBreweryAddress1 = trim($newBreweryAddress1);
			$newBreweryAddress1 = filter_var($newBreweryAddress1, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newBreweryAddress1) === true) {
				throw(new \InvalidArgumentException("brewery address 1 is empty or insecure"));
			}

			// Verify address 1 will fit in the database/
			if(strlen($newBreweryAddress1) > 128) {
				throw(new \RangeException("brewery address is too large"));
			}

			// Store address 1.
			$this->breweryAddress1 = $newBreweryAddress1;
		}

		/**
		 * Accessor method for address 2
		 *
		 * @return string|null value for address 2
		 **/
		public
		function getBreweryAddress2(): ?string {
			return ($this->breweryAddress2);
		}

		/**
		 * Mutator method for address 2
		 *
		 * @param string|null $newBreweryAddress2
		 * @throws \InvalidArgumentException if $newBreweryAddress2 is not a string or insecure
		 * @throws \RangeException if $newBreweryAddress2 is > 128 characters
		 * @throws \TypeError if the $newBreweryAddress2 is not a string
		 **/
		public
		function setBreweryAddress2(?string $newBreweryAddress2): void {

			// Verify address 2 is secure
			$newBreweryAddress2 = trim($newBreweryAddress2);
			$newBreweryAddress2 = filter_var($newBreweryAddress2, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newBreweryAddress2) === true) {
				throw(new \InvalidArgumentException("brewery address 2 is empty or insecure"));
			}

			// Verify address 2 will fit in the database.
			if(strlen($newBreweryAddress2) > 128) {
				throw(new \RangeException("brewery address 2 is too large"));
			}

			// Store address 2.
			$this->breweryAddress2 = $newBreweryAddress2;
		}

	/**
	 * Accessor method for brewery city.
	 * @return string for brewery city
	 **/
	public function getBreweryCity(): string {
		return($this->breweryCity);
	}

	/**
	 * Mutator method for brewery city.
	 * @param string $newBreweryCity
	 * @throws \InvalidArgumentException if the brewery city is not composed with letters
	 * @throws \RangeException if the brewery city is not less than 32 characters
	 **/
	public function setBreweryCity(string $newBreweryCity) : void {
		$newBreweryCity = trim($newBreweryCity);
		$newBreweryCity = filter_var($newBreweryCity, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		// If brewery city is empty throw an exception
		if(empty($newBreweryCity) === true) {
			throw(new \InvalidArgumentException("brewery city is empty or insecure"));
		}

		// Enforce 32 characters or less in brewery city.
		if(strlen($newBreweryCity) > 32) {
			throw(new \RangeException("brewery city must be less than 32 characters"));
		}

		// Convert and store the new brewery city.
		$this->breweryCity = $newBreweryCity;
	}

	/**
	 * Accessor method for brewery content.
	 *
	 * @return string brewery content
	 **/
	public function getBreweryContent(): string {
		return($this->breweryContent);
	}

	/**
	 * Mutator method for brewery content
	 * @param string $newBreweryContent
	 * @throws \InvalidArgumentException if brewery content is not alphanumeric
	 * @throws \RangeException if brewery content is greater than 750
	 **/
	public function setBreweryContent(string $newBreweryContent) : void {
		$newBreweryContent = filter_var($newBreweryContent, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		// Enforce that brewery content is not empty
		if(empty($newBreweryContent) === true) {
			throw(new \InvalidArgumentException("brewery content is either empty or insecure"));
		}

		// Enforce max string length of 750 on brewery content
		if(strlen($newBreweryContent) > 750) {
			throw(new \RangeException("brewery content must be less than 750 characters"));
		}

		// Take new brewery content, and store it in brewery content
		$this->breweryContent = $newBreweryContent;
	}

	/**
	 * Accessor method for email.
	 *
	 * @return string value of email
	 **/
	/**
	 * @return string
	 */
	public function getBreweryEmail(): string {
		return $this->breweryEmail;
	}
	/**
	 * Mutator method for email
	 *
	 * @param string $newBreweryEmail new value of email
	 * @throws \InvalidArgumentException if $newBreweryEmail is not a valid email or insecure
	 * @throws \RangeException if $newBreweryEmail is > 128 characters
	 * @throws \TypeError if $newBreweryEmail is not a string
	 **/
	public function setBreweryEmail(string $newBreweryEmail) : void {

		// Verify the email is secure
		$newBreweryEmail = trim($newBreweryEmail);
		$newBreweryEmail = filter_var($newBreweryEmail, FILTER_VALIDATE_EMAIL);
		if(empty($newBreweryEmail) === true) {
			throw(new \InvalidArgumentException("brewery email is empty or insecure"));
		}

		// Verify the email will fit in the database.
		if(strlen($newBreweryEmail) > 128) {
			throw(new \RangeException("brewery email is too large"));
		}

		// Store the email.
		$this->breweryEmail = $newBreweryEmail;
	}

	/**
	 * Accessor method for brewery hash
	 *
	 * @return string value of hash
	 */
	public function getBreweryHash(): string {
		return $this->breweryHash;
	}

	/**
	 * Mutator method for brewery hash
	 *
	 * @param string $newBreweryHash
	 * @throws \InvalidArgumentException if the hash is not secure
	 * @throws \RangeException if the hash is not 128 characters
	 * @throws \TypeError if brewery hash is not a string
	 */
	public function setBreweryHash(string $newBreweryHash): void {

		// Enforce that the hash is properly formatted.
		$newBreweryHash = trim($newBreweryHash);
		$newBreweryHash = strtolower($newBreweryHash);
		if(empty($newBreweryHash) === true) {
			throw(new \InvalidArgumentException("brewery password hash is empty or insecure"));
		}

		// Enforce that the hash is a string representation of a hexadecimal.
		if(!ctype_xdigit($newBreweryHash)) {
			throw(new \InvalidArgumentException("brewery password hash is empty or insecure"));
		}

		// Enforce that the hash is exactly 128 characters.
		if(strlen($newBreweryHash) !== 128) {
			throw(new \RangeException("brewery hash must be 128 characters"));
		}

		// Store the hash.
		$this->breweryHash = $newBreweryHash;
	}

	/**
	 * Accessor method for brewery image id
	 * @return int|null value of brewery image id
	 **/
	public function getBreweryImageId(): ?int {
		return($this->breweryImageId);
	}

	/**
	 * Mutator method for brewery image id
	 * @param int $newBreweryImageId
	 * @throws \RangeException if brewery image id is not positive
	 * @throws \TypeError if brewery image id is not an int
	 **/
	public function setBreweryImageId(?int $newBreweryImageId) : void {
		if ($newBreweryImageId === null) {
			$this->breweryImageId = null;
			return;
		}

		// Verify that the brewery image id is positive
		if($newBreweryImageId <= 0) {
			throw(new \RangeException("brewery image id is not positive"));
		}

		// Convert the new brewery image id to a brewery image id and store it
		$this->breweryImageId = $newBreweryImageId;
	}

		/**
		 * Accessor method for brewery location x.
		 *
		 * @param float $breweryLocationX
		 * @return float $breweryLocationX value of brewery location x
		 **/
		public
		function getBreweryLocationX() {
			return ($this->breweryLocationX);
		}

		/**
		 * Mutator method for brewery location x.
		 *
		 * @param float @newBreweryLocationX new value of brewery location x
		 * @throws \RangeException if $newBreweryLocationX is not between -180 and 180
		 * @throws \TypeError if $newBreweryLocationX is not an integer
		 **/
		public function setBreweryLocationX(float $newBreweryLocationX) {
			$newBreweryLocationX = $newBreweryLocationX == 0.0 ? 0.0 : filter_var($newBreweryLocationX, FILTER_VALIDATE_FLOAT);

			// If the brewery location x is null, immediately return it.
			if($newBreweryLocationX === false) {
				throw(new \InvalidArgumentException("location x is not a valid data type"));
			}

			// Verify that brewery location x is positive.
			if($newBreweryLocationX < -180 || $newBreweryLocationX > 180) {
				throw(new \RangeException("location x is not within range"));
			}

			// Convert and store brewery location x.
			$this->breweryLocationX = $newBreweryLocationX;
		}

		/**
		 * Accessor method for brewery location y.
		 *
		 * @param float $breweryLocationY
		 * @return float $breweryLocationY value of brewery location y
		 **/
		public function getBreweryLocationY() {
			return($this->breweryLocationY);
		}

		/**
		 * Mutator method for brewery location y.
		 *
		 * @param float @newBreweryLocationY new value of profile location y
		 * @throws \RangeException if $newBreweryLocationY is not between -90 and 90
		 * @throws \TypeError if $newBreweryLocationY is not an integer
		 **/
		public function setBreweryLocationY(float $newBreweryLocationY) {
			$newBreweryLocationY = $newBreweryLocationY == 0.0 ? 0.0 : filter_var($newBreweryLocationY, FILTER_VALIDATE_FLOAT);

			// If the brewery location y is null, immediately return it.
			if($newBreweryLocationY === false) {
				throw(new \InvalidArgumentException("location y is not a valid data type"));
			}

			// Verify that brewery location y is positive.
			if($newBreweryLocationY < -90 || $newBreweryLocationY > 90) {
				throw(new \RangeException("location y is not within range"));
			}

			// Convert and store brewery location y.
			$this->breweryLocationY = $newBreweryLocationY;
		}

	/**
	 * Accessor method for brewery name
	 * @return string for brewery name
	 **/
	public function getBreweryName(): string {
		return($this->breweryName);
	}

	/**
	 * Mutator method for brewery name
	 * @param string $newBreweryName
	 * @throws \InvalidArgumentException if the brewery name is not alphanumeric
	 * @throws \RangeException if the brewery name is greater than 32 characters
	 **/
	public function setBreweryName(string $newBreweryName) : void {
		$newBreweryName = trim($newBreweryName);
		$newBreweryName = filter_var($newBreweryName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		// Enforce that brewery name is not empty
		if(empty($newBreweryName) === true) {
			throw(new \InvalidArgumentException("brewery name is either empty or insecure"));
		}

		// Enforce max string length of brewery name
		if(strlen($newBreweryName) > 32) {
			throw(new \RangeException("brewery name must be less than 32 characters"));
		}

		// Take new brewery name and store it in brewery name
		$this->breweryName = $newBreweryName;
	}

	/**
	 * Accessor method for brewery phone
	 * @return string for brewery phone
	 **/
	public function getBreweryPhone(): string {
		return($this->breweryPhone);
	}

	/**
	 * Mutator method for brewery phone
	 * @param string $newBreweryPhone
	 * @throws \InvalidArgumentException if the brewery phone is not alphanumeric
	 * @throws \RangeException if the brewery phone is greater than 12 characters
	 **/
	public function setBreweryPhone(string $newBreweryPhone) : void {
		$newBreweryPhone = trim($newBreweryPhone);
		$newBreweryPhone = filter_var($newBreweryPhone, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		// Enforce that brewery phone is not empty
		if(empty($newBreweryPhone) === true) {
			throw(new \InvalidArgumentException("brewery phone is either empty or insecure"));
		}

		// Enforce max string length of brewery phone
		if(strlen($newBreweryPhone) > 12) {
			throw(new \RangeException("brewery phone must be less than 12 characters"));
		}

		// Take new brewery phone and store it
		$this->breweryPhone = $newBreweryPhone;
	}

	/**
	 * Accessor method for brewery salt.
	 *
	 * @return string representation of the salt hexadecimal
	 */
	public function getBrewerySalt(): string {
		return $this->brewerySalt;
	}

	/**
	 * Mutator method for brewery salt
	 *
	 * @param string $newBrewerySalt
	 * @throws \InvalidArgumentException if the salt is not secure
	 * @throws \RangeException if the salt is not 64 characters
	 * @throws \TypeError if brewery salt is not a string
	 */
	public function setBrewerySalt(string $newBrewerySalt): void {

		// Enforce that the salt is properly formatted.
		$newBrewerySalt = trim($newBrewerySalt);
		$newBrewerySalt = strtolower($newBrewerySalt);

		// Enforce that the salt is a string representation of a hexadecimal.
		if(!ctype_xdigit($newBrewerySalt)) {
			throw(new \InvalidArgumentException("brewery password salt is empty or insecure"));
		}

		// Enforce that the salt is exactly 128 characters.
		if(strlen($newBrewerySalt) !== 64) {
			throw(new \RangeException("brewery salt must be 64 characters"));
		}

		// Store the salt.
		$this->brewerySalt = $newBrewerySalt;
	}

	/**
	 * Accessor method for brewery state.
	 *
	 * @return string representation of the state
	 */
	public function getBreweryState(): string {
		return $this->breweryState;
	}

	/**
	 * Mutator method for brewery state
	 *
	 * @param string $newBreweryState
	 * @throws \InvalidArgumentException if the state is not secure
	 * @throws \RangeException if the state is not 2 characters
	 * @throws \TypeError if brewery state is not a string
	 */
	public function setBreweryState(string $newBreweryState): void {

	// Enforce that the state is properly formatted.
	$newBreweryState = trim($newBreweryState);
	$newBreweryState = strtolower($newBreweryState);

	// Enforce that the state is a string representation of a hexadecimal.
	if(!ctype_xdigit($newBreweryState)) {
		throw(new \InvalidArgumentException("brewery state is empty or insecure"));
	}

	// Enforce that the state is exactly 2 characters.
	if(strlen($newBreweryState) !== 2) {
		throw(new \RangeException("brewery state must be 2 characters"));
	}

	// Store the state.
	$this->breweryState = $newBreweryState;
}

/**
 * Accessor method for brewery zip.
 *
 * @return int value of brewery zip
 **/
public function getBreweryZip(): int {
}

/**
 * Mutator method for brewery zip.
 *
 * @param int $newBreweryZip
 * @throws \RangeException is $newBreweryZipis not positive
 * @throws \TypeError if $newBreweryZip is not an integer
 **/
public function setBreweryZip(int $newBreweryZip): void {

	// If brewery zip is null, immediately return it.
	if($newBreweryZip === null) {
		$this->breweryZip = null;
		return;
	}

	// Verify the brewery zip is positive.
	if($newBreweryZip <= 0) {
		throw(new \RangeException("brewery zip is not positive"));
	}

	// Convert and store the brewery zip.
	$this->breweryZip = $newBreweryZip;
}

	/**
	 * Inserts this brewery into mySQL.
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError is $pdo is not a PDO connection object
	 **/
	public function insert(\PDO $pdo): void {

		// Enforce the breweryId is null (i.e., don't insert a brewery that already exists).
		if($this->breweryId !== null) {
			throw(new \PDOException("brewery id already exists"));
		}

		// Create query template.
		$query = "INSERT INTO brewery(breweryId, breweryProfileId, breweryAddress1, breweryAddress2, breweryCity, breweryContent, breweryEmail, breweryHash, breweryImageId, breweryLocationX, breweryLocationY, breweryName, breweryPhone, brewerySalt, breweryState, breweryZip) VALUES(:breweryId, :breweryAddress1, :breweryAddress2, :breweryCity, :breweryContent, :breweryEmail, :breweryHash, :breweryImageId, :breweryLocationX, :breweryLocationY, :breweryName, :breweryPhone, :brewerySalt, :breweryState)";
		$statement = $pdo->prepare($query);

		// Bind the member variables to the place holders in the template.
		$parameters = ["breweryAddress1" => $this->breweryAddress1, "breweryCity" => $this->breweryCity, "breweryContent" => $this->breweryContent, "breweryEmail" => $this->breweryEmail, "breweryHash" => $this->breweryHash, "breweryImageId" => $this->breweryImageId, "breweryLocationX" => $this->breweryLocationX, "breweryLocationY" => $this->breweryLocationY, "breweryName" => $this->breweryName, "breweryPhone" => $this->breweryPhone, "brewerySalt" => $this->brewerySalt, "breweryState" => $this->breweryState, "breweryZip" => $this->breweryZip];
		$statement->execute($parameters);

		// Update the null breweryId with what mySQL just gave us.
		$this->breweryId = intval($pdo->lastInsertId());
	}

	/**
	 * Deletes this brewery from mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function delete(\PDO $pdo) : void {

		// Enforce the breweryId is not null (i.e. don't delete a brewery that hasn't been inserted).
		if($this->breweryId === null) {
			throw(new \PDOException("unable to delete a brewery that doesn't exist"));
		}

		// Create query template.
		$query = "DELETE FROM brewery WHERE breweryId = :breweryId";
		$statement = $pdo->prepare($query);

		// Bind the member variables to the place holder in the template.
		$parameters = ["breweryId" => $this->breweryId];
		$statement->execute($parameters);
	}

	/**
	 * Updates this brewery in mySQL.
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function update(\PDO $pdo) : void {

		// Enforce the breweryId is not null (i.e. don't update a brewery that hasn't been inserted).
		if($this->breweryId === null) {
			throw(new \PDOException("unable to update a brewery that does not exist"));
		}

		// Create query template.
		$query = "UPDATE brewery SET breweryAddress1 = :breweryAddress1, breweryAddress2 = :breweryAddress2, breweryCity = :breweryCity, breweryContent = :breweryContent, breweryEmail = :breweryEmail, breweryHash = :breweryHash, breweryImageId = :breweryImageId, breweryLocationX = :breweryLocationX, breweryLocationY = :breweryLocationY, breweryName = :breweryName, breweryPhone = :breweryPhone, brewerySalt = :brewerySalt, breweryState = :breweryState, breweryZip = :breweryZip WHERE breweryId = :breweryId";
		$statement = $pdo->prepare($query);

		// Bind the member variables to the place holders in the template.
		$parameters = ["breweryId" => $this->breweryId, "breweryProfileId" => $this->breweryProfileId, "breweryAddress1" => $this->breweryAddress1, "breweryCity" => $this->breweryCity, "breweryContent" => $this->breweryContent, "breweryEmail" => $this->breweryEmail, "breweryHash" => $this->breweryHash, "breweryImageId" => $this->breweryImageId, "breweryLocationX" => $this->breweryLocationX, "breweryLocationY" => $this->breweryLocationY, "breweryName" => $this->breweryName, "breweryPhone" => $this->breweryPhone, "brewerySalt" => $this->brewerySalt, "breweryState" => $this->breweryState, "breweryZip" => $this->breweryZip];
		$statement->execute($parameters);
	}

	/**
	 * Get Brewery by brewery id
	 * *
	 * @param \PDO $pdo $pdo PDO connection object
	 * @param int $breweryId brewery id to search for
	 * @return Brewery|null Brewery or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getBreweryByBreweryId(\PDO $pdo, int $breweryId):?Brewery {

		// Sanitize the brewery id before searching
		if($breweryId <= 0) {
			throw(new \PDOException("brewery id is not postive"));
		}

		// Create query template
		$query = "SELECT breweryId, breweryProfileId, breweryAddress1, breweryAddress2, breweryCity, breweryContent, breweryEmail, breweryHash, breweryImageId, breweryLocationX, breweryLocationY, breweryName, breweryPhone, brewerySalt, breweryState, breweryZip FROM brewery WHERE breweryId = :breweryId";
		$statement = $pdo->prepare($query);

		// Bind the brewery id to the place holder in the template
		$parameters = ["breweryId" => $breweryId];
		$statement->execute($parameters);

		// Grab the Brewery from mySQL
		try {
			$brewery = null;
			$statement->setFetchMode(\PDO::FETCH_ASSOC);
			$row = $statement->fetch();
			if($row !== false) {
				$brewery = new Brewery($row["breweryId"], $row["breweryProfileId"], $row["breweryAddress1"], $row["breweryAddress2"], $row["breweryCity"], $row["breweryContent"], $row["breweryEmail"], $row["breweryHash"], $row["breweryImageId"], $row["breweryLocationX"], $row["breweryLocationY"], $row["breweryName"], $row["breweryPhone"], $row["brewerySalt"], $row["breweryState"], $row["breweryZip"]);
			}
		} catch(\Exception $exception) {

			// If the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		return ($brewery);
	}

	/**
	 * Get the Brewery by brewery activation token
	 *
	 * @param string $breweryActivationToken
	 * @param \PDO object $pdo
	 * @return Brewery|null Brewery or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getBreweryByBreweryActivationToken(\PDO $pdo, ?string $breweryActivationToken) : ?Brewery {

		// Make sure activation token is in the right format and that it is a string representation of a hexadecimal
		$breweryActivationToken = trim($breweryActivationToken);
		if(ctype_xdigit($breweryActivationToken) === false) {
			throw(new \InvalidArgumentException("brewery activation token is empty or in the wrong format"));
		}

		// Create the query template
		$query = "SELECT breweryId, breweryProfileId, breweryAddress1, breweryAddress2, breweryCity, breweryContent, breweryEmail, breweryHash, breweryImageId, breweryLocationX, breweryLocationY, breweryName, breweryPhone, brewerySalt, breweryState, breweryZip FROM brewery WHERE breweryActivationToken = :breweryActivationToken";
		$statement = $pdo->prepare($query);

		// Bind the brewery activation token to the placeholder in the template
		$parameters = ["breweryActivationToken" => $breweryActivationToken];
		$statement->execute($parameters);

		// Grab the Brewery from mySQL
		try {
			$brewery = null;
			$statement->setFetchMode(\PDO::FETCH_ASSOC);
			$row = $statement->fetch();
			if($row !== false) {
				$brewery = new Brewery($row["breweryId"], $row["breweryProfileId"], $row["breweryAddress1"], $row["breweryAddress2"], $row["breweryCity"], $row["breweryContent"], $row["breweryEmail"], $row["breweryHash"], $row["breweryImageId"], $row["breweryLocationX"], $row["breweryLocationY"], $row["breweryName"], $row["breweryPhone"], $row["brewerySalt"], $row["breweryState"], $row["breweryZip"]);
			}
		} catch(\Exception $exception) {

			// If the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		return ($brewery);
	}

	public static function getBreweryByBreweryCity(\PDO $pdo, string $breweryCity) : \SplFixedArray {

		// Sanitize city
		$breweryCity = trim($breweryCity);
		$breweryCity = filter_var($breweryCity, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($breweryCity) === true) {
			throw(new \PDOException("not a valid city"));
		}

		// Query for brewery using breweryCity
		$query = "SELECT breweryId, breweryProfileId, breweryAddress1, breweryAddress2, breweryCity, breweryContent, breweryEmail, breweryHash, breweryImageId, breweryLocationX, breweryLocationY, breweryName, breweryPhone, brewerySalt, breweryState, breweryZip FROM brewery WHERE breweryCity LIKE :breweryCity";
		$statement = $pdo->prepare($query);

		// Bind the brewery city to the placeholder
		$breweryCity = "%$breweryCity%";
		$parameters = ["breweryCity" => $breweryCity];
		$statement->execute($parameters);

		// Build array
		$breweries = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while (($row = $statement->fetch()) !== false) {
			try {
				$brewery = new Brewery($row["breweryId"], $row["breweryProfileId"], $row["breweryAddress1"], $row["breweryAddress2"], $row["breweryCity"], $row["breweryContent"], $row["breweryEmail"], $row["breweryHash"], $row["breweryImageId"], $row["breweryLocationX"], $row["breweryLocationY"], $row["breweryName"], $row["breweryPhone"], $row["brewerySalt"], $row["breweryState"], $row["breweryZip"]);
				[$breweries->key()] = $brewery;
				$breweries->next();
			} catch (\Exception $exception) {
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($breweries);
	}

	public static function getBreweryByBreweryName(\PDO $pdo, string $breweryName) : SPLFixedArray {

		// Sanitize name
		$breweryName = trim($breweryName);
		$breweryName = filter_var($breweryName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if (empty ($breweryName) === true) {
			throw(new \PDOException("not a valid name"));
		}

		// Query for brewery using breweryCity
		$query = "SELECT breweryId, breweryProfileId, breweryAddress1, breweryAddress2, breweryCity, breweryContent, breweryEmail, breweryHash, breweryImageId, breweryLocationX, breweryLocationY, breweryName, breweryPhone, brewerySalt, breweryState, breweryZip FROM brewery WHERE breweryName LIKE :breweryName";
		$statement = $pdo->prepare($query);

		// Bind the brewery name to the placeholder
		$breweryName = "%breweryName%";
		$parameters = ["breweryName" => $breweryName];
		$statement->execute($parameters);

		// Build array
		$breweries = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$brewery = new Brewery($row["breweryId"], $row["breweryProfileId"], $row["breweryAddress1"], $row["breweryAddress2"], $row["breweryCity"], $row["breweryContent"], $row["breweryEmail"], $row["breweryHash"], $row["breweryImageId"], $row["breweryLocationX"], $row["breweryLocationY"], $row["breweryName"], $row["breweryPhone"], $row["brewerySalt"], $row["breweryState"], $row["breweryZip"]);
				$breweries[$breweries->key()] = $brewery;
				$breweries->next();
			} catch (\Exception $exception) {
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($breweries);
	}

	public static function getBreweryByBreweryState(\PDO $pdo, string $breweryState) : \SplFixedArray {

		// Sanitize state
		$breweryState = trim($breweryState);
		$breweryState = filter_var($breweryState, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($breweryState) === true) {
			throw(new \PDOException("not a valid state"));
		}

		// Query for brewery using breweryState
		$query = "SELECT breweryId, breweryProfileId, breweryAddress1, breweryAddress2, breweryCity, breweryContent, breweryEmail, breweryHash, breweryImageId, breweryLocationX, breweryLocationY, breweryName, breweryPhone, brewerySalt, breweryState, breweryZip FROM brewery WHERE breweryState LIKE :breweryState";
		$statement = $pdo->prepare($query);

		// Bind the brewery state to the placeholder
		$breweryState = "%$breweryState%";
		$parameters = ["breweryState" => $breweryState];
		$statement->execute($parameters);

		// Build array
		$breweries = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while (($row = $statement->fetch()) !== false) {
			try {
				$brewery = new Brewery($row["breweryId"], $row["breweryProfileId"], $row["breweryAddress1"], $row["breweryAddress2"], $row["breweryCity"], $row["breweryContent"], $row["breweryEmail"], $row["breweryHash"], $row["breweryImageId"], $row["breweryLocationX"], $row["breweryLocationY"], $row["breweryName"], $row["breweryPhone"], $row["brewerySalt"], $row["breweryState"], $row["breweryZip"]);
				[$breweries->key()] = $brewery;
				$breweries->next();
			} catch (\Exception $exception) {
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($breweries);
	}

	/**
	 * Get all Breweries
	 *
	 * @param \PDO $pdo PDO connection object
	 * @return \SplFixedArray SplFixedArray of Breweries found or null if not found
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getAllBreweries(\PDO $pdo): \SplFixedArray {

		// Create query template
		$query = "SELECT breweryId, breweryProfileId, breweryAddress1, breweryAddress2, breweryCity, breweryContent, breweryEmail, breweryHash, breweryImageId, breweryLocationX, breweryLocationY, breweryName, breweryPhone, brewerySalt, breweryState, breweryZip FROM brewery";
		$statement = $pdo->prepare($query);
		$statement->execute();

		// Build an array of Breweries
		$breweries = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$brewery = new Brewery($row["breweryId"], $row["breweryProfileId"], $row["breweryAddress1"], $row["breweryAddress2"], $row["breweryCity"], $row["breweryContent"], $row["breweryEmail"], $row["breweryHash"], $row["breweryImageId"], $row["breweryLocationX"], $row["breweryLocationY"], $row["breweryName"], $row["breweryPhone"], $row["brewerySalt"], $row["breweryState"], $row["breweryZip"]);
				$breweries[$breweries->key()] = $brewery;
				$breweries->next();
			} catch(\Exception $exception) {

				// If the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return ($breweries);
	}

	/**
	 * Formats the state variables for JSON serialization.
	 *
	 * @return array resulting state variables to serialize
	 **/
	public function jsonSerialize() {
		$fields = get_object_vars($this);
	}
}