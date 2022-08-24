<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Font Roboto, Roboto Monospace, Roboto Condensed -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto+Mono:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            counter-reset: page;
            color: rgba(0, 0, 0, 0.87);
        }

        /* Fonts Family*/

            .font-roboto{
                font-family: 'Roboto', sans-serif;
            }

            .font-roboto-mono{
                font-family: 'Roboto Mono', "monospace", sans-serif;
            }

            .font-roboto-condensed {
                font-family: 'Roboto Condensed', sans-serif;
            }

        /* End Fonts-Family */

         /* Text Sizes */
            .text-xs {
                font-size: 12px;
            }

            .text-sm {
                font-size: 14px;
            }

            .text-base {
                font-size: 16px;
            }

            .text-lg {
                font-size: 18px;
            }

            .text-xl {
                font-size: 20px;
            }

            .text-2xl {
                font-size: 24px;
            }

            .text-3xl {
                font-size: 30px;
            }
        /* End Text Sizes */
        
        /* Fonts weight names */
            
            .font-thin {
                font-weight: 100; 
            }

            .font-extra-light {
                font-weight: 200;
            }

            .font-light {
                font-weight: 300;
            }

            .font-normal {
                font-weight: 400;
            }

            .font-medium {
                font-weight: 500;
            }

            .font-semi-bold{
                font-weight: 600;
            }

            .font-bold {
                font-weight: 700;
            }

            .font-extra-bold {
                font-weight: 800;
            }

            .font-heavy {
                font-weight: 900;
            }

        /* End fonts weights names */

        /* Texts colors  */
            /* Primary texts colors */
                .text-color-primary {
                    color: #DC0000;
                }

                .text-color-primary-surface {
                    color: #F8CCCC;
                }

                .text-color-primary-border {
                    color: #E85555;
                }

                .text-color-primary-hover {
                    color: #930000;
                }

                .text-color-primary-pressed {
                    color: #490000;
                }
            /* End primary texts colors */

            /* Secondary texts colors */
                .text-secondary-main {
                    color: #00AA1A;
                }

                .text-secondary-surface {
                    color: #CCEED1;
                }

                .text-secondary-border {
                    color: #55C666;
                }

                .text-secondary-hover {
                    color: #00550D;
                }

                .text-secondary-pressed {
                    color: #002205;
                }
            /* End secondary texts colors */
            
            /* Third texts colors */

                .text-third-main {
                    color: #00A5E6;
                }

                .text-third-surface {
                    color: #CCEDFA;
                }

                .text-third-border {
                    color: #55C3EE;
                }

                .text-third-hover {
                    color: #005373;
                }

                .text-third-pressed {
                    color: #00212E;
                }

            /* End third texts colors */

            /* Neutral texts colors */
                
                .text-neutral-10 {
                    color: #FFFFFF;
                }
                
                .text-neutral-20 {
                    color: #F9F9F9;
                }
                
                .text-neutral-30 {
                    color: #F4F4F4;
                }
                
                .text-neutral-40 {
                    color: #EFEFEF;
                }
                
                .text-neutral-50 {
                    color: #E5E5E5;
                }
                
                .text-neutral-60 {
                    color: #DDDDDD;
                }
                
                .text-neutral-70 {
                    color: #CCCCCC;
                }
                
                .text-neutral-80 {
                    color: #808080;
                }
                
                .text-neutral-90 {
                    color: rgba(0, 0, 0, 0.87);
                }
                
                .text-neutral-100 {
                    color: #000000;
                }
            /* End Neutral texts colors */

            /* Red texts colors */

                .text-red-50 {
                    color: #FDF2F2;
                }

                .text-red-100 {
                    color: #FDE8E8;
                }
                
                .text-red-200 {
                    color: #FBD5D5;
                }
                
                .text-red-300 {
                    color: #F8B4B4;
                }

                .text-red-400 {
                    color: #F98080;
                }

                .text-red-500 {
                    color: #F05252;
                }

                .text-red-600 {
                    color: #C81E1E;
                }

                .text-red-700 {
                    color: #C81E1E;
                }
                .text-red-800 {
                    color: #9B1C1C;
                }

                .text-red-900 {
                    color: #771D1D;
                }
            /* End Red texts colors */

            /* Green texts colors */
                
                .text-green-50 {
                    color: #F3FAF7;
                }

                .text-green-100 {
                    color: #DEF7EC;
                }

                .text-green-200 {
                    color: #BCF0DA;
                }

                .text-green-300 {
                    color: #84E1BC;
                }

                .text-green-400 {
                    color: #31C48D;
                }

                .text-green-500 {
                    color: #0E9F6E;
                }

                .text-green-600 {
                    color: #057A55;
                }

                .text-green-700 {
                    color: #046C4E;
                }

                .text-green-800 {
                    color: #03543F;
                }

                .text-green-900 {
                    color: #014737;
                }
            /* End Green texts colors */

            /* Gray texts colors */
                
                .text-gray-50 {
                    color: #F9FAFB;
                }

                .text-gray-100 {
                    color: #F3F4F6;
                }

                .text-gray-200 {
                    color: #E5E7EB;
                }
                .text-gray-300 {
                    color: #D1D5DB;
                }
                .text-gray-400 {
                    color: #9CA3AF;
                }

                .text-gray-500 {
                    color: #6B7280;
                }

                .text-gray-600 {
                    color: #4B5563;
                }

                .text-gray-700 {
                    color: #374151;
                }
                .text-gray-800 {
                    color: #1F2A37;
                }

                .text-gray-900 {
                    color: #111928;
                }
                
            /* End Gray texts colors */

            /* Orante textes colors */

                .text-orange-50 {
                    color: #FFF8F1;
                }

                .text-orange-100 {
                    color: #FEECDC;
                }

                .text-orange-200 {
                    color: #FCD9BD;
                }

                .text-orange-300 {
                    color: #FDBA8C;
                }

                .text-orange-400 {
                    color: #FF8A4C;
                }

                .text-orange-500 {
                    color: #FF5A1F;
                }

                .text-orange-600 {
                    color: #D03801;
                }

                .text-orange-700 {
                    color: #B43403;
                }

                .text-orange-800 {
                    color: #8A2C0D;
                }

                .text-orange-900 {
                    color: #771D1D;
                }

            /* End Orante texts colors */

            /* Yellow texts colors */
                
                .text-yellow-50 {
                    color: #FDFDEA;
                }

                .text-yellow-100 {
                    color: #FDF6B2;
                }

                .text-yellow-200 {
                    color: #FCE96A;
                }

                .text-yellow-300 {
                    color: #FACA15;
                }

                .text-yellow-400 {
                    color: #E3A008;
                }

                .text-yellow-500 {
                    color: #C27803;
                }

                .text-yellow-600 {
                    color: #9F580A;
                }

                .text-yellow-700 {
                    color: #8E4B10;
                }

                .text-yellow-800 {
                    color: #723B13;
                }

                .text-yellow-900 {
                    color: #633112;
                }

            /* End Yellow texts colors */

            /* Blue texts colors */

                .text-blue-50 {
                    color: #F9FAFB;
                }

                .text-blue-100 {
                    color: #E1EFFE;
                }

                .text-blue-200 {
                    color: #C3DDFD;
                }

                .text-blue-300 {
                    color: #A4CAFE;
                }
                
                .text-blue-400 {
                    color: #76A9FA;
                }

                .text-blue-500 {
                    color: #3F83F8;
                }

                .text-blue-600 {
                    color: #1C64F2;
                }

                .text-blue-700 {
                    color: #1A56DB;
                }

                .text-blue-800 {
                    color: #1E429F;
                }

                .text-blue-900 {
                    color: #233876;
                }

            /* End Blue texts colors */

        /* End texts colors */
        

        /* Utilities */
            .list-style-none {
                list-style: none;
            }
            .border-top {
                border-top: 1px solid rgba(0, 0, 0, 0.87);
            }
            .m-0 {
                margin: 0 !important;
            }

            .mt-6 {
                margin-top: 6px;
            }

            .ml-10{
                margin-left: 10px;
            }

            .ml-20{
                margin-left: 20px;
            }

            .mr-20 {
                margin-right: 20px;
            }

            .mr-40 {
                margin-right: 40px;
            }

            .mt-20 {
                margin-top: 20px;
            }

            .p-0 {
                padding: 0 !important;
            }

            .p-1 {
                padding: 4px 8px;
            }

            .pt-1 {
                padding-top: 4px;
            }

            .pb-1 {
                padding-bottom: 4px;
            }

            .pl-1 {
                padding-left: 8px;
            }

            .pr-1 {
                padding-right: 8px;
            }

            .pr-20 {
                padding-right: 20px !important;
            }

            .pl-20 {
                padding-left: 20px !important;
            }

            .my-5 {
                margin-top: 5px !important;
                margin-bottom: 5px !important;
            }

            .point {
                width: 13px;
                height: 13px;
                display: inline-block;
                margin-right: 5px;
            }

            .text-left {
                text-align: left !important;
            }

            .text-center {
                text-align: center !important;
            }

            .text-right {
                text-align: right !important;
            }

            .bg-neutral-50 {
                background-color: #E5E5E5;
            }

            .bg-gray {
                background-color: #FFFFFF;
            }

            .bg-gray-2{
                background-color: #F4F4F4;
            }

            .bg-white{
                background-color: white;
            }

            .bg-transparent {
                background-color: transparent;
            }

            .bg-blue-200 {
                background-color: #C3DDFD !important;
            }

            

            .border-separate {
                border-collapse: separate;
            }

            .border-collapse {
                border-collapse: collapse;
            }

            .border-spacing-1 {
                border-spacing: 4px;
            }

            table.table-stripped tr:nth-child(odd) {
                background-color: #E5E5E5;
            }

            table.table-p-1 tbody tr td {
                padding: 4px 8px;
            }

            .border-bottom-red {
                border-bottom: 1px solid #DC0000;
            }

            .border-bottom-gray {
                border-bottom: 1px solid #CCCCCC;
            }

        /* End Utilities */


        /* Page
    ========================================================================== */

        @page {
            margin: 120px 25px 50px 25px;
            size: auto;

            counter-increment: page;

            /* @bottom-right {
            content: counter(page) " of " counter(pages);
        } */
        }

        header {
            position: fixed;
            top: -110px;
            left: 0px;
            right: 0px;
        }

        footer {
            position: fixed;
            bottom: -20px;
            left: 0px;
            right: 0px;

        }

        /* Pages
    ========================================================================== */

        table {
            width: 100%;
        }

        .header_logo img {
            width: 80px;
        }

        .header_list ul {
            list-style: none
        }

        .header_list .text-primary {
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-size: 11px;
            height: 10px;
            font-weight: 500;
            color: #dc0000;
        }

        .header_list .text-normal {
            font-family: 'Roboto', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 8px;
            height: 6px;
            color: rgba(0, 0, 0, 0.87);
        }

        .footer {
            font-size: 10px;
            font-family: "Roboto Mono", "monospace", sans-serif;
            font-style: normal;
            font-weight: 400;
            color: #000000de;
            border-top: 1px solid rgba(0, 0, 0, 0.87);
            padding-top: 3px;
        }

        .page-count:after {
            content: counter(page) " de "counter(pages);
        }

        /* Page #1
    ========================================================================== */

        .header_list li {
            margin-bottom: 10px;
        }

        .header_list td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header style="margin-left: 70px; margin-right:70px">
        <table class="header">
            <tr>
                <td class="header_logo" width="10%">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Logo-Logo.svg" alt="Logo" />
                </td>
                <td width="35%">
                    <ul class="list-style-none">
                        <li><small class="font-roboto font-medium text-color-primary text-base">Paloma Geraldine David Velásquez de la Santísima
                                Trinidad</small></li>
                        <li><small class="font-roboto font-normal text-sm text-neutral-90">Maestría/Teacher Education and Learning Sciences of Social Arts
                                and Europe</small></li>
                        <li><small class="font-roboto font-normal text-sm text-neutral-90">Universiteit van Amsterdam - Uva Amsterdam, Noord-Holland /
                                Holanda</small></li>
                    </ul>
                </td>
                <td width="35%">
                    <ul class="list-style-none">
                        <li><small class="font-roboto font-normal text-sm text-neutral-80">CC: <span class="font-medium text-neutral-90">1.018.473.865 </span>
                            </small> </li>
                        <li><small class="font-roboto font-normal text-sm text-neutral-80">Código: <span class="font-medium text-neutral-90">201.806.121
                                </span></small></li>
                        <li><small class="font-roboto font-normal text-sm text-neutral-80">Estado: <span class="font-medium text-neutral-90">PAEC(Periodo Amortización
                                    Exterior con
                                    Condonación)</span></small></li>
                    </ul>
                </td>
                <td width="20%">
                    <ul class="list-style-none">
                        
                        <li style="vertical-align: middle; display:block;  margin-bottom:0px;">
                            <small class="font-roboto-condensed font-normal text-sm" style="color: #000000">
                                <span class="point" style="background: #000000"></span>Contenido
                            </small>
                        </li>
                        
                        <li style="vertical-align: middle; display:block;  margin-bottom:0px;">
                            <small class="font-roboto-condensed font-normal text-sm" style="color: #3f83f8">
                                <span class="point" style="background: #3f83f8"></span>Extracto Crédito
                            </small>
                        </li>

                        <li style="vertical-align: middle; display:block; margin-bottom:0px;">
                            <small class="font-roboto-condensed font-normal text-sm" style="color: #c27803">
                                <span class="point" style="background: #c27803"></span>Extracto Beca
                            </small>
                        </li>
                    
                    </ul>
                </td>
            </tr>
        </table>
    </header>

    <!-- FOOTER -->
    <footer style="margin-left:70px; margin-right:70px;" class="border-top">
        <table>
            <tr>
                <td width="40%" class="font-roboto-mono text-base font-normal">Extracto Crédito Beca COLFUTURO. Corte al 07 jul 2022.</td>
                <td width="20%" class="font-roboto-mono text-base font-normal text-center"><b class="page-count"></b></td>
                <td width="40%" class="font-roboto-mono text-base font-normal text-right">Generado el 07 jul 2022, 17:54</td>
            </tr>
        </table>
    </footer>

    <main style="margin-left:70px; margin-right:70px;">
        <!-- Inicio de 1 página, Tabla de contenido -->
        <div class="page" style="page-break-after: always;">
            <table class="tableOfContent">
                <tr>
                    <td>
                        <h4 class="font-roboto font-medium text-2xl text-color-primary p-0 m-0">Tabla de contenido</h4>
                        <ul style="list-style:none; margin-top:5px;">
                            <li>
                                <h4 class="font-roboto font-medium text-2xl text-neutral-90 m-0">Extracto programa Crédito Beca</h4>
                                <ul style="list-style:none; margin-top:10px;" class="toc-list">
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Resumen general<span class="leaders"
                                                aria-hidden="true">...................................................</span></span><span
                                            class="font-roboto-mono font-normal text-base">01</span></li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Estado Crédito<span class="leaders"
                                                aria-hidden="true">.......................................................</span></span><span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Próximo pago Crédito<span class="leaders"
                                                aria-hidden="true">...........................................</span></span><span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li ><span class="font-roboto font-normal text-lg text-neutral-90">Requisitos para mantener mi estatus<span class="leaders"
                                                aria-hidden="true">..................</span></span><span class="font-roboto-mono font-normal text text-base">01</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul style="list-style:none;">
                            <li>
                                <h4 class="font-roboto font-medium text-2xl text-blue-500 m-0">Extracto Crédito</h4>
                                <ul style="list-style:none; margin-top:5px;">
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Resumen<span class="leaders"
                                                aria-hidden="true">..............................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Intereses y seguro<span class="leaders"
                                                aria-hidden="true">................................................</span></span><span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Mora<span class="leaders"
                                                aria-hidden="true">.....................................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Desembolsos<span class="leaders"
                                                aria-hidden="true">.......................................................</span></span><span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Cuotas pagadas<span class="leaders"
                                                aria-hidden="true">...................................................</span></span><span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Apoyos de terceras entidades<span class="leaders"
                                                aria-hidden="true">..............................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Pagos realizados<span class="leaders"
                                                aria-hidden="true">..................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li ><span class="font-roboto font-normal text-lg text-neutral-90">Plan de pagos<span class="leaders"
                                                aria-hidden="true">.......................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>

                        <ul style="list-style:none;">
                            <li>
                                <h4 class="font-roboto font-medium text-2xl text-yellow-400 m-0">Extracto Beca</h4>
                                <ul style="list-style:none; margin-top:5px;">
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Resumen<span class="leaders"
                                                aria-hidden="true">..............................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Intereses y seguro<span class="leaders"
                                                aria-hidden="true">................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Mora<span class="leaders"
                                                aria-hidden="true">.....................................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Desembolsos<span class="leaders"
                                                aria-hidden="true">.......................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Cuotas pagadas<span class="leaders"
                                                aria-hidden="true">...................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Apoyos de terceras entidades<span class="leaders"
                                                aria-hidden="true">..............................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Pagos realizados<span class="leaders"
                                                aria-hidden="true">..................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li><span class="font-roboto font-normal text-lg text-neutral-90">Plan de pagos<span class="leaders"
                                                aria-hidden="true">.......................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Fin de 1 página, Tabla de contenido -->

        <!-- Página 2 -->
        <div class="page" style="page-break-after: avoid;">
        
            <table>
                <!-- Título Página 2 -->
                <tr>
                    <td>
                        <h4 class="p-0 m-0 font-roboto font-medium text-2xl text-color-primary">Extracto programa Crédito Beca</h4>
                    </td>
                </tr>
                <tr style="vertical-align: top;">
                    <!-- Página 2 - Arriba Izquierda - Tabla Resumen General -->
                    <td width="50%" class="pr-20">
                        <h4 class="font-roboto font-medium text-lg text-neutral-90 pb-1 border-bottom-gray">Resumen general <span class="text-color-primary">*</span></h4>
                        
                        <!-- Inicio de table Resumen General Página 2 -->
                        <table class="table-stripped text-base border-separate border-spacing-1">
                            <tr class="font-roboto-condensed font-medium">
                                <th></th>
                                <th>Crédito</th>
                                <th colspan="2" class="border-bottom-red p-1">Beca</th>
                            </tr>
                            <tr class="font-roboto-condensed font-normal text-center">
                                <td></td>
                                <td>USD</td>
                                <td>USD</td>
                                <td>COP</td>
                                <td></td>
                            </tr>
                            <tr class="font-roboto-condensed font-normal">
                                <td style="width:162px;"    class="pl-1">Desembolsos</td>
                                <td style="width:92px;"     class="font-roboto-mono text-center">29.743</td>
                                <td style="width:90px;"     class="font-roboto-mono text-center">20.000</td>
                                <td style="width:137px;"    class="font-roboto-mono text-center">63.261.923</td>
                                <td class="bg-white"></td>
                            </tr>
                            <tr class="font-roboto-condensed font-normal">
                                <td class="pl-1">Intereses</td>
                                <td class="font-roboto-mono text-center">4.865</td>
                                <td class="font-roboto-mono text-center"></td>
                                <td class="font-roboto-mono text-center">9.630.690</td>
                                <td class="bg-white text-color-primary">**</td>
                            </tr>
                            <tr class="font-roboto-condensed font-normal">
                                <td class="pl-1">Seguro deudores</td>
                                <td class="font-roboto-mono text-center">189</td>
                                <td></td>
                                <td></td>
                                <td class="bg-white"></td>
                            </tr>
                            <tr class="font-roboto-condensed font-normal">
                                <td class="pl-1">Mora</td>
                                <td class="font-roboto-mono text-center">29</td>
                                <td></td>
                                <td></td>
                                <td class="bg-white"></td>
                            </tr>
                            <tr class="font-roboto-condensed font-normal">
                                <td class="pl-1">Pagos</td>
                                <td class="font-roboto-mono text-center text-color-primary">(1.800)</td>
                                <td></td>
                                <td class="font-roboto-mono text-center text-color-primary">(8.506.908)</td>
                                <td class="bg-white"></td>
                            </tr>
                            <tr class="font-roboto-condensed font-normal">
                                <td class="pl-1">Condonación estimada</td>
                                <td></td>
                                <td></td>
                                <td class="font-roboto-mono text-center text-color-primary">(10.698.900)</td>
                                <td class="bg-white"></td>
                            </tr>
                            <tr class="font-roboto-condensed font-normal">
                                <td class="pl-1">Apoyos entregados</td>
                                <td class="font-roboto-mono text-center text-color-primary">(4.519)</td>
                                <td></td>
                                <td></td>
                                <td class="bg-white"></td>
                            </tr>
                            <tr class="font-roboto-condensed font-normal bg-gray">
                                <td class="pl-1"><b>TOTAL</b></td>
                                <td class="font-roboto-mono text-center"><b>33.025</b></td>
                                <td class="font-roboto-mono text-center"><b>33.025</b></td>
                                <td class="font-roboto-mono text-center"><b>53.686.805</b></td>
                                <td class="bg-white"></td>
                            </tr>
                        </table>
                        <!-- Fin de tabla Resumen General Página 2 -->  

                        <!-- Inicio Info Adicional Tabla Resumen General -->
                        
                        <small class="font-roboto font-normal text-neutral-80"><span class="text-color-primary">* </span> Este resumen no muestradecimales pero los cálculos los consideran todos</small>
                        <br>
                        <small class="font-roboto font-normal text-neutral-80"><span class="text-color-primary">**</span> Intereses calculados con la inflación</small>
                        
                        <!-- Fin Info Adicional Tabla Resumen General -->
                    </td>

                    <td>
                        <h4 class="font-roboto font-medium text-lg text-neutral-90 pb-1 border-bottom-gray">Estado Crédito</h4>
                        <!-- OJOOO: Estos textos son condicionales, aparecen dependiendo el estado del pago, esté en mora o al día. -->
                        <div class="font-roboto font-medium text-base">Crédito <span class="text-secondary-main">al día</span></div>
                        <div class="font-roboto font-medium text-base">Crédito <span class="text-color-primary">en mora</span></d>

                        <!-- Incio Tabla de días vencidos por pago en Mora: OJO!! Esta tabla solo debe aparecer si el crédito está en mora -->
                        <table style="width:auto; padding-top:10px;" class="table-stripped font-roboto-condensed font-normal text-base">
                                <tr>
                                    <td style="width:121px;"  class="text-center">Días vencidos</td>
                                    <td style="width:104px;" class="font-roboto-mono text-right text-color-primary pr-1 pt-1 pb-1">78</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Cuotas vencidas</td>
                                    <td class="font-roboto-mono text-right text-color-primary pr-1 pt-1 pb-1">3</td>
                                </tr>
                                <tr>
                                    <td class="text-center font-bold">Monto en mora</td>
                                    <td class="font-roboto-mono text-right text-color-primary pr-1 pt-1 pb-1">USD 1.229</td>
                                </tr>
                        </table>
                        <!-- Fin de tabla de días vencidos por pago en mora! -->

                        <h4 style="margin-top:50px;" class="font-roboto font-medium text-lg pb-1 border-bottom-gray">Próximo pago Crédito</h4>
                        <table style="width:auto;" class="font-roboto-condensed font-normal text-base">
                            <tr class="bg-gray">
                                <td style="width:144px;" class="pl-1 pt-1 pb-1 ">Fecha próximo pago</td>
                                <td style="width:121px;" class="pl-1 pt-1 pb-1 ">12 dic 2022</td>
                            </tr>
                            <tr class="bg-gray">
                                <td class="pl-1 pt-1 pb-1 "><b>Pago sugerido</b></td>
                                <td class="pl-1 pt-1 pb-1 "><b>USD 1.229</b></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr style="vertical-align: top;">
                    <td class="pr-20">
                        <h4 class="font-roboto font-medium text-lg text-neutral-90 pb-1 border-bottom-gray">Fechas del Crédito</h4>

                        <table style="width:auto" class="font-roboto-condensed border-separate border-spacing-1 text-base">
                            <tbody>
                                <tr>
                                    <td class="text-neutral-80 font-normal">Inicio financiación</td>
                                    <td class="font-roboto-mono font-medium">01 sep 2018</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-neutral-80 font-normal">Fin financiación</td>
                                    <td class="border-bottom-gray font-roboto-mono font-medium">21 ago 2020</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="font-roboto-mono font-medium">24 meses</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-neutral-80 font-normal">Fin de estudios</td>
                                    <td class="font-roboto-mono font-medium">29 ene 2021</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-neutral-80 font-normal">Fin financiación</td>
                                    <td class="font-roboto-mono font-medium">21 ago 2020</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="font-roboto-mono font-medium">+ 72 meses</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-neutral-80 font-normal">Fecha permanencia</td>
                                    <td style="width:106px;" class="font-roboto-mono font-medium">31 ago 2026</td>
                                    <td class="font-normal">(Fecha máxima para cumplir permanencia)</td>
                                </tr>
                            </tbody>
                        </table>
                    
                    </td>
                    <!-- Tabla Página 2 - Requisitos para mantener mi estatus -->
                    <td width="50%">
                        <h4 class="font-roboto font-medium text-lg text-neutral-90 pb-1 border-bottom-gray">Requisitos para mantener mi estatus</h4>

                        <table style="width:auto" class="table-stripped font-roboto-condensed text-base">
                            <tr>
                                <th style="width:272px;">Requisitos</th>
                                <th style="width:122px;">Desde</th>
                                <th style="width:122px;">Hasta</th>
                                <th style="width:60px;">Estado</th>
                            </tr>
                            <tr>
                                <td class="pl-1 pt-1 pb-1">Paz y salvo financiero de la universidad</td>
                                <td class="font-roboto-mono text-center">12 dic 2022</td>
                                <td class="pl-1 pt-1 pb-1">Permanente</td>
                                <td class="text-secondary-main text-center">[-]</td>
                            </tr>
                            <tr>
                                <td class="pl-1 pt-1 pb-1">Certificado laboral</td>
                                <td class="font-roboto-mono text-center">12 dic 2022</td>
                                <td class="font-roboto-mono text-center">12 dic 2022</td>
                                <td class="text-color-primary text-center">[-]</td>
                            </tr>
                        </table>
                    </td>
                    <!-- Fin tabla pagina 2 - Requisitos para mantener mi estatus -->
                </tr>
            </table>
            
        </div>

        <!-- Inicio Pagina 3 -->
        <div class="page" style="page-break-before: always;">
            <!-- Main Layout Table Page 3 -->
            <table>
                <tr>
                    <td>
                        <h4 class="p-0 m-0 font-roboto font-medium text-2xl text-blue-500">Extracto Crédito </h4>
                    </td>
                </tr>
                <!-- Main Layout -->
                <tr style="vertical-align:top">
                    <!-- Extracto Crédito P3: Resumen -->
                    <td width="40%" height="50%" class="pr-20">
                        <h4 class="font-roboto font-medium text-lg text-blue-500 pb-1 border-bottom-gray">Resumen</h4>
        
                        <!-- Tabla 1 , Pag 3, Resumen -->
                        <table style="width:auto" class="ml-20 table-stripped font-roboto-condensed">
                            <tbody>
                                <tr class="text-center">
                                    <td style="width:75px;" class="font-bold p-1">Tasas</td>
                                    <td style="width:84px;" class="font-bold p-1">EA <span class="text-color-primary">*</span></td>
                                </tr>
                                <tr>
                                    <td class="p-1">Interés</td>
                                    <td class="p-1 font-roboto-mono text-center">9,00 %</td>
                                </tr>
                                <tr>
                                    <td class="p-1">Mora</td>
                                    <td class="p-1 font-roboto-mono text-center">25,00 %</td>
                                </tr>
                                <tr>
                                    <td class="p-1">Seguro</td>
                                    <td class="p-1 font-roboto-mono text-center">0,29 %</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="ml-20 font-roboto font-normal text-neutral-80 text-sm"><span class="text-color-primary">* </span> EA = Tasa Efectiva Anual.</div>
                        <!-- Fin Tabla 1 , Pag 3, Resumen -->
                        
                        <!--  Tabla 2, Pag 3, Resumen-->
                        <table style="width:auto" class="ml-20 mt-20 font-roboto-condensed text-base">
                            <tbody>
                                <tr>
                                    <td style="width:131px;" class="p-1 font-bold bg-neutral-50">Inicio pago</td>
                                    <td style="width:122px;" class="p-1 font-roboto-mono bg-gray-2">01 sep 2021</td>
                                </tr>
                                <tr>
                                    <td class="p-1 font-bold bg-neutral-50">Estimado fin pago</td>
                                    <td class="p-1 font-roboto-mono bg-gray-2">31 jul 2027</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Fin Tabla 2, Pag 3, Resumen-->

                        <!-- Inicio Tabla 3, Pag 3, Resumen -->
                        <table style="width:auto;" class="ml-20 mt-20 font-roboto-condensed table-stripped text-base">
                            <tbody>
                                <tr>
                                    <td style="width:152px;" class="text-center font-bold p-1">Cuotas</td>
                                    <td style="width:36px;"></td>
                                </tr>
                                <tr>
                                    <td class="p-1">Pagadas</td>
                                    <td class="p-1 font-roboto-mono text-right">6</td>
                                </tr>
                                <tr class="bg-gray-2">
                                    <td class="p-1">Estimadas pendientes</td>
                                    <td class="p-1 font-roboto-mono text-right">65</td>
                                </tr>
                                <tr class="bg-neutral-50">
                                    <td class="p-1 font-bold text-right">TOTAL</td>
                                    <td class="p-1 font-roboto-mono font-medium text-right">71</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Fin Tabla 3, Pag 3, Resumen -->

                        <!-- Inicio Tabla 4, Pag 3, Resumen -->
                        <table style="width:auto" class="ml-20 mt-20 font-roboto-condensed text-base">
                            <tbody>
                                <tr>
                                    <td style="width:105px;" class="bg-neutral-50 p-1 font-bold">Saldo al corte</td>
                                    <td style="width:113px;" class="bg-gray-2 p-1 font-roboto-mono text-color-primary">USD 28.506</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Fin Tabla 4, Pag 3, Resumen -->

                    </td>
                    <!-- End Extracto Crédito P3: Resumen  -->

                    <!-- Inicio - Pag 3 - Ingresos y seguros -->
                    <td width="60%" height="50%">
                        <h4 class="font-roboto font-medium text-lg text-blue-500 pb-1 border-bottom-gray">Intereses y seguro</h4>

                        <!-- Inicio Tabla 1 , Pag 3 - Ingresos y seguros -->
                        <table style="width:auto" class="font-roboto-condensed text-base table-stripped">
                            <tbody>
                                <tr class="font-bold text-center">
                                    <td style="width:110px;"    class="p-1">Inicio</td>
                                    <td style="width:120px;"     class="p-1">Fin</td>
                                    <td style="width:270px;"    class="p-1">Estatus</td>
                                    <td style="width:45px;"     class="p-1 text-right">EA <span class="text-color-primary">*</span></td>
                                    <td style="width:58px;"     class="p-1 text-right">Meses</td>
                                    <td style="width:106px;"    class="p-1 text-right">Intereses USD</td>
                                    <td style="width:92px;"     class="p-1 text-right">Seguro USD</td>
                                </tr>
                                <tr>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal">Periodo Amortizacion Ordinario (PAO)</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">9 %</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">60</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">1.292</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">41</td>
                                </tr>
                                <tr>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal">Perido Gracia Ordinario (PGO)</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">9 %</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">16</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">1.292</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">41</td>
                                </tr>
                                <tr>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal">Periodo Gracia Fuera (PGF)</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">9 %</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">6</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">1.292</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">7</td>
                                </tr>
                                <tr>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal">Periodo Extraordinario de Estudios (PEE)</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">7 %</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">1</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">1.292</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">36</td>
                                </tr>
                                <tr>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal font-roboto-mono">12 dic 2022</td>
                                    <td class="p-1 font-normal">Periodo Ordinario de Estudios(POE)</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">9 %</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">24</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">1.292</td>
                                    <td class="p-1 font-normal font-roboto-mono text-right">64</td>
                                </tr>
                                <tr>
                                    <td class="p-1 font-normal"></td>
                                    <td class="p-1 font-normal"></td>
                                    <td class="p-1 font-normal"></td>
                                    <td class="p-1 font-normal"></td>
                                    <td class="p-1 font-normal font-bold text-right">TOTAL</td>
                                    <td class="p-1 font-normal font-bold font-roboto-mono text-right">4.865</td>
                                    <td class="p-1 font-normal font-bold font-roboto-mono text-right">189</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="font-roboto font-normal text-neutral-80 text-sm"><span class="text-color-primary">* </span> EA = Tasa Efectiva Anual.</div>
                        <!-- Inicio Tabla 1 , Pag 3 - Ingresos y seguros -->
                    </td>
                    <!-- Fin - Pag 3 - Ingresos y seguros -->
                </tr>
                <!-- Inicio - Pag 3 - Mora -->
                <tr>
                    <td>
                        <h4 class="font-roboto font-medium text-lg text-blue-500 pb-1 border-bottom-gray">Mora</h4>

                        <!-- Inicio Tabla 1 - Pag 3 , Mora -->
                        <table style="width:auto" class="font-roboto-condensed">
                            <tbody>
                                <tr class="bg-neutral-50 text-center font-bold">
                                    <td style="width:148px;"    class="p-1">Inicio</td>
                                    <td style="width:122px;"    class="p-1">Fin</td>
                                    <td style="width:100px;"    class="p-1">Días en mora</td>
                                    <td style="width:74px;"     class="p-1">USD</td>
                                </tr>
                                <tr class="bg-gray-2 font-roboto-mono">
                                    <td class="p-1 text-center">01 sept 2018</td>
                                    <td class="p-1 text-center">28 feb 2022</td>
                                    <td class="p-1 text-right">48</td>
                                    <td class="p-1 text-center">31.105</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Fin Tabla 1 - Pag 3, Mora -->
                    </td>
                </tr>
                <!-- Fin - Pag 3 - Mora -->
                <!-- End Main Layout -->
            </table>
            <!-- End Main Layout Table Page 3 -->
        </div>
        <!-- Fin Página 3 -->

        <!-- Inicio Página 4 -->
        <div class="page" style="page-break-before: always;">
            <!-- Main Layout Pag 4 -->
            <table>
                <!-- Tabla Desembolsos - Pag 4 -->
                <tr style="vertical-align:top">
                    <td>
                        <h4 class="mt-20 font-roboto font-medium text-lg text-blue-500 border-bottom-gray pb-1">Desembolsos</h4>

                        <table style="width:auto;">
                            <tr style="vertical-align: top;">
                                <!-- Inicio Tabla 1 Desembolsos -->
                                <td>
                                    <table style="width:auto;" class="ml-20 table-stripped font-roboto-condensed text-base">
                                        <tbody>
                                            <tr class="font-bold text-center">
                                                <td style="width:41px;"     class="p-1">#</td>
                                                <td style="width:138px;"    class="p-1">Fecha</td>
                                                <td style="width:107px;"    class="p-1">Concepto</td>
                                                <td style="width:50px;"     class="p-1">USD</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">1</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Matrícula</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">2</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Sostenimiento</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">3</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Matrícula</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">4</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Sostenimiento</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">5</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1 ">Matrícula</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">6</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Sostenimiento</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <!-- Fin Tabla 1 Desembolsos -->
                                
                                <td>
                                    <table style="width:auto;" class="ml-20 table-stripped font-roboto-condensed text-base">
                                        <tbody>
                                            <tr class="font-bold text-center">
                                                <td style="width:41px;"     class="p-1">#</td>
                                                <td style="width:138px;"    class="p-1">Fecha</td>
                                                <td style="width:107px;"    class="p-1">Concepto</td>
                                                <td style="width:50px;"     class="p-1">USD</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">7</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Matrícula</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">8</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Sostenimiento</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">9</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Matrícula</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">10</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Sostenimiento</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">11</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1 ">Matrícula</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">12</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Sostenimiento</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                
                                <td>
                                <table style="width:auto;" class="ml-20 table-stripped font-roboto-condensed text-base">
                                        <tbody>
                                            <tr class="font-bold text-center">
                                                <td style="width:41px;"     class="p-1">#</td>
                                                <td style="width:138px;"    class="p-1">Fecha</td>
                                                <td style="width:107px;"    class="p-1">Concepto</td>
                                                <td style="width:50px;"     class="p-1">USD</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">1</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Matrícula</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">2</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Sostenimiento</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">3</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Matrícula</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">4</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Sostenimiento</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">5</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1 ">Matrícula</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1 font-roboto-mono text-right">6</td>
                                                <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                                <td class="p-1">Sostenimiento</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                            <tr class="bg-neutral-50">
                                                <td colspan="3" class="p-1 text-right font-bold">Total</td>
                                                <td class="p-1 font-roboto-mono">1.746</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- End Tabla Desembolsos - Pag 4 -->

                <!-- Tabla Cuotas pagadas - Pag 4 -->
                <tr>
                    <td>
                        <h4 class="mt-20 font-roboto font-medium text-lg text-blue-500 pb-1 border-bottom-gray">Cuotas pagadas</h4>

                        <table style="width:auto" class="ml-20 font-roboto-condensed">
                            <tbody>
                                <tr class="font-bold bg-neutral-50">
                                    <td></td>
                                    <td style="82px;"   class="p-1 text-center">Inicio</td>
                                    <td style="122px;"  class="p-1 text-center">Fin</td>
                                    <td style="122px;"  class="p-1 text-center">Pagadas</td>
                                    <td style="88px;"   class="p-1 text-center">Pendientes</td>
                                    <td style="63px;"   class="p-1 text-center">Totales</td>
                                </tr>
                                <tr>
                                    <td class="font-normal p-1">Normales</td>
                                    <td class="font-normal p-1 font-roboto-mono">12 dic 2022</td>
                                    <td class="font-normal p-1 font-roboto-mono">12 dic 2022</td>
                                    <td class="font-normal p-1 font-roboto-mono text-right">60</td>
                                    <td class="font-normal p-1 font-roboto-mono text-right">60</td>
                                    <td class="font-normal p-1 font-roboto-mono text-right">66</td>
                                </tr>
                                <tr class="bg-gray-2">
                                    <td class="font-normal p-1 ">Reducidas</td>
                                    <td class="font-normal p-1 font-roboto-mono">12 dic 2022</td>
                                    <td class="font-normal p-1 font-roboto-mono">12 dic 2022</td>
                                    <td class="font-normal p-1 font-roboto-mono text-right">-</td>
                                    <td class="font-normal p-1 font-roboto-mono text-right">6</td>
                                    <td class="font-normal p-1 font-roboto-mono text-right">6</td>
                                </tr>
                                <tr class="bg-neutral-50">
                                    <td colspan="2"></td>
                                    <td class="font-bold p-1 text-right">TOTAL</td>
                                    <td class="font-bold p-1 text-right">6</td>
                                    <td class="font-bold p-1 text-right">66</td>
                                    <td class="font-bold p-1 text-right">72</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <!-- End tabla Cuotas pagadas - Pag 4 -->

                <!-- Tabla Apoyo a terceras entidades - Pag 4 -->
                <tr>
                    <td>
                        <h4 class="mt-20 font-roboto font-medium text-lg text-blue-500 pb-1 border-bottom-gray">Apoyos de terceras entidades</h4>

                        <table style="width:auto;" class="ml-20 font-roboto-condensed text-base">
                            <tbody>
                                <tr class="text-center font-bold p-1 bg-neutral-50">
                                    <td colspan="5" class="border-bottom-red">Apoyos</td>
                                    <td colspan="5" class="border-bottom-red">Abonos en USD</td>
                                </tr>
                                <tr class="text-center font-bold p-1 bg-neutral-50">
                                    <td style="width:130px;"    class="p-1">Fecha</td>
                                    <td style="width:77px;"     class="p-1 text-left">Concepto</td>
                                    <td style="width:65px;"     class="p-1">USD</td>
                                    <td style="width:66px;"     class="p-1 text-right">TRM <span class="text-color-primary">*</span></td>
                                    <td style="width:103px;"    class="p-1">COP</td>
                                    <td style="width:97px;"     class="p-1">Interes mora</td>
                                    <td style="width:76px;"     class="p-1">Intereses</td>
                                    <td style="width:61px;"     class="p-1">Capital</td>
                                    <td style="width:124px;"    class="p-1">Cuota anticipada</td>
                                    <td style="width:65px;"     class="p-1">Total</td>
                                </tr>
                                <tr>
                                    <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                    <td class="p-1">CEA</td>
                                    <td class="p-1 font-roboto-mono text-right">300</td>
                                    <td class="p-1 font-roboto-mono text-right">3.781</td>
                                    <td class="p-1 font-roboto-mono text-right text-secondary-main">1.134.255</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">300</td>
                                    <td class="p-1 font-roboto-mono text-right">300</td>
                                </tr>
                                <tr class="bg-gray-2">
                                    <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                    <td class="p-1">CEF</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">62</td>
                                    <td class="p-1 font-roboto-mono text-right">238</td>
                                    <td class="p-1 font-roboto-mono text-right text-color-primary">(300)</td>
                                    <td class="p-1 font-roboto-mono text-right">300</td>
                                </tr>
                                <tr>
                                    <td class="p-1 font-roboto-mono text-center">12 dic 2022</td>
                                    <td class="p-1">Rev CEA</td>
                                    <td class="p-1 font-roboto-mono text-right">60</td>
                                    <td class="p-1 font-roboto-mono text-right">3.781</td>
                                    <td class="p-1 font-roboto-mono text-right text-secondary-main">1.134.255</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">100</td>
                                    <td class="p-1 font-roboto-mono text-right">93</td>
                                    <td class="p-1 font-roboto-mono text-right">300</td>
                                    <td class="p-1 font-roboto-mono text-right">300</td>
                                </tr>
                                <tr class="bg-neutral-50 font-bold text-right">
                                    <td class="p-1"></td>
                                    <td class="p-1">TOTAL</td>
                                    <td class="p-1 font-roboto-mono text-right">1.800</td>
                                    <td class="p-1 font-roboto-mono text-right"></td>
                                    <td class="p-1 font-roboto-mono text-right">6.987.986</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">1.099</td>
                                    <td class="p-1 font-roboto-mono text-right">710</td>
                                    <td class="p-1 font-roboto-mono text-right">-</td>
                                    <td class="p-1 font-roboto-mono text-right">1.800</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="ml-20 mt-20 font-roboto font-normal text-neutral-80 text-sm"><span class="text-color-primary">* </span> TRM= Tasa Representativa del Mercado.</div>
                        <div class="ml-20 mt-6 font-roboto font-normal text-neutral-80 text-sm">Los valores en 0 absoluto se muestran con "-". Los valores "0" contienen decimales.</div>
                        <div class="ml-20 mt-6 font-roboto font-normal text-neutral-80 text-sm">Los valores en verde corresponden a la moneda en la que se hizo el abono.</div>
                    </td>
                </tr>
                <!-- End Tabla Apoyo a terceras entidades - Pag 4 -->
            </table>
            <!-- End Main Layout Pag 4 -->
        </div>
        <!-- Fin Página 4 -->

        <!-- Inicio Página 5 -->
        <div class="page" style="page-break-before: always;">
            <!-- Main Layout Pag 5 -->
            <table>
                <tr>
                    <td>
                        <h4 class="mt-20 font-roboto font-medium text-lg text-blue-500 border-bottom-gray pb-1">Pagos realizados</h4>
                    </td>
                </tr>

                <tr>
                    <!-- Inicio Tabla Pagos Realizados, Pag 6 -->
                    <table style="width:auto" class="table-stripped table-p-1 font-roboto-condensed text-base">
                        <tbody>
                            <tr class="bg-neutral-50 text-center font-bold">
                                <td style="width:527px;" colspan="6" class="border-bottom-red">Pagos</td>
                                <td style="width:417px;" colspan="5" class="border-bottom-red">Abonos en USD</td>
                            </tr>
                            <tr class="bg-neutral-50 font-bold text-center">
                                <td style="width:36px;">#</td>
                                <td>Fecha</td>
                                <td>Observación</td>
                                <td>USD</td>
                                <td class="text-right">TRM <span class="text-color-primary">*</span></td>
                                <td>COP</td>
                                <td>Interes mora</td>
                                <td>Intereses</td>
                                <td>Capital</td>
                                <td>Cuota anticipada</td>
                                <td>Total</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">1</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Pago</td>
                                <td class="font-roboto-mono text-right">300</td>
                                <td class="font-roboto-mono text-right">3.781</td>
                                <td class="font-roboto-mono text-right text-green-500">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">2</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Cuota anticipada</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">62</td>
                                <td class="font-roboto-mono text-right">238</td>
                                <td class="font-roboto-mono text-right text-color-primary">(300)</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">3</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Pago</td>
                                <td class="font-roboto-mono text-right">60</td>
                                <td class="font-roboto-mono text-right">3.781</td>
                                <td class="font-roboto-mono text-right text-green-500">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">93</td>
                                <td class="font-roboto-mono text-right">300</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">4</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Cuota anticipada</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">300</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">5</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Pago</td>
                                <td class="font-roboto-mono text-right">60</td>
                                <td class="font-roboto-mono text-right">3.781</td>
                                <td class="font-roboto-mono text-right text-green-500">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">300</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">6</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Cuota anticipada</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">300</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">7</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Pago</td>
                                <td class="font-roboto-mono text-right">60</td>
                                <td class="font-roboto-mono text-right">3.781</td>
                                <td class="font-roboto-mono text-right text-green-500">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">0</td>
                                <td class="font-roboto-mono text-right">300</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">8</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Cuota anticipada</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">9</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Pago</td>
                                <td class="font-roboto-mono text-right">60</td>
                                <td class="font-roboto-mono text-right">3.781</td>
                                <td class="font-roboto-mono text-right text-green-500">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right text-color-primary">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">10</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Cuota anticipada</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">11</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Pago</td>
                                <td class="font-roboto-mono text-right">60</td>
                                <td class="font-roboto-mono text-right">3.781</td>
                                <td class="font-roboto-mono text-right text-green-500">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right text-color-primary">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">12</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Cuota anticipada</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">13</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Pago</td>
                                <td class="font-roboto-mono text-right">60</td>
                                <td class="font-roboto-mono text-right">3.781</td>
                                <td class="font-roboto-mono text-right text-green-500">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right text-color-primary">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">14</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Cuota anticipada</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">15</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Pago</td>
                                <td class="font-roboto-mono text-right">60</td>
                                <td class="font-roboto-mono text-right">3.781</td>
                                <td class="font-roboto-mono text-right text-green-500">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right text-color-primary">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">16</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Cuota anticipada</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">17</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Pago</td>
                                <td class="font-roboto-mono text-right">60</td>
                                <td class="font-roboto-mono text-right">3.781</td>
                                <td class="font-roboto-mono text-right text-green-500">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right text-color-primary">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr>
                                <td class="font-roboto-mono text-right">18</td>
                                <td class="font-roboto-mono text-right">12 dic 2022</td>
                                <td>Cuota anticipada</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">1.134.255</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">100</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">300</td>
                            </tr>
                            <tr class="font-bold">
                                <td></td>
                                <td></td>
                                <td class="text-right">TOTAL</td>
                                <td class="font-roboto-mono text-right">1800</td>
                                <td></td>
                                <td class="font-roboto-mono text-right">6.987.986</td>
                                <td class="text-right">-</td>
                                <td class="font-roboto-mono text-right">1.099</td>
                                <td class="font-roboto-mono text-right">710</td>
                                <td class="font-roboto-mono text-right">-</td>
                                <td class="font-roboto-mono text-right">1800</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="font-roboto font-normal text-neutral-80 text-sm"><span class="text-color-primary">* </span> TRM= Tasa Representativa del Mercado.</div>
                    <!-- Fin Tabla Pagos Realizados, Pag 6 -->
                </tr>

            </table>
            <!-- End Main Layout Pag 5 -->
        </div>
        <!-- Fin Página 5 -->

        <!-- Inicio Página 6 -->
        <div class="page" style="page-break-before: always;">
            <table>
                <h4 class="mt-20 font-roboto font-medium text-lg text-blue-500 border-bottom-gray pb-1">Plan de pagos refinanciado</h4>

                <!-- Inicio Tabla Página 6 -->
                <table style="width:auto;" class="table-stripped table-p-1 font-roboto-condensed text-base">
                    <tbody>
                        <tr class="font-bold text-center">
                            <td class="bg-transparent"></td>
                            <td class="bg-transparent"></td>
                            <td colspan="4" class="border-bottom-red">Discriminacion del pago</td>
                            <td colspan="4" class="border-bottom-red">Saldos acumulados</td>
                            <td colspan="2" class="border-bottom-red">Saldos deuda</td>
                        </tr>
                        <tr class="font-bold text-center bg-neutral-50">
                            <td>#</td>
                            <td>Fecha</td>
                            <td>Cuota</td>
                            <td>A seguro</td>
                            <td>A interés</td>
                            <td>A capital</td>
                            <td>A interés <br />acumulado</td>
                            <td>Interés del mes</td>
                            <td>Pendiente <br />interés mes</td>
                            <td>Acum. pend.<br />interés mes</td>
                            <td>Sin interés</td>
                            <td>Con interés</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="bg-blue-200 font-roboto-mono text-right ">
                            <td>1</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>204</td>
                            <td>6</td>
                            <td>40</td>
                            <td>28.351</td>
                            <td>28.351</td>
                            <td style="vertical-align: top;" class="font-roboto bg-transparent"><span class="point bg-blue-200"></span> Meses de cuota reducida</td>
                        </tr>
                        <tr class="bg-blue-200 font-roboto-mono text-right ">
                            <td>2</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>204</td>
                            <td>6</td>
                            <td>80</td>
                            <td>28.341</td>
                            <td>28.341</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="bg-blue-200 font-roboto-mono text-right">
                            <td>3</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>40</td>
                            <td>121</td>
                            <td>28.331</td>
                            <td>28.331</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right" >
                            <td>4</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>40</td>
                            <td>161</td>
                            <td>28.321</td>
                            <td>28.321</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right" >
                            <td>5</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>40</td>
                            <td>201</td>
                            <td>28.311</td>
                            <td>28.311</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right" >
                            <td>6</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>40</td>
                            <td>240</td>
                            <td>28.301</td>
                            <td>28.301</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right" >
                            <td>7</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>28.291</td>
                            <td>28.291</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>8</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.900</td>
                            <td>27.900</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>9</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.506</td>
                            <td>27.506</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>10</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>11</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>12</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>13</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>14</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right font-medium">
                            <td></td>
                            <td>TOTAL</td>
                            <td>36.539</td>
                            <td>257</td>
                            <td>7.576</td>
                            <td>28.279</td>
                            <td>-</td>
                            <td>7.816</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-transparent"></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Fin Tabla Página 6 -->
            </table>
        </div>
        <!--  Fin Página 6-->

        <!-- Inicio Página 7 -->
        <div class="page" style="page-break-before: always;">
        <table>
                <h4 class="mt-20 font-roboto font-medium text-lg text-blue-500 border-bottom-gray pb-1">Plan de pagos cuota anticipada</h4>

                <!-- Inicio Tabla Página 6 -->
                <table style="width:auto;" class="table-stripped table-p-1 font-roboto-condensed text-base">
                    <tbody>
                        <tr class="font-bold text-center">
                            <td class="bg-transparent"></td>
                            <td class="bg-transparent"></td>
                            <td colspan="4" class="border-bottom-red">Discriminacion del pago</td>
                            <td colspan="4" class="border-bottom-red">Saldos acumulados</td>
                            <td colspan="2" class="border-bottom-red">Saldos deuda</td>
                        </tr>
                        <tr class="font-bold text-center bg-neutral-50">
                            <td>#</td>
                            <td>Fecha</td>
                            <td>Cuota</td>
                            <td>A seguro</td>
                            <td>A interés</td>
                            <td>A capital</td>
                            <td>A interés <br />acumulado</td>
                            <td>Interés del mes</td>
                            <td>Pendiente <br />interés mes</td>
                            <td>Acum. pend.<br />interés mes</td>
                            <td>Sin interés</td>
                            <td>Con interés</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="bg-blue-200 font-roboto-mono text-right ">
                            <td>1</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>204</td>
                            <td>6</td>
                            <td>40</td>
                            <td>28.351</td>
                            <td>28.351</td>
                            <td style="vertical-align: top;" class="font-roboto bg-transparent"><span class="point bg-blue-200"></span> Meses de cuota reducida</td>
                        </tr>
                        <tr class="bg-blue-200 font-roboto-mono text-right ">
                            <td>2</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>204</td>
                            <td>6</td>
                            <td>80</td>
                            <td>28.341</td>
                            <td>28.341</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="bg-blue-200 font-roboto-mono text-right">
                            <td>3</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>40</td>
                            <td>121</td>
                            <td>28.331</td>
                            <td>28.331</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right" >
                            <td>4</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>40</td>
                            <td>161</td>
                            <td>28.321</td>
                            <td>28.321</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right" >
                            <td>5</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>40</td>
                            <td>201</td>
                            <td>28.311</td>
                            <td>28.311</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right" >
                            <td>6</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>40</td>
                            <td>240</td>
                            <td>28.301</td>
                            <td>28.301</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right" >
                            <td>7</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>28.291</td>
                            <td>28.291</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>8</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.900</td>
                            <td>27.900</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>9</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>7</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.506</td>
                            <td>27.506</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>10</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>11</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>12</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>13</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right">
                            <td>14</td>
                            <td>01 mar 2022</td>
                            <td class="text-color-primary">180</td>
                            <td>6</td>
                            <td>163</td>
                            <td>10</td>
                            <td>-</td>
                            <td>203</td>
                            <td>-</td>
                            <td>240</td>
                            <td>27.109</td>
                            <td>27.109</td>
                            <td class="bg-transparent"></td>
                        </tr>
                        <tr class="font-roboto-mono text-right font-medium">
                            <td></td>
                            <td>TOTAL</td>
                            <td>36.539</td>
                            <td>257</td>
                            <td>7.576</td>
                            <td>28.279</td>
                            <td>-</td>
                            <td>7.816</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-transparent"></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Fin Tabla Página 6 -->
            </table>
        </div>
        <!-- Fin Página 7 -->

    </main>

</body>

</html>
