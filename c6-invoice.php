
<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4 print-hide">

    <div class="card-body">

        <div class="row align-items-center">

            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #0001</p>
            </div>

            <div class="col-auto">

                <button type="button" class="btn btn-primary" onclick="window.print()">
                    <i class="bi bi-printer me-1"></i>Print
                </button>

            </div>

        </div>

    </div>

</div>

<div class="card shadow-sm">

    <div class="card-body p-4">

        <div class="row mb-4">

            <div class="col-md-6">
                <h4>Extase</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>

            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>0001<br>
                <strong>Date: </strong>2026-10-03
            </div>

        </div>

        <hr>

        <div class="row mb-4">

            <div class="col-md-6">
                <strong>Customer</strong><br>
                Alice Johnson<br>
                012-3456789
            </div>

            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Jane Smith<br>
                janesmith@example.com
            </div>

        </div>


        <div class="table-responsive">

            <table class="table table-striped">

                <thead class="table-dark">

                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Road Bike</td>
                        <td>$1,200.00</td>
                        <td>1</td>
                        <td class="text-end">$1,200.00</td>
                    </tr>

                    <tr>
                        <td colspan="5" class="text-center d-none">No products added to this order</td>
                    </tr>

                </tbody>

                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Grand Total</th>
                        <th class="text-end">$1,200.00</th>
                    </tr>
                </tfoot>

            </table>

        </div>


        <a href="orderdetails.php" class="btn btn-secondary mt-3 print-hide">
            <i class="bi bi-arrow-left me-1"></i>Back to Details
        </a>

    </div>

</div>

<style>

    @media print {
        
    /* Hide sidebar, mobile burger header, print button, and back button */
    #mySidebar,
    #myBurger,
    .btn {
        display: none !important;
    }

    /* Remove shadow, borders, and blue accent line from cards */
    .card {
        border: black solid 1px !important;
        box-shadow: none !important;
        background-color: transparent !important;
    }

    .border-start,
    .border-5,
    .border-primary {
        border-left: none !important;
    }

    /* Reset layout margins and background colors for print */
    body,
    .col,
    .bg-light {
        background-color: #ffffff !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    }

    /* Force table header to print with black background and white text */
    .table-dark,
    .table-dark th {
        background-color: #212529 !important;
        color: #ffffff !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
    }

</style>

<?php
$content = ob_get_clean();
require_once 'c0-layout.php';
?>
