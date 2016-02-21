<html>
<body>
      <h1>Overall Report</h1>
  <table>
      <thead>
          <tr>
              <th>No of Pickups</th>
              <th>Amount Paid</th>
              <th>No of Sales</th>
              <th>Amount Got</th>
              <th>Gross Profit</th>
          </tr>
      </thead>
      <tbody>

          <tr>
              <td>{{$pickcount}}</td>
              <td>{{$picksum}}</td>
              <td>{{$salecount}}</td>
              <td>{{$salesum}}</td>
              <td>{{$salesum-$picksum}}</td>
          </tr>




      </tbody>
  </table>

</body>
</html>
