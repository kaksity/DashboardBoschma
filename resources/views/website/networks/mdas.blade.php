@extends('website.layout')

@section('page-content')
<div class="container-fluid">
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="mt-2 mb-2">
                <h4 class="side-border p-2 fw-bolder">MINISTRIES, DEPARTMENTS AND AGENCIES</h4>
            </div>
            <div class="col-md-8 col-sm-12 p-3">
                <table class="table border">
                    <tr class="bg-primary text-center text-light">
                        <th>Ministries</th>
                    </tr>
                    <tbody id="bsmdcontent">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
