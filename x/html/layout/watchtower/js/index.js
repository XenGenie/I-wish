$(function(){
    function pageLoad(){
        /* Sparklines can also take their values from the first argument
         passed to the sparkline() function */
        function randomValue(){
            return Math.floor( Math.random() * 40 );
        }
        var values = [[],[],[],[],[]],
            options = {
                width              : '150px',
                height             : '30px',
                lineColor          : $white,
                lineWidth          : '2',
                spotRadius         : '2',
                highlightLineColor : $gray,
                highlightSpotColor : $gray,
                spotColor          : false,
                minSpotColor       : false,
                maxSpotColor       : false
            };
        for (var i = 0; i < values.length; i++){
            values[i] = [10 + randomValue(), 15 + randomValue(), 20 + randomValue(), 15 + randomValue(), 25 + randomValue(),
                25 + randomValue(), 30 + randomValue(), 30 + randomValue(), 40 + randomValue()]
        }

        function drawSparkLines(){
            options.lineColor = $green;
            options.fillColor = 'rgba(86, 188, 118, 0.1)';
            $('#direct-trend').sparkline(values[0], options );
            options.lineColor = $orange;
            options.fillColor = 'rgba(234, 200, 94, 0.1)';
            $('#refer-trend').sparkline(values[1], options );
            options.lineColor = $blue;
            options.fillColor = 'rgba(106, 141, 167, 0.1)';
            $('#social-trend').sparkline(values[2], options );
            options.lineColor = $red;
            options.fillColor = 'rgba(229, 96, 59, 0.1)';
            $('#search-trend').sparkline(values[3], options );
            options.lineColor = $white;
            options.fillColor = 'rgba(255, 255, 255, 0.1)';
            $('#internal-trend').sparkline(values[4], options );
        }

        drawSparkLines();

        PjaxApp.onResize(drawSparkLines);


        // Notification link click handler.
        // JUST FOR DEMO.
        // Can be removed.

        function close(e){
            var $settings = $("#settings"),
                $popover = $settings.siblings(".popover");
            if(!$.contains($popover[0], e.target)){
                $settings.popover('hide');
                $(document).off("click", close);
            }
        }
        $("#notification-link").click(function(){
            if ( $(window).width() > 767){
                $("#settings").popover('show');
                $(document).on("click", close);
                return false;
            }
        });


        $('.widget').widgster();
    }

    pageLoad();

    PjaxApp.onPageLoad(pageLoad);
});

