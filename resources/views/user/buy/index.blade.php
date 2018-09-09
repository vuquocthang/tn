<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Thông Tin Chuyển Khoản</h2>

<table>
  <tr>
    <th>Số Tài Khoản</th>
    <th>Số Tiền</th>
    <th>Nội Dung</th>
  </tr>
  <tr>
    <td>Tên Tài Khoản : DAO HAI YEN</td>
    <td>{{ number_format($price) }} đ/tháng</td>
    <td>{{ strtoupper($txnId) }}</td>
  </tr>
  <tr>
    <td>Số Tài Khoản : 0451001813899</td>
    <td>{{ $price3m == 0 ? '' : 'Ưu đãi hôm nay : ' . number_format($price3m) . ' đ (3 tháng)' }}</td>
    <td></td>
  </tr>
  <tr>
    <td>Ngân Hàng : Vietcombank</td>
    <td></td>
    <td></td>
  </tr>
  
  <p>Lưu ý: Bạn cần chuyển đúng số tiền (không thừa không thiếu) và ghi chính xác nội dung chuyển khoản (cả chữ hoa , dấu gạch ngang và số). Tài khoản sẽ được active ngay lập tức !</p>
  
</table>

</body>
</html>
