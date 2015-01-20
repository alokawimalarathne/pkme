<!-- Footer
================================================== -->

</div> <!-- /.span9 -->
</div> <!-- /.row -->
<footer class="col-md-12">
    <hr>
    <div class="pull-left col-md-6">All rights reserved &copy; CGU UCSC 2014 </div><div class="pull-right col-md-6" ><span class="pull-right">Solution by Group 24</span></div>
</footer>

</div> <!-- /.container -->

<!-- javascript -->	
<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-transition.js"></script>
<script src="assets/js/bootstrap-collapse.js"></script>
<script src="assets/js/bootstrap-modal.js"></script>
<script src="assets/js/bootstrap-dropdown.js"></script>
<script src="assets/js/bootstrap-button.js"></script>
<script src="assets/js/bootstrap-tab.js"></script>
<script src="assets/js/bootstrap-alert.js"></script>
<script src="assets/js/bootstrap-tooltip.js"></script>
<script src="assets/js/jquery.ba-hashchange.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/jquery.placeholder.min.js"></script>
<script src="assets/js/jquery.pickme.js"></script>
<script>
    $(document).ready(function($) {
    // invoke the carousel
$('#myCarousel').carousel({
  interval: 3000
});

/* SLIDE ON CLICK */ 

$('.carousel-linked-nav > li > a').click(function() {

    
    var item = Number($(this).attr('href').substring(1));

    
    $('#myCarousel').carousel(item - 1);

    
    $('.carousel-linked-nav .active').removeClass('active');

    
    $(this).parent().addClass('active');

   
    return false;
});

/* AUTOPLAY NAV HIGHLIGHT */


$('#myCarousel').bind('slid', function() {

  
    $('.carousel-linked-nav .active').removeClass('active');

 
    var idx = $('#myCarousel .item.active').index();

   
    $('.carousel-linked-nav li:eq(' + idx + ')').addClass('active');

});
});

$("#searchform").on( "submit" , function(){
    
    var formdata = $(this).serialize(); // Serialize all form data

    
    $.post( "searchresults.php", formdata, function( data ) {
      
        $("#success").html ( data );
    });

    return false; // Prevent the form from actually submitting
});



</script>
</body>
</html>
<?php ob_flush(); ?>