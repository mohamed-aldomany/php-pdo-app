<?php
	include_once 'connect.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="static/css/uikit.min.css" />
        <link rel="stylesheet" type="text/css" href="static/css/style.css" />
        <script src="static/js/uikit.min.js"></script>
        <script src="static/js/uikit-icons.min.js"></script>
    </head>
    <body>
	    <nav class="uk-navbar-container uk-margin" uk-navbar>
		    <div class="uk-navbar-left">

		        <a class="uk-navbar-item uk-logo" href="#">Logo</a>

		        <ul class="uk-navbar-nav">
		            <li>
		                <a href="#">
		                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
		                    Home
		                </a>
		            </li>
		            <li>
		                <a href="#">
		                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
		                    Features
		                </a>
		            </li>
		            <li>
		                <a href="#">
		                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
		                    About
		                </a>
		            </li>
		            <li>
		                <a href="#">
		                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
		                    Contact-Us
		                </a>
		            </li>
		        </ul>
		    </div>

		    <div class="uk-navbar-right add">
		        <a href="#modal-center" uk-toggle uk-icon="plus-circle"></a>
		    </div>
	</nav>




	<table class="uk-table uk-table-hover uk-table-divider table"> 
	<?php 	
		$person->DataView();
	?>
	</table>




<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <form>
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Legend</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Input">
        </div>

        <div class="uk-margin">
            <select class="uk-select">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>

        <div class="uk-margin">
            <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-radio" type="radio" name="radio2" checked> A</label>
            <label><input class="uk-radio" type="radio" name="radio2"> B</label>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-checkbox" type="checkbox" checked> A</label>
            <label><input class="uk-checkbox" type="checkbox"> B</label>
        </div>

        <div class="uk-margin">
            <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1">
        </div>

    </fieldset>
</form>

    </div>
</div>


    </body>
</html>



