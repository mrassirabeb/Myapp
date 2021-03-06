@extends('indexutilisateur')
@section('content') 
        <div class="pdf-viewer-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        @if (count($file) === 1)
                        <div class="pdf-single-pro">
                            <a class="media" href="{{url('uploads/'.$file[0]->filename)}}"></a>
                        </div>
                        @else
                        <div class="pdf-single-pro">
                            <a class="media" href=""></a>
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    </div>
                </div>
            </div>
        </div>
 @endsection