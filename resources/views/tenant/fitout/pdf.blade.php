<!doctype html>
<html class="loading" data-textdirection="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{$fitout->number}}</title>
    @include('tenant.fitout.pdf_styles')
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
                    <li style="font-size: 18px;font-weight: bold;padding-bottom: 4px;">PERMOHONAN FIT OUT</li>
                    <li style="font-size: 15px;font-weight: bold;padding-bottom: 4px;">{{$fitout->number}}</li>
                </ul>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <!--/ Invoice Company Details -->

    <div style="width: 100%;padding: 10px;font-size: 16px;font-weight: bold;background-color: #ddd;">
        A. DATA PEMILIK UNIT
    </div>
    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Unit
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fitout->unit)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Nama Pemilik
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fitout->owner->name)}}
                </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%;padding: 10px;font-size: 16px;font-weight: bold;background-color: #ddd;">
        B. MAIN CONTRACTOR DATA
    </div>
    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Company name
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fitout->company_name)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Company Category
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td colspan="4" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fitout->company_category)}}
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
                    {{strtoupper($fitout->company_phone)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 20%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Fax
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 18%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fitout->company_fax)}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 30%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Email
                </td>
                <td style="padding: 0;margin: 0;width: 2%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 28%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    {{strtoupper($fitout->company_email)}}
                </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%;padding: 10px;font-size: 16px;font-weight: bold;background-color: #ddd;">
        C. JOB DESCRIPTION
    </div>
    <div style="padding: 10px;">
        <pre>{{$fitout->job_description}}</pre>
    </div>

    <div style="width: 100%;padding: 10px;font-size: 16px;font-weight: bold;background-color: #ddd;">
        D. FITTING OUT MUST BE PAID
    </div>
    <div style="padding: 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="padding: 0;margin: 0;width: 10%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Deposit Amount
                </td>
                <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Rp{{number_format($fitout->deposit, 0, ',', '.')}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 10%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Admin Fit Out
                </td>
                <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Rp{{number_format($fitout->admin, 0, ',', '.')}}
                </td>
            </tr>
            <tr>
                <td style="padding: 0;margin: 0;width: 10%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Biaya Air
                </td>
                <td style="padding: 0;margin: 0;width: 1%;text-align: center;vertical-align: top;font-size: 10px;padding: 5px;">
                    :
                </td>
                <td style="padding: 0;margin: 0;width: 28%;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;font-weight: bold;">
                    Rp{{number_format($fitout->biaya_air, 0, ',', '.')}}
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 12px;padding: 5px;">
                    Dengan ditandatanganinya formulir ini maka Pihak Pemilik dan Kontraktor bersedia patuh terhadap peraturan & kebijakan Fitting Out yang ditetapkan oleh Pengelola Properti. <br>
                    <i>By signing this form, the Owner and the Contractor Parties are willing to obey and follow the Fitting Out rules and policies set by Property Management.</i>
                </td>
            </tr>
        </table>
    </div>

    <div style="padding: 0px 10px 0px 10px;">
        <table style="width: 100%;padding: 0;margin: 0;">
            <tr>
                <td style="width: 20%;"></td>
                <td style="width: 60%;">
                    <table style="width: 100%;padding: 0;margin: 0;" border="1">
                        <tr>
                            <td style="padding: 0;margin: 0;width: 50%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Pemilik
                            </td>
                            <td style="padding: 0;margin: 0;width: 50%;text-align: center;vertical-align: top;font-size: 11px;padding: 5px;font-weight: bold;">
                                Kontraktor
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 50px;">&nbsp;</td>
                            <td style="height: 50px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Nama : <b>{{$fitout->request_name}}</b>
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
                        </tr>
                        <tr>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Jam
                            </td>
                            <td style="padding: 0;margin: 0;text-align: left;vertical-align: top;font-size: 11px;padding: 5px;font-style: italic;">
                                Jam
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 20%;"></td>
            </tr>
        </table>
    </div>

</body>
</html>
