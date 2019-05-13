    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">&copy;ReviewPower.biz 2019</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons" style="display:none">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Cookie Notification Modal 1 -->
    <div class="cookie-modal modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <button type="button" class="close" data-dismiss="modal" onclick="setCookie()">&times;</button>
            </div>
            <div class="container" style="padding: 1rem;">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <p><span style="font-weight: bold;font-size: larger;">Cookies Policy</span>&nbsp;This website uses cookies to collect user behavior. We do not share or display this information with anyone!</p>
                        <p><span style="font-weight: bold;font-size: larger;">User Data Policy</span>&nbsp;We collect user data on this site for the form fills to request reviews and contact us. That data is never shared with anyone outside of this agency and is encrypted!</p>                             
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="close-modal" data-dismiss="modal">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">

                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    <script type="text/javascript">
            function setCookie() {
                var cname = "CookieNotice";
                var cvalue = "yes"
                var d = new Date;
                d.setTime(d.getTime() + (24*60*60*1000));
                var expires = "expires=" + d.toUTCString();
                console.log(expires);
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }

            function getCookie() {
                var name = "CookieNotice=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i=0; i<ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            /*Checking for Escape key exit of Cookie Notice to set don't display again cookie*/ 
            $(document).keydown(function(e){
            if (e.keyCode==27 && e.ctrlKey)
                console.log ("escape pressed");
                setCookie();
            });

            /*alert (getCookie() + "=" + "yes");*/

            if( getCookie() != "yes") {
                /*Show the Cookie and User Data Noficiation */
                $("#cookieModal").modal("show");
            } 

            console.log (document.cookie);

        </script>

</body>
</html>
