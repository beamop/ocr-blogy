<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
        </ul>
        <p class="copyright text-muted">Copyright &copy; <?= TITLE ?> - 2017 - <a href="javascript:redirectAdmin()">Administration</a></p>
      </div>
    </div>
  </div>
</footer>

<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?= VENDOR_DIR ?>jquery/jquery.min.js"></script>
<script src="<?= VENDOR_DIR ?>bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= JS_DIR ?>clean-blog.min.js"></script>
<script>
    function redirectAdmin() {
        window.open('/admin')
    }
    Turbolinks.setProgressBarDelay(0.1)
</script>

</body>

</html>