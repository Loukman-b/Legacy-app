<footer class="bg-dark text-white pt-4 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Over ons</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum quam.</p>
            </div>
            <div class="col-md-4">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li>Email: info@example.com</li>
                    <li>Telefoon: +31 20 123 4567</li>
                    <li>Adres: Voorbeeldstraat 123, 1000 AB Amsterdam</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Volg ons</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Facebook</a></li>
                    <li><a href="#" class="text-white">Twitter</a></li>
                    <li><a href="#" class="text-white">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center mt-3">
        © {{ date('Y') }} {{ __('misc.copyright') }}
    </div>
    <style>
        .bg-dark {
            background-color: #343a40 !important;
        }
    </style>
</footer>

<!-- analytics code -->              
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30506707-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- Einde analytics code -->

<script language="Javascript" type="text/javascript"> 
    if (top.location != self.location) { 
        top.location = self.location.href
    } 
</script>
