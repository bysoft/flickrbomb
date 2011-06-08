<?php include("includes/_doc_head.php"); ?>
<style>
/*	#testthing {width: 400px; height: 400px;}*/
</style>
<body id="<?= $page_name ?>-page" class="<?=$browser?>">
<div class="container main-content">
	<div class="row">
		<div claass="sixteen columns">
			<h1>
				<img src="images/bomb.png">flickrBomb
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="sixteen columns">
			<div id="demo-splash">
				<img src="flickr://Super Meat Boy" width="940px" height="250px"> <span>Loading New Demo Content</span>
			</div>
			<div id="demo-content">
				&lt;img src="flickr://<span id="keywords" contenteditable="true" spellcheck="false">Super Meat Boy</span>" width="940px" height="250px"&gt;
			</div>
			<div id="demo-body">
				<h2>
					Build super awesome sites quickly, with super awesome content
				</h2>
						</div>
					</div>
					<div class="row">
						<div class="nine columns">
							<p class="lead-in">
								Duck! Whew, that bomber almost got you. Lucky for you, you lived.
							</p>
							<p>
								Hopefully you had a chance to play around with the demo above and realized that flickrBomb provides an easy way for you to fill your prototypes with relevant content, and not just dull gray placeholder images. It's quick and easy, so let's dive in!
							</p>
							<div class="old-vs-new">
							<ul>
								<li class="old-method first"><h5>The old way</h5><img src="images/old.gif"></li>
								<li><h5>The new way</h5><img src="flickr://broadway" width="100px" height="100px"></li>
								<li class="no-caption"><img src="flickr://ballet" width="100px" height="100px"></li>
								<li class="no-caption"><img src="flickr://tennis" width="100px" height="100px"></li>
							</ul>
							</div>
							<div style="clear:both"></div>
							<h3>
								1. Set up
							</h3>
							<p>
								Getting flickrBomb to work on your pages is super simple. Make sure jQuery is loaded into your pages, preferably at the bottom.
							</p>
							<div class="highlight" style="background: #202020">
								<pre><span style="color: #6ab825; font-weight: normal">&lt;script </span><span style="color: #bbbbbb">src=</span><span style="color: #ed9d13">"//code.jquery.com/jquery.js"</span><span style="color: #6ab825; font-weight: normal">&gt;&lt;/script&gt;</span></pre>
							</div><br>
							<p>
								We recommend using a CDN to host your jQuery, there are many: <a href="http://code.google.com/apis/libraries/devguide.html#jquery" title="Google Libraries API">Google</a>, <a href="http://docs.jquery.com/Downloading_jQuery#CDN_Hosted_jQuery" title="jQuery's CDN">jQuery</a>, or <a href="http://www.asp.net/ajaxlibrary/CDN.ashx#jQuery_Releases_on_the_CDN_0" title="Microsoft's CDN">Microsoft</a> are all reasonable solutions.
							</p>
							<p>
								Next up is to put the flickrBomb css file in the head section of your page.
							</p>
								<div class="highlight" style="background: #202020">
									<pre><span style="color: #6ab825; font-weight: normal">&lt;link</span> <span style="color: #bbbbbb">rel=</span><span style="color: #ed9d13">"stylesheet"</span> <span style="color: #bbbbbb">href=</span><span style="color: #ed9d13">"css/flickrbomb.css"</span><span style="color: #6ab825; font-weight: normal">&gt;</span></pre>
								</div><br>
								<p>
									After including jQuery and the css in the head of your page, all that is left is to include flickrBomb. We recommend that you put flickrBomb at the bottom of your page, right <strong>before the closing body tag</strong> so as to insure that your page is loaded before flickrBomb is called.
								</p>
									<div class="highlight" style="background: #202020">
										<pre><span style="color: #6ab825; font-weight: normal">&lt;script </span><span style="color: #bbbbbb">src=</span><span style="color: #ed9d13">"js/jquery.flickrBomb.min.js"</span><span style="color: #6ab825; font-weight: normal">&gt;&lt;/script&gt;</span></pre>
									</div><br>
									<p>
										That's all you have to do for set up!
									</p>
								</div>
								<div class="six columns bomber">
								</div>
								</div>
								</div>
		</div><!-- container -->
		<div class="all-black">
			<div class="art-style"></div>
		<div class="container">
				<div class="row">
					<div class="sixteen columns">
						<h3 class="first">
							2. Implementing
						</h3>
						<p>
							Using flickrBomb in your prototypes is really quite simple. Let's say you're building a website for one of your clients who happens to be building a Kevin Bacon fan site. All you have to do is drop an image tag into your layout and set the source to <span>flickr://Kevin Bacon</span>, then set the desired dimensions.
						</p>
							<div class="highlight" style="background: #202020">
								<pre><span style="color: #6ab825; font-weight: normal">&lt;img</span> <span style="color: #bbbbbb">src=</span><span style="color: #ed9d13">"flickr://Kevin Bacon"</span> <span style="color: #bbbbbb">width=</span><span style="color: #ed9d13">"175px"</span> <span style="color: #bbbbbb">height=</span><span style="color: #ed9d13">"175px"</span><span style="color: #6ab825; font-weight: normal">&gt;</span></pre>
							</div><br>
							<div class="row">
								<div class="three columns">
									<img src="flickr://Kevin Bacon" width="175px" height="175px">
								</div>
								<div class="twelve columns offset-by-one-half">
									<p>
										In return, we get a picture that matches the keywords in the source url.
									</p>
									<p>
										We can choose other related images by clicking on the <img class="setup-icon-small" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAA6RwvCAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAApdJREFUeNpiZGBgYALidCD2BmJpBvqBb0B8Foi7gfgxI5CIB+IChoEDD4A4DOSQ9UCswDCwIAUULRzUMs3b25vnxo0b6v///zfo7e2VIEErFyhEtgOxBKWOyM3NFZo0aZIciH3z5s3vGhoaN0nQnsdEjZAQFhZmhjkCBLZu3foRWd7S0pJz9+7divjMoIpDsrKyhNCiiB+ZP3/+fDkXFxd+fGawUMMhAgICzMh8dXV1TlBUGRgYcFpbW/OA+ITMoIpDPnz48BddDDmqiAFUiZqVK1d+/PPnz398atauXfuO5g5RVVVlY2FhYcQlD8pF6enpT2nqEFCOmTVrFtZo+PLly9++vr4XwHRy5+3bt39pmkaqqqpEpaSk2JDF9uzZ89HV1fU+KeZQVKCByodjx46po4eCsbHxzVu3bv2iW4E2YcIEjNq6q6vrBYmOoCyN1NbWipqZmfGgJ8rm5ubX5JjHRG4CLSsrw4jOxMTER+R6jCyHzJw5U5qHhwelNJ03b97r48ePfyfXISQnVlBVv2XLFhVksWfPnv3S09O7SSiLUjWxYiszysvLn1LgCOKiBpQeQI2cz58/64IaPOhlxqlTp74sWbLkI6XlEQshRxw9elQFV+358+fPf7GxsY8YqACYCCVKfFU4IxBQq5mJ1yHBwcFC+OTZ2NgYw8PD+anhEKLqGlBBBYyiLz9+/PgPbI2J4WsU0cwh6A1hZ2dnXuTowtYoonrUgGpR9NISFDLI/GnTpr2jeYhgq8pBbVB4KZSX94jS8oOsIh5UnoCiBRRdPj4+dyZPnvyOWrmGah0sCgG4iP/LMPDgN8ghJwbYEaDEfwVUBpwDYi0glhkAR4DqqHIgvodcRAsDsRgdHfEHiG/DOAABBgDwy+4qw3JyZwAAAABJRU5ErkJggg=="> set up icon and exploring the gallery. When you select an image in the gallery it will automatically be saved to your browsers <a href="http://diveintohtml5.org/storage.html" title="Local Storage">local storage</a> so that the next time you come back and visit the page on your machine, your content will persist.
									</p>
									<p>
										If you change the keywords in your source url, then your local storage is replaced for that image with the new content.
									</p>
								</div>
								<div style="clear:both"></div>
								<h3>
									3. How it works
								</h3>
								<p>
									flickrBomb uses <a href="http://jquery.com" title="jQuery">jQuery</a>, <a href="http://documentcloud.github.com/underscore/" title="Underscore.js">Underscore</a>, <a href="http://documentcloud.github.com/backbone/" title="Backbone.js">Backbone.js</a>, and your browsers <a href="http://documentcloud.github.com/backbone/docs/backbone-localstorage.html" title="Backbone.js Local Storage Adapter">local storage</a> to make the magic happen. The plugin scours your html and finds all the image tags that have a source attribute that starts with <span>flickr://</span> and searches flickr for the terms that follow. If it finds anything, the image tag is replaced with flickrbomb's <span>flickrbombContainer</span> div. It does this for each images pointing to flickr://.
								</p>
								<h3>
									4. Customization<br>
								</h3>
								<h5>
									Dimensions
								</h5>
								<p>
									Not only can you set the dimensions for your flickrBomb images in the image tag itself, but you can set default dimensions by setting the width and height of the class <span>flickrbomb</span>. For images without inline dimensions defined, the pluging will use those set in css.
								</p>
								<h5>
									Different images, same search term
								</h5>
								<p>
									To use the same search term and have different images for each, you need to assign each image a unique id.
								</p>
									<div class="highlight" style="background: #202020">
										<pre><span style="color: #6ab825; font-weight: normal">&lt;img</span> <span style="color: #bbbbbb">id=</span><span style="color: #ed9d13">"kevin-bacon-rocking"</span> <span style="color: #bbbbbb">src=</span><span style="color: #ed9d13">"flickr://Kevin Bacon"</span> <span style="color: #bbbbbb">width=</span><span style="color: #ed9d13">"175px"</span> <span style="color: #bbbbbb">height=</span><span style="color: #ed9d13">"175px"</span><span style="color: #6ab825; font-weight: normal">&gt;</span></pre>
									</div>
								</div><br>
								<h3>
									5. Download
								</h3>
								<p>
									You can download your copy right here or on <a href="http://github.com" title="flickrBomb Github">github</a>.
								</p><a href="#download" class="nice button radius" title="minified version">flickrBomb Minified (20kb)</a> <a href="#download" class="nice button radius" title="flickrBomb uncompressed">flickrBomb Uncompressed (70kb)</a><br>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
</div>
<?php include("includes/_footer.php");  ?>
</body>
</html>