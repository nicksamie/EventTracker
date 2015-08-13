        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align:center">Copyright  &copy; <?php echo date("Y"); ?>, Event Tracker </p>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>

<?php
  // 5. Close database connection
    if (isset($connection)) {
      mysqli_close($connection);
    }
?>
