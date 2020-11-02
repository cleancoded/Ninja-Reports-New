@extends('layouts.master')
@section('title', 'SEO Audit')
@section('content')
<div class="col-md-10  overview">
    <div class="row Analyze">
        <div class="col-md-10">
            <input type="text" id="seo_audit" class="form-control" value="{{$_GET['url'] ?? ''}}" placeholder="Analyze">
        </div>
        <div class="col-md-2">
            <button class="btn">Analyze</button>
        </div>
    </div>
    <div class="row progressbar">
        <div class="col-md-12">
            <div class="progress">
                <div class="progress-bar progress-bar-danger" id="progress" role="progressbar" aria-valuenow="70"
                aria-valuemin="0" aria-valuemax="100" style="width:0%">
                Crawling Pages...
                </div>
            </div>
        </div>
    </div>
    <div id="text-container"></div>
     <!------------------------------------------Animation Script ProgressBarStart----------------------------------------------------->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.1/dist/circle-progress.js"></script>
    <!-- <script src="scripts/index.js"></script> -->
    <Script>
        /**
            * index.js
            * - All our useful JS goes here, awesome!
            Maruf-Al Bashir Reza
            */
        function insertParam(key, value) {
                key = encodeURIComponent(key);
                value = encodeURIComponent(value);

                // kvp looks like ['key1=value1', 'key2=value2', ...]
                var kvp = document.location.search.substr(1).split('&');
                let i=0;

                for(; i<kvp.length; i++){
                    if (kvp[i].startsWith(key + '=')) {
                        let pair = kvp[i].split('=');
                        pair[1] = value;
                        kvp[i] = pair.join('=');
                        break;
                    }
                }

                if(i >= kvp.length){
                    kvp[kvp.length] = [key,value].join('=');
                }

                // can return this or...
                let params = kvp.join('&');

                // reload page with new params
                document.location.search = params;
            }

        $(document).ready(function($) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var loggedIn = {{ auth()->check() ? 'true' : 'false' }};
            var analyze_url =  $("#seo_audit").val();
            if (analyze_url && loggedIn) {
                get_audit();
            }

            $(".btn").click(function(e){
                    e.preventDefault();
                    if(loggedIn){
                        var url =  $("#seo_audit").val();
                        !!url && insertParam('url', url);
                        get_audit();
                    }else{
                        var j$ = jQuery.noConflict();
                        j$("#loginModal").modal("show");
                        $("#login_btn").click(function(e){
                            var analyze_url = $("#seo_audit").val();
                            if(analyze_url){
                                window.location ="/login?page="+document.location.href+"&url="+analyze_url;
                            }else{
                                window.location ="/login?page="+document.location.href;
                            }
                        });
                    }
                });
                function get_audit(){
                    var url =  $("#seo_audit").val();
                    if(url != null){
                        $.ajax({
                            xhr : function() {
                                var xhr = new window.XMLHttpRequest();
                                xhr.upload.addEventListener('progress', function(e) {
                                    if (e.lengthComputable) {
                                        var percent = Math.round((e.loaded / e.total) * 100)-60;
                                        //console.log(percent);
                                        $('#progress').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                                    }
                                });
                                return xhr;
                            },
                            type:'POST',
                            url:'/audit',
                            data:{url:url},
                            success:function(data){
                                $('#progress').css('width', 100 + '%').text(100 + '%'); 
                                $('div#text-container').append(data);
                                $('.audit-item').show();
                            }
                        });
                    }else{
                        alert('add url');
                    }
                }

            // var j$ = jQuery.noConflict();
            
            // //console.log(loggedIn);
            // if (!loggedIn){
            //     $(".btn").click(function(){
            //         j$('#loginModal').modal('show');
            //         $("#login_btn").click(function(e){
            //             var analyze_url = $("#seo_audit").val();
            //             if(analyze_url){
            //                 window.location ="/login?page="+document.location.href+"&url="+analyze_url;
            //             }else{
            //                 window.location ="/login?page="+document.location.href;
            //             }
            //         });
            //     });
            // }




            function animateElements() {
            $('.Progress').each(function() {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find('.circle').attr('data-percent');
                var percentage = parseInt(percent, 10) / parseInt(100, 10);
                var animate = $(this).data('animate');
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                $(this).data('animate', true);
                $(this).find('.circle').circleProgress({
                    startAngle: -Math.PI / 2,
                    value: percent / 100,
                    thickness: 14,
                    fill: {
                    color: '#1B58B8'
                    }
                }).on('circle-animation-progress', function(event, progress, stepValue) {
                    $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
                }).stop();
                }
            });
            }

            // Show animated elements
            animateElements();
            $(window).scroll(animateElements);
        });


    </Script>
    <!------------------------------------------Animation Script ProgressBar End----------------------------------------------------->
</div>
@endsection
