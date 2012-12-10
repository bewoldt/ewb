<?php $title="Elements" ?>

<!-- Document Head -->
<?php include 'includes/_doc_head.php'; ?>

<body>
    <!-- Header -->
    <?php include 'includes/_header.php'; ?>

    <!-- Nav -->
    <?php include 'includes/_nav.php'; ?>

    <div class="row">
        <div class="twelve columns">
            <h1>General Typography</h1>
            <p>These are the basic elements of typography.</p>

            <h1>h1. This is a very large header.</h1>
            <h2>h2. This is a large header.</h2>
            <h3>h3. This is a medium header.</h3>
            <h4>h4. This is a moderate header.</h4>
            <h5>h5. This is small header.</h5>
            <h6>h6. This is very small header.</h6>

            <p>This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content so, let's see&#8230; did you know that there are storms occurring on Jupiter that are larger than the Earth? That's pretty cool.</p>
            <p>This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content so, let's see&#8230; did you know that there are storms occurring on Jupiter that are larger than the Earth? That's pretty cool.</p>

			<hr />

			<h1>Links</h1>
			<p>Where would we be without links? Not in hypertext, that's for sure! Ah, nerd humor. Anyways. Links are very standard, and the color is preset or controlled via the _settings.scss file as the main color.</p>

			<h2><a href="#">This is a header link.</a></h2>
			<h3><a href="#">This is a header link.</a></h3>
			<h4><a href="#">This is a header link.</a></h4>
			<h5><a href="#">This is a header link.</a></h5>
			<p><a href="#">This is a standard inline paragraph link.</a></p>

			<hr />
			<h1>Lists</h1>
			
			<h3>Unordered List</h3>
			<p>A list of items in which the order does not explicitly matter.</p>
	    <ul>
	      <li>List item with a much longer description or more content.</li>
	      <li>List item</li>
	      <li>List item
              <ul>
                <li>Nested List Item</li>
                <li>Nested List Item</li>
                <li>Nested List Item</li>
              </ul>
          </li>
	      <li>List item</li>
	      <li>List item</li>
	      <li>List item</li>
	    </ul>
	    
	    <h3>Ordered List</h3>
	    <p>A list of items in which the order does explicitly matter.</p>
	    <ol>
	      <li>List item with a much longer description or more content.</li>
	      <li>List item</li>
	      <li>List item
              <ol>
                <li>Nested List Item</li>
                <li>Nested List Item</li>
                <li>Nested List Item</li>
              </ol>
          </li>
	      <li>List item</li>
	      <li>List item</li>
	      <li>List item</li>
	    </ol>
	    
	    <h3>Unstyled List</h3>
	    <p>A list of items with a class <code>.unstyled</code>.</p>
	    <ul class="unstyled">
	      <li>List item with a much longer description or more content.</li>
	      <li>List item</li>
	      <li>List item
              <ul>
                <li>Nested List Item</li>
                <li>Nested List Item</li>
                <li>Nested List Item</li>
              </ul>
          </li>
	      <li>List item</li>
	      <li>List item</li>
	      <li>List item</li>
	    </ul>

			<hr />

  				<h1>Blockquotes</h1>
  				<p>Sometimes other people say smart things, and you may want to mention that through a blockquote callout. We've got you covered.</p>

  				<blockquote>
  					<p>I do not fear computers. I fear the lack of them.</p>
  					<small>Isaac Asimov</small>
  				</blockquote>
  				
  				<h4>Pull-Right</h4>
  				<p>Use <code>.pull-right</code> for a floated, right-aligned blockquote.</p>
  				<blockquote class="pull-right">
  					<p>This blockquote is using a class of "pull-right"</p>
  					<small>Isaac Asimov</small>
  				</blockquote>
  				<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>

  				<hr />
  				
  				<h1>Tables</h1>
  				
  				<h4>Default styles</h4>
				<p>For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>

				<table class="table">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>First Name</th>
				      <th>Last Name</th>
				      <th>Username</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>1</td>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				    </tr>
				    <tr>
				      <td>2</td>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <td>3</td>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>
				
				<h3>Optional classes</h3>
		    <p>Add any of the follow classes to the <code>.table</code> base class.</p>
		
        <h3><code>.table-striped</code></h3>
        <p>Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE7-IE8).</p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
		          
        <h3><code>.table-bordered</code></h3>
        <p>Add borders and rounded corners to the table.</p>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="2">1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@TwBootstrap</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
		          
          <h3><code>.table-hover</code></h3>
          <p>Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
		          
          <h3><code>.table-condensed</code></h3>
          <p>Makes tables more compact by cutting cell padding in half.</p>
          <table class="table table-condensed">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
				
  				<hr />
  				
  				<h1>Forms</h1>
  				
  				<p>Individual form controls receive styling, but without any required base class on the <code>&lt;form&gt;</code> or large changes in markup. Results in stacked, left-aligned labels on top of form controls.</p>
  				<form>
  					<fieldset>
							<legend>Legend</legend>
							<label>Label name</label>
							<input type="text" placeholder="Type something…">
							<span class="help-block">Example block-level help text here.</span>
							<label class="checkbox">
								<input type="checkbox"> Check me out
							</label>
							<button type="submit" class="btn">Submit</button>
  					</fieldset>
					</form>
					
					<h3>Inline form</h3>
					<p>Add <code>.form-inline</code> for left-aligned labels and inline-block controls for a compact layout.</p>
          <form class="form-inline">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
              <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn">Sign in</button>
          </form>
          
          <h3>Horizontal form</h3>
          <p>Right align labels and float them to the left to make them appear on the same line as controls. Requires the most markup changes from a default form:</p>
          <ul>
            <li>Add <code>.form-horizontal</code> to the form</li>
            <li>Wrap labels and controls in <code>.control-group</code></li>
            <li>Add <code>.control-label</code> to the label</li>
            <li>Wrap any associated controls in <code>.controls</code> for proper alignment</li>
          </ul>
          <form class="form-horizontal">
          	<fieldset>
	            <legend>Legend</legend>
	            <div class="control-group">
	              <label class="control-label" for="inputEmail">Email</label>
	              <div class="controls">
	                <input type="text" id="inputEmail" placeholder="Email">
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label" for="inputPassword">Password</label>
	              <div class="controls">
	                <input type="password" id="inputPassword" placeholder="Password">
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="controls">
	                <label class="checkbox">
	                  <input type="checkbox"> Remember me
	                </label>
	                <button type="submit" class="btn">Sign in</button>
	              </div>
	            </div>
          	</fieldset>
          </form>
          
          <h3>Checkboxes and radios</h3>
          <p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.</p>
          <h4>Default (stacked)</h4>
          <form>
            <label class="checkbox">
              <input type="checkbox" value="">
              Option one is this and that&mdash;be sure to include why it's great
            </label>
            <br>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Option one is this and that&mdash;be sure to include why it's great
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
          </form>
          
          <h4>Inline checkboxes</h4>
          <p>Add the <code>.inline</code> class to a series of checkboxes or radios for controls appear on the same line.</p>
          <form>
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
            </label>
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
            </label>
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
            </label>
          </form>
          
          <h4>Buttons instead of text</h4>
          <p>Instead of a <code>&lt;span&gt;</code> with text, use a <code>.btn</code> to attach a button (or two) to an input.</p>
          <form>
            <div class="input-append">
              <input class="span2" id="appendedInputButton" size="16" type="text">
              <button class="btn" type="button">Go!</button>
            </div>
            <br>
            <div class="input-append">
              <input class="span2" id="appendedInputButtons" size="16" type="text">
              <button class="btn" type="button">Search</button>
              <button class="btn" type="button">Options</button>
            </div>
          </form>
          
          <h3>Control sizing</h3>
          <p>Use relative sizing classes like <code>.input-large</code> or match your inputs to the grid column sizes using <code>.span*</code> classes.</p>

          <h4>Relative sizing</h4>
          <form style="padding-bottom: 15px;">
	          <input class="input-mini" type="text" placeholder=".input-mini"><br>
	          <input class="input-small" type="text" placeholder=".input-small"><br>
	          <input class="input-medium" type="text" placeholder=".input-medium"><br>
	          <input class="input-large" type="text" placeholder=".input-large"><br>
	          <input class="input-xlarge" type="text" placeholder=".input-xlarge"><br>
	          <input class="input-xxlarge" type="text" placeholder=".input-xxlarge"><br>
          </form>
          
          <hr />
          
          <h1>Buttons</h1>
          <p>Button styles can be applied to anything with the <code>.btn</code> class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.</p>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Button</th>
                <th>class=""</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button type="button" class="btn">Default</button></td>
                <td><code>btn</code></td>
                <td>Standard gray button with gradient</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-primary">Primary</button></td>
                <td><code>btn btn-primary</code></td>
                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-success">Success</button></td>
                <td><code>btn btn-success</code></td>
                <td>Indicates a successful or positive action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                <td><code>btn btn-inverse</code></td>
                <td>Alternate dark gray button, not tied to a semantic action or use</td>
              </tr>
            </tbody>
          </table>
          
          <h2>Button sizes</h2>
          <p>Fancy larger or smaller buttons? Add <code>.btn-large</code>, <code>.btn-small</code>, or <code>.btn-mini</code> for additional sizes.</p>
          <p>
            <button type="button" class="btn btn-large btn-primary">Large button</button>
            <button type="button" class="btn btn-large">Large button</button>
          </p>
          <p>
            <button type="button" class="btn btn-primary">Default button</button>
            <button type="button" class="btn">Default button</button>
          </p>
          <p>
            <button type="button" class="btn btn-small btn-primary">Small button</button>
            <button type="button" class="btn btn-small">Small button</button>
          </p>
          <p>
            <button type="button" class="btn btn-mini btn-primary">Mini button</button>
            <button type="button" class="btn btn-mini">Mini button</button>
          </p>
        </div>
    </div>
    
    <!-- Footer -->
    <?php include 'includes/_footer.php'; ?>

    <!-- Document End -->
    <?php include 'includes/_doc_end.php'; ?>
