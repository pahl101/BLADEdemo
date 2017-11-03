<?php

if($_POST['visitExpand'] == 1 ){
	header('Location: todayVisitExpanded.php');
}

else if($_POST['hide'] == 1 ){
	header('Location: index.php');
}

else if($_POST['pastExpand'] == 1 ){
	header('Location: pastExpanded.php');
}

else if($_POST['suggestedExpand'] == 1 ){
	header('Location: suggestedExpanded.php');
}

else if($_POST['hypergraphExpand'] == 1 ){
	header('Location: hypergraphExpanded.php');
}

else if($_POST['extraExpand'] == 1 ){
	header('Location: extraExpanded.php');
}


?>