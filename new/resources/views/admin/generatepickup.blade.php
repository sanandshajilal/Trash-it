<html>
<body>
      <h1>Pickup Details </h1>
  <table>
      <thead>
          <tr>
              <th>Pickup #</th>
              <th>Amount (INR)</th>
          </tr>
      </thead>
      <tbody>
        @foreach($pickups as $pickup)
          <tr>
              <td>{{$pickup->id}}</td>
              <td>{{$pickup->amount}}</td>
        @endforeach
              <th>Total (INR)</th>
              <td>{{$picksum}}</td>
          </tr>




      </tbody>
  </table>

</body>
</html>
