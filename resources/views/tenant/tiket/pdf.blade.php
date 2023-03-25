<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{$tiket->number}}</title>
    @include('tenant.tiket.pdf_styles')
</head>
<body>
    <!-- Invoice Company Details -->
    <table style="width: 100%;padding: 0;margin: 0;">
        <tr>
            <td style="padding: 0;margin: 0;width: 8%;text-align: left;">
                <img src="{{ asset('images') }}/logo-gca.png" alt="Company Logo" style="padding: 0;margin: 0;height: 90px;padding-bottom: 12px;" />
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
                <td style="padding: 0;margin: 0;width: 50%;text-align: left;vertical-align: top;font-size: 14px;padding: 10px;font-weight: bold;">
                    REQUEST MADE BY:
                </td>
                <td style="padding: 0;margin: 0;width: 50%;text-align: left;vertical-align: top;font-size: 14px;padding: 10px;font-weight: bold;">
                    REQUEST RECEIVED BY:
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Name
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{strtoupper($tiket->request_name)}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Date / Time
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{date('d/m/Y H:i', strtotime($tiket->request_date))}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                No Hp
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{strtoupper($tiket->request_phone)}}
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;margin: 0;padding-left: 10px;padding-right: 10px;">
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Name
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{strtoupper($tiket->received_name)}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Date / Time
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{date('d/m/Y H:i', strtotime($tiket->received_date))}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Through
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{strtoupper($tiket->received_through)}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%;margin: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
        REQUEST FORM DESCRIPTION:
    </div>
    <div style="width: 100%;margin: 10px;padding: 10px;margin-top: 0px;margin-bottom: 0px;padding-bottom: 0px;font-size: 12px;">
        <div style="padding-left: 5px;padding-right: 5px;">
            {{$tiket->form_description}}
        </div>
    </div>

    <div style="width: 100%;padding: 10px;padding-bottom: 0px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr style="background-color: #ddd;">
                <td style="padding: 0;margin: 0;width: 50%;text-align: left;vertical-align: top;font-size: 14px;padding: 10px;font-weight: bold;">
                    INITIAL RESPONSE:
                </td>
                <td style="padding: 0;margin: 0;width: 50%;text-align: left;vertical-align: top;font-size: 14px;padding: 10px;font-weight: bold;">
                    CUSTOMER ACKNOWLEDGEMENT
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;">
                    <div style="padding: 10px;padding-left: 15px;padding-right: 15px;padding-bottom: 30px;">
                        {{$tiket->response}}
                    </div>
                    <div style="width: 100%;padding: 10px;margin: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
                        REQUEST FORM HANDLING:
                    </div>
                    <div style="width: 100%;padding: 10px;margin: 0px;font-size: 12px;">
                        <div style="padding-left: 5px;padding-right: 5px;">
                            {{$tiket->form_handling}}
                        </div>
                    </div>
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;">
                    <table style="width: 100%;padding: 0;margin: 0;" border="1">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Signature
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Name
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{strtoupper($tiket->request_name)}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Date/Time
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{date('d/m/Y H:i', strtotime($tiket->request_date))}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Signature
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Name
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Date/Time
                            </td>
                            <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%;margin: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
        WORKLIST
    </div>
    <div style="width: 100%;margin: 10px;padding: 10px;margin-top: 0px;font-size: 12px;">
        <table style="width: 100%;padding: 0;margin: 0;" border="1">
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Item Name
                </td>
                <td style="padding: 0;margin: 0;width: 25%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Description
                </td>
                <td style="padding: 0;margin: 0;width: 15%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Unit Price
                </td>
                <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Quantity
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Amount
                </td>
                {{-- <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Status
                </td> --}}
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
                        {{$item->name}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                        {{$item->description}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                        Rp {{number_format($item->price, 0, ',', '.')}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                        {{$item->qty}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                        Rp {{number_format($item->jumlah, 0, ',', '.')}}
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4" style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Total Amount
                </td>
                <td style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Rp {{number_format($total, 0, ',', '.')}}
                </td>
            </tr>
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

    <div style="width: 100%;margin: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
        COMPLETION OF REQUEST FORM HANDLING
    </div>
    <div style="width: 100%;margin: 10px;padding: 10px;margin-top: 0px;font-size: 12px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 50%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Handled By :
                </td>
                <td style="padding: 0;margin: 0;width: 50%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Completion By :
                </td>
            </tr>
        </table>
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 20%;vertical-align: top;font-size: 12px;padding: 5px;margin: 5px;border: 1px solid #333;">
                    <div style="text-align: center;height: 100px;">
                        Tenant Relation Request
                    </div>
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Name
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                {{strtoupper($tiket->received_name)}}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Date
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Time
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;margin: 0;width: 20%;vertical-align: top;font-size: 12px;padding: 5px;margin: 5px;border: 1px solid #333;">
                    <div style="text-align: center;height: 100px;">
                        Finance
                    </div>
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Name
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Date
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Time
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;margin: 0;width: 20%;vertical-align: top;font-size: 12px;padding: 5px;margin: 5px;border: 1px solid #333;">
                    <div style="text-align: center;height: 100px;">
                        Dept Head Dept. Concerned
                    </div>
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Name
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Date
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Time
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;margin: 0;width: 20%;vertical-align: top;font-size: 12px;padding: 5px;margin: 5px;border: 1px solid #333;">
                    <div style="text-align: center;height: 100px;">
                        Tenant Relation Acknowledged / Owner file
                    </div>
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Name
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Date
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Time
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0;margin: 0;width: 20%;vertical-align: top;font-size: 12px;padding: 5px;margin: 5px;border: 1px solid #333;">
                    <div style="text-align: center;height: 100px;">
                        Head of Property
                    </div>
                    <table style="width: 100%;padding: 0;margin: 0;">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Name
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Date
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;width: 19%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                                Time
                            </td>
                            <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                                :
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
