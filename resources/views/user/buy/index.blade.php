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

<title>Thông Tin Chuyển Khoản</title>

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
    <td>Ngân Hàng : Vietcombank, Chi Nhánh Thành Công</td>
    <td>
		<form action="{{ route('buy.coupon') }}" method="POST">
			@csrf
			<input type="hidden" name="type" value="{{ \Illuminate\Support\Facades\Input::get('type') }}" />
			<input type="hidden" name="txn_id" value="{{ $txnId }}" />
			
			Coupon : <input name="code" type="text" required/> 
			<input type="submit" value="Nhập" />
		</form>
	</td>
    <td></td>
  </tr>
  
  <p>Lưu ý: Bạn cần chuyển <b>ĐÚNG SỐ TIỀN</b> (không thừa không thiếu) và ghi <b>CHÍNH XÁC NỘI DUNG</b> chuyển khoản (cả chữ hoa , dấu gạch ngang và số). Tài khoản sẽ được <b>ACTIVE NGAY LẬP TỨC !</b></p>
  <p>Vui lòng chụp lại hóa đơn chuyển khoản để được hỗ trợ khi tài khoản không được active</p>
  
</table>

</body>
</html>
