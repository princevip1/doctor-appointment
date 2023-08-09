@extends('theme.user.layouts.app')

<style>
    ::-webkit-input-placeholder {
        /* Edge */
        text-align: center
    }

    :-ms-input-placeholder {
        /* Internet Explorer */
        text-align: center
    }

    ::placeholder {
        text-align: center
    }
</style>

@section('content')
    <div class="appoinment-area ptb-50">
        <div class="container">
            <div style="width: 400px" class="information">

                <p class="text-center" style="color:black;">We've sent you an OPT at {{ $appointment->phone }} enter your OTP
                    to confirm your phone number.</p>

                <form action="{{ route('appointment.otp_check') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $appointment->_id }}" name="appointment">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input style="text-align: center" type="text" class="form-control" placeholder="OTP HERE" name="otp" />
                            </div>
                        </div>
                        @if (Session::has('error'))
                            <p style="color:red;"> {{ Session::get('error') }}</p>
                        @endif
                        <div class="col-lg-12">
                            <button type="submit" class="default-btn active">
                                Verify Otp
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
