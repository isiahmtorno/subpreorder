    <!-- Start Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    Copyright &copy; <?php echo date('Y'); ?>
                </div>
            </div>
        </div>         
    </footer>
    <!-- End Footer -->


<?php 
    $js_files = array(
        'jquery-3.3.1.js',
        'bootstrap.js',
        //'mdb.js',
        'bootbox.min.js',
        'bootsnav.js',
        'script.js'
    );

    for ($i=0; $i < count($js_files); $i++) { 
    	echo '<script type="text/javascript" src="assets/js/'.$js_files[$i].'"></script>'."\n";
    }
?>
</body>
</html>