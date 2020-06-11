<!-- Footer -->
<footer class="page-footer font-small white">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Woodwield Library.    
    <a href="#top" onclick="scrollToTop();return false">EST MMXX.</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script>function scrollToTop() {
    var position =
        document.body.scrollTop || document.documentElement.scrollTop;
    if (position) {
        window.scrollBy(0, -Math.max(1, Math.floor(position / 10)));
        scrollAnimation = setTimeout("scrollToTop()", 10);
    } else clearTimeout(scrollAnimation);
}</script>