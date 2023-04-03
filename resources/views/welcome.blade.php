<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Homee</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log inn</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="https://i.ibb.co/8zH17Hz/Main-Logo.png" style="width: 100%;" height="100%">
                </div>

                @php
                $bus1 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 1')->count();
                $bus2 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 2')->count();
                $bus3 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 3')->count();
                $bus4 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 4')->count();
                $bus5 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 5')->count();
                $bus6 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 6')->count();
                $bus7 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 7')->count();
                $bus8 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 8')->count();
                $bus9 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 9')->count();
                $bus10 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 10')->count();
                $bus11 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 11')->count();
                $bus12 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 12')->count();
                $bus13 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 13')->count();
                $bus14 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 14')->count();
                $bus15 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 15')->count();
                $bus16 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 16')->count();
                $bus17 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 17')->count();
                $bus18 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 18')->count();
                $bus19 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 19')->count();
                $bus20 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 20')->count();
                $bus21 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 21')->count();
                $bus22 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 22')->count();
                $bus23 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 23')->count();
                $bus24 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 24')->count();
                $bus25 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 25')->count();
                $bus26 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 26')->count();
                $bus27 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 27')->count();
                $bus28 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 28')->count();
                $bus29 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 29')->count();
                $bus30 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 30')->count();
                $bus31 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 31')->count();
                $bus32 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 32')->count();
                $bus33 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 33')->count();
                $bus34 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 34')->count();
                $bus35 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 35')->count();
                $bus36 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 36')->count();
                $bus37 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 37')->count();
                $bus38 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 38')->count();
                $bus39 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 39')->count();
                $bus40 = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS 40')->count();
                $busa = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS A')->count();
                $busb = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS B')->count();
                $busc = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS C')->count();
                $busd = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS D')->count();
                $buse = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS E')->count();
                $busf = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS F')->count();
                $busg = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS G')->count();
                $bush = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS H')->count();
                $busi = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS I')->count();
                $busj = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS J')->count();
                $busk = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS K')->count();
                $busl = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS L')->count();
                $busm = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS M')->count();
                $busn = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS N')->count();
                $buso = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS O')->count();
                $busp = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS P')->count();
                $busq = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS Q')->count();
                $busr = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS R')->count();
                $buss = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS S')->count();
                $bust = \App\TicketList::whereNull('deleted_at')->where('bus', 'BUS T')->count();
                @endphp
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-3">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info"></h3>
                                            <?php
                                            if ($bus1 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 1 - SEMARANG VIA UTARA Kuota '  . $bus1 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 1 - SEMARANG VIA UTARA Kuota '  . $bus1 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus2 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 2 - SEMARANG VIA UTARA Kuota '  . $bus2 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 2 - SEMARANG VIA UTARA Kuota '  . $bus2 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus3 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 3 - SEMARANG VIA UTARA Kuota '  . $bus3 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 3 - SEMARANG VIA UTARA Kuota '  . $bus3 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus4 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 4 - SOLO/YOGYAKARTA VIA UTARA '  . $bus4 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 4 - SOLO/YOGYAKARTA VIA UTARA '  . $bus4 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus5 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 5 - SOLO/YOGYAKARTA VIA UTARA '  . $bus5 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 5 - SOLO/YOGYAKARTA VIA UTARA '  . $bus5 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus6 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 6 - SOLO/YOGYAKARTA VIA UTARA '  . $bus6 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 6 - SOLO/YOGYAKARTA VIA UTARA '  . $bus6 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus7 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 7 - SOLO/YOGYAKARTA VIA UTARA '  . $bus7 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 7 - SOLO/YOGYAKARTA VIA UTARA '  . $bus7 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus8 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 8 - SOLO/YOGYAKARTA VIA UTARA '  . $bus8 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 8 - SOLO/YOGYAKARTA VIA UTARA '  . $bus8 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus9 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 9 - SOLO/YOGYAKARTA VIA UTARA '  . $bus9 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 9 - SOLO/YOGYAKARTA VIA UTARA '  . $bus9 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus10 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 10 - SOLO -SRAGEN '  . $bus10 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 10 - SOLO -SRAGEN '  . $bus10 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus11 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 11 - SOLO -SRAGEN '  . $bus11 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 11 - SOLO -SRAGEN '  . $bus11 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus12 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 12 - SOLO -SRAGEN '  . $bus12 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 12 - SOLO -SRAGEN '  . $bus12 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus13 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 13 - SOLO -SRAGEN '  . $bus13 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 13 - SOLO -SRAGEN '  . $bus13 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus14 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 14 - SOLO -SRAGEN '  . $bus14 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 14 - SOLO -SRAGEN '  . $bus14 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus15 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 15 - SOLO -SRAGEN '  . $bus15 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 15 - SOLO -SRAGEN '  . $bus15 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus16 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 16 - SOLO -SRAGEN '  . $bus16 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 16 - SOLO -SRAGEN '  . $bus16 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus17 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 17 - SOLO -SRAGEN '  . $bus17 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 17 - SOLO -SRAGEN '  . $bus17 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus18 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 18 - SOLO -SRAGEN '  . $bus18 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 18 - SOLO -SRAGEN '  . $bus18 . ' / 40 </h6>';
                                            }
                                            ?>
{{--  --}}
                                            <?php
                                            if ($bus19 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 19 - YOGYAKARTA VIA SELATAN '  . $bus19 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 19 - YOGYAKARTA VIA SELATAN '  . $bus19 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus20 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 20 - YOGYAKARTA VIA SELATAN '  . $bus20 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 20 - YOGYAKARTA VIA SELATAN '  . $bus20 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus21 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 21 - Cirebon - Brebes - Bumiayu - Banyumas - Purwokerto - Purworejo - Yogyakarta '  . $bus21 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 21 - Cirebon - Brebes - Bumiayu - Banyumas - Purwokerto - Purworejo - Yogyakarta '  . $bus21 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus22 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 22 - Tasikmalaya - Brebes - Bumiayu - Banyumas - Purwokerto - Purworejo - Yogyakarta '  . $bus22 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 22 - Tasikmalaya - Brebes - Bumiayu - Banyumas - Purwokerto - Purworejo - Yogyakarta '  . $bus22 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus23 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 23 - YOGYAKARTA VIA SELATAN '  . $bus23 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 23 - YOGYAKARTA VIA SELATAN '  . $bus23 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus24 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 24 - PEKALONGAN '  . $bus24 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 24 - PEKALONGAN '  . $bus24 . ' / 40 </h6>';
                                            }
                                            ?>
                                            {{--
                                                 --}}

                                            <?php
                                            if ($bus25 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 25 - SURABAYA VIA UTARA '  . $bus25 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 25 - SURABAYA VIA UTARA '  . $bus25 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus26 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 26 - SURABAYA VIA UTARA '  . $bus26 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 26 - SURABAYA VIA UTARA '  . $bus26 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus27 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 27 - MALANG VIA TENGAH '  . $bus27 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 27 - MALANG VIA TENGAH '  . $bus27 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus28 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 28 - MALANG VIA TENGAH '  . $bus28 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 28 - MALANG VIA TENGAH '  . $bus28 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus29 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 29 - MALANG VIA TENGAH '  . $bus29 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 29 - MALANG VIA TENGAH '  . $bus29 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus30 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 30 - MALANG VIA TENGAH '  . $bus30 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 30 - MALANG VIA TENGAH '  . $bus30 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus31 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 31 -  MALANG VIA SELATAN '  . $bus31 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 31 -  MALANG VIA SELATAN '  . $bus31 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus32 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 32 -  MALANG VIA SELATAN '  . $bus32 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 32 -  MALANG VIA SELATAN '  . $bus32 . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($bus33 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 33 -  MALANG VIA SELATAN '  . $bus33 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 33 -  MALANG VIA SELATAN '  . $bus33 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus34 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 34 -  MALANG VIA SELATAN '  . $bus34 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 34 -  MALANG VIA SELATAN '  . $bus34 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus35 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 35 -  MADIUN VIA TOL CIPALI '  . $bus35 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 35 -  MADIUN VIA TOL CIPALI '  . $bus35 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus36 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 36 -  MADIUN VIA TOL CIPALI '  . $bus36 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 36 -  MADIUN VIA TOL CIPALI '  . $bus36 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus37 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 37 -  MEDAN '  . $bus37 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 37 -  MEDAN '  . $bus37 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus38 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 38 -  PALEMBANG '  . $bus38 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 38 -  PALEMBANG '  . $bus38 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus39 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 39 -  PEKANBARU '  . $bus39 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 39 -  PEKANBARU '  . $bus39 . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bus40 > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS 40 -  PADANG '  . $bus40 . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS 40 -  PADANG '  . $bus40 . ' / 40 </h6>';
                                            }
                                            ?>
                                            {{-- aBJAD BUS --}}
                                            <?php
                                            if ($busa > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS A -  SEMARANG VIA UTARA '  . $busa . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS A -  SEMARANG VIA UTARA '  . $busa . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($busb > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS B -  SEMARANG VIA UTARA '  . $busb . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS B -  SEMARANG VIA UTARA '  . $busb . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($busc > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS C -  SEMARANG VIA UTARA '  . $busc . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS C -  SEMARANG VIA UTARA '  . $busc . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($busd > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS D -  SEMARANG VIA UTARA '  . $busd . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS D -  SEMARANG VIA UTARA '  . $busd . ' / 40 </h6>';
                                            }
                                            ?>


                                            <?php
                                            if ($buse > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS E -  SOLO/YOGYAKARTA VIA UTARA '  . $buse . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS E -  SOLO/YOGYAKARTA VIA UTARA '  . $buse . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($busf > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS F -  SOLO/YOGYAKARTA VIA UTARA '  . $busf . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS F -  SOLO/YOGYAKARTA VIA UTARA '  . $busf . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($busg > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS G -  SOLO/YOGYAKARTA VIA UTARA '  . $busg . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS G -  SOLO/YOGYAKARTA VIA UTARA '  . $busg . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bush > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS H -  SOLO/YOGYAKARTA VIA UTARA '  . $bush . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS H -  SOLO/YOGYAKARTA VIA UTARA '  . $bush . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($busi > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS I -  SOLO/YOGYAKARTA VIA UTARA '  . $busi . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS I -  SOLO/YOGYAKARTA VIA UTARA '  . $busi . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($busj > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS J -  YOGYAKARTA VIA SELATAN '  . $busj . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS J -  YOGYAKARTA VIA SELATAN '  . $busj . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($busk > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS K -  YOGYAKARTA VIA SELATAN '  . $busk . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS K -  YOGYAKARTA VIA SELATAN '  . $busk . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($busl > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS L -  YOGYAKARTA VIA SELATAN '  . $busl . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS L -  YOGYAKARTA VIA SELATAN '  . $busl . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($busm > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS M -  YOGYAKARTA VIA SELATAN '  . $busm . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS M -  YOGYAKARTA VIA SELATAN '  . $busm . ' / 40 </h6>';
                                            }
                                            ?>
                                            {{--  --}}
                                            {{--  --}}
                                            <?php
                                            if ($busn > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS N -   YOGYAKARTA VIA TENGAH '  . $busn . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS N -   YOGYAKARTA VIA TENGAH '  . $busn . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($buso > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS O -   YOGYAKARTA VIA TENGAH '  . $buso . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS O -   YOGYAKARTA VIA TENGAH '  . $buso . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($busp > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS P -   YOGYAKARTA VIA TENGAH '  . $busp . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS P -   YOGYAKARTA VIA TENGAH '  . $busp . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($busq > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS Q -   YOGYAKARTA VIA TENGAH '  . $busq . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS Q -   YOGYAKARTA VIA TENGAH '  . $busq . ' / 40 </h6>';
                                            }
                                            ?>
                                            <?php
                                            if ($busr > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS R -   YOGYAKARTA VIA TENGAH '  . $busr . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS R -   YOGYAKARTA VIA TENGAH '  . $busr . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($buss > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS S -   PEKALONGAN '  . $buss . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS S -   PEKALONGAN '  . $buss . ' / 40 </h6>';
                                            }
                                            ?>

                                            <?php
                                            if ($bust > "35") {
                                                echo '<h6 style="font-weight: bold;color: rgb(255, 5, 5);"> BUS T -  Sukabumi - Cianjur - Padalarang - Semarang - Solo '  . $bust . ' / 40 </h6>';
                                            } else {
                                                echo '<h6 style="font-weight: bold;color: rgb(0, 0, 0);">BUS T -  Sukabumi - Cianjur - Padalarang - Semarang - Solo '  . $bust . ' / 40 </h6>';
                                            }
                                            ?>
                                        </div>
                                        <div>
                                            <i class="bi bi-house-heart info font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="{{ route('login') }}" class="ml-1 underline">
                                Login
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
