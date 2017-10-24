<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('templateace.xyz');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('co2noss@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'template_co2noss',
                      /*password*/'-d9vhT[%,q(S',
                      /*database name*/'template_logins',
                      /*table name*/'fgusers3');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('kYE99AXrCGvl6uF');

?>