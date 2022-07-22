<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->


    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script src="https://kit.fontawesome.com/71cd5983fb.js" crossorigin="anonymous"></script>
</head>

<style>
.userchat {
    cursor: pointer;
}

.container {
    max-width: 1170px;
    margin: auto;
}

img {
    max-width: 100%;
}

.inbox_people {
    background: #f8f8f8 none repeat scroll 0 0;
    float: left;
    overflow: hidden;
    width: 40%;
    border-right: 1px solid #c4c4c4;
}

.inbox_msg {
    border: 1px solid #c4c4c4;
    clear: both;
    overflow: hidden;
}

.top_spac {
    margin: 20px 0 0;
}


.recent_heading {
    float: left;
    width: 40%;
}

.srch_bar {
    display: inline-block;
    text-align: right;
    width: 60%;
}

.headind_srch {
    padding: 10px 29px 10px 20px;
    overflow: hidden;
    border-bottom: 1px solid #c4c4c4;
}

.recent_heading h4 {
    color: #05728f;
    font-size: 21px;
    margin: auto;
}

.srch_bar input {
    border: 1px solid #cdcdcd;
    border-width: 0 0 1px 0;
    width: 80%;
    padding: 2px 0 4px 6px;
    background: none;
}

.srch_bar .input-group-addon button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    padding: 0;
    color: #707070;
    font-size: 18px;
}

.srch_bar .input-group-addon {
    margin: 0 0 0 -27px;
}

.chat_ib h5 {
    font-size: 15px;
    color: #464646;
    margin: 0 0 8px 0;
}

.chat_ib h5 span {
    font-size: 13px;
    float: right;
}

.chat_ib p {
    font-size: 14px;
    color: #989898;
    margin: auto
}

.chat_img {
    float: left;
    width: 11%;
}

.chat_ib {
    float: left;
    padding: 0 0 0 15px;
    width: 88%;
}

.chat_people {
    overflow: hidden;
    clear: both;
}

.chat_list {
    border-bottom: 1px solid #c4c4c4;
    margin: 0;
    padding: 18px 16px 10px;
}

.inbox_chat {
    height: 500px;
    overflow-y: scroll;
}

.active_chat {
    background: #ebebeb;
}

.incoming_msg_img {
    display: inline-block;
    width: 6%;
}

.received_msg {
    display: inline-block;
    padding: 0 0 0 10px;
    vertical-align: top;
    width: 92%;
}

.received_withd_msg p {
    background: #ebebeb none repeat scroll 0 0;
    border-radius: 3px;
    color: #646464;
    font-size: 14px;
    margin: 0;
    padding: 5px 10px 5px 12px;
    width: 100%;
}

.time_date {
    color: #747474;
    display: block;
    font-size: 12px;
    margin: 8px 0 0;
}

.received_withd_msg {
    width: 57%;
}

.mesgs {
    float: left;
    padding: 30px 15px 0 25px;
    width: 60%;
}

.sent_msg p {
    background: #05728f none repeat scroll 0 0;
    border-radius: 3px;
    font-size: 14px;
    margin: 0;
    color: #fff;
    padding: 5px 10px 5px 12px;
    width: 100%;
}

.outgoing_msg {
    overflow: hidden;
    margin: 26px 0 26px;
}

.sent_msg {
    float: right;
    width: 46%;
}

.input_msg_write textarea {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    color: #4c4c4c;
    font-size: 14pt;
}

.type_msg {
    border-top: 1px solid #c4c4c4;
}

.msg_send_btn {
    background: #05728f none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;

    right: 0;
    top: 11px;
    width: 33px;
}

.paperclip_btn {
    background: #05728f none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;
    width: 33px;
}

.messaging {
    padding: 0 0 0 0;
}

.msg_history {
    height: 420px;
    overflow-y: auto;
}
</style>
<style>
/* width */
::-webkit-scrollbar {
    width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #a7a7a7;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #929292;
}

