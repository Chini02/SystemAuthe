
</div>
<!-- Bootstrap JavaScript (Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

<!-- Popper.js (if required) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- Your custom JavaScript files -->
<script src="your-custom-script.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var dropdownTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
    var dropdowns = dropdownTriggerList.map(function (dropdownTriggerEl) {
        return new bootstrap.Dropdown(dropdownTriggerEl);
    });
});
</script>
</body>
</html>