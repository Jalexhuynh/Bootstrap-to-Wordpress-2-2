$(function(){

    // Cache the window object to decrease load time.
    var $window = $(window);

    // Runs this function for every section with the data type = background.
    $('section[data-type="background"]').each(function() {

        // Assign each loop to this variable.
        var $bgobject = $(this);

        // Upon scrolling, run this function.
        $window.scroll(function() {
            
            // Scroll background at var speed. Higher means slower speed.
            // Inverse relationship. Speed 5 means 1/5th the speed.
            // yPos is negative value because we are scrolling it up.

            var yPos = -($window.scrollTop() / $bgobject.data('speed'));

            // Put together final background position.
            var coords = "50% " + yPos + "px";

            // Move the background.
            $bgobject.css({ backgroundPosition: coords });
        });

    });

});