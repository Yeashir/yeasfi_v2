<?php
$locality = cs_get_option('addresslocality');
$contanergrid = cs_get_option('customepostcontanier');
$gridclass = cs_get_option('customepostgrid');
$titlesec = cs_get_option('customeposttitle');
$descsec = cs_get_option('customepostdesc');
if (!empty(cs_get_option('customepostbg'))) {
    $customepostbg = cs_get_option('customepostbg');
    $image = !empty($customepostbg['image']) ? $customepostbg['image'] . ';' : '';
    $repeat = !empty($customepostbg['repeat']) ? $customepostbg['repeat'] . ';' : '';
    $position = !empty($customepostbg['position']) ? $customepostbg['position'] . ';' : '';
    $attachment = !empty($customepostbg['attachment']) ? $customepostbg['attachment'] . ';' : '';
    $size = !empty($customepostbg['size']) ? $customepostbg['size'] . ';' : '';
    $bgcolor = !empty($customepostbg['color']) ? $customepostbg['color'] . ';' : '';
}
$customepospading = cs_get_option('customepost-pad');
if (!empty($customepospading)) {
    $padingtop = $customepospading ["top"];
    $padinright = $customepospading['right'];
    $padinleft = $customepospading ['left'];
    $padinbottom = $customepospading ['bottom'];
}
if (!empty($titlesec)) {
    $title = $titlesec['title'];
    $fontsize = $titlesec['size'];
    $fontweight = $titlesec ['font_weight'];
    $titlecolor = $titlesec ['colour'];
}
?>
<section class="customepost-section" >
    <div class="<?php echo $contanergrid; ?>">
        <div class="row">           
            <div class="col-12 customepost_title">
                <h2 class="customepost-titelaa"><?php echo $title; ?> </h2>  
                <?php if (!empty($descsec)) { ?>
                    <span class="titledesc"> <?php echo $descsec; ?></span>
                <?php } ?>
            </div>      
            <div class="col-12 postsec">
                <?php get_template_part('layout/cat_tab_carosil', 'page') ?>
            </div>

        </div>
    </div>
</section>
<style>
    .customepost-section{
        padding-top:<?php echo $padingtop; ?>px;
        padding-right:<?php echo $padinright; ?>px;
        padding-bottom:<?php echo $padinbottom; ?>px;
        padding-left:<?php echo $padinleft; ?>px;
        background:url(<?php echo $image; ?>);         
        background-size: <?php echo $size; ?>;
        background-color: <?php echo $bgcolor; ?>;
        background-attachment: <?php echo $attachment; ?>;
        background-position: <?php echo $position; ?>;
        background-repeat: <?php echo $repeat; ?>;
    }
    h2.customepost-titelaa{
        font-size:<?php echo $fontsize; ?>px;
        color:<?php echo $titlecolor; ?>;
        font-weight:<?php echo $fontweight; ?>; 
    }
</style>



<?php
$botomsec = cs_get_option('textareaextasection1');
if (!empty($botomsec)) {
    ?>
    <section class="bottomsecmasage">
        <div class="container">
            <div class="row">   
                <div class="col-lg-10 col-md-12 sectionmasage"><?php echo $botomsec; ?></div>      
                <div class="col p-0"><a href="tel:<?php echo cs_get_option('phone'); ?>" class="sectioncall">Call Now</a></div>
            </div>
        </div>
    </section>
<?php }
?>


