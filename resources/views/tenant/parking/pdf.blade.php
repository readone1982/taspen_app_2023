<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{'Formulir Parkir - '.$parkir->unit}}</title>
    @include('tenant.parkir.pdf_styles')
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
                    <li style="font-weight: bold;font-size: 20px;font-weight: bold;padding-bottom: 4px;">FORMULIR BERLANGGANAN PARKIR</li>
                    <li style="font-size: 15px;font-weight: bold;padding-bottom: 4px;">{{$parkir->number}}</li>
                </ul>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    <div style="padding: 10px;">
        <div style="width: 100%;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
            A. DATA PEMOHON | Requester Data
        </div>
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Date / Time
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{$parkir->request_date}}
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
                    {{strtoupper($parkir->unit)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Request Type
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($parkir->request_type)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Requester Status
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($parkir->request_status)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Requester / Company Name
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($parkir->request_name)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Phone Number
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($parkir->request_phone)}}
                </td>
            </tr>
        </table>

        {{-- New Parking Membership --}}
        <div style="width: 100%;margin-top: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
            B. DAFTAR LANGGANAN PARKIR BARU / PERPANJANGAN | New / Renewal Parking Membership
        </div>
        <div style="padding: 10px 0px 0px 0px;">
            <table style="width: 100%;padding: 0;margin: 0;" border="1">
                <tr>
                    <td style="padding: 0;margin: 0;width: 5%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        No
                    </td>
                    <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        Jenis Kendaraan
                    </td>
                    <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        Merk Kendaraan
                    </td>
                    <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        Tipe Kendaraan
                    </td>
                    <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        Tahun Produksi
                    </td>
                    <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        Warna
                    </td>
                    <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        No. Plat
                    </td>
                    <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        Masa Berlaku Kartu
                    </td>
                    <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                        Biaya
                    </td>
                </tr>
                @php
                $total = 0;
                @endphp
                @foreach ($parkir->list as $item)
                    @php
                    $total = $total + intval($item->fee);
                    @endphp
                    <tr>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$loop->iteration}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$item->jenis_kendaraan}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$item->merk_kendaraan}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$item->tipe_kendaraan}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$item->tahun_produksi}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$item->warna_kendaraan}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$item->plat_kendaraan}}
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            {{$item->parkir_no}} Bln
                        </td>
                        <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                            Rp{{number_format($item->fee, 0, ',', '.')}}
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="8" style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                        TOTAL
                    </td>
                    <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                        Rp{{number_format($total, 0, ',', '.')}}
                    </td>
                </tr>
            </table>
        </div>
{{-- CLose NEw PaRking Membership --}}
<div style="width: 100%;margin-top: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
    C. GANTI NOMOR PLAT KENDARAAN | Vehichle Plate Number Replacement
</div>
<div style="padding: 10px 0px 0px 0px;">
    <table style="width: 100%;padding: 0;margin: 0;" border="1">
        <tr>
            <td style="padding: 0;margin: 0;width: 5%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                No
            </td>
            <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                Jenis Kendaraan
            </td>
            <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                Merk Kendaraan
            </td>
            <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                No. Plat Lama
            </td>
            <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                No. Plat Baru
            </td>
            <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                No. Kartu Parkir ( Bila Ada)
            </td>
            <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                Periode Berlaku Kartu From
            </td>
            <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                Periode Berlaku Kartu To
            </td>
            <td style="padding: 0;margin: 0;width: 10%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;background-color: #ddd;">
                Biaya ( Diisi Pengelola)
            </td>
        </tr>
        @php
        $total = 0;
        @endphp
        @foreach ($parkir->list as $item)
            @php
            $total = $total + intval($item->fee);
            @endphp
            <tr>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{$loop->iteration}}
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{$item->jenis_kendaraan_old}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{$item->merk_kendaraan_old}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{$item->plat_old}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{$item->plat_new}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{-- {{$item->period}} --}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{-- {{$item->date_start}} --}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{-- {{$item->date_end}} --}}
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                    {{-- Rp{{number_format($item->fee, 0, ',', '.')}} --}}
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="8" style="padding: 0;margin: 0;text-align: right;vertical-align: top;font-size: 12px;padding: 5px;">
                Sub Total
            </td>
            <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;">
                {{-- Rp{{number_format($total, 0, ',', '.')}} --}}
            </td>
        </tr>
    </table>
