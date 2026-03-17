<?php
/*
Template Name: Tour
Template Post Type: page
 */

get_header('home', ['nav' => '']);
?>

<style>

.page-hero .max-container h1 {
    font-family: "Sharp Grotesk";
    font-weight: 500;
    font-size: 1.5em;
    line-height: 1.41667;
    color: #1d252c;
    max-width: 16.25rem;
    text-align: center;
    margin: 0 auto;
    margin-bottom: 2.5rem;
}
@media screen and (min-width: 768px) {
    .page-hero .max-container h1 {
        font-size: 3em;
        line-height: 1.20833;
        margin-bottom: 3rem;
        max-width: 32.25rem;
    }
}

</style>

<main class="quipli main ad-page" style="margin-top: 3rem !important;">
    
    
    <section class="page-hero">
        <div class="max-container">
    <script async src="https://js.storylane.io/js/v2/storylane.js"></script>
    <h1>Take a Tour of Quipli</h1>
  <div class="sl-embed" style="position:relative;padding-bottom:calc(49.30% + 25px);width:100%;height:0;transform:scale(1)">
    <iframe loading="lazy" class="sl-demo" src="https://app.storylane.io/demo/e8zvogslztro?embed=inline" name="sl-embed" allow="fullscreen" allowfullscreen style="position:absolute;top:0;left:0;width:100%!important;height:100%!important;border:0px solid rgba(63,95,172,0.35);box-shadow: none;border-radius:10px;box-sizing:border-box;"></iframe>
  </div>
            
        </div>
    </section>

</main>

<?php
get_sidebar();
get_footer();