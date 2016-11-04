{foreach from=$result item=oneitem}
	<div id="{$oneitem.firstname}">
		<h1>{$oneitem.firstname} {$oneitem.lastname}</h1>
		<img src="image/{$oneitem.image}">
		<p>{$oneitem.description}</p>
	</div>      
{/foreach}


