<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{'Work Order - '.$estore->number}}</title>
    @include('tenant.estore.pdf_styles')
</head>
<body>
    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td colspan="6" style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 18px;padding: 10px;">
                    ESTORE RECEIPT
                </td>
            </tr>
            <tr>
                <td colspan="6" style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{-- For Sender :<b>{{$estore->sender_name}} - {{$estore->ekspedisi}}</b> --}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Number
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$estore->number}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Nama Penerima Paket
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 23%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($estore->sender_name)}}
                </td>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Tanggal Penitipan Paket
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$estore->received_date}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Building / Tower
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 23%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$estore->building}}
                </td>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Unit Penerima Paket
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$estore->unit}}
                </td>
                {{-- Work AssignedTo --}}
                {{-- Close --}}
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Waktu Penerimaan Packet
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($estore->status)}} ( {{date('d-m-Y', strtotime($estore->updated_at))}} )
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Waktu Pengambilan Packet
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($estore->take_date)}} ( {{date('d-m-Y', strtotime($estore->take_date))}} )
                </td>
            </tr>
            {{-- Kurir Pengirim --}}
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Kurir / Ekspedisi
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{-- {{strtoupper($estore->status)}} ( {{date('d-m-Y', strtotime($estore->updated_at))}} ) --}}
                    {{strtoupper($estore->ekspedisi)}}
                </td>
            </tr>
            {{-- Kurir Pengirim --}}
            {{-- Phone Number --}}
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Phone No / Tlp
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{-- {{strtoupper($estore->status)}} ( {{date('d-m-Y', strtotime($estore->updated_at))}} ) --}}
                    {{strtoupper($estore->hp)}}
                </td>
            </tr>
            {{-- Phone number --}}
        </table>

        <table style="width: 100%;padding: 0;margin: 0;padding-top: 30px;padding-bottom: 20px;">
            <tr>
                <td style="padding: 0;margin: 0;width: 33%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Delivery By / Pengirim
                </td>
                <td style="padding: 0;margin: 0;width: 33%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Officer Staff / Petugas
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Received By / Penerima
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br>
                    ( ..................... )
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br>
                    ( ..................... )
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br>
                    ( ..................... )
                </td>
            </tr>
            {{-- Name didalam delivery --}}
        </table>
{{-- Opening Closing Table lembar kedua --}}
        {{-- <table style="width: 100%;padding: 0;margin: 0;padding-top: 20px;border-top: 2px solid #000;margin-top: 20px;">
            <tr>
                <td colspan="6" style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 18px;padding: 10px;border: 2px solid #000;">
                    ESTORE RECEIPT
                </td>
            </tr>
            <tr>
                <td colspan="6" style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                    For Receiver's : {{$estore->receiver_name}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Number
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$estore->number}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Nama Pemohon
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 23%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($estore->request_name)}}
                </td>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Tanggal Pengajuan
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{date('d-m-Y', strtotime($estore->request_date))}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Building / Tower
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 23%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$estore->building}}
                </td>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Area Pekerjaan
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$estore->work_place}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Waktu Penerimaan Paket
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;width: 23%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$estore->description}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Waktu Pengambilan Paket
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($estore->status)}} ( {{date('d-m-Y', strtotime($estore->updated_at))}} )
                </td>
            </tr>
        </table>

        <table style="width: 100%;padding: 0;margin: 0;padding-top: 30px;">
            <tr>
                <td style="padding: 0;margin: 0;width: 33%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Delivery By / Penguirim
                </td>
                <td style="padding: 0;margin: 0;width: 33%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Officer Staff / Petugas
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Received By / Penerima
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br><br><br><br>
                    ( ..................... )
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br><br><br><br>
                    ( ..................... )
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br><br><br><br>
                    ( ..................... )
                </td>
            </tr>
        </table>
        <table style="width: 100%;padding: 0;margin: 0;padding-top: 0;">
            <tr>
            <td style="padding: 0%;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px; border: 1px">
                <br><br>Foto Before
                <td style="padding: 0%;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px; border: 1px">
                <br><br>Foto After
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px; border: 1px">
                    @if ($estore->image1 != null)
                    <img src="{{asset($estore->image1)}}" style="width: 35%;">
                    @endif
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px; border: 1px">
                    @if ($estore->image2 != null)
                    <img src="{{asset($estore->image2)}}" style="width: 35%;">
                    @endif
            </tr>
        </table>
    </div> --}}

</body>
</html>
