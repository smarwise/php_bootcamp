<?PHP

function	account_exists($accounts, $login, $password)
{
	 
	$i = 0;
	while ($accounts[$i] != NULL)
	{
		if ($accounts[$i]["login"] === $login && $accounts[$i]['passwd'] === hash('whirlpool', $password))
			return(1);
		$i++;
	}
	return(0);
}

function	auth($login, $passwd)
{
	$accounts = array();
	$accounts = unserialize(file_get_contents("../private/passwd"));
	if (account_exists($accounts, $login, $passwd) === 1)
	{
		echo "OK\n";
		exit;
	}
	else
	{
		echo "ERROR\n";
		exit;
	}
}
?>