
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>invoice page - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    <?php
        include "style.css";
    ?>
    	/* body{margin-top:20px;
background-color: #f7f7ff;
}
#invoice {
    padding: 0px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #0d6efd
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #0d6efd
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #0d6efd;
    background: #e7f2ff;
    padding: 10px;
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,
.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #0d6efd;
    font-size: 1.2em
}

.invoice table .qty,
.invoice table .total,
.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #0d6efd
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #0d6efd;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}

.invoice table tfoot tr:last-child td {
    color: #0d6efd;
    font-size: 1.4em;
    border-top: 1px solid #0d6efd
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px !important;
        overflow: hidden !important
    }
    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }
    .invoice>div:last-child {
        page-break-before: always
    }
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #0d6efd;
    background: #e7f2ff;
    padding: 10px;
} */
    </style>
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body">
<div id="invoice">
<div class="toolbar hidden-print">
 <div class="text-end">
<button type="button" class="btn btn-dark"><i class="fa fa-print"></i> Print</button>
<button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
</div>
<hr>
</div>
<div class="invoice overflow-auto">
<div style="min-width: 600px">
<header>
<div class="row">
<div class="col">
<a href="javascript:;">
<img src="logo.png" width="320" alt="">
</a>
</div>
<div class="col company-details">
<h2 class="name">
<a target="_blank" href="javascript:;">
Konkan Guide
</a>
</h2>
<div>124, Powai Plaza,Near IIT MUMBAI Powai , Mumbai 400042</div>
<div>+91 7506703069</div>
<div>+91 8928017882</div>
<div><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="13707c7e63727d6a53766b727e637f763d707c7e">[email&#160;protected]</a></div>
</div>
</div>
</header>
<main>
<div class="row contacts">
<div class="col invoice-to">
<div class="text-gray-light">INVOICE TO:</div>
<h2 class="to">John Doe</h2>
<div class="address">796 Silver Harbour, TX 79273, US</div>
<div class="email"><a href="/cdn-cgi/l/email-protection#7b111413153b1e031a160b171e55181416"><span class="__cf_email__" data-cfemail="0b616463654b6e736a667b676e25686466">[email&#160;protected]</span></a>
</div>
</div>
<div class="col invoice-details">
<h1 class="invoice-id">INVOICE 3-2-1</h1>
<div class="date">Date of Invoice: 01/10/2018</div>
<div class="date">Due Date: 30/10/2018</div>
</div>
</div>
<table>
<thead>
<tr>
<th>#</th>
<th class="text-left">DESCRIPTION</th>
<th class="text-right">HOUR PRICE</th>
<th class="text-right">HOURS</th>
<th class="text-right">TOTAL</th>
</tr>
</thead>
<tbody>
<tr>
<td class="no">04</td>
<td class="text-left">
<h3>
<a target="_blank" href="javascript:;">
Youtube channel
</a>
</h3>
<a target="_blank" href="javascript:;">
Useful videos
</a> to improve your Javascript skills. Subscribe and stay tuned :)</td>
<td class="unit">$0.00</td>
<td class="qty">100</td>
<td class="total">$0.00</td>
</tr>
 <tr>
<td class="no">01</td>
<td class="text-left">
<h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
<td class="unit">$40.00</td>
<td class="qty">30</td>
<td class="total">$1,200.00</td>
</tr>
<tr>
<td class="no">02</td>
<td class="text-left">
<h3>Website Development</h3>Developing a Content Management System-based Website</td>
<td class="unit">$40.00</td>
<td class="qty">80</td>
<td class="total">$3,200.00</td>
</tr>
<tr>
<td class="no">03</td>
<td class="text-left">
<h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
<td class="unit">$40.00</td>
<td class="qty">20</td>
<td class="total">$800.00</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="2"></td>
<td colspan="2">SUBTOTAL</td>
<td>$5,200.00</td>
</tr>
<!-- <tr>
<td colspan="2"></td>
<td colspan="2">TAX 25%</td>
<td>$1,300.00</td>
</tr> -->
<tr>
<td colspan="2"></td>
<td colspan="2">GRAND TOTAL</td>
<td>$6,500.00</td>
</tr>
</tfoot>
</table>
<div class="thanks">Thank you!</div>
<!-- <div class="notices">
<div>NOTICE:</div>
<div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div> -->
</div>
</main>
<footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
</div>

<div></div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>