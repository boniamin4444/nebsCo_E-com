<div>
    <button type="button" class="btn btn-info" onclick="viewOrderDetails({{ $order->id }})">Order Details</button>
    <button type="button" class="btn btn-success"  onclick="downloadPdf('{{ $order->invoice_no }}')">PDF</button>
</div>
