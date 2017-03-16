<?php
		$this->layout('layout', ['title' => 'Partage | Inscription ', 'current' => '']);
		//use Model\Shortcut;

		$this->start('contenu');
?>

		<div class="container main-container">

    <!-- Page contenu
    ================================================== -->
    <div class="row"><!--Container row-->

        <div class="span8 contact">

            <h2>Inscription</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna.</p>

            <div class="alert alert-success">
                Well done! You successfully read this important alert message.
            </div>

            <form action="#" id="inscription-form" method="post">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Name">
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Email Address">
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-globe"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Website URL">
                </div>
                <textarea class="span6"></textarea>
                <div class="row">
                    <div class="span2">
                        <input type="submit" class="btn btn-inverse" value="Send Message">
                    </div>
                </div>
            </form>

        </div> <!--End page content column-->

        <!-- Sidebar
        ================================================== -->
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->
            <h5 class="title-bg">Our Location</h5>
            <address>
            <strong>Piccolo</strong><br>
            123 Main St, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <address>
            <strong>Jimmy Doe</strong><br>
            <a href="mailto:#">first.last@gmail.com</a>
            </address>

            <h5 class="title-bg">Map Us</h5>
            <img src="img/location-map.jpg" alt="map">

        </div><!-- Fin sidebar column -->

    </div><!-- Fin container row -->

	</div> <!-- Fin Container -->


    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    <?php $this->stop('contenu'); ?>
