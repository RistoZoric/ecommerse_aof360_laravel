@extends('web.layouts.master')
@section('title','Wishlist Page')
@section('main-content')

	<section class="confirmation_part section_padding">
      <div class="order_boxes">
        <div class="row p-3">


		<div class="col-lg-6 col-lx-4 p-2">
            <div class="order-inf order_vie">
              <h5 class="text-center p-2 ordrh">ORDER INFORMATION</h5>
              <table class="table">
                    <tr class="">
                        <td>Order Number</td>
                        <td> : {{$order->order_number}}</td>
                    </tr>
                    <tr>
                        <td>Order Date</td>
                        <td> : {{$order->created_at->format('D d M, Y')}} at {{$order->created_at->format('g : i a')}} </td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td> : {{$order->quantity}}</td>
                    </tr>
                    <tr>
                        <td>Order Status</td>
                        <td> : {{-- $order->status --}}
							@if($order->status=='new')
							<span class="badge badge-primary">{{$order->status}}</span>
							@elseif($order->status=='process')
							<span class="badge badge-warning">{{$order->status}}</span>
							@elseif($order->status=='shipped')
							<span class="badge badge-warning">{{$order->status}}</span>
							@elseif($order->status=='out for delivery')
							<span class="badge badge-warning">{{$order->status}}</span>
							@elseif($order->status=='delivered')
							<span class="badge badge-success">{{$order->status}}</span>
							@else
							<span class="badge badge-danger">{{$order->status}}</span>
							@endif
						</td>
                    </tr>
                    <tr>
                      @php
                          $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
                      @endphp
                        <td>Shipping Charge</td>
                        <td> : $ {{-- number_format($shipping_charge[0],2) --}}</td>
                    </tr>
                    <tr>
                      <td>Coupon</td>
                      <td> : $ {{number_format($order->coupon,2)}}</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td> : $ {{number_format($order->total_amount,2)}}</td>
                    </tr>
                    <tr>
                        <td>Payment Method</td>
                        <td> : @if($order->payment_method=='cod') Cash on Delivery @else Paypal @endif</td>
                    </tr>
                    <tr>
                        <td>Payment Status</td>
                        <td> : {{$order->payment_status}}</td>
                    </tr>
              </table>
            </div>
          </div>


        <div class="col-lg-6 col-lx-4 p-2">
            <div class="order-inf order_vie">
              <h5 class="text-center p-2 ordrh">PRODUCT INFORMATION</h5>
              <table class="table table-bordered table-stripe">
      <thead>
        <tr>
          <th scope="col" class="col-6">Product</th>
          <th scope="col" class="col-3">Quantity</th>
          <th scope="col" class="col-3">Total</th>
        </tr>
      </thead>
      <tbody>
      @foreach($order->cart_info as $cart)
      @php 
        $product=DB::table('products')->select('title')->where('id',$cart->product_id)->get();
      @endphp
        <tr>
          <td><span>
              @foreach($product as $pro)
                {{$pro->title}}
              @endforeach
            </span></td>
          <td>x{{$cart->quantity}}</td>
          <td><span>${{number_format($cart->price,2)}}</span></td>
        </tr>
      @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th scope="col" class="empty"></th>
          <th scope="col" class="text-right">Subtotal:</th>
          <th scope="col"> <span>${{number_format($order->sub_total,2)}}</span></th>
        </tr>
      {{-- @if(!empty($order->coupon))
        <tr>
          <th scope="col" class="empty"></th>
          <th scope="col" class="text-right">Discount:</th>
          <th scope="col"><span>-{{$order->coupon->discount(Helper::orderPrice($order->id, $order->user->id))}}{{Helper::base_currency()}}</span></th>
        </tr>
      @endif --}}
        
        <tr>
          <th scope="col" class="empty"></th>
          <th scope="col" class="text-right">Total:</th>
          <th>
            <span>
                ${{number_format($order->total_amount,2)}}
            </span>
          </th>
        </tr>
      </tfoot>
</table>

              </div>
          </div>
	  </div>
	  </div>

	  </section>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@endpush