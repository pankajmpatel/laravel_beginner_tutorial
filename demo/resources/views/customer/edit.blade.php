<h1>Edit Customer Data</h1>

<form action="/customers/{{ $customer->id }}" method="post">

    @method('PATCH')
    @include('customer.form');
    <button type="submit">SaveCustomer</button>

</form><a href="/customers">Show Customers</a>
