@extends('layouts.master')
@section('title', 'Home')
@section('content')

<div class="col-md-10  overview">
    <div class="row audit-text pt-3 pb-3">
        <div class="col-md-12 text-start">
            <h5 style="margin-left: 22px;"><STRONG>Welcome Tyler!</STRONG></h5>
        </div>
    </div>
    <div class="row Welcome-two-cols">
        <div class="col-md-6 text-center Quick-col">
            <h5>QUICK ANALYSIS</h5>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control url" placeholder="Analyze">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" class="analyze">Analyze</button>
                    </div>
                </div>
        </div>
        <div class="col-md-6 plan-col">
            <h6><span>Plan:</span><span>Free</span></h6>
            <h6><span>Next Billing Date</span><span>N/A</span></h6>
            <button class="btn btn-warning">upgrade</button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    $(document).ready(function($){
        var loggedIn = {{ auth()->check() ? 'true' : 'false' }};
     
        $(".btn").click(function(e){
            var j$ = jQuery.noConflict();
            e . preventDefault();
            if(loggedIn){
                var url =  j$(".url").val();
                if(url){
                    window.location ="/analysis"+'?url='+url;
                }else{
                    window.location ="/analysis";
                }
            }else{
                j$("#loginModal").modal("show");
                $("#login_btn").click(function(e){
                    var analyze_url = $(".url").val();
                    if(analyze_url){
                        window.location ="/login?page="+"/analysis"+"&url="+analyze_url;
                    }else{
                        window.location ="/login?page="+"/analysis";
                    }
                });
            }
        });
    });
</script>
@endsection
