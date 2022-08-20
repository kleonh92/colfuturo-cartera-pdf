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
        bottom: -40px;
        left: 0px;
        right: 0px;
    }

    /* Pages
    ========================================================================== */

    table {
        width: 100%;
    }

    .header_logo img{
        width: 100px;
    }

    .header_list ul{
        list-style:none
    }

    .header_list .text-primary {
        font-family: 'Roboto', sans-serif;
        font-style: normal;
        font-size: 10px;
        font-weight: 500;
        color: #dc0000;
    }

    .header_list .text-normal {
        font-family: 'Roboto', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 9px;
        color: rgba(0, 0, 0, 0.87);
    }

    .point{
        width: 10px;
        height: 10px;
        display: inline-block;
        margin-right: 5px;
    }

    .text-left{
        text-align: left !important;
    }

    .text-center{
        text-align: center !important;
    }

    .text-right{
        text-align: right !important;
    }

    .footer{
        font-size: 10px;
        font-family: "Roboto Mono", "monospace", sans-serif;
        font-style: normal;
        font-weight: 400;
        color: #000000de;
        border-top: 1px solid rgba(0, 0, 0, 0.87);
    }

    .page-count:after {
        content: counter(page) " de " counter(pages);
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

    .table-resumen th, .table-resumen td {
       width: 25%;
       text-align: center;
       vertical-align: middle;
       padding: 4px;
    }

    .table-resumen th {
       text-align: center;
    }

    .table-proximo {
        width: 40%;
    }

    .table-proximo th, .table-proximo td {
        padding: 4px;
    }

    .table-date th, .table-date td {
        vertical-align: top;
        padding: 4px;
    }

    .table-requisitos {
        width: 80%;
    }

    .table-requisitos th{
        text-align: center;
    }

    .bg-gray {
        background-color: #E5E5E5;
    }

    .bg-light-gray {
        background-color: #F4F4F4;
    }


    </style>
</head>
<body>
        <!-- HEADER -->
        <header>
            <table class="header">
                <tr>
                    <td class="header_logo" width="10%">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Logo-Logo.svg" alt="Logo"/>
                    </td>
                    <td class="header_list" width="35%">
                        <ul>
                            <li><small class="text-primary">Paloma Geraldine David Velásquez de la Santísima Trinidad</small></li>
                            <li><small class="text-normal">Maestría/Teacher Education and Learning Sciences of Social Arts and Europe</small></li>
                            <li><small class="text-normal">Universiteit van Amsterdam - Uva Amsterdam, Noord-Holland / Holanda</small></li>
                        </ul>
                    </td>
                    <td class="header_list" width="35%">
                        <ul>
                            <li><small class="text-normal">CC: 1.018.473.865</small></li>
                            <li><small class="text-normal">Código: 201.806.121</small></li>
                            <li><small class="text-normal">Estado: PAEC(Periodo Amortización Exterior con Condonación)</small></li>
                        </ul>
                    </td>
                    <td class="header_list" width="20%">
                        <ul>
                            <li><small class="text-normal" style="color: #000000"><span class="point" style="background: #000000"></span> Ir a inicio</small> </li>
                            <li><small class="text-normal" style="color: #3f83f8"><span class="point" style="background: #3f83f8"></span> Ir a extracto Crédito</small> </li>
                            <li><small class="text-normal" style="color: #c27803"><span class="point" style="background: #c27803"></span> Ir a extracto Beca</small> </li>
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
            <div class="page" style="page-break-after: always;">
                <table class="tableOfContent" style="font-size:13px;">
                    <tr>
                        <td>
                            <h4 style="color: #dc0000;" class="p-0 m-0">Tabla de contenido</h4>
                            <ul style="list-style:none;">
                                <li>
                                    <h4 class="m-0">Extracto programa Crédito Beca</h4>
                                    <ul style="list-style:none;" class="toc-list">
                                        <li class="my-5"><span class="title">Resumen general<span class="leaders" aria-hidden="true">.................................................</span></span><span class="number">01</span></li>
                                        <li class="my-5"><span>Estado Crédito<span class="leaders" aria-hidden="true">.....................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Próximo pago Crédito<span class="leaders" aria-hidden="true">..........................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Requisitos para mantener mi estatus<span class="leaders" aria-hidden="true">..................</span></span> <span>01</span> </li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="color: #3F83F8;" class="p-0 m-0">Extracto Crédito</h4>
                            <ul style="list-style:none;">
                                <li>
                                    <h4 class="m-0">Extracto programa Crédito Beca</h4>
                                    <ul style="list-style:none;">
                                        <li class="my-5"><span>Resumen<span class="leaders" aria-hidden="true">..............................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Intereses y seguro<span class="leaders" aria-hidden="true">................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Mora<span class="leaders" aria-hidden="true">.....................................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Desembolsos<span class="leaders" aria-hidden="true">.......................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Cuotas pagadas<span class="leaders" aria-hidden="true">...................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Apoyos de terceras entidades<span class="leaders" aria-hidden="true">..............................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Pagos realizados<span class="leaders" aria-hidden="true">..................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Plan de pagos<span class="leaders" aria-hidden="true">.......................................................</span></span> <span>01</span> </li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 style="color: #E3A008;" class="p-0 m-0">Extracto Beca</h4>
                            <ul style="list-style:none;">
                                <li>
                                    <h4 class="m-0">Extracto programa Crédito Beca</h4>
                                    <ul style="list-style:none;">
                                        <li class="my-5"><span>Resumen<span class="leaders" aria-hidden="true">..............................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Intereses y seguro<span class="leaders" aria-hidden="true">................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Mora<span class="leaders" aria-hidden="true">.....................................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Desembolsos<span class="leaders" aria-hidden="true">.......................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Cuotas pagadas<span class="leaders" aria-hidden="true">...................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Apoyos de terceras entidades<span class="leaders" aria-hidden="true">..............................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Pagos realizados<span class="leaders" aria-hidden="true">..................................................</span></span> <span>01</span> </li>
                                        <li class="my-5"><span>Plan de pagos<span class="leaders" aria-hidden="true">.......................................................</span></span> <span>01</span> </li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="page">
                <table style="font-size:11px;">
                    <tr>
                        <td><h4 style="color: #dc0000;" class="p-0 m-0">Extracto programa Crédito Beca</h4></td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td width="50%" class="pr-20">
                            <h4>Resumen general</h4>
                            <hr style="color:#F4F4F4;">
                            <table class="table-resumen">
                                <tr>
                                    <th class="bg-gray"></th>
                                    <th class="bg-gray">Crédito</th>
                                    <th class="bg-gray" colspan="2">Beca</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>USD</td>
                                    <td>USD</td>
                                    <td>COP</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-light-gray">Desembolsos</td>
                                    <td class="bg-light-gray">29.743</td>
                                    <td class="bg-light-gray">20.000</td>
                                    <td class="bg-light-gray">63.261.923</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Intereses</td>
                                    <td>4.865</td>
                                    <td></td>
                                    <td>9.630.690</td>
                                    <td class="text-left" style="color: #dc0000;">**</td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-light-gray">Seguro deudores</td>
                                    <td class="bg-light-gray">189</td>
                                    <td class="bg-light-gray"></td>
                                    <td class="bg-light-gray"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Mora</td>
                                    <td>29</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-light-gray">Pagos</td>
                                    <td class="bg-light-gray" style="color: #dc0000;">(1.800)</td>
                                    <td class="bg-light-gray"></td>
                                    <td class="bg-light-gray" style="color: #dc0000;">(8.506.908)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Condonación estimada</td>
                                    <td></td>
                                    <td></td>
                                    <td style="color: #dc0000;">(10.698.900)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-light-gray">Apoyos entregados</td>
                                    <td class="bg-light-gray" style="color: #dc0000;">(4.519)</td>
                                    <td class="bg-light-gray"></td>
                                    <td class="bg-light-gray"></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-left bg-gray"><b>TOTAL</b></td>
                                    <td class="bg-gray"><b>33.025</b></td>
                                    <td class="bg-gray"><b>33.025</b></td>
                                    <td class="bg-gray"><b>53.686.805</b></td>
                                    <td></td>
                                </tr>
                            </table>
                            <small><span style="color: #dc0000;">* </span> Este resumen no muestra decimales pero los cálculos los consideran todos</small>
                            <br>
                            <small><span style="color: #dc0000;">**</span> Intereses calculados con la inflación</small>
                        </td>
                        <td width="50%" class="pl-20">
                            <h4>Estado Crédito</h4>
                            <hr style="color:#F4F4F4;">
                            <b>Crédito <span style="color:#00aa1a;">al día</span> </b>

                            <h4 style="margin-top:50px;">Próximo pago Crédito</h4>
                            <hr style="color:#F4F4F4;">
                            <table class="table-proximo">
                                <tr>
                                    <td class="bg-light-gray">Fecha próximo pago</td>
                                    <td class="bg-gray">12 dic 2022</td>
                                </tr>
                                <tr>
                                    <td class="bg-light-gray"><b>Pago sugerido</b></td>
                                    <td class="bg-gray"><b>USD 1.229</b></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr style="vertical-align: top;">
                        <td width="50%" class="pr-20">
                            <h4>Fechas del Crédito</h4>
                            <hr style="color:#F4F4F4;">
                            <table class="table-date">
                                <tr>
                                    <td>Inicio financiación</td>
                                    <td class="text-right"><b>01 sep 2018</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Fin financiación</td>
                                    <td class="text-right"><b>01 sep 2018 <hr> 24 meses </b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Fin de estudios</td>
                                    <td class="text-right"><b>29 ene 2021</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Fin financiación</td>
                                    <td class="text-right"><b>21 ago 2020 <br> + 72 meses <hr> </b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Fecha permanencia</td>
                                    <td class="text-right"><b>31 ago 2026</b></td>
                                    <td>(Fecha máxima para cumplir permanencia)</td>
                                </tr>
                            </table>
                        </td>
                        <td width="50%" class="pl-20">
                            <h4>Requisitos para mantener mi estatus</h4>
                            <hr style="color:#F4F4F4;">
                            <table class="table-requisitos">
                                <tr>
                                    <th class="bg-gray">Requisitos</th>
                                    <th class="bg-gray">Desde</th>
                                    <th class="bg-gray">Hasta</th>
                                    <th class="bg-gray">Estado</th>
                                </tr>
                                <tr>
                                    <td>Paz y salvo financiero de la universidad</td>
                                    <td>12 dic 2022</td>
                                    <td>Permanente</td>
                                    <td class="text-center" style="color:#33c481;">[-]</td>
                                </tr>
                                <tr>
                                    <td class="bg-light-gray">Certificado laboral</td>
                                    <td class="bg-light-gray">12 dic 2022</td>
                                    <td class="bg-light-gray">12 dic 2022</td>
                                    <td class="bg-light-gray text-center" style="color:#fb3449;">[-]</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </main>

</body>
</html>
