<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{$sik->number}}</title>
    @include('tenant.sik.pdf_styles')
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
                    <li style="font-size: 18px;font-weight: bold;padding-bottom: 4px;">SURAT IJIN KERJA FIT OUT</li>
                    <li style="font-size: 15px;font-weight: bold;padding-bottom: 4px;">{{$sik->number}}</li>
                </ul>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    No. Unit
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($sik->unit)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Nama Kontraktor
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($sik->contractor_name)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Penanggung Jawab
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($sik->pic_name)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    No. Telpon/ HP
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($sik->phone)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Jumlah Tukang/Pekerja
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($sik->total_workers)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Ruang Lingkup Pekerjaan
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$sik->scope_work}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Jam Kerja
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$sik->working_hour}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Status Perijinan
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($sik->license_status)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Periode Pekerjaan
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{date('d M Y', strtotime($sik->period_start)).' s/d '.date('d M Y', strtotime($sik->period_end))}}
                </td>
            </tr>
        </table>
    </div>

    <div style="padding: 0px 10px 0px 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="width: 70%;">
                    <div style="margin: 0px;border: 1px solid #333;font-size: 12px;padding: 10px;vertical-align: top;height: 80px;">
                        <span style="font-weight: bold;">Catatan : </span>
                    </div>
                </td>
                <td style="width: 30%;">
                    <table style="width: 100%;padding: 0;margin: 0;" border="1">
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Disetujui
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 50px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Property Manager
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <div style="margin-left: 10px;margin-right: 10px;margin-top: 3px;margin-bottom: 3px;padding: 3px;">
        <span style="font-size: 14px;">Kebijakan Pengelola Properti :</span><br>
        <span style="font-size: 12px;">1. Surat Izin Kerja Fit Out yang asli harus ditempel di pintu pada saat pekerjaan berlangsung.</span><br>
        <span style="font-size: 12px;">2. Pekerja/Tukang tidak dibenarkan menginap di Unit tanpa izin khusus dari Pemilik dan Pengelola Properti.</span><br>
        <span style="font-size: 12px;">3. Pekerjaan Lembur hanya diberikan dalam keadaan darurat dan mendapatkan persetujuan dari Pengelola Properti.</span><br>
        <span style="font-size: 12px;">4. Pekerja/Tukang harus melaporkan/menukarkan KTP ke Posko Security sebelum dan sesudah pekerjaan.</span><br>
        <span style="font-size: 12px;">5. Perpanjangan Surat Izin Fit Out, harap dilaporkan minimal 3 (tiga) hari sebelum habis masa berlakunya.</span><br>
        <span style="font-size: 12px;">6. Segala tata tertib renovasi yang belum jelas, diatur pada Buku Panduan Fit Out (Fit Out Guide).</span><br>
        <span style="font-size: 12px;">7. Pemilik dengan ini membebaskan Pengelola Properti dikemudian hari dari segala tuntutan akibat pekerjaan Fitting Out.</span>
    </div>

</body>
</html>
