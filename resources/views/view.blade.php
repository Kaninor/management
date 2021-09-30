@extends('layout2')

@section('head')
<title>{{ $mode == "print" ? "Print view" : "View" }}</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  .receipt-content .logo a:hover {
    text-decoration: none;
    color: #7793C4;
  }

  .receipt-content .invoice-wrapper {
    background: #FFF;
    border: 1px solid #CDD3E2;
    box-shadow: 0px 0px 1px #CCC;
    padding: 40px 40px 60px;
    margin-top: 40px;
    border-radius: 4px;
  }

  .receipt-content .invoice-wrapper .payment-details span {
    color: #A9B0BB;
    display: block;
  }

  .receipt-content .invoice-wrapper .payment-details a {
    display: inline-block;
    margin-top: 5px;
  }

  .receipt-content {
    background: #ECEEF4;
  }

  @media (min-width: 1200px) {
    .receipt-content .container {
      width: 790px;
    }
  }

  .receipt-content .logo {
    text-align: center;
    margin-top: 50px;
  }

  .receipt-content .logo a {
    font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
    font-size: 36px;
    letter-spacing: .1px;
    color: #555;
    font-weight: 300;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -ms-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
  }

  .receipt-content .invoice-wrapper .intro {
    line-height: 25px;
    color: #444;
  }

  .receipt-content .invoice-wrapper .payment-info {
    margin-top: 25px;
    padding-top: 15px;
  }

  .receipt-content .invoice-wrapper .payment-info span {
    color: #A9B0BB;
  }

  .receipt-content .invoice-wrapper .payment-info strong {
    display: block;
    color: #444;
    margin-top: 3px;
  }

  @media (max-width: 767px) {
    .receipt-content .invoice-wrapper .payment-info .text-right {
      text-align: left;
      margin-top: 20px;
    }
  }

  .receipt-content .invoice-wrapper .payment-details {
    border-top: 2px solid #EBECEE;
    margin-top: 30px;
    padding-top: 20px;
    line-height: 22px;
  }


  @media (max-width: 767px) {
    .receipt-content .invoice-wrapper .payment-details .text-right {
      text-align: left;
      margin-top: 20px;
    }
  }

  .receipt-content .invoice-wrapper .line-items {
    margin-top: 40px;
  }

  .receipt-content .invoice-wrapper .line-items .headers {
    color: #A9B0BB;
    font-size: 13px;
    letter-spacing: .3px;
    border-bottom: 2px solid #EBECEE;
    padding-bottom: 4px;
  }

  .receipt-content .invoice-wrapper .line-items .items {
    margin-top: 8px;
    border-bottom: 2px solid #EBECEE;
    padding-bottom: 8px;
  }

  .receipt-content .invoice-wrapper .line-items .items .item {
    padding: 10px 0;
    color: #696969;
    font-size: 15px;
  }

  @media (max-width: 767px) {
    .receipt-content .invoice-wrapper .line-items .items .item {
      font-size: 13px;
    }
  }

  .receipt-content .invoice-wrapper .line-items .items .item .amount {
    letter-spacing: 0.1px;
    color: #84868A;
    font-size: 16px;
  }

  @media (max-width: 767px) {
    .receipt-content .invoice-wrapper .line-items .items .item .amount {
      font-size: 13px;
    }
  }

  .receipt-content .invoice-wrapper .line-items .total {
    margin-top: 30px;
  }

  .receipt-content .invoice-wrapper .line-items .total .extra-notes {
    float: left;
    width: 40%;
    text-align: left;
    font-size: 13px;
    color: #7A7A7A;
    line-height: 20px;
  }

  @media (max-width: 767px) {
    .receipt-content .invoice-wrapper .line-items .total .extra-notes {
      width: 100%;
      margin-bottom: 30px;
      float: none;
    }
  }

  .receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
    display: block;
    margin-bottom: 5px;
    color: #454545;
  }

  .receipt-content .invoice-wrapper .line-items .total .field {
    margin-bottom: 7px;
    font-size: 14px;
    color: #555;
  }

  .receipt-content .invoice-wrapper .line-items .total .field.grand-total {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 500;
  }

  .receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
    color: #20A720;
    font-size: 16px;
  }

  .receipt-content .invoice-wrapper .line-items .total .field span {
    display: inline-block;
    margin-left: 20px;
    min-width: 85px;
    color: #84868A;
    font-size: 15px;
  }

  .receipt-content .footer {
    margin-top: 40px;
    margin-bottom: 110px;
    text-align: center;
    font-size: 12px;
    color: #969CAD;
  }
</style>
@stop

