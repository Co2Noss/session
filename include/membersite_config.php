<?PHP
require_once("https://shell.tni/~charles.yost/beta/include/fg_membersite.php");
$fgmembersite = new FGMembersite();
//Provide your site name here
$fgmembersite->SetWebsiteName('shell.tni');
//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('charles.yost@telenetwork.com');
//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'charlesyost',
                      /*password*/'sash-parkway-serpent-companion-outrage',
                      /*database name*/'charlesyost',
                      /*table name*/'fgusers3');
//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');
?>