<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//d26b395fwzu5fz.cloudfront.net/3.0.7/keen.min.js"></script>
		<script type="text/javascript" src="vendor/common-web.min.js"></script>
		<script type="text/javascript" src="vendor/jquery-1.11.1.js"></script>
	        <script type="text/javascript" src="vendor/keen.js"></script>
	        <script type="text/javascript" src="vendor/common-web.js"></script>
	        <script type="text/javascript" src="vendor/keen-local-storage.js"></script>
	</head> 
	<body>
	    
	    <iframe width="500" height="400" src="https://www.youtube.com/watch?v=e0Fl9FDisac" frameborder="0" allowfullscreen> </iframe>
	    <p>
		<a id="link-0" style="color: blue" class="classy classy2 classy3" href="./test.php">Hello world!</a>
	    </p>

	    <p>
		<a id="link-1" style="color: orange" href="./test.php">Hello no class world!</a>
	    </p>

	    <p>
		<a id="link-2" data-one="1" data-two="2" href="./test.php">Hello no class world!</a>
	    </p>

	    <p>
		<span id="span-0" class="less" data-three="three">Hello span!</span>
	    </p>
	    <p>
		<span id="span-1" class="more-stuff" data-four="four">More Stuff!</span>
	    </p>

	    <p>
		<span id="span-2" class="even-more-stuff" data-five="five">Even More Stuff!</span>
	    </p>

	    <form method="GET" action="./test.php" data-six="six">
		<input type="text" name="text field" id="text_field" placeholder="Type something" />
		<br>
		<select name="select field" id="select field">
		  <option value="1">Option One</option>
		  <option value="2">Option Two</option>
		  <option value="3">Option Three</option>
		<br>
		<textarea name="textarea field" id="textarea_field" placeholder="Type longer things"></textarea>
		<br>
		<input type="hidden" name="hidden field" id="hidden_field" value="this is hidden" />
		<input type="Submit" value="Submit">
	    </form>
	    </script>
		    
	    <script type="text/javascript">
		
		CommonWeb.Callback = function(collection, properties, callback) {
			//key
			console.log(collection);
			console.log(properties);
			console.log(callback);
		}

		// Actual Tracking Configuration

		// track session with a GUID
		CommonWeb.trackSession();

		// track pageviews
		CommonWeb.trackPageview();

		// track link clicks
		CommonWeb.trackClicks();

		// track other elements, requires explicit elements to be passed
		CommonWeb.trackClicksPassive($("span.less"));

		// track other elements, adding additional properties
		CommonWeb.trackClicksPassive($("span.more-stuff"), { areWeHavingFunYet : true });

		// track other elements, adding additional properties that are a function
		CommonWeb.trackClicksPassive($("span.even-more-stuff"), function(event, element) {
		    return {
			event: { clientX : event.clientX },
			element: { tagNameAgain : element.tagName  }
		    };
		});

		// track form submissions
		CommonWeb.trackFormSubmissions();

		// track input changes
		CommonWeb.trackInputChanges();

	    </script>
	
	</body>
</html>	
