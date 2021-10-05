<div class="table-responsive">
    <table class="table" id="prices-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prices as $price)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['prices.destroy', $price->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prices.show', [$price->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('prices.edit', [$price->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
