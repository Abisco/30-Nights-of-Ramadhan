<?php
include("../config30nights.php"); //include config file
include("pageNumbers.php");

$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//sanitize post value
if(isset($_POST["page"])){
    $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1;
}

//get current starting point of records
$position = (($page_number-1) * $item_per_page);

//Limit our results within a specified range. 
$results = mysql_query("SELECT id, author, type, title, piece, date, upvotes FROM poems WHERE authorized=1 ORDER BY id DESC LIMIT $position, $item_per_page", $dbhandle);

//output results from database
echo '<ul class="page_result">';
while($row = mysql_fetch_array($results))
{
	$pieceCut = charlimit($row["piece"], 80);
    $PhpDate = strtotime($row["date"]);
    $FormattedPhpDate = ts2long($PhpDate);

	$my_date = new DateTime($mysql_date_string);
	if ($my_date){

	}

    $type = $row["type"];
    if ($type == "ShortStory") {
        $type = "Short Story";
    } elseif ($type == "NonFiction") {
        $type = "Non-Fiction Piece";
    } elseif ($type == "Poem") {
        $type = "Poem";
    } elseif ($type == "Other") {
        $type = "Non-Categorized Piece";
    }

    if ($row["title"] == NULL) {
    	$title = "Untitled";
    } else {
    	$title = $row["title"];
    }

	echo '<div class="col-md-3 col-sm-6 portfolio-item">
			<div class="box">
				<h3 style="font-size:18px;">'.$title.'</h3>
				<h4 style="font-size:14px; color: gray;">By: '.$row["author"].'</h4>
				<h6 style="font-size:14px; color: rgb(157, 81, 81);">'.$type.'</h6>
				<h6 style="font-size:14px; color: gray;"">Posted on: '.$FormattedPhpDate.'</h6>
				<p>'.$pieceCut.'</p>
				<a href="piece.php?id='.$row["id"].'" target="_blank" class="readMore">Read More</a>
			</div>
			<div class="gradient"></div>
		   </div>';
	
	if ($selected = mysql_query("SELECT tags.* FROM taggedItems,tags where taggedItems.pieceID=$[row[id]] and taggedItems.tagID=tags.tagsID", $dbhandle)) {
		echo '<ul class="tags">';
	    while($tagsForPiece = mysql_fetch_array($selected)) {
	    	echo '<li><a href="#" class="tag">'.$row["tagsID"].'</a></li>';
	    }
	    echo '</ul>';
	}
	echo  '</div>';
    //echo '<li id="item_'.$row["id"].'"><span class="page_name">'.$row["author"].') '.$row["title"].'</span><span class="page_message">'.$row["piece"].'</span></li>';
}
echo '</ul>';

function charlimit($string, $limit) {

	return substr($string, 0, $limit) . (strlen($string) > $limit ? "..." : '');
}

function ts2long ($ts) {
	return date("jS F Y", $ts);                     
}
?>