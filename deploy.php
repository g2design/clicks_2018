<?php
/**
 * GIT DEPLOYMENT SCRIPT
 *
 * Used for automatically deploying websites via github or bitbucket, more deets here:
 *
 * 		https://gist.github.com/1809044
 */


// Repository Settings
$pass = $_GET['key_pass'];
$auth_key = '2c16fa40168379dc88026d3d5be1ddaa12640ec1';
$url = "https://$auth_key@github.com/g2design/clicks_2017.git";



//Commands to be run on the server
$commands = array(
	'echo $PWD',
	'whoami',
	'git init',
	"git remote add origin $url",
	"git remote set-url origin $url",
	'git fetch origin',
	'git reset --hard origin/master',
	'git status',   
//	'git submodule sync',
//	'git submodule update',
//	'git submodule status',
	// 'COMPOSER_HOME="'.getcwd().'" php composer.phar update --optimize-autoloader'
);

// Run the
$output = '';
foreach ($commands AS $command) {
	// Run it
//	$tmp = shell_exec($command);
	$handle = popen($command . ' 2>&1', 'r');
	$tmp = '';
	while ($str = fgets($handle)) {
		$tmp .= $str.'';
	}
	pclose($handle);

	// Output
	$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
	$output .= htmlentities(trim($tmp)) . "\n";
}

// Make it pretty for manual user access (and why not?)
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
	<pre>
		.  ____  .    ____________________________
		|/      \|   |                            |
		[| <span style="color: #FF0000;">&hearts;    &hearts;</span> |]  | Git Deployment Script v0.1 |
		|___==___|  /              &copy; oodavid 2012 |
		|____________________________|

		<?php echo $output; ?>
	</pre>
</body>
</html>