ul {
    margin: 0;
    padding: 0;
}

li {
    list-style: none;
}

.user-wrapper,
.message-wrapper {
    border: 1px solid #dddddd;
    overflow-y: auto;
}

.user-wrapper {
    height: 600px;
}

.user {
    cursor: pointer;
    padding: 5px 0;
    position: relative;
}

.user:hover {
    background: #eeeeee;
}

.user:last-child {
    margin-bottom: 0;
}

.pending {
    position: absolute;
    left: 13px;
    top: 9px;
    background: #b600ff;
    margin: 0;
    border-radius: 50%;
    width: 18px;
    height: 18px;
    line-height: 18px;
    padding-left: 5px;
    color: #ffffff;
    font-size: 12px;
}

.media-left {
    margin: 0 10px;
}

.media-left img {
    width: 64px;
    border-radius: 64px;
}

.media-body p {
    margin: 6px 0;
}

.message-wrapper {
    padding: 10px;
    height: 536px;
    background: #eeeeee;
}

.messages .message {
    margin-bottom: 15px;
}

.messages .message:last-child {
    margin-bottom: 0;
}

.received,
.sent {
    width: 45%;
    padding: 3px 10px;
    border-radius: 10px;
}

.received {
    background: #ffffff;
}

.sent {
    background: #3bebff;
    float: right;
    text-align: right;
}

.message p {
    margin: 5px 0;
}

.date {
    color: #777777;
    font-size: 12px;
}

.active {
    background: #eeeeee;
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 15px 0 0 0;
    display: inline-block;
    border-radius: 4px;
    box-sizing: border-box;
    outline: none;
    border: 1px solid #cccccc;
}

input[type=text]:focus {
    border: 1px solid #aaaaaa;
}
</style>

<body>

    @yield('content')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/chart.min.js')}}"></script>
    <script src="{{ asset('js/easing.min.js')}}"></script>
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/moment.min.js')}}"></script>
    <script src="{{ asset('js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script>
    $(document).ready(function() {
        $("#chat-user").click(function() {
            $(".chatuser").toggle();
        })
    })
    $(document).ready(function() {
        $("#chat-peternak").click(function() {
            $(".chatpeternak").toggle();
        })
    })
    $(document).ready(function() {
        $("#chat-investor").click(function() {
            $(".chatinvestor").toggle();
        })
    })
    </script>

    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
    var receiver_id = '';
    var my_id = "{{ Auth::id() }}";
    $(document).ready(function() {
        // ajax setup form csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('bfd20b158fd43c34a573', {
            cluster: 'ap3'
        });
        var channelName = "<?php echo 'notify-channel' ?>";
        //var channelName =  'notify-channel';
        var status = $('#id').val();
        var channel = pusher.subscribe('notify-channel');
        channel.bind('App\\Events\\Notify', function(data) {
            //  alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());

                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });

        $('.userchat').click(function() {
            $('.userchat').removeClass('active');
            $(this).addClass('active');
            $(this).find('.pending').remove();

            receiver_id = $(this).attr('id');
            // alert("receiver_id");
            $.ajax({
                type: "get",
                url: "message/" + receiver_id, // need to create this route
                data: "",
                cache: false,
                success: function(data) {
                    $('#messages').html(data);
                    scrollToBottomFunc();
                    // alert("receiver_id");
                }
            });
        });

        $(document).on('keyup', '.input-text input', function(e) {
            var message = $(this).val();
            console.log(message);

            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty

                var datastr = "receiver_id=" + receiver_id + "&message=" + message;

                $.ajax({
                    type: "post",
                    url: "message", // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function(data) {

                    },
                    error: function(jqXHR, status, err) {},
                    complete: function() {
                        scrollToBottomFunc();
                    }
                })
            }
        });
    });

    // make a function to scroll down auto
    function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
    </script>
</body>

</html>