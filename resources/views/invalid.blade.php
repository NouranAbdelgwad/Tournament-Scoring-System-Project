@extends("layout.layout")
@section("title", "invalid!")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6"><img src="../assets/images/sorry.png" width="100%" alt=""></div>
        <div class="col-md-6 pt-5 d-flex flex-column justify-content-center">
            <h1><b>Sorry my dear!</b></h1>
            <h3>There are invalid data in your form..</h3>
            <ul>
                <li>Maybe you have entered this tournament as an individual or as a team member before</li>
                <li>Maybe you have entered wrong collge ID</li>
            </ul>
        </div>
    </div>
</div>
@endsection
