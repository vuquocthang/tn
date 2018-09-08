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
    <td></td>
    <td>{{ number_format($price) }} đ</td>
    <td>{{ strtoupper($txnId) }}</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
</table>

</body>
</html>
