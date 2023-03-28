<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Logo</title>
</head>
<body>
    <!-- Invoice Company Details -->
    <table style="width: 100%;padding: 0;margin: 0;">
        <tr>
            <td style="padding: 0;margin: 0;width: 100%;text-align: left;">
                <img src="https://i.ibb.co/pdJ6msn/header.png" alt="" style="width: 100%;" />
            </td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    <!-- E Ticket -->

    <!-- E Ticket -->

    <div style="width: 100%;padding: 10px;padding-bottom: 0px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 100%;text-align: left;vertical-align: top;font-size: 20px;padding: 5px;font-weight: bold;background-color: #ffffff;">
                    E - Ticket ( Departure Bus )
                </td>
            </tr>
        </table>
    </div>
    <div style="width: 100%;margin: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #dddddd2a;">
    </div>
    <div style="width: 100%;padding: 10px;padding-bottom: 0px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 100%;text-align: left;vertical-align: top;font-size: 24px;padding: 5px;">
                                BIS
                            </td>
                            <td style="padding: 0;margin: 0;width: 100%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 100%;text-align: left;vertical-align: top;font-size: 20px;padding: 5px; font-style: italic;">
                                {{$tiket->tujuan2}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 100%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px; font-style: italic;">
                                {{$tiket->lintasan}}
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 18px;padding: 5px;">
                                {{$tiket->boarding_date}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Jakarta
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px; padding-top: 30px">
                                {{$tiket->unit}}
                            </td>
                        </tr>
                    </table>
                </td>
                <!-- qr -->
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0; background-color: #dddddd3d;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 18px;padding: 5px;">
                                Booking Code
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                {{$tiket->number}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Your Booking ID is {{$tiket->number}}
                            </td>
                        </tr>
                    </table>
                </td>
                <!-- qr -->
            </tr>
        </table>
    </div>

    <div style="width: 100%;margin: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
        TITIK PENJEMPUTAN
    </div>
    <div style="width: 100%;padding: 10px;padding-bottom: 0px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 100%;text-align: center;vertical-align: top;font-size: 50px;padding: 5px; text-align: center;">
                            {{$tiket->rute_awal}}</td>
                        </tr>
                        
                    </table>
                </td>
                <!-- qr -->
            </tr>
        </table>
    </div>
    <div style="width: 100%;margin: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
        LIST PENUMPANG
    </div>
    <div style="width: 100%;margin: 10px;padding: 10px;margin-top: 0px;font-size: 12px;">
        <table style="width: 100%;padding: 0;margin: 0;" border="1">
            <tr>
                <td style="padding: 0;margin: 0;width: 5%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    No
                </td>
                <td style="padding: 0;margin: 0;width: 25%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Passenger
                </td>
                <td style="padding: 0;margin: 0;width: 15%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Type
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    ID Type & Number
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    No. Urut
                </td>

            </tr>
            @foreach ($tiket->list as $item)
                <tr>
                    <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">{{$loop->iteration}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">{{$item->boardname}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">{{$item->boardtype}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">{{$item->boardktp}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">{{$item->id}}
                    </td>
                </tr>
            @endforeach
            <br>
        </table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<!-- test -->
        <table style="width: 100%;padding: 0;margin: 0; background-color: #f2f2f28b;">
            <tr>
                <td style="padding: 0;margin: 0;width: 20%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <img src="https://i.ibb.co/YR20Pxf/submarks.png" style="height: 170px;">
                </td>
                <td style="padding: 0;margin: 0;width: 80%;text-align: center;vertical-align: top;font-size: 40px;padding: 5px;">
                    ''Mudik sebuah perjalanan melepas kerinduan''<br>Erick Tohir
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
