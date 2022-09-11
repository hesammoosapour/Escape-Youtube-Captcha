<?php
//exmpale: //  https://www.youtube.com/watch%3Fv%3DXM39m2QTTpI
// https://www.google.com/sorry/index?continue=https://www.youtube.com/watch%3Fv%3DksqgKZfEfNM&q=EgS5tN-gGLD66JgGIhDaVjblgltPdakFjkestLSYMgFy


//system("cmd /c C:\Users\Hesam\Desktop\parseyturl.php");

//exec('c:\WINDOWS\system32\cmd.exe /c START C:\Users\Hesam\Desktop\parseyturl.php');


print "This is a serious Decoder for Youtube URLS & all the Credit goes to the Creator Hesam Moosapour.\n\n\n";

print "We stand with people of Ukraine 🇺🇦  \n\n";

$input = readline("Enter the Youtube URL to parse: ");

$modified_youtube_link =  str_replace("%3D","=",str_replace("%3F","?","$input"));

$modified_youtube_link =  str_replace("https://www.google.com/sorry/index?continue=","",$modified_youtube_link);

$modified_youtube_link = strtok($modified_youtube_link,"&");


$browser=sprintf( 'start %s', $modified_youtube_link );
exec( $browser );

print "\n\n Enjoy your video.\n\n Hesam Moosapour, peace out!";

exit();

print $modified_youtube_link;	
//shell_exec(print $modified_youtube_link);

?>

