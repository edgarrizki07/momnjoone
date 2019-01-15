$(document).ready(function(){
    $('#form_register').submit(function(e){
        register();
        e.preventDefault();

    });
});

function register(){
    visible('loading_register', 1);
    failed(0);
    success(0);
    $.ajax({
        type: "POST",
        url: "register_process.php",
        data: $('#form_register').serialize(),
        dataType: "json",
        success: function(message){
            if(parseInt(message.identify)==1){
                success(1, message.text);
                $('#name').val('');
                $('#email').val('');
                $('#password').val('');
                $('#phone').val('');
            }
            else if (parseInt(message,identify)==0){
                failed(1, message.text);
            }
            visible('loading_register', 0);
        }
    });
}

function visible(selection, identify){
    if(identify) $('#'+selection).css('visibility','visible');
    else $('#'+selection).css('visibility','hidden');

}

function failed(identify, text){
    visible('reason', identify);
    if(text) $('#reason').html(text);
    $('$reason').removeClass('success').addClass('failed');

}

function success(identify, text){
    visible('reason', identify);
    if(text) $('#reason').html(text);
    $('$reason').removeClass('failed').addClass('success');


}