<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipient = button.data('whatever');// Extract info from data-* attributes
        var date = button.data('date');
        var reading = button.data('reading');

        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-title').text('Показания на' +date);
        modal.find('.modal-body #recipient-date').val(date);
        modal.find('.modal-body #recipient-reading').val(reading);
    })
</script>
</body>
<footer>

</footer>
</html>