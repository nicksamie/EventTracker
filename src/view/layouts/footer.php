        <!-- Footer -->
      <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align:center">Copyright &copy; Event Tracker 2015</p>
                </div>
            </div>
        </footer>
</body>
</html>

<?php
  // 5. Close database connection
    if (isset($connection)) {
      mysqli_close($connection);
    }
?>
