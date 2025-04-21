<h1>The Customers are: </h1>
@for ($i = 0; $i < count($customers); $i++)
    <p>{{$customers[$i]}}</p>
@endfor

<h1>The Customers using foreach loop are: </h1>
@foreach($customers as $customer)
    <p>{{$customer}}</p>
@endforeach

<h1>The Customers using forelse loop are: </h1>
@forelse($customers as $customer)
    <p>{{$customer}}</p>
@empty
    <p>No customers found</p>
@endforelse

<h1>The Customers using while loop are: </h1>
@php
    $i = 0;
@endphp
@while ($i < count($customers))
    <p>{{$customers[$i]}}</p>
    @php
        $i++;
    @endphp
@endwhile

<h1>The Customers using do if,esleif,else loop are: </h1>

@if (count($customers) === 1)
        <p>There are only one customer</p>
@elseif (count($customers) >1)
        <p>There are Multipkle Customer</p>
@else
        <p>No customers available</p>
@endif

<h1>Using empty directory</h1>
@empty($customers)
    <p>No customers available</p>
@endempty



