<meta name="csrf-token" content="{{ csrf_token() }}" />
<form>
<div class="subscribers-form">
<input type="email" name="email" class="subscribers-input" placeholder="@lang('subscriber.subscribe-us')" required="">
 <button class="btn btn-success btn-submit subscribers-button">@lang('subscriber.submit')</button>
    <span id="success_message" class="text-success hide-success"></span>
    <span id="error_message" class="text-error hide-success"></span>
</div>
</form>
<script type="text/javascript">

    $(".btn-submit").click(function(e){

        e.preventDefault();

        var email = $("input[name=email]").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            type:'POST',

            url:"{{ route('ajaxRequest.post') }}",

            data:{email:email},



            success:function(data){
                $("form").trigger("reset");
                $('#success_message').removeClass('hide-success');
                setTimeout(function(){
                    $('#success_message').addClass("hide-success");
                }, 2000);
            },
            error:function (e){
                $("form").trigger("reset");
                $('#error_message').removeClass('hide-success');
                setTimeout(function(){
                    $('#error_message').addClass("hide-success");
                }, 2000);
            }

        });



    });

</script>
