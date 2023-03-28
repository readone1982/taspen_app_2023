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
            <td style="padding: 0;margin: 0;width: 8%;text-align: left;">
                <img src="{{ asset('app-assets') }}/images/logo.png" alt="" style="padding: 0;margin: 0;height: 90px;padding-bottom: 12px;" />
            </td>
            <td style="padding: 0;margin: 0;width: 92%;text-align: center;">
                <ul class="px-0 list-unstyled">
                    <li style="font-weight: bold;font-size: 20px;font-weight: bold;padding-bottom: 4px;">E - TICKETING</li>
                    <li style="font-size: 15px;font-weight: bold;padding-bottom: 4px;">{{$tiket->number}}</li>
                </ul>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    <!-- E Ticket -->

    <!-- E Ticket -->

    <div style="width: 100%;padding: 10px;padding-bottom: 0px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 60%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    &nbsp;
                </td>
                <td style="padding: 0;margin: 0;width: 40%;text-align: center;vertical-align: top;font-size: 15px;padding: 5px;font-weight: bold;background-color: #ddd;">
                    TO
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Tenant
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{strtoupper($tiket->owner->name)}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Tower/Unit
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{strtoupper($tiket->unit)}}
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 15px;padding: 5px;">
                    {{strtoupper($tiket->assigned_to)}}
                </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%;padding: 10px;padding-bottom: 0px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr style="background-color: #ddd;">
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 14px;padding: 10px;font-weight: bold;">
                </td>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 14px;padding: 10px;font-weight: bold;">
                </td>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 14px;padding: 10px;font-weight: bold;">
                </td>
            </tr>
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
                                Jakarta - Yogyakarta
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 100%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px; font-style: italic;">
                                ( Brebes-Bumiayu Banyumas dll )
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 18px;padding: 5px;">
                                Minggu, 29 Januari 2023
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Jakarta
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Bandung
                            </td>
                        </tr>
                    </table>
                </td>
                <!-- qr -->
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0; background-color: #dddddd3d;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 18px;padding: 5px;">
                                Minggu, 29 Januari 2023
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Jakarta
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Bandung
                            </td>
                        </tr>
                    </table>
                </td>
                <!-- qr -->
            </tr>
        </table>
    </div>

    <div style="width: 100%;margin: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
        IMPORTANT PRE TRAVEL INFO
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
                                Jakarta - Yogyakarta
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 100%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px; font-style: italic;">
                                ( Brebes-Bumiayu Banyumas dll )
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 18px;padding: 5px;">
                                Minggu, 29 Januari 2023
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Jakarta
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Bandung
                            </td>
                        </tr>
                    </table>
                </td>
                <!-- qr -->
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0; background-color: #dddddd3d;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 18px;padding: 5px;">
                                Minggu, 29 Januari 2023
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Jakarta
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 16px;padding: 5px;">
                                Bandung
                            </td>
                        </tr>
                    </table>
                </td>
                <!-- qr -->
            </tr>
        </table>
    </div>
    <div style="width: 100%;margin: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
        WORKLIST
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
                <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Quantity
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Amount
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Seat Number
                </td>

            </tr>
            @php
                $total = 0;
            @endphp
            @foreach ($tiket->list as $item)
                @php
                    $total = $total + $item->jumlah;
                @endphp
                <tr>
                    <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    </td>
                    <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    </td>
                    <td style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                    </td>
                    <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    </td>
                    <td style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                    </td>
                    <td style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                    </td>
                </tr>
            @endforeach

        </table>
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Signature:
                </td>
                <td style="padding: 0;margin: 0;width: 40%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Name:
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Date/ Time:
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
