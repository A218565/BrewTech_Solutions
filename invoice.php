<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #O001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary no-print" onclick="window.print()"><i class="bi bi-printer me-1"></i>Print</button>
            </div>
        </div>
    </div>
</div>
 
<div class="card shadow-sm">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>BrewTech Solutions</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer</strong><br>
                Suraya<br>
                012-3456789
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Amin<br>
                amin@example.com
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
                        <td>Smart Coffee Mug</td>
                        <td>$29.99</td>
                        <td>1</td>
                        <td class="text-end">$29.99</td>
                    </tr>
                    <tr><td colspan="5" class="text-center">No products added to this order</td></tr>
                </tbody>
                <tfoot><tr><th colspan="4" class="text-end">Grand Total</th><th class="text-end">$29.99</th></tr></tfoot>
            </table>
        </div>
        <a href="orderdetails.php" class="btn btn-secondary no-print"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
    </div>
</div>
 
<style>
@media print {
    

    /* Hide sidebar and navigation elements */
    .sidebar,
    #sidebar,
    .navbar,
    .burger-header,
    .sidebar-toggle,
    .no-print {
        display: none !important;
    }

    /* Expand invoice content to full width */
    main,
    .main-content,
    .content,
    .container,
    .container-fluid {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    /* Remove card shadows and borders */
    .card,
    .card-body {
        box-shadow: none !important;
        border: none !important;
    }

    /* Remove unnecessary background and colour effects */
    .table-dark {
        background-color: #212529 !important;
        color: white !important;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }

    body {
        background: white !important;
        font-size: 12px;
    }

    /* Avoid splitting invoice content across pages */
    .card {
        break-inside: avoid;
    }

    @page {
        size: A4;
        margin: 10mm;
    }

}
</style>
 

 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>