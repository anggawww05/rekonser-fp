<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <link rel="stylesheet" href="{{ public_path('css/style.css') }}">
</head>
<body class="container">
    <div class="header">
        <h1 class="headline">Laporan Transaksi Sewa</h1>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Penyewa</th>
                    <th>Produk</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $total = 0;
                ?>
                @foreach ($payments as $payment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $payment->user->user_name }}</td>
                    <td>{{ $payment->product->product_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($payment->created_at)->translatedFormat('d F Y') }}</td>
                    <td>Rp. {{ number_format($payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price, 2, ',', '.') }}</td>
                </tr>
                <?php
                $total = $total + ($payment->product->price * $payment->quantity * $payment->duration + $payment->delivery_price);
                ?>
                @endforeach
                <tr>
                    <td colspan="4">Total</td>
                    <td>Rp. {{ number_format($total, 2, ',', '.') }}</td>
            </tbody>
        </table>
    </div>
</body>
</html>
