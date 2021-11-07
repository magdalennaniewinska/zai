<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <a href="{{url('showallproduct')}}">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            @foreach($data as $product)
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img height='300' width='150' src={{$product->image}} alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>{{$product->name}}</h4>
                        </a>
                        <p>{{$product->description}}</p>
                        <p>Wszystkich sztuk: {{$product->quantity}}</p>
                        <p>Dostępnych sztuk: {{$product->available}}</p>
                        <span><a href="{{url('/search',$product->tag)}}">{{$product->tag}}</a></span>
                        <form action="{{url('wypozycz',$product->id)}}" method="POST">
                            @csrf
                            <input type="number" value="1" min="1" max={{$product->available}} class="form-control" style="width:100px" name="quantity">
                            <br>
                            <input class="btn btn-primary" type="submit" value="wypozycz">
                        </form>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        @if(method_exists($data,'links'))
        <div class="d-flex justify-content-center">
            {!! $data->links()!!}
        </div>
        @endif
    </div>

</div>