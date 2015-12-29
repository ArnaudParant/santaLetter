<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Forms posted
if(!empty($_POST))
{
	$deletions = $_POST['delete'];
	if ($deletion_count = deleteUsers($deletions)){
		$successes[] = lang("ACCOUNT_DELETIONS_SUCCESSFUL", array($deletion_count));
	}
	else {
		$errors[] = lang("SQL_ERROR");
	}
}

$userData = fetchAllUsers(); //Fetch information for all users

require_once("$root/models/header.php");

?>

<body>
  <div id='wrapper'>
    <?php include("$root/common/top.php"); ?>
    <div id='content'>
      <?php include("$root/common/title.php"); ?>
      <h2>Admin Users</h2>
      <div id='left-nav'> <?php include("$root/common/left-nav.php"); ?> </div>
      <div id='main'> <?=resultBlock($errors,$successes); ?>

        <form name='adminUsers' action='".$_SERVER['PHP_SELF']."' method='post'>
          <table class='admin'>
            <tr>
              <th>Delete</th><th>Username</th><th>Display Name</th><th>Title</th><th>Last Sign In</th>
            </tr>

<?php

//Cycle through users
foreach ($userData as $v1) {
	echo "
	<tr>
	<td><input type='checkbox' name='delete[".$v1['id']."]' id='delete[".$v1['id']."]' value='".$v1['id']."'></td>
	<td><a href='admin_user.php?id=".$v1['id']."'>".$v1['user_name']."</a></td>
	<td>".$v1['display_name']."</td>
	<td>".$v1['title']."</td>
	<td>
	";
	
	//Interprety last login
	if ($v1['last_sign_in_stamp'] == '0'){
		echo "Never";	
	}
	else {
		echo date("j M, Y", $v1['last_sign_in_stamp']);
	}
	echo "
	</td>
	</tr>";
}

?>

          </table>
          <input type='submit' name='Submit' value='Delete' />
        </form>
      </div>
      <div id='bottom'></div>
    </div>
</body>
</html>