<section>
    {foreach from=$result item=oneitem}
        <h1>{$oneitem.title}</h1>
		<p>{$oneitem.content}</p>
		<img src="image/{$oneitem.image}"><br>
        <h3>{$oneitem.date_created}</h3>

    {/foreach}




</section>