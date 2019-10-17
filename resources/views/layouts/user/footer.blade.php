<!--Footer Section-->

<footer>
	<div class="container">
        <div class="col-12 col-md-12 footer-sponsor">
            <p>Brought to you by<img src="{{ asset ('asset/image/icons/DODO-Logo.png')}}" class="footer-logo" alt="DODO DESIGN AGENCY"></p>
        </div>
    </div>
    <div class="footer-section">
        <div class="container">
            <div class="col-12 col-md-12 footer-copy">
                All Rights Reserved. © <script>document.write(new Date().getFullYear());</script> DODO Design Agency
            </div>
        </div>
    </div>
</footer>
<!--End of footer-->

<script type="text/javascript" src="{{ asset ('asset/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset ('asset/js/main.js')}}"></script>
@section('footer')
@show
</body>
</html>