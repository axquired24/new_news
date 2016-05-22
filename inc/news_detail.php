<div class="row"><!-- row -->
  <div class="col-md-8"><!-- Left side -->
    <!-- Header and title -->
    <div class="page-header">
        <h1>Peretas Berprestasi 2014</h1>
    </div>
    <!-- END Header and title -->

	<a href="#"><img width="100%" src="img_sample/Chrysanthemum.jpg" class="img-responsive img-thumbnail"></a>
    <hr class="divider">
    
    <p class="text-justify">
        <span class="lead">HACKER</span> atau sering disebut <abbr title="Hacker = peretas, Kamus Besar Bahasa Indonesia" data-toggle="tooltip">peretas</abbr> adalah kumpulan atau perseorangan yang mampu memasuki situs - situs tujuannya sampai ke dalam akar dan mengambil semua infrmasi yang ada di dalamnya. Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet. <br><br>
Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet .<br><br>
Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet. Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet.<br><br>
Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet .<br><br>
Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet. Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet Lorem ipsum dol sir amet.<br><br>
    </p>
	<hr class="divider">
    
    <!-- More news -->
    <p class="lead text-center"><kbd>news</kbd> You may see: </p>
    <div class="row">
		<?php
            // array for related post
            $moreNews = array(
                            array("title"=>"Koala ini punya 2 mata masing - masing kanan dan kiri","src"=>"Koala.jpg"),
                            array("title"=>"Bunga ini juga ada di Indonesia lho, tulip asli indonesia","src"=>"Hydrangeas.jpg"),
                            array("title"=>"Penguin lucu ini ternyata punya 2 kaki, kaki kanan dan kiri","src"=>"Penguins.jpg"),
                            array("title"=>"Mau lihat bunga tulip, ngga perlu jauh - jauh ke Belanda kok","src"=>"Tulips.jpg")
                            );
            for($u=0; $u<=3; $u++){						
        ?>
    	<div class="col-md-3">
            <div class="panel panel-default">
            	<div class="panel-body">
                    <a href="#"><img title="<?php echo $moreNews[$u]["title"]; ?>" src="img_sample/<?php echo $moreNews[$u]["src"]; ?>" class="img-responsive"></a>
                </div>
            	<div class="panel-footer"><?php echo $moreNews[$u]["title"]; ?></div>
            </div>
        </div>
		<?php } // END for state ?>	      
    </div>
    <!-- END more news -->
    
    </div><!-- END Left side -->
    
    <div class="col-md-3 col-md-offset-1"><!-- Right side -->
        
		<div class="page-header">
            <h1><small><span class="glyphicon glyphicon-cloud"></span> NEWnews</small></h1>
        </div>
        
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<span class="glyphicon glyphicon-bookmark pull-right"></span> Favorites
				</h3>
			</div>						
			<ul class="list-group">				
				<li class="list-group-item"><span class="glyphicon glyphicon-plus-sign"></span> <a href="#"> Add to Favorites</a></li>
				<li class="list-group-item"><kbd class="bg-primary">f</kbd> <a href="#"> Share to Facebook</a></li>
				<li class="list-group-item"><span class="label label-info">t</span> <a href="#"> Retweet</a></li>
			</ul>			
		</div>
		        
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<span class="glyphicon glyphicon-star pull-right"></span> Recent comments
				</h3>
			</div>
			<ul class="list-group">
				<li class="list-group-item">
					<span class="glyphicon glyphicon-comment pull-right text-muted"></span> Albert on <a href="#" data-toggle="tooltip" title="This is Awesome, You must see this.. What the -_- "><em>Facebook</em></a>
				</li>
				<li class="list-group-item">
					<span class="glyphicon glyphicon-comment pull-right text-muted"></span> @axquired24 on<a href="#" data-toggle="tooltip" title="Nice crafts. Keep up that good job boy."><em> Twitter</em></a>
				</li>
				<li class="list-group-item"><small><a href="#">See all comments  <span class="glyphicon glyphicon-forward"></span></small></a></li>
				<li class="list-group-item">Wanna comments?</li>
				<li class="list-group-item">
				<small>Sign in here:</small>
					<a href="" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Sign in Facebook"><strong>facebook</strong></a> or  
					<a href="" class="btn btn-xs btn-info" data-toggle="tooltip" title="Login twitter"><strong>twitter</strong></a>
				</li>
			</ul>
		</div>
        
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-signal pull-right"> </span> Ads</h3>				
			</div>
			
			<div class="panel-body">
				<img src="web_image/feature_ads.jpg" alt="Ads" class="img-responsive" />
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="glyphicon glyphicon-align-justify pull-right"></span> Categories</h3>
			</div>
			<ul class="list-group">
				<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Technology</a></li>
				<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Hacking</a></li>
				<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Health</a></li>
				<li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> Social</a></li>
			</ul>
		</div>

    </div><!-- END Right side -->
</div><!-- END row -->
