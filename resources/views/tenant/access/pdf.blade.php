<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{'Formulir Access Card - '.$access->unit}}</title>
    @include('tenant.access.pdf_styles')
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
                    <li style="font-weight: bold;font-size: 20px;font-weight: bold;padding-bottom: 4px;">FORMULIR ACCESS CARD</li>
                    <li style="font-size: 15px;font-weight: bold;padding-bottom: 4px;">{{$access->number}}</li>
                </ul>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td colspan="3" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Yang bertanda tangan di bawah ini:
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Nama Pemohon
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($access->company_name)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Unit
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($access->unit)}}
                </td>
            </tr>
            @php
            $unit_size = '';
            $unit = \App\Unit::with('unit_size')->where('full_number', $access->unit)->whereNull('deleted_at')->limit(1)->get();
            foreach ($unit as $key => $value) {
                $unit_size = $value->unit_size->name.' M2';
            }
            @endphp
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Luas
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$unit_size}}
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Dengan ini mengajukan permohonan untuk Pengajuan <b>{{strtoupper($access->acc_cat)}}</b> Access Card dengan nomor sebagai berikut:
                </td>
            </tr>
        </table>

        <div style="padding: 10px 10px 0px 10px;">
            <table style="width: 100%;padding: 0;margin: 0;" border="1">
                <tr>
                    <td style="padding: 0;margin: 0;width: 5%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        No
                    </td>
                    <td style="padding: 0;margin: 0;width: 35%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        Nama Pemegang Kartu
                    </td>
                    <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        No. Kartu
                    </td>
                    <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        New / Replacement
                    </td>
                    <td style="padding: 0;margin: 0;width: 30%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        Harga
                    </td>
                </tr>
                @foreach ($access->list as $item)
                    <tr>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$loop->iteration}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$item->name}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$item->access_card}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{strtoupper($access->acc_cat)}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            Rp {{number_format($item->access_type, 0, ',', '.')}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <table style="width: 100%;padding: 0;margin: 0;padding-top: 10px;">
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Atas permohonan tersebut kami bersedia memenuhi persyaratan yang berlaku
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Jakarta {{date('d M Y')}},
                </td>
            </tr>
        </table>

        <table style="width: 100%;padding: 0;margin: 0;padding-top: 10px;" border="1">
            <tr>
                <td style="padding: 0;margin: 0;width: 33%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Pemohon,
                </td>
                <td style="padding: 0;margin: 0;width: 33%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Dibuat Oleh,
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Disetujui Oleh,
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br><br><br><br>
                    ( ..................... )
                    <br>
                    {{$access->company_name}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br><br><br><br>
                    ( ..................... )
                    <br>
                    {{$access->handling_by}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br><br><br><br>
                    ( ..................... )
                    <br>
                    Chief Tenant Relations
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Tembusan<br>
                    1. Dept. Finance & Accounting<br>
                    2. Dept. Tenant Relation<br>
                    Note : <br><br><br><br>
                </td>
                <td colspan="2" style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    <table>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;width: 50%;">
                                Paraf:<br>
                                ___________________<br><br>
                                ___________________<br><br>
                                ___________________<br><br>
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;width: 50%;">
                                Tanggal:<br>
                                ___________________<br><br>
                                ___________________<br><br>
                                ___________________<br><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Card Fee    : <br>
                                New         : Rp.111.000/Card<br>
                                Replacement : Rp.222.000/Card<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
