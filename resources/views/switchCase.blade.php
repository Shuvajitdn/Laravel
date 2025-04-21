<h1>Using Switch Case</h1>
@switch($i)
    @case(1)
        <p>Monday</p>
        @break
    @case(2)
        <p>Tuesday</p>
        @break
        @case(3)
        <p>Wednesday</p>
        @break
        @case(4)
        <p>Thursday</p>
        @break
        @case(5)
        <p>Friday</p>
        @break
        @case(6)
        <p>Saturday</p>
        @break
        @case(7)
        <p>Sunday</p>
        @break
    @default
        <p>Invalid value</p>
@endswitch