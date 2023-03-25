<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{$fltdaya->number}}</title>
    @include('tenant.fltdaya.pdf_styles')
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
                    <li style="font-weight: bold;font-size: 18px;font-weight: bold;padding-bottom: 4px;">FORMULIR PERMOHONAN</li>
                    <li style="font-size: 18px;font-weight: bold;padding-bottom: 4px;">PENAMBAHAN DAYA LISTRIK</li>
                    <li style="font-size: 15px;font-weight: bold;padding-bottom: 4px;">{{$fltdaya->number}}</li>
                </ul>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    <div style="width: 100%;padding: 10px;font-size: 13px;font-weight: bold;background-color: #ddd;">
        A. DATA PEMILIK | <i>Unit Ownership Data</i>
    </div>
    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 35%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Tanggal pengajuan
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{date('d M Y', strtotime($fltdaya->request_date))}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 35%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Unit
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fltdaya->unit)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 35%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Nama Pemilik
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fltdaya->owner->name)}}
                </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%;padding: 10px;font-size: 13px;font-weight: bold;background-color: #ddd;">
        B. DATA PERMOHONAN PENAMBAHAN DAYA LISTRIK | <i>Increment Of Electrical Power Application</i>
    </div>
    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            {{-- Daya Sebelumnya --}}
            <tr>
                <td style="padding: 0;margin: 0;width: 35%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Daya Listrik Awal
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fltdaya->daya_before)}} VA
                </td>
            </tr>
            {{-- Close button Daya Sebelum nya--}}
            <tr>
                <td style="padding: 0;margin: 0;width: 35%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Daya Listrik Baru
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fltdaya->voltage_size->name)}} VA
                </td>
            </tr>
            {{-- biaya --}}
            {{-- <tr>
                <td style="padding: 0;margin: 0;width: 35%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Biaya Penambahan Daya
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fltdaya->voltage_size->name)}} VA
                </td>
            </tr> --}}
            <tr>
                <td style="padding: 0;margin: 0;width: 35%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Maksimal jangka waktu penyambungan baru
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fltdaya->estimasi)}} hari kerja dari tanggal pembayaran biaya
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 35%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Biaya penambahan daya
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Rp {{number_format($fltdaya->biaya, 0, ',', '.')}}
                </td>
            </tr>
            {{-- biaya --}}
            <tr>
                {{-- Catatan --}}
                <div style="width: 100%;padding: 20px;font-size: 12px;font-weight: -2;background-color: #ddd;">
                    <h5>CATATAN / Notes :</h5>
                    <li>Tidak diperkenankan untuk menurunkan daya listrik kembali / <i>Decrement of electrical power is not allowed</i></li>
                    <li>Dengan ditandatanganinya formulir ini maka Pemohon bersedia membayar penambahan listrik sesuai dengan biaya yang telah ditentukan oleh Pihak Pengelola Property <i>By signing this form, the Applicant is agree to pay for any additional cost of electrical power in accordance with pre-determined by The Estate Management</i></li>
                </div>
            </tr>
                {{-- Catatan --}}
                {{-- <td colspan="3" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Catatan: Tidak diperkenankan untuk menurunkan daya listrik kembali
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Dengan ditandatanganinya formulir ini maka Pemohon bersedia membayar sesuai dengan biaya yang telah ditentukan oleh Pihak Pengelola Property.
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 10px;padding: 5px;">
                    (By signing this form, the Applicant willing to pay for additional cost of electrical power in accordance with predetermined by the Property Management)
                </td>
            </tr> --}}
        </table>
    </div>

    <div style="padding: 0px 10px 0px 10px;">
        <table style="width: 100%;padding: 0;margin: 0;" border="1">
            <tr>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Dibuat
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Diterima
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Diperiksa
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Diverifikasi
                </td>
                <td style="padding: 0;margin: 0;width: 20%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Disetujui
                </td>
            </tr>
            <tr>
                <td style="height: 50px;">&nbsp;</td>
                <td style="height: 50px;">&nbsp;</td>
                <td style="height: 50px;">&nbsp;</td>
                <td style="height: 50px;">&nbsp;</td>
                <td style="height: 50px;">&nbsp;</td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Owner
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Tenant Relation
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Chief Enginering
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Finance
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                    Estate Manager
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Nama : <b>{{$fltdaya->owner->name}}</b>
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Nama : <b>{{$fltdaya->tr_officer}}</b>
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Nama :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Nama :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Nama :
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Tgl/Bln/Thn :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Tgl/Bln/Thn :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Tgl/Bln/Thn :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Tgl/Bln/Thn :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Tgl/Bln/Thn :
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Jam :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Jam :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Jam :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Jam :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                    Jam :
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
