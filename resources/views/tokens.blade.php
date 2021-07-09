@extends('layouts.master')

@section('content')
<div class="page-header clear-filter" style="max-height: 1000vh" filter-color="blue">
    <div class="page-header-image" data-parallax="true" style="background-image:url('{{asset('assets/img/mybg-1.jpg')}}');">
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h6 class="text-center pt-4 h2" style="color: black">Popular Tokens</h6>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Symbol</th>
                            <th scope="col">Address</th>
                            <th scope="col">Network</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($tokens as $token)
                            <tr>
                                <th scope="row">{{ $token->name }}</th>
                                <td>{{ $token->symbol }}</td>
                                <td>{{ $token->address }}</td>
                                <td>{{ $token->network }}</td>
                            </tr>
                        @endforeach --}}
                        @for ($i = 0; $i < 30; $i++)
                            <tr>
                                <th scope="row">BNB Gold</th>
                                <td>BNGG</td>
                                <td>0x6509c95b1ac498390e40eb49e2248c441e78da15</td>
                                <td>BSC</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
  @endsection