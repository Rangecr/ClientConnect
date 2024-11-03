<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>clientconnect</title>
</head>

<body>
    <div style="font-family: Arial, sans-serif; font-size: 12px; color: #333;">
        <h1 style="text-align: center;">Customers Report ({{ $startDate }} - {{ $endDate }})</h1>
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="border: 1px solid #ddd; padding: 8px;">Name</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Email</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Created At</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $customer->name }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $customer->email }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $customer->created_at }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $customer->p_numb }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>