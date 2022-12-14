<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon.png') }}">
    <title>Ngaoduthienha</title>
</head>

<body style="margin:0px; background: #f8f8f8; ">
    <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
        <div style="width:100%; padding:50px 0;  margin: 0px auto; font-size: 14px">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                <tbody>
                    <tr>
                        <td style="vertical-align: top; padding-bottom:30px;" align="center"><img src="{{ asset('assets/images/logo-2.png') }}" style="border:none">
                    </tr>
                </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="background:#36bea6; padding:20px; color:#fff; text-align:center;">Thank you for booking a tour.</td>
                    </tr>
                </tbody>
            </table>
            <div style="padding: 40px; background: #fff;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td>
                                <b>Fullname:</b>
                                <p style="margin-top:0px;">{{ $booking->first_name.' '.$booking->last_name }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Phone:</b>
                                <p style="margin-top:0px;">{{ $booking->phone }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Address:</b>
                                <p style="margin-top:0px;"> 
                                    @if (empty($booking->address))
                                        .......
                                    @else
                                        {{ $booking->address }}
                                    @endif
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding:20px 0; border-top:1px solid #f6f6f6;">
                                <div>
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                        <thead>
                                            <tr>
                                              <th scope="col" style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0; text-align: center;">Tour</th>
                                              <th scope="col" style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0; text-align: center;">Number people</th>
                                              <th scope="col" style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0; text-align: center;">Departure date</th>
                                              <th scope="col" style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0; text-align: center;">Duration</th>
                                              <th scope="col" style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0; text-align: center;">Total price</th>
                                              <th scope="col" style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0; text-align: center;">Payment method</th>
                                              <th scope="col" style="font-family: 'arial'; font-size: 14px; vertical-align: middle; margin: 0; padding: 9px 0; text-align: center;">Payment status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="font-family: 'arial'; font-size: 14px; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; text-align: center;">{{ $booking->tour->title }}</td>
                                                <td style="font-family: 'arial'; font-size: 14px; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; text-align: center;">{{ $booking->number_people }}</td>
                                                <td style="font-family: 'arial'; font-size: 14px; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; text-align: center;">{{ $booking->departure_date }}</td>
                                                <td style="font-family: 'arial'; font-size: 14px; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; text-align: center;">{{ $booking->tour->duration }}</td>
                                                <td style="font-family: 'arial'; font-size: 14px; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; text-align: center;">$ {{ $booking->total_price }}</td>
                                                <td style="font-family: 'arial'; font-size: 14px; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; text-align: center;">
                                                    @switch($booking->payment_method)
                                                        @case(2)
                                                            {{ 'Comfirm' }}                                            
                                                            @break
                                                        @case(4)
                                                            {{ 'Completed' }}                                            
                                                            @break
                                                        @default
                                                            {{ '' }}
                                                    @endswitch
                                                </td>
                                                <td style="font-family: 'arial'; font-size: 14px; border-top-width: 1px; border-top-color: #f6f6f6; border-top-style: solid; margin: 0; padding: 9px 0; text-align: center;">
                                                    @if( $booking->payment_status == 2)
                                                    {{ 'Paid' }}
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>