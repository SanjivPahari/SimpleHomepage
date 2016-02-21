<?PHP
$pagetitle='Twitter Tweets';
require('../config.php');
require('../header.php');
?>
 <div class="row">
 
          <div class="col-lg-12">
           
            <h2 class="text-success">Twitter Tweets & Likes <a href="https://twitter.com/<?PHP echo $twitterid; ?>" class="twitter-follow-button" data-show-count="false">Follow @<?PHP echo $twitterid; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></h2>  
			</div>
			</div>
			
<div class="row">
          <div class="col-lg-12">
				<div class="col-lg-6 " >
			
			<a class="twitter-timeline" href="https://twitter.com/<?PHP echo $twitterid; ?>" data-widget-id="700919297472913412">Tweets by @<?PHP echo $twitterid; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 
	
</div>
<div class="col-lg-6 " >
			
			<a class="twitter-timeline" href="https://twitter.com/<?PHP echo $twitterid; ?>/likes" data-widget-id="700921545154293760">Liked by @<?PHP echo $twitterid; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 
	
</div>
		</div>
		
			</div>
		
			
			
		
<?PHP
require('../footer.php');
?>


