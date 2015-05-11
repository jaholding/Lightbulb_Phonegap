<?php
$link=mysql_connect("websys3.stern.nyu.edu","websysS15GB5","websysS15GB5!!")or die('Cannot connect to the DB');
mysql_select_db("websysS15GB5",$link) or die('Cannot select the DB');

// Get values from form 

//$PHONENUMBER = $_POST['user'];


//$format =  'json';

$query = "select * from idea;";

$result = mysql_query($query,$link) or die('Errant query:  '.$query);

$str = "";
$count = 0;
while ($row = mysql_fetch_array($result))
{

 
   
     $str = $str . "<div title='"  . $row['idea_ID'] . "' class='buddy' style='display: block;'><div class='avatar'  style='display: block;'>" . $row['solution'] . "</div></div>";
}

 echo $str ;

	

	/*echo "<div title='1' class='buddy' style='display: block;'><div class='avatar'  style='display: block; background-image: url(https://pbs.twimg.com/profile_images/489309610071715840/e3dOtcy1.jpeg)'></div></div>
	    <div  title='2' class='buddy'><div class='avatar' style='display: block; background-image: url(https://pbs.twimg.com/profile_images/1132920415/39693_465193641456_586141456_6088294_2034896_n.jpg)'></div></div>  
	    <div  title='3' class='buddy'><div class='avatar' style='display: block; background-image: url(http://media.idownloadblog.com/wp-content/uploads/2014/02/elon-musk-tesla.jpg)'></div></div>  
	    <div   title = '4' class='buddy'><div class='avatar' style='display: block; background-image: url(http://static.168ora.hu/db/09/AF/orban-d0001C9AFa1ba9618c180.jpg)'></div></div>"; */
@mysql_close($link);

?>








 