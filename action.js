<script >
  $(document).ready(function(){
    $('#user').submit(function(e){
        e.preventDefault()

       $.ajax({
         url:'rod.php',
         data: $(this).serialize(),
         method:'POST',
         success:function(response){
          $('#error_msg').html(response);
         }

       })

    })
})
</script>