<div class="map-wrap">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="100%" id="gmap_canvas"
                src="https://maps.google.com/maps?q={{ config('custom.address') }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0"
                marginwidth="0"></iframe>
            <br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 100%;
                    width: 100%;
                }
            </style>
            <a href="https://www.embedgooglemap.net">google maps in website</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 100%;
                    width: 100%;
                }
            </style>
        </div>
    </div>
</div>