<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
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

        .point {
            width: 6px;
            height: 6px;
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

        .m-0 {
            margin: 0 !important;
        }

        .p-0 {
            padding: 0 !important;
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
                <td class="header_list" width="35%">
                    <ul>
                        <li><small class="text-primary">Paloma Geraldine David Velásquez de la Santísima
                                Trinidad</small></li>
                        <li><small class="text-normal">Maestría/Teacher Education and Learning Sciences of Social Arts
                                and Europe</small></li>
                        <li><small class="text-normal">Universiteit van Amsterdam - Uva Amsterdam, Noord-Holland /
                                Holanda</small></li>
                    </ul>
                </td>
                <td class="header_list" width="35%">
                    <ul>
                        <li><small class="text-normal">CC: <span style="font-weight: 500;">1.018.473.865 </span>
                            </small> </li>
                        <li><small class="text-normal">Código: <span style="font-weight: 500;">201.806.121
                                </span></small></li>
                        <li><small class="text-normal">Estado: <span style="font-weight: 500;">PAEC(Periodo Amortización
                                    Exterior con
                                    Condonación)</span></small></li>
                    </ul>
                </td>
                <td class="header_list" width="20%">
                    <ul>
                        <li style=" vertical-align: middle; display:block;  margin-bottom:0px;"><small
                                class="text-normal" style="color: #000000"><span class="point"
                                    style="background: #000000"></span> Ir a
                                inicio</small> </li>
                        <li style=" vertical-align: middle; display:block;  margin-bottom:0px;"><small
                                class="text-normal" style="color: #3f83f8"><span class="point"
                                    style="background: #3f83f8"></span> Ir a
                                extracto Crédito</small> </li>
                        <li style=" vertical-align: middle; display:block; margin-bottom:0px;"><small
                                class="text-normal" style="color: #c27803"><span class="point"
                                    style="background: #c27803"></span> Ir a
                                extracto Beca</small> </li>
                    </ul>
                </td>
            </tr>
        </table>
    </header>

    <!-- FOOTER -->
    <footer>
        <table class="footer">
            <tr>
                <td width="40%">Extracto Crédito Beca COLFUTURO. Corte al 07 jul 2022.</td>
                <td width="20%" class="text-center"><b class="page-count"></b></td>
                <td width="40%" class="text-right">Generado el 07 jul 2022, 17:54</td>
            </tr>
        </table>
    </footer>

    <main>
        <!-- Inicio de 1 página, Tabla de contenido -->
        <div class="page" style="page-break-after: always;">
            <table class="tableOfContent" style="font-size:9px;">
                <tr>
                    <td>
                        <h4 style="color: #dc0000;" class="p-0 m-0">Tabla de contenido</h4>
                        <ul style="list-style:none; margin-top:30px;">
                            <li>
                                <h4 class="m-0">Extracto programa Crédito Beca</h4>
                                <ul style="list-style:none; margin-top:15px;" class="toc-list">
                                    <li class="my-5"><span class="title">Resumen general<span class="leaders"
                                                aria-hidden="true">.................................................</span></span><span
                                            class="number">01</span></li>
                                    <li class="my-5"><span>Estado Crédito<span class="leaders"
                                                aria-hidden="true">.....................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Próximo pago Crédito<span class="leaders"
                                                aria-hidden="true">..........................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Requisitos para mantener mi estatus<span class="leaders"
                                                aria-hidden="true">..................</span></span> <span>01</span>
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
                                <h4 style="color: #3F83F8;" class="m-0">Extracto Crédito</h4>
                                <ul style="list-style:none; margin-top:15px;">
                                    <li class="my-5"><span>Resumen<span class="leaders"
                                                aria-hidden="true">..............................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Intereses y seguro<span class="leaders"
                                                aria-hidden="true">................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Mora<span class="leaders"
                                                aria-hidden="true">.....................................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Desembolsos<span class="leaders"
                                                aria-hidden="true">.......................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Cuotas pagadas<span class="leaders"
                                                aria-hidden="true">...................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Apoyos de terceras entidades<span class="leaders"
                                                aria-hidden="true">..............................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Pagos realizados<span class="leaders"
                                                aria-hidden="true">..................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Plan de pagos<span class="leaders"
                                                aria-hidden="true">.......................................................</span></span>
                                        <span>01</span>
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
                                <h4 style="color: #E3A008;"class="m-0">Extracto Beca</h4>
                                <ul style="list-style:none; margin-top:15px;">
                                    <li class="my-5"><span>Resumen<span class="leaders"
                                                aria-hidden="true">..............................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Intereses y seguro<span class="leaders"
                                                aria-hidden="true">................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Mora<span class="leaders"
                                                aria-hidden="true">.....................................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Desembolsos<span class="leaders"
                                                aria-hidden="true">.......................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Cuotas pagadas<span class="leaders"
                                                aria-hidden="true">...................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Apoyos de terceras entidades<span class="leaders"
                                                aria-hidden="true">..............................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Pagos realizados<span class="leaders"
                                                aria-hidden="true">..................................................</span></span>
                                        <span>01</span>
                                    </li>
                                    <li class="my-5"><span>Plan de pagos<span class="leaders"
                                                aria-hidden="true">.......................................................</span></span>
                                        <span>01</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Fin de 1 página, Tabla de contenido -->

        <div class="page" style="page-break-after: avoid;">
            <table style="font-size:11px;">
                <tr>
                    <td>
                        <h4 style="color: #dc0000;" class="p-0 m-0">Extracto programa Crédito Beca</h4>
                    </td>
                </tr>
                <tr style="vertical-align: top;">
                    <td width="50%" class="pr-20">
                        <h4
                            style="font-family: 'Roboto';font-style: normal;font-weight: 500; color: rgba(0, 0, 0, 0.87);">
                            Resumen general<span style="color: #dc0000;">*</span></h4>
                        <hr style="color:#F4F4F4;">
                        <table class="table-resumen" style="with:280px !important">
                            <tr>
                                <th  height="18px" width="80px" class="bg-gray">
                                </th>
                                <th width="50px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF;" height="18px"
                                    width="18%"class="bg-gray">Crédito</th>
                                <th style="border-right: 1px solid #FFF;" height="18px"
                                    width="42%"class="bg-gray" colspan="2"
                                    style="border-bottom: 1px solid #dc0000;">Beca</th>
                                <th height="18px" width="6%"></th>
                            </tr>
                            <tr>
                                <td height="18px" width="80px"></td>
                                <td width="50px" height="18px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF;">
                                    USD</td>
                                <td height="18px">USD</td>
                                <td height="18px">COP</td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" width="80px"class="text-left bg-light-gray">Desembolsos</td>
                                <td width="50px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF;"
                                    height="18px"class="bg-light-gray">29.743</td>
                                <td style="border-right: 1px solid #FFF;" height="18px"class="bg-light-gray">20.000
                                </td>
                                <td height="18px"class="bg-light-gray">63.261.923</td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" width="80px"class="text-left">Intereses</td>
                                <td width="50px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF;" height="18px">
                                    4.865</td>
                                <td style="border-right: 1px solid #FFF;" height="18px"></td>
                                <td height="18px">9.630.690</td>
                                <td height="18px" class="text-left" style="color: #dc0000;">**</td>
                            </tr>
                            <tr>
                                <td height="18px" width="80px" class="text-left bg-light-gray">Seguro deudores
                                </td>
                                <td width="50px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF;" height="18px"
                                    class="bg-light-gray">189</td>
                                <td style="border-right: 1px solid #FFF;" height="18px" class="bg-light-gray"></td>
                                <td height="18px" class="bg-light-gray"></td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" width="80px"class="text-left">Mora</td>
                                <td width="50px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF;" height="18px">
                                    29</td>
                                <td style="border-right: 1px solid #FFF;" height="18px"></td>
                                <td height="18px"></td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" width="80px" class="text-left bg-light-gray">Pagos</td>
                                <td  width="50px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF; color: #dc0000;"
                                    height="18px" class="bg-light-gray">(1.800)</td>
                                <td style="border-right: 1px solid #FFF;" height="18px"class="bg-light-gray"></td>
                                <td height="18px"class="bg-light-gray" style="color: #dc0000;">(8.506.908)</td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" width="80px" class="text-left">Condonación estimada</td>
                                <td width="50px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF;" height="18px">
                                </td>
                                <td style="border-right: 1px solid #FFF;" height="18px"></td>
                                <td height="18px" style="color: #dc0000;">(10.698.900)</td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" width="80px" class="text-left bg-light-gray">Apoyos entregados</td>
                                <td width="50px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF; color: #dc0000;"
                                    height="18px" class="bg-light-gray">(4.519)</td>
                                <td style="border-right: 1px solid #FFF;" height="18px" class="bg-light-gray"></td>
                                <td height="18px" class="bg-light-gray"></td>
                                <td height="18px"></td>
                            </tr>
                            <tr>
                                <td height="18px" width="80px" class="text-left bg-gray"><b>TOTAL</b></td>
                                <td width="50px" style="border-right: 3px solid #FFF; border-left: 3px solid #FFF;" height="18px"
                                    class="bg-gray"><b>33.025</b></td>
                                <td style="border-right: 1px solid #FFF;" height="18px" class="bg-gray">
                                    <b>33.025</b></td>
                                <td height="18px" class="bg-gray"><b>53.686.805</b></td>
                                <td height="18px"></td>
                            </tr>
                        </table>
                        <small style="color: #808080;"><span style="color: #dc0000;">* </span> Este resumen no muestra
                            decimales pero los
                            cálculos los consideran todos</small>
                        <br>
                        <small style="color: #808080;"><span style="color: #dc0000;">**</span> Intereses calculados
                            con la inflación</small>
                    </td>
                    <td width="50%" class="pl-20">
                        <h4>Estado Crédito</h4>
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
                        <h4>Fechas del Crédito</h4>
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
                        <h4>Requisitos para mantener mi estatus</h4>
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
