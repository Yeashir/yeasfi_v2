<section  class="dblgrd-sectionD" style="clear: both;">
    <div class="container"> 
        <div class="row">
                <?php
                $group_items = cs_get_option('forthsectionimg');                
                if (!empty($group_items)) {
                    foreach ($group_items as $item) {                      
                        $link = !empty($item['forthsection_1']) ? $item['forthsection_1'] : '';                        
                        $mwta = cs_get_option('addresslocality');                        
                            echo '<div id="" class="col-lg-4 col-md-12 comlogo"><img src="'.  $link .'" alt="'.$mwta.'"/></div>';
                    }
                }
                ?>
            </div>           
        </div>
    </div>
</section>
