<!-- ========== OPT-IN SECTION ========== -->
<section id="optin">

<div class="container">
    <div class="row">

        <div class="col-sm-8">
            <p class="lead"><?php the_field( 'optin_text' ); ?></p>
        </div> <!-- col end -->

        <div class="col-sm-4">
            <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php the_field( 'optin_button_text' ); ?></button>
        </div> <!-- col end -->

    </div> <!-- row end -->
</div> <!-- container end -->

</section> <!-- optin end -->