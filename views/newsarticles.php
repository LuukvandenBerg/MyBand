<?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach ($result as $row=>$oneItem) {	
	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
	echo '<content>'.$oneItem['content'].'</content><br>';
	echo '<content>'.'<img src="image/'.$oneItem['image'].'">'.'</content>';
	echo '</article>';
}

echo '</section>';