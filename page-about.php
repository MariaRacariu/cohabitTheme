<?php
/*
Template Name: Custom Template for How Cohabit Works
*/

get_header(); 
?>

<style>
.devContainer{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    padding-bottom: 20px;
    text-align: center;
}

.devContainer > div >p{
    padding: 20px;
    font-size: 20px;
}

.devImage{
    text-align: center;
    max-width: 100%;
   
}
</style>
<div class="devContainer">
    <div>
        <p>This is the "About" This page is under development</p>
        <img src="<?php echo get_theme_file_uri( 'assets/images/stillWorkingOn.svg' ); ?>" alt="" class="devImage">
    </div>
</div>


<?php
get_footer(); 
?>