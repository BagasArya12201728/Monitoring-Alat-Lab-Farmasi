<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jquery.autoplace.js: Google Places Autocomplete Demo</title>

	<meta charset="utf-8">

	<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
	.container { margin: 150px auto; max-width:800px;}
	.vcenter {
		min-height: 100%;
		min-height: 100vh;
		display: flex;
		align-items: center;
	}
	.wrapper {
		position: relative;
	}
	.suggestion-wrapper {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
	}
	.suggestion-wrapper .form-control {
		color: grey;
		border-color: transparent;
	}
	.suggestion-wrapper .input-group-addon,
	.suggestion-wrapper .input-group-btn {
		visibility: hidden;
	}
	.input-group .suggestion {
		z-index: 1;
	}
	.autoplace,
	.autoplace:focus {
		background-color: transparent;
	}
	</style>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>

<body class="vcenter">
<div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li><a href="https://www.jqueryscript.net/other/jQuery-Plugin-Google-Places-Autocomplete-autoPlace.html">Download This Plugin</a></li>
<li><a href="https://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
	<div class="container">
		<h1>jquery.autoplace.js: Google Places Autocomplete Demo</h1>
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="form-group wrapper">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Enter an Address" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" id="autoplace">
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="button">Search</button>
						</span>
					</div>
					<div class="input-group suggestion-wrapper">
						<input type="text" class="form-control suggestion" tabindex="-1">
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="button">Search</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9RbygVTHnUDQtlMbzHllab3qIdjJ9DgE&v=3.exp&libraries=places"></script>
	<script src="jquery.autoplace.js"></script>


	<script>

		(function($) {

			'use strict';

			$('#autoplace').autoplace({
				types: ['address'],
				componentRestrictions: {country: 'us'},
			});

			$('#autoplace').on('autoplace-suggestion', function(e) {
				var suggestion = $(e.target).attr('data-autoplace-corrected-suggestion');
				$('.suggestion').val(suggestion);
			});

			// $('#autoplace').on('autoplace-chosen', function(e) {
			// 	console.log('chosen');
			// });

		}(jQuery));

	</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
