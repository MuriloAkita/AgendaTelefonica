<script>
    $(document).ready(function() {
        $('.phone').mask('(00) 0000-0000');
        $('.cellphone').mask('(00) 00000-0000');
    });

    $('.street').on("input", function(e) {
        $(this).val($(this).val().replace(/,/g, ""));
    });
</script>
