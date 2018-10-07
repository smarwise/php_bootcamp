<?php

function		account_exists($accounts, $login)
{
	$i = 0;
	while ($accounts[$i] != NULL)
	{
		if ($accounts[$i]["login"] == $login)
			return(1);
		$i++;
	}
	return(0);
}

$accounts = array();

if ($_POST['login'] && $_POST['submit'] === "OK" && (($_POST['oldpw'] && $_POST['newpw']) || $_POST['passwd']))
{
	 if ($_POST['passwd'])
	 {
		if (!file_exists("../private/"))
			mkdir("../private");
		if (!file_exists("../private/passwd")) 
			file_put_contents("../private/passwd", null);
		$accounts = unserialize(file_get_contents("../private/passwd"));
		if (account_exists($accounts, $_POST["login"]) == 1)
		{
			echo "ERROR\n";
			exit;
		}
		else
		{
			$data[] = ['login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd'])];
			file_put_contents("../private/passwd", serialize($data));
			echo "OK\n";
		}
	}
	else
	{
		$accounts = unserialize(file_get_contents("../private/passwd"));
		if (account_exists($accounts, $_POST["login"]) == 0)
		{
			echo "ERROR\n";
			exit;
		}
		else
		{
			foreach ($accounts as $k => $v)
			{
				if ($v['passwd'] === $_POST['newpw'])
				{
					echo "ERROR\n";
					exit;
				}
				if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw']))
					$data[] = ['login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['newpw'])];
				else
				{
					echo "ERROR\n";
					exit;
				}
			}
			file_put_contents("../private/passwd", serialize($data));
			echo "OK\n";
		}
	}
 }
 else
 	echo "ERROR\n";
?>