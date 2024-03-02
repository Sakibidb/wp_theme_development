<?php 
function my_theme_widgets(){
    register_sidebar(array(
        "name"=> "Footer Widgets",
        "id"=> "footer_wid",
        "description"=> "Use this widget for footer content",
        "before_widget"=> "<div class='col-lg-3 col-md-6'><div class='footer-info style'>",
        "after_widget"=> "</div></div>",
        "before_title"=> "<h3>",
        "after_title" => "</h3>",
        
    ));

}
add_action( 'widgets_init', 'my_theme_widgets' );