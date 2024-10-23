<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>{{config('app.name')}} | Invoice (#FAI-321562)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <td class="content-block">
                                        <img src="{{App\WebsiteSetting::find(1)->first()->website_logo}}" alt="">
                                    </td>
                                    <tr>
                                    <td class="content-block">
                                        <h2>{{__('Thanks for using')}} {{config('app.name')}}</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                        @php
                    $start_date = explode(" ",$order->created_at);
                    
                    @endphp
                                            <tbody><tr>
                                                <td>{{$order->Customer->user->name}}<br>{{__('Invoice')}} {{$order->order_number}}<br> {{__('At Date')}} : {{$start_date[0]}} {{__('Time')}} : {{$start_date[1]}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr><th>{{__('Trip Informations')}}</th></tr>
                                                        <tr>
                                                             <td>{{__('Driver')}}</td>
                                                             <td class="alignleft">{{$order->driver->user->name}}</td>
                                                        </tr>
                                                        <tr>
                                                             <td>{{__('Vehicle Plate')}}</td>
                                                             <td class="alignleft"><b>{{$order->vehicle->plate}}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{__('Vehicle Type')}}</td>
                                                            <td class="alignleft"><b>{{$order->vehicle->vehicleType->name}}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{__('KM Price')}}</td>
                                                            <td class="alignleft">{{$order->Office->km_price}} SYP</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{__('Opening Price')}}</td>
                                                            <td class="alignleft">{{$order->Office->open_price}} SYP</td>
                                                        </tr>
                                                        <tr><th>{{__('Trip Cost Informations')}}</th></tr>

                                                        <tr>
                                                            <td>{{__('Trip Est.Distance')}}</td>
                                                            <td class="alignleft">{{$order->est_distance}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{__('Trip Est.Time')}}</td>
                                                            <td class="alignleft">{{$order->est_time}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{__('Trip Est.Price')}}</td>
                                                            <td class="alignleft">{{$order->est_price}} SYP</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{__('Trip Costed Distance')}}</td>
                                                            <td class="alignleft">{{$order->live_distance}} </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{__('Trip Costed Time')}}</td>
                                                            <td class="alignleft">{{$order->live_time}} </td>
                                                        </tr>
                                                      
                                                        
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">{{__('Total')}}</td>
                                                            <td class="alignright">{{$order->live_price}} {{__('SYP')}}</td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <a href="#" onclick="window.print();return false;">{{__('Print Invoice')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                    {{App\WebsiteSetting::find(1)->first()->address}}
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
                <div class="footer no_print">
                    <table width="100%">
                        <tbody><tr>
                            <td class="aligncenter content-block">{{__('Questions? Email')}} <a href="mailto:{{App\WebsiteSetting::find(1)->first()->email}}">{{App\WebsiteSetting::find(1)->first()->email}}</a></td>
                        </tr>
                    </tbody></table>
                </div></div>
        </td>
        <td></td>
    </tr>
</tbody></table>

<style type="text/css">
/* -------------------------------------
    GLOBAL
    A very basic CSS reset
------------------------------------- */
* {
    margin: 0;
    padding: 0;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    box-sizing: border-box;
    font-size: 14px;
}

img {
    max-width: 100%;
}

body {
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    width: 100% !important;
    height: 100%;
    line-height: 1.6;
}

/* Let's make sure all tables have defaults */
table td {
    vertical-align: top;
}

/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */
body {
    background-color: #f6f6f6;
}

.body-wrap {
    background-color: #f6f6f6;
    width: 100%;
}

.container {
    display: block !important;
    max-width: 600px !important;
    margin: 0 auto !important;
    /* makes it centered */
    clear: both !important;
}

.content {
    max-width: 600px;
    margin: 0 auto;
    display: block;
    padding: 20px;
}

/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
.main {
    background: #fff;
    border: 1px solid #e9e9e9;
    border-radius: 3px;
}

.content-wrap {
    padding: 20px;
}

.content-block {
    padding: 0 0 20px;
}

.header {
    width: 100%;
    margin-bottom: 20px;
}

.footer {
    width: 100%;
    clear: both;
    color: #999;
    padding: 20px;
}
.footer a {
    color: #999;
}
.footer p, .footer a, .footer unsubscribe, .footer td {
    font-size: 12px;
}

/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
h1, h2, h3 {
    font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    color: #000;
    margin: 40px 0 0;
    line-height: 1.2;
    font-weight: 400;
}

h1 {
    font-size: 32px;
    font-weight: 500;
}

h2 {
    font-size: 24px;
}

h3 {
    font-size: 18px;
}

h4 {
    font-size: 14px;
    font-weight: 600;
}

p, ul, ol {
    margin-bottom: 10px;
    font-weight: normal;
}
p li, ul li, ol li {
    margin-left: 5px;
    list-style-position: inside;
}

/* -------------------------------------
    LINKS & BUTTONS
------------------------------------- */
a {
    color: #1ab394;
    text-decoration: underline;
}

.btn-primary {
    text-decoration: none;
    color: #FFF;
    background-color: #1ab394;
    border: solid #1ab394;
    border-width: 5px 10px;
    line-height: 2;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    border-radius: 5px;
    text-transform: capitalize;
}

/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
.last {
    margin-bottom: 0;
}

.first {
    margin-top: 0;
}

.aligncenter {
    text-align: center;
}

.alignright {
    text-align: right;
}

.alignleft {
    text-align: left;
    font-weight:bold;
}

.clear {
    clear: both;
}

/* -------------------------------------
    ALERTS
    Change the class depending on warning email, good email or bad email
------------------------------------- */
.alert {
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    padding: 20px;
    text-align: center;
    border-radius: 3px 3px 0 0;
}
.alert a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    font-size: 16px;
}
.alert.alert-warning {
    background: #f8ac59;
}
.alert.alert-bad {
    background: #ed5565;
}
.alert.alert-good {
    background: #1ab394;
}

/* -------------------------------------
    INVOICE
    Styles for the billing table
------------------------------------- */
.invoice {
    margin: 40px auto;
    text-align: left;
    width: 80%;
}
.invoice td {
    padding: 5px 0;
}
.invoice .invoice-items {
    width: 100%;
}
.invoice .invoice-items td {
    border-top: #eee 1px solid;
}
.invoice .invoice-items .total td {
    border-top: 2px solid #333;
    border-bottom: 2px solid #333;
    font-weight: 700;
}

/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
@media only screen and (max-width: 640px) {
    h1, h2, h3, h4 {
        font-weight: 600 !important;
        margin: 20px 0 5px !important;
    }

    h1 {
        font-size: 22px !important;
    }

    h2 {
        font-size: 18px !important;
    }

    h3 {
        font-size: 16px !important;
    }

    .container {
        width: 100% !important;
    }

    .content, .content-wrap {
        padding: 10px !important;
    }

    .invoice {
        width: 100% !important;
    }
}
@media print {
    .no_print{
        visibility:hidden;
    }
}

</style>

<script type="text/javascript">

</script>
</body>
</html>