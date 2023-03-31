<!-- header styles -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom_fonts.css" media="screen" type="text/css" />
<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 200px;
}
.u-header .u-text-1 {
  font-family: OkashiRegular-L33Z3;
  font-size: 3rem;
  margin: 41px 250px 0 20px;
}
.u-header .u-menu-1 {
  font-family: size-14;
  margin: -52px -2px 60px auto;
}
.u-block-4bdf-5 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
@media (max-width: 1199px) {
  .u-header .u-text-1 {
    width: auto;
    margin-top: 22px;
    margin-right: 617px;
    margin-left: 0;
  }
  .u-header .u-menu-1 {
    margin-top: -128px;
    margin-right: -2px;
  }
}
@media (max-width: 991px) {
  .u-header .u-text-1 {
    margin-right: 465px;
    width: auto;
  }
  .u-header .u-menu-1 {
    margin-top: -242px;
  }
}
@media (max-width: 767px) {
  .u-header .u-text-1 {
    width: 408px;
    font-size: 1.5rem;
    margin-top: 64px;
    margin-right: 0;
    margin-left: 132px;
  }
  .u-header .u-menu-1 {
    margin-top: -83px;
    margin-left: 258px;
  }
}
@media (max-width: 575px) {
  .u-header .u-text-1 {
    margin-right: 108px;
    margin-left: 39px;
    width: auto;
  }
  .u-header .u-menu-1 {
    margin-top: -111px;
    margin-left: 77px;
  }
}</style>
