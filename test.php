<form action="" method="post">
<input type="submit" class="button" name="insert" value="insert" />
<input type="submit" class="button" name="select" value="select" />

</form>
<script>
$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'some.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
 
});
    </script>
