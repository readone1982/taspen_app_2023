<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{$movement->number}}</title>
    @include('tenant.movement.pdf_styles')
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
                    <li style="font-weight: bold;font-size: 18px;font-weight: bold;padding-bottom: 4px;">FORMULIR</li>
                    <li style="font-size: 18px;font-weight: bold;padding-bottom: 4px;">IJIN KELUAR / MASUK BARANG</li>
                    <li style="font-size: 18px;font-weight: bold;padding-bottom: 4px;">{{$movement->number}}</li>
                </ul>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    <div style="width: 100%;padding: 10px;margin-bottom: 5px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 60%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Dengan ini saya menyampaikan permohonan kepada pengelola gedung untuk :
                </td>
                <td style="padding: 0;margin: 0;width: 40%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($movement->imv_cat)}}
                </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%;padding: 10px;font-size: 16px;font-weight: bold;background-color: #ddd;">
        A. DATA PEMOHON
    </div>
    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Nama Pemohon / Requester Name
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($movement->request_name)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Tower / Floor / Unit No
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($movement->unit)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Tanggal pengajuan
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{date('d M Y, H:i', strtotime($movement->request_date))}}
                </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%;padding: 10px;font-size: 16px;font-weight: bold;background-color: #ddd;">
        B. DATA PELAKSANAAN KELUAR/MASUK BARANG
    </div>
    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Nama Pembawa Barang / Porter Name
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($movement->porter_name)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Alamat / Address
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($movement->address)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Telephone
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 28%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($movement->telephone)}}
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Handphone
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 18%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($movement->handphone)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Jenis Kendaraan / Vehicle Type
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 28%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($movement->vehicle_type)}}
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    License Plat
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 18%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($movement->license_plat)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Tanggal Pelaksanaan
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{date('d M Y, H:i', strtotime($movement->implement_date))}}
                </td>
            </tr>
        </table>
    </div>

    <div style="padding: 10px 10px 0px 10px;">
        <table style="width: 100%;padding: 0;margin: 0;" border="1">
            <tr>
                <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    No
                </td>
                <td style="padding: 0;margin: 0;width: 70%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Nama Barang
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Jumlah
                </td>
            </tr>
            @foreach ($movement->list as $item)
                <tr>
                    <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                        {{$loop->iteration}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                        {{$item->name}}
                    </td>
                    <td style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                        {{$item->jumlah}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div style="margin: 10px;border: 2px solid #333;font-size: 12px;padding: 10px;margin-top: 3px;margin-bottom: 3px;">
        <span style="font-weight: bold;">Catatan Khusus / Note : </span>{{$movement->note}}
    </div>

    <div style="padding: 0px 10px 0px 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="width: 80%;">
                    <table style="width: 100%;padding: 0;margin: 0;" border="1">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 25%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Pemohon
                            </td>
                            <td style="padding: 0;margin: 0;width: 25%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Dibuat
                            </td>
                            <td style="padding: 0;margin: 0;width: 25%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Diverifikasi
                            </td>
                            <td style="padding: 0;margin: 0;width: 25%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Diketahui
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 50px;">&nbsp;</td>
                            <td style="height: 50px;">&nbsp;</td>
                            <td style="height: 50px;">&nbsp;</td>
                            <td style="height: 50px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                &nbsp;
                            </td>
                            <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Tenant Relation
                            </td>
                            <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Finance Accounting
                            </td>
                            <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Deputy Property Manager
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Nama : <b>{{$movement->request_name}}</b>
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Nama : <b>{{$movement->by_user}}</b>
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Nama
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Nama
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Tgl/Bln/Thn
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Tgl/Bln/Thn
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Tgl/Bln/Thn
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Tgl/Bln/Thn
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Jam
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Jam
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Jam
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Jam
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 20%;">
                    <table style="width: 100%;padding: 0;margin: 0;" border="1">
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Barang Diperiksa
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 50px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Security
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Nama
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Tgl/Bln/Thn
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Jam
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <div style="margin-left: 10px;margin-right: 10px;margin-top: 3px;margin-bottom: 3px;padding: 3px;">
        <span style="font-size: 12px;">Nama&Tandatangan (Names&Signature)</span><br>
        <span style="font-size: 11px;">Tandatangan “Perwakilan Pemilik Unit” diperlukan bila pemohon bukan Pemilik Unit</span>
    </div>
    <div style="margin-left: 10px;margin-right: 10px;margin-top: 3px;margin-bottom: 3px;border: 2px dotted #333;height: 200px;">
        &nbsp;
    </div>

</body>
</html>
