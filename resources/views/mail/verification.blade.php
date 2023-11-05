@extends('Home.new')
@section('content')
<div class="main" style="display: flex; flex-direction: row; flex-wrap: wrap; width: 350px; margin-top: 200px; padding: 10px;">
    <p id="message_error" style="color: red;"></p>
    <p id="message_success" style="color: green;"></p>
    <form method="post" id="verificationForm">
        <h4 align='center'>Mail Verification</h4>
        @csrf
        <input type="hidden" name="email" value="{{$email}}">
        <input type="number" name="otp" placeholder="Enter OTP" required><br>
        <center>
            <input class="btn btn-light" style="font-weight: bold; color: white; background-color: #573b8a; width: 40%; height: 40px;" type="submit" value="Verify">
        </center>
        <p class="time"></p>
    </form>
    
    <br>
    
    <button id="resendOtpVerification" class="btn btn-light" style="font-weight: bold; color: white; background-color: #573b8a; width: 100%; height: 40px;">Resend Verification OTP</button>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#verificationForm').submit(function (e) {
            e.preventDefault();
           // console.log("Form submit event triggered"); 
            var formData = $(this).serialize();
            $.ajax({
                url: "{{ route('verifiedOtp') }}",
                type: "POST",
                data: formData,
                success: function (res) {
                    if (res.success) {
                        alert(res.msg);
                        window.open("/", "_self");
                    } else {
                        $('#message_error').text(res.msg);
                        setTimeout(()=> {
                            $('#message_error').text('');
                        }, 3000);
                    }
                }
            });
        });
        $('#resendOtpVerification').click(function () {
            $(this).text('Wait...');
            var userMail = @json($email);
            $.ajax({
                url: "{{ route('resendOtp') }}",
                type: "GET",
                data: { email: userMail },
                success: function (res) {
                    $('#resendOtpVerification').text('Resend Verification OTP');
                    if (res.success) {
                        // Start the timer when resending OTP
                        timer();
                        $('#message_success').text(res.msg);
                        setTimeout(() => {
                            $('#message_success').text('');
                        }, 3000);
                    } else {
                        $('#message_error').text(res.msg);
                        setTimeout(() => {
                            $('#message_error').text('');
                        }, 3000);
                    }
                }
            });
        });
    });

    function timer() {
    var seconds = 30;
    var minutes = 1;
    var timer = setInterval(function () {
        if (minutes < 0) {
            $('.time').text('');
            clearInterval(timer);
        } else {
            let tempMinutes = (minutes < 10 ? '0' : '') + minutes;
            let tempSeconds = (seconds < 10 ? '0' : '') + seconds;
            $('.time').text(tempMinutes + ":" + tempSeconds);
        }
        if (seconds <= 0) {
            minutes--;
            seconds = 59;
        } else {
            seconds--;
        }
    }, 1000);
}
    // Start the timer initially
    timer();
</script>
@endsection
