    <!-- footer area -->
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards"><?php echo esc_html(get_theme_mod('theme_setting_footer'));?></span></a> 
            </p>
        </div>
    </footer>
        <!-- footer area -->

	<!-- core  -->
    <script src="<?php echo get_template_directory_uri()."assets/vendors/jquery/jquery-3.4.1.js";?>"></script>
    <script src="<?php echo get_template_directory_uri()."assets/vendors/bootstrap/bootstrap.bundle.js";?>"></script>

    <!-- bootstrap 3 affix -->
    <script src="<?php echo get_template_directory_uri()."assets/vendors/bootstrap/bootstrap.affix.js";?>"></script>

    <!-- Isotope  -->
    <script src="<?php echo get_template_directory_uri()."assets/vendors/isotope/isotope.pkgd.js";?>"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="<?php echo get_template_directory_uri()."assets/js/johndoe.js";?>"></script>

    <?php wp_footer();?>

</body>
</html>
