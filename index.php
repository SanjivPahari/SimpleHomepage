<?PHP
$pagetitle='Homepage';
require('config.php');
require('header.php');
?>
 <div class="row">
 
          <div class="col-lg-6">
           
            <h2 class="text-success">About Me</h2>  
            
			<div class="panel panel-default">
  <div class="panel-body">
   <div class="col-lg-2">
  <img src="files/images/me.jpg" class="img-rounded" width="70" height="70" ></img>
    </div>
	 <div class="col-lg-10">
<i><?PHP echo $aboutme; ?></i>	
<br>
<a href="mailto:<?PHP echo $email; ?>"><span class="label label-warning">Contact: <?PHP echo $email; ?></span></a>
	</div>
  </div>
</div>
</div>

<div class="col-lg-6 " >
         
              <h2 class=" text-success " align="right">
			  <p align="right">My Skills & Interest</p></h2>
			 
			 <div class="panel panel-default ">
  <div class="panel-body">
  <?PHP
foreach($myskills as $skill => $skill_value) {
	?>

 <div class="col-lg-10">
  <div class="progress progress-striped active">
  <div class="progress-bar" style="width: <?PHP echo $skill_value; ?>%"><?PHP echo $skill; ?></div>
</div>
    </div>
	 <div class="col-lg-2">
	<b><?PHP echo $skill_value; ?>%</b>
	</div>
	<?PHP } ?>
	 

          </div>
		  
        </div>
		</div>
		
		</div>
	 <div class="row">
 
          <div class="col-lg-6">
           
            <h2 class="text-success">Projects</h2>  
            

<ul class="list-group">
  <?PHP
foreach($myprojects as $project => $project_info) {
	
	?>
  <li class="list-group-item">
<?PHP echo $project; ?> <br>
<?PHP echo $project_info; ?>
  </li>
<?PHP }?>
<p align="right"><a href="/project" target="_blank">More</a></p>
</ul>

</div>

<div class="col-lg-6 " >
         
              <h2 class=" text-success " align="right">
			  <p align="right">Friend List</p></h2>
			 
			 <div class="panel panel-default ">
  <div class="panel-body">
  <ul class="list-group">
  <?PHP
foreach($myfriend as $friendid => $friend_info) {
	?>
	


	 <div class="col-lg-2">
	 <img class="img-circle" src="http://graph.facebook.com/<?PHP echo $friendid; ?>/picture?type=small" />
    </div>
	 <div class="col-lg-10">
<i><?PHP echo $friend_info; ?></i>	<br>
<hr>
	</div>
<br>

  
	<?PHP } ?>
	 </ul>

          </div>
		  
        </div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-lg-12 " >
		<h2 class=" text-success " >
			  <p>Recent Blog</p></h2>
			 
  <blockquote>
  <p><?PHP echo $recentblog['Info']; ?></p>
  <small><cite title="Source Title"><?PHP echo $recentblog['Title']; ?></cite></small>
</blockquote>
<p align="right"><a href="/blog" target="_blank">More</a></p>

		</div>
		</div>
		
				<div class="row">
		<div class="col-lg-6 " >
		<h2 class=" text-success " >
			  <p>Facebook</p></h2>
			 
 <div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/paharisanjiv123/posts/523616657813110" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/paharisanjiv123/posts/523616657813110"><p>&#x915;&#x947; &#x939;&#x94b; &#x92f;&#x938;&#x94d;&#x924;&#x94b; !! School &#x91c;&#x93e;&#x926;&#x93e; &#x928;&#x93f; Class &#x939;&#x94b;&#x907;&#x928; Clan &#x938;&#x94b;&#x927;&#x91b;&#x928;&#x94d; &#x92f;&#x93e;&#x930; :P #ClashOfClans</p>Posted by <a href="https://www.facebook.com/paharisanjiv123">Sanjiv Pahari</a> on&nbsp;<a href="https://www.facebook.com/paharisanjiv123/posts/523616657813110">Tuesday, January 12, 2016</a></blockquote></div></div>
<br>
<div id="fb-root"></div><div class="fb-post" data-href="https://www.facebook.com/paharisanjiv123/posts/520311151476994" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/paharisanjiv123/posts/520311151476994"><p>Be Positive :)</p>Posted by <a href="https://www.facebook.com/paharisanjiv123">Sanjiv Pahari</a> on&nbsp;<a href="https://www.facebook.com/paharisanjiv123/posts/520311151476994">Sunday, January 3, 2016</a></blockquote></div></div>
 <p align="right"><a href="/facebook" target="_blank">More</a></p>

		</div>
		
		<div class="col-lg-6 " >
		<h2 class=" text-success " >
			  <p align="right">Twitter</p></h2>
<a class="twitter-timeline" width="650" height="400" href="https://twitter.com/<?PHP echo $twitterid; ?>" data-widget-id="700919297472913412">Tweets by @<?PHP echo $twitterid; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 <p align="right"><a href="/twitter" target="_blank">More</a></p>
		</div>
		</div>
		
						
		<div class="row">
		<div class="col-lg-12 " >
		<div class="col-lg-12 " >
		<h2 class=" text-success " >
			  <p >Youtube</p></h2>
			<div class="panel panel-default">
  <div class="panel-body">
   <div class="col-lg-2">
  <img src="files/images/me.jpg" class="img-rounded" width="70" height="70" ></img>
  <br>  <br>
  <script src="https://apis.google.com/js/platform.js"></script>

<div class="g-ytsubscribe" data-channelid="<?PHP echo $youtubeid; ?>" data-layout="default" data-count="default"></div>
    </div>
	 <div class="col-lg-10">
You can check out my funny & Intresting videos on YouTube!
<br>
<a href="https://www.youtube.com/channel/<?PHP echo $youtubeid; ?>" target="_blank">Check out my YouTube Channel</a>
	</div>
  </div>
</div>
</div>
		</div>
		</div>
		
		
<?PHP
require('footer.php');
?>