@section('body')
<div class="receipt-content">
  <div class="container bootstrap snippets bootdey" id="page">
    <div class="row">
      <div class="col-md-12">
        <div class="invoice-wrapper" style="box-shadow: 4px 4px 9px #aaaaaa; border: 3px solid #555;">
          <div class="intro" style="font-size: 18px;">
            <center>
              <strong style="font-size: 26px;">Report invoice</strong>
            </center>
            <br>
            This is the report for sale and buy
          </div>

          <div class="payment-info">
            <div class="row">
              <div class="col-sm-6">
                <span style=" color: rgb(36, 36, 36)">Report code</span>
                <strong>{{ hash("md5", $report->id*256/23) }}</strong>
              </div>
              <div class="col-sm-6 text-right">
                <span style=" color: rgb(36, 36, 36)">Report Date</span>
                <strong>{{ $report->created_at }}</strong>
              </div>
            </div>
          </div>

          <div class="payment-details">
            <div class="row">
              <div class="col-sm-6">
                <span style=" color: rgb(36, 36, 36)">Field</span><br>
                <strong>
                  Solds :
                </strong><br><br>
                <strong>
                  Boughts :
                </strong><br><br>
                <strong>
                  Sale :
                </strong><br><br>
                <strong>
                  Buy :
                </strong><br><br>
                <strong>
                  Profit :
                </strong><br><br>
                <strong>
                  Loss :
                </strong>
              </div>
              <div class="col-sm-6 text-right">
                <span style=" color: rgb(36, 36, 36)">Value</span><br>
                <strong style="color: green; font-size: 20px;">
                  {{ $report->solds }}
                </strong><br><br>
                <strong style="color: red; font-size: 20px;">
                  {{ $report->boughts }}
                </strong><br><br>
                <strong style="color: green; font-size: 20px;">
                  {{ $report->sale }}$
                </strong><br><br>
                <strong style="color: red; font-size: 20px;">
                  {{ $report->buy }}$
                </strong><br><br>
                <strong id="profit" style="color: red; font-size: 20px;">
                  {{ $report->profit }}%
                </strong><br><br>
                <strong style="color: red; font-size: 20px;">
                  {{ $report->loss }}%
                </strong>
              </div>
            </div>
          </div>

          <div class="line-items">
            <div class="headers clearfix">
              <div class="row">
                <div class="col-xs-4" style=" color: rgb(36, 36, 36); font-size: 17px">Description</div>
              </div>
            </div>
            <div class="items">
              <div class="row item">
                <div class="col-xs-4 desc" style=" color: rgb(36, 36, 36); font-size: 17px">
                  A. Solds - boughts : {{ $report->solds - $report->boughts }}
                </div>
              </div>
              <div class="row item">
                <div class="col-xs-4 desc" style=" color: rgb(36, 36, 36); font-size: 17px">
                  B. Sale - Buy : {{ $report->sale - $report->buy }}$
                </div>
              </div>
              <div class="row item">
                <div class="col-xs-4 desc" style=" color: rgb(36, 36, 36); font-size: 17px">
                  C. Profit - Loss : {{ $report->profit - $report->loss }}%
                </div>
              </div>
            </div>
            <div class="total text-right">
              <p class="extra-notes" ; style="font-size: 14px">
                <strong style=" color: rgb(36, 36, 36); font-size: 15px">Notice!</strong>
                These reports are important and after printing it you should
                keep it with yourself.
              </p>
              <div class="field">
                <strong>A</strong> <span id="a" style="font-size: 18px;">{{ $report->solds - $report->boughts >= 0 ? "Profit" : "Loss"}}</span>
              </div>
              <div class="field">
                <strong>B</strong> <span id="b" style="font-size: 18px;">{{ $report->sale - $report->buy >= 0 ? "Profit" : "Loss"}}</span>
              </div>
              <div class="field">
                <strong>C</strong> <span id="c" style="font-size: 18px;">{{ $report->profit - $report->loss >= 0 ? "Profit" : "Loss"}}</span>
              </div>
              <div class="field grand-total">
                Total <span id="total"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="footer" style=" color: rgb(36, 36, 36); font-size: 16px">
          Copyright © 2021. Kaninor Company
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('scripts')
<script>
  <?php if ($mode == "print") : ?>
    window.onload = function() {
      window.print();
    }
  <?php endif; ?>

  <?php if ($report->profit >= 0) : ?>
    $("#profit").css("color", "green");
  <?php else : ?>
    $("#profit").css("color", "red");
  <?php endif; ?>

  let a = $("#a");
  let b = $("#b");
  let c = $("#c");
  let total = $("#total");

  a.text() == "Profit" ? a.css("color", "#20A720") : a.css("color", "red");
  b.text() == "Profit" ? b.css("color", "#20A720") : b.css("color", "red");
  c.text() == "Profit" ? c.css("color", "#20A720") : c.css("color", "red");

  let stat = [a.text(), b.text(), c.text()];

  switch (stat.filter(x => x == "Profit").length) {
    case 0:
      total.text("Bad");
      total.css("color", "red");
      break;
    case 1:
      total.text("Not good");
      total.css("color", "orange");
      break;
    case 2:
      total.text("Good");
      total.css("color", "rgb(124, 135, 59)");
      break;
    case 3:
      total.text("Well");
      total.css("color", "rgb(7, 74, 10)");
      break;
  }

  $(document).on('keydown', function(e) {
    if ((e.ctrlKey || e.metaKey) && (e.key == "p" || e.charCode == 16 || e.charCode == 112 || e.keyCode == 80)) {
      e.cancelBubble = true;
      e.preventDefault();
      alert("go to `/reports` and click on the print action to print this view");
      e.stopImmediatePropagation();
    }
  });

  $(function() {
    $(this).bind("contextmenu", function(e) {
      e.preventDefault();
    });
  });
</script>
@stop