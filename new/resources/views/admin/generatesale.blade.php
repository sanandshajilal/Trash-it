<html>
<body>
      <h1>Sale Details</h1>
  <table>
      <thead>
          <tr>
              <th>Sale #</th>
              <th>Item Name</th>
              <th>Vendor Name</th>
              <th>Amount (INR)</th>
          </tr>
      </thead>
      <tbody>
        @foreach($sales as $sale)
          <tr>
              <td>{{$sale->id}}</td>
              <td>{{$sale->item_name}}</td>
              <td>{{$sale->vendor_name}}</td>
              <td>{{$sale->amount}}</td>
        @endforeach
              <th>Total (INR)</th>
              <td>{{$salesum}}</td>
          </tr>




      </tbody>
  </table>

</body>
</html>