</div>
{{-- Test --}}
        <div style="width: 100%;margin-top: 10px;padding: 10px;margin-bottom: 0px;font-size: 14px;font-weight: bold;background-color: #ddd;">
            C. TOTAL COST
        </div>
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Biaya Langganan / Ganti No. Plat / Ganti Kartu
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Rp{{number_format($total, 0, ',', '.')}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Biaya Administrasi
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Rp{{number_format($total, 0, ',', '.')}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <b>Total Biaya yang harus dibayarkan</b>
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Rp{{number_format($total, 0, ',', '.')}}
                </td>
            </tr>
        </table>

        <table style="width: 100%;padding: 0;margin: 0;padding-top: 10px;">
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Keterangan :<br>
                    1. Untuk pendaftaran baru, WAJIB melampirkan 1 (satu) lembar fotocopy STNK & KTP yang masih berlaku atas nama pemilik kendaraan.<br>
                    2. Untuk Perpanjang dan ganti no polisi wajib melampirkan fotocopy STNK.<br>
                    3. Khusus bagi penyewa/bukan pemilik, WAJIB melampirkan perjanjian sewa menyewa/surat ijin dari pemilik.<br>
                    4. Syarat & ketentuan berlaku*.<br>
                    5. Untuk informasi lebih lanjut, silahkan menghubungi Pengelola Properti.
                </td>
            </tr>
        </table>

        {{-- <table style="width: 100%;padding: 0;margin: 0;padding-top: 10px;" border="1">
            <tr>
                <td style="padding: 0;margin: 0;width: 25%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Dibuat
                </td>
                <td style="padding: 0;margin: 0;width: 25%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Diterima
                </td>
                <td style="padding: 0;margin: 0;width: 25%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Tenant Relation
                </td>
                <td style="padding: 0;margin: 0;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Head of Property
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br>
                    Name<br><br>
                    Date<br><br>
                    Time
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br>
                    Name<br><br>
                    Date<br><br>
                    Time
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br>
                    Name<br><br>
                    Date<br><br>
                    Time
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br><br><br>
                    Name<br><br>
                    Date<br><br>
                    Time
                </td>
            </tr>
        </table> --}}
        <table style="width: 100%;padding: 0;margin: 0px;padding-top: 10px;" border="1">
            <tr>
                <td style="padding: 0;margin: 0;width: 40%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Dibuat
                </td>
                <td style="padding: 0;margin: 0;width: 40%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Diterima
                </td>
                <td style="padding: 0;margin: 0;width: 40%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Diperiksa
                </td>
                <td style="padding: 0;margin: 0;width: 40%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Diketahui
                </td>
                <td style="padding: 0;margin: 0;width: 40%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Disetujui
                </td>
                <td style="padding: 0;margin: 0;width: 40%;text-align: center;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Di Proses
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b style="text-align: center;">Requester</b><br>
                    Name : {{strtoupper($parkir->request_name)}}<br>
                    Date :<br>
                    Time :<br>

                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b style="text-align: center;">TR Officer</b><br>
                    Name : {{strtoupper($parkir->tr_officer)}}<br>
                    Date :<br>
                    Time :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b style="text-align: center;">General Services</b><br>
                    Name :<br>
                    Date :<br>
                    Time
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;" border="1">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b style="text-align: center;">Finance</b><br>
                    Name :<br>
                    Date :<br>
                    Time :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;" border="1">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b style="text-align: center;">Estate Manager</b><br>
                    Name :<br>
                    Date :<br>
                    Time :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;" border="1">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <b style="text-align: center;">Parking Management</b><br>
                    Name :<br>
                    Date :<br>
                    Time :
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
