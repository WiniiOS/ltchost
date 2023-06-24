<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--favicon icon-->
    <link rel="icon" href="{{ url('assets/img/favicon.png') }}" type="image/png" sizes="16x16" />
    <!--title-->
    <title>Facture</title>
    <!-- Styling -->
    <link href="assets/css/all.min.css?v=03d1c3" rel="stylesheet">
    <link href="assets/css/theme.min.css?v=03d1c3" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> -->
    <link href="assets/css/swiper-bundle.min.css?v=03d1c3" rel="stylesheet">
    <link href="assets/css/kohost.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link id="theme-dynamic" href="" as="style" rel="stylesheet" />
    <!-- endbuild -->
    <link href="assets/css/invoice.min.css?v=03d1c3" rel="stylesheet">

</head>

<body>
    
    <div class="container-fluid invoice-container">

            <div class="row invoice-header">
                <div class="col-12 col-sm-6 justify-content-sm-between text-center text-sm-left invoice-col">

                <p><img src="//whmcs.themetags.com/assets/img/logo.png" title="ThemeTags" /></p>
                <h5>Fatura #4</h5>

                </div>
                <div class="col-12 col-sm-6 invoice-col text-center">

                <div class="invoice-status">
                        <span class="paid">Pago</span>
                </div>

                    
                </div>
            </div>

            <hr>

            
            <div class="row justify-content-sm-between">
                <div class="col-12 col-sm-6 order-sm-last text-sm-right invoice-col right">
                    <strong>Pagar a</strong>
                    <address class="small-text">
                        Address goes here...
                                            </address>
                </div>
                <div class="col-12 col-sm-6 invoice-col">
                    <strong>Faturado para</strong>
                        <address class="small-text">
                        ThemeTags <br />asd Hex<br />
                        121 King Street, Melbourne, <br />
                        Melbourne, , 3000<br />
                        Israel
                        </address>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 order-sm-last text-sm-right invoice-col right">
                    <strong>Forma de Pagamento</strong><br>
                    <span class="small-text float-sm-right" data-role="paymethod-info">
                                                    PayPal                                            </span>
                    <br /><br />
                </div>
                <div class="col-12 col-sm-6 invoice-col">
                    <strong>Data da Fatura</strong><br>
                    <span class="small-text">
                        Tuesday, January 4th, 2022<br><br>
                    </span>
                </div>
            </div>

            <br />

            
            
            <div class="card bg-default">
                <div class="card-header">
                    <h5 class="card-title mb-0 font-size-24"><strong>Fatura Itens</strong></h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <td><strong>Descrição</strong></td>
                            <td width="20%" class="text-center"><strong>Valor</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>Addon (themetags.org) - Weebly Website Builder - Free (01/04/2022 - 02/03/2022)</td>
                                <td class="text-center">$0.00 USD</td>
                            </tr>
                                                <tr>
                            <td class="total-row text-right"><strong>Sub Total</strong></td>
                            <td class="total-row text-center">$0.00 USD</td>
                        </tr>
                                                                        <tr>
                            <td class="total-row text-right"><strong>Crédito</strong></td>
                            <td class="total-row text-center">$0.00 USD</td>
                        </tr>
                        <tr>
                            <td class="total-row text-right"><strong>Total</strong></td>
                            <td class="total-row text-center">$0.00 USD</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            
            <div class="transactions-container small-text">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <td class="text-center"><strong>Data Transação</strong></td>
                                <td class="text-center"><strong>Forma</strong></td>
                                <td class="text-center"><strong>ID. Transação</strong></td>
                                <td class="text-center"><strong>Valor</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                                                            <tr>
                                    <td class="text-center" colspan="4">Nenhuma Transação Relacionada</td>
                                </tr>
                                                        <tr>
                                <td class="text-right" colspan="3"><strong>Balanço</strong></td>
                                <td class="text-center">$0.00 USD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="float-right btn-group btn-group-sm d-print-none">
                <a href="javascript:window.print()" class="btn btn-default"><i class="fas fa-print"></i> imprimer</a>
                <a href="dl.php?type=i&amp;id=4" class="btn btn-default"><i class="fas fa-download"></i> Download</a>
            </div>

        
    </div>

    <p class="text-center d-print-none"><a href="clientarea.php?action=invoices">&laquo; Retornar para Área do Cliente</a></p>

    <div id="fullpage-overlay" class="w-hidden">
        <div class="outer-wrapper">
            <div class="inner-wrapper">
                <img src="/assets/img/overlay-spinner.svg" alt="">
                <br>
                <span class="msg"></span>
            </div>
        </div>
    </div>

</body>

</html>