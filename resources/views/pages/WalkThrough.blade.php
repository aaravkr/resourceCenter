@extends('layouts.app')
@section('content')
<div class="main_section_walkthrough">
<div class="container-fluid Dcontainer inner_main_section_walkthrough">
        <div class="row d-flex justify-content-center">
            
           {{-- <div class="col-md-10 text-left mt-5 dwalk-through">
             <h3>Walk Through</h3>
               <hr>
            </div> --}}
            <div class="col-md-10 mt-md-5">
                    <h1 class="deep-blue"> Walk Through</h1>
                    <hr class="download_section">
                </div>
        
            <div class="col-lg-10 col-sm-12 mt-5 dcol-lg-10 p-0 ml-4">
               
                <div class="tab-content dtab-content" id="faq-tab-content">
                    <div class="tab-pane show active dtab-content" id="tab1" role="tabpanel" aria-labelledby="tab1">
                        <div class="accordion" id="accordion-tab-1">
                            <div class="card">
                                <div class="card-header card-hearder-walkthrough-topics" id="accordion-tab-1-heading-1">
                                    <div class="row">
                                    <div class="col-md-12" >
                                        <h3>
                                        <button class="btn btn-link walk_through_heading" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="true" aria-controls="accordion-tab-1-content-1">Understanding Cyber Crime and Law</button>
                                    </h3>
                                        </div>
                           
                                    </div>
                                    
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                    <div class="card-body walk_through_body">
                                        <ul>
                                        <li><a href="#">What is Dark/Deep web?</a></li>
                                        <li class="mt-md-2"><a href="#">What is Cyberspace</a></li>
                                            <li class="mt-md-2"><a href="#">Cyber Crime & Cyber Law</a></li>
                                            <li class="mt-md-2"><a href="#">Addressing IP & MAC</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header card-hearder-walkthrough-topics" id="accordion-tab-1-heading-2">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <h3>
                                        <button class="btn btn-link walk_through_heading" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Modus Operandi for investigations</button>
                                    </h3>
                                        
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                    <div class="card-body walk_through_body">
                                        <ul>
                                        <li><a href="#">This is a link</a></li>
                                        <li class="mt-md-2"><a href="#">This is a link</a></li>
                                            <li class="mt-md-2"><a href="#">This is a link</a></li>
                                            <li class="mt-md-2"><a href="#">This is a link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header card-hearder-walkthrough-topics" id="accordion-tab-1-heading-3">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h3>
                                        <button class="btn btn-link walk_through_heading" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">Data Requisition and Intelligence Gathering</button>
                                    </h3>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                    <div class="card-body walk_through_body">
                                        <ul>
                                        <li><a href="#">This is a link</a></li>
                                        <li class="mt-md-2"><a href="#">This is a link</a></li>
                                            <li class="mt-md-2"><a href="#">This is a link</a></li>
                                            <li class="mt-md-2"><a href="#">This is a link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header card-hearder-walkthrough-topics" id="accordion-tab-1-heading-4">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h3>
                                        <button class="btn btn-link walk_through_heading" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Drafting Requests and Investigative Challenges</button>
                                    </h3>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                    <div class="card-body walk_through_body">
                                        <ul>
                                        <li><a href="#">This is a link</a></li>
                                        <li class="mt-md-2"><a href="#">This is a link</a></li>
                                            <li class="mt-md-2"><a href="#">This is a link</a></li>
                                            <li class="mt-md-2"><a href="#">This is a link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                     
                            
                        </div>
                    </div>


                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection

