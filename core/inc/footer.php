    </div>
    <!-- /.container -->
    <footer class="footer-bar">
      <h1 class="title" onclick="resetTimeout();">touchscreen.symbion.dk</h1>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="core/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
      var timeout = setTimeout("location.reload(true);",600000);
      function resetTimeout() {
        clearTimeout(timeout);
        timeout = setTimeout("location.reload(true);",600000);
      }
    </script>
  </body>
</html>