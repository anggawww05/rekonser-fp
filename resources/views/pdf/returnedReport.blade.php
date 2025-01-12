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
        <h1 class="headline">Laporan Transaksi Pengembalian</h1>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Penyewa</th>
                    <th>Produk</th>
                    <th>Tanggal Kembali</th>
                    <th>Total Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                ?>
                @foreach ($returneds as $returned)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $returned->user->user_name }}</td>
                        <td>{{ $returned->product->product_name }}</td>
                        <td>
                            <?php
                            if ($returned->payment->delay_price==0) {
                                echo ('-');
                            } else {
                                echo \Carbon\Carbon::parse($returned->created_at)->translatedFormat('d F Y');
                            }
                            ?>
                        </td>
                    <td>Rp. {{ number_format($returned->payment->delay_price, 2, ',', '.') }}</td>
                </tr>
                <?php
                $total = $total + ($returned->payment->delay_price);
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
