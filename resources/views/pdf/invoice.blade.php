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
            .p-0 {
                padding: 0 !important;
            }

            .p-1 {
                padding: 5px;
            }

            .pl-1 {
                padding: 8px;
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

            .bg-gray {
                background-color: #FFFFFF;
            }

            .bg-white{
                background-color: white;
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

            .border-bottom-red {
                border-bottom: 1px solid #DC0000;
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

        .table-resumen th,
        .table-resumen td {
            width: 25%;
            font-size: 8px;
            text-align: center;
            vertical-align: middle;
            padding: 4px;
        }

        .table-resumen td {
            height: 20px;
        }

        .table-resumen th {
            text-align: center;
        }

        .table-proximo {
            width: 40%;
        }

        .table-proximo th,
        .table-proximo td {
            padding: 4px;
        }

        .table-date th,
        .table-date td {
            vertical-align: top;
            padding: 4px;
        }

        .table-requisitos {
            width: 80%;
        }

        .table-requisitos th {
            text-align: center;
        }

        .bg-gray {
            background-color: #E5E5E5;
        }

        .bg-light-gray {
            background-color: #F4F4F4;
        }

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
    <header>
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
    <footer class="border-top">
        <table>
            <tr>
                <td width="40%" class="font-roboto-mono text-base font-normal">Extracto Crédito Beca COLFUTURO. Corte al 07 jul 2022.</td>
                <td width="20%" class="font-roboto-mono text-base font-normal text-center"><b class="page-count"></b></td>
                <td width="40%" class="font-roboto-mono text-base font-normal text-right">Generado el 07 jul 2022, 17:54</td>
            </tr>
        </table>
    </footer>

    <main>
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
                                                aria-hidden="true"> .................................................</span></span><span
                                            class="font-roboto-mono font-normal text-base">01</span></li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Estado Crédito<span class="leaders"
                                                aria-hidden="true">.....................................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li class="my-5"><span class="font-roboto font-normal text-lg text-neutral-90">Próximo pago Crédito<span class="leaders"
                                                aria-hidden="true">..........................................</span></span>
                                        <span class="font-roboto-mono font-normal text-base">01</span>
                                    </li>
                                    <li ><span class="font-roboto font-normal text-lg text-neutral-90">Requisitos para mantener mi estatus<span class="leaders"
                                                aria-hidden="true">..................</span></span> <span class="font-roboto-mono font-normal text text-lg">01</span>
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
                        <h4 class="font-roboto font-medium text-lg text-neutral-90">
                            Resumen general <span class="text-color-primary">*</span>
                        </h4>
                        <hr style="color:#F4F4F4;">
                        
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

                    <td width="50%" class="pl-20">
                        <h4 class="font-roboto font-medium text-lg text-neutral-90">Estado Crédito</h4>
                        <hr style="color:#F4F4F4;">
                        <b>Crédito <span style="color:#00aa1a;">al día</span> </b>

                        <h4 style="margin-top:50px;">Próximo pago Crédito</h4>
                        <hr style="color:#F4F4F4;">
                        <table class="table-proximo">
                            <tr>
                                <td height="18px" class="bg-light-gray">Fecha próximo pago</td>
                                <td height="18px" class="bg-gray">12 dic 2022</td>
                            </tr>
                            <tr>
                                <td height="18px" class="bg-light-gray"><b>Pago sugerido</b></td>
                                <td height="18px" class="bg-gray"><b>USD 1.229</b></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr style="vertical-align: top;">
                    <td width="50%" class="pr-20">
                        <h4 class="font-roboto font-medium text-lg text-neutral-90">Fechas del Crédito</h4>
                        <hr style="color:#F4F4F4;">
                        <table class="table-date" style="font-size:10px;">
                            <tr>
                                <td height="18px" style="color: #808080;">Inicio financiación</td>
                                <td height="18px" class="text-right"><b>01 sep 2018</b></td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px"style="color: #808080;">Fin financiación</td>
                                <td height="18px" class="text-right"><b>01 sep 2018
                                        <hr style="color:#CCCCCC;"> 24 meses
                                    </b></td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" style="color: #808080;">Fin de estudios</td>
                                <td height="18px" class="text-right"><b>29 ene 2021</b></td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" style="color: #808080; margin-botton:5px;">Fin financiación</td>
                                <td height="18px" style=" margin-top:5px;" class="text-right"><b>21 ago 2020 <br> +
                                        72 meses
                                        <hr style="color:#CCCCCC;">
                                    </b></td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" style="color: #808080;">Fecha permanencia</td>
                                <td height="18px" class="text-right"><b>31 ago 2026</b></td>
                                <td height="18px">(Fecha máxima para cumplir permanencia)</td>
                            </tr>
                        </table>
                    </td>
                    <td width="50%" class="pl-20">
                        <h4 class="font-roboto font-medium text-lg text-neutral-90">Requisitos para mantener mi estatus</h4>
                        <hr style="color:#F4F4F4;">
                        <table class="table-requisitos">
                            <tr>
                                <th height="18px" class="bg-gray">Requisitos</th>
                                <th height="18px"class="bg-gray">Desde</th>
                                <th height="18px"class="bg-gray">Hasta</th>
                                <th height="18px"class="bg-gray">Estado</th>
                            </tr>
                            <tr>
                                <td height="18px">Paz y salvo financiero de la universidad</td>
                                <td height="18px">12 dic 2022</td>
                                <td height="18px">Permanente</td>
                                <td height="18px" class="text-center" style="color:#33c481;">[-]</td>
                            </tr>
                            <tr>
                                <td height="18px" class="bg-light-gray">Certificado laboral</td>
                                <td height="18px" class="bg-light-gray">12 dic 2022</td>
                                <td height="18px" class="bg-light-gray">12 dic 2022</td>
                                <td height="18px" class="bg-light-gray text-center" style="color:#fb3449;">[-]</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </main>

</body>

</html>
