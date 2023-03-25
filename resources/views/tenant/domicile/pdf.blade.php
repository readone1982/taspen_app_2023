<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{$domicile->number}}</title>
    @include('tenant.domicile.pdf_styles')
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
                    <br>
                    <br>
                    <li style="font-weight: bold;font-size: 22px;font-weight: bold;padding-bottom: 0px;"><u>SURAT KETERANGAN</u></li>
                    <li style="font-size: 15px;font-weight: bold;padding-bottom: 0px;">{{$domicile->number}}</li>
                </ul>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    {{-- <div style="width: 100%;padding: 10px;margin-bottom: 5px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 17px;padding: 5px;">
                    Yang bertanda tangan dibawah ini, Pengelola Gold Coast Apartment, menerangkan bahwa :
                    Bersama ini selaku pengelola Gedung Gold Coast Apartment, Menerangkan bahwa :
                </td>
            </tr>
        </table>
        <br>
        <table style="width: 100%;padding: 0;margin: 0;" border="1">
            <tr>
                <td style="padding: 0;margin: 0;width: 33%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Nama
                </td>
                <td style="padding: 0;margin: 0;width: 33%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Warga Negara
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    NIK/KITAS
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{$domicile->name}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{$domicile->nationality}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{$domicile->nik}}
                </td>
            </tr>
        </table> --}}
        {{-- Updates Dika --}}
        <br>
        <br>
        <div style="width: 100%;padding: 10px;margin-bottom: 5px;">
            <table style="width: 100%;padding: 0;margin: 0;">
                <tr>
                    <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 17px;padding: 5px;">
                        {{-- Yang bertanda tangan dibawah ini, Pengelola Gold Coast Apartment, menerangkan bahwa : --}} Bersama ini selaku pengelola Gedung Gold Coast Apartment, Menerangkan bahwa : </td>
                </tr>
            </table>
            <br>
            <div style="padding: 0;margin: 0;width: 100%;text-align: left;vertical-align: top;font-size: 17px;padding: 5px;"> Nama Lengkap : <b>{{$domicile->name}}<b>
                <br>
            </div>
            <div style="padding: 0;margin: 0;width: 100%;text-align: left;vertical-align: top;font-size: 17px;padding: 5px;"> NIK / Paspor / KITAS : <b>{{$domicile->nik}}<b>
                <br>
            </div>
            <div style="padding: 0;margin: 0;width: 100%;text-align: left;vertical-align: top;font-size: 17px;padding: 5px;"> Kewarganegaraan    : <b>{{$domicile->nationality}}<b></b>
                <br>
            </div>
            {{-- Updates Dika --}}
        <br>
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 5;text-align: justify;vertical-align: top;font-size: 17px;padding: 5px;">
                    Adalah benar warga yang terdaftar sebagai Penghuni Unit <b>{{$domicile->unit}}</b> Gold Coast Apartment yang beralamat di {{$domicile->address}}.
                    <br>
                    <br>
                    Surat Keterangan ini dibuat berdasarkan permohonan dari yang bersangkutan pada tanggal <b>{{date('d M Y', strtotime($domicile->date_start))}}</b>
                        perihal surat keterangan Domisili yang akan digunakan sebagai <b>{{$domicile->necessity}}</b>.
                    <br>
                    <br>
                    Demikian Surat Keterangan Domisili ini kami buat agar dapat digunakan sebagaimana mestinya.
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    Hormat Kami,
                    <br>
                    Jakarta, {{date('d M Y')}}
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b>Hardi Salim</b>
                    <br>
                    Act. Operational Manager
                    <br>
                    <br>
                    <br>
                    Tembusan : PPPSRS Gold Coast Sea View Apartment
                </td>
            </tr>
        </table>
        <footer>
            <table>
            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 17px;padding: 5px; padding-top: 300px">
                Gold Coast Sea View Apartments
            </table>
            <table>
            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 13px;padding: 5px; padding-top: 1px">
                Jl. Pantai Indah Barat - Pantai Indah Kapuk, Kamal Muara
                <br>
                Penjaringan - Jakarta Utara, Jakarta 144470
            </table>
        </footer>
    </div>

</body>
</html>
