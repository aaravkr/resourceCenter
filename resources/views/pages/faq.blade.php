@extends('layouts.app')
@section('content')

<div class="main_section_faq">
<div class="container-fluid Dtab-container inner_main_section_faq">
        <div class="row d-flex justify-content-center">

            <div class="col-lg-10 mt-3 dcol-lg-10">
                <div class="col-md-12 text-center mt-2">
             <h1 class="light_dark">Frequently Asked Questions (FAQs)</h1>
             <hr>
            </div>
                <div class="tab-content" id="faq-tab-content">
                    <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                        <div class="accordion" id="accordion-tab-1">
                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-1">
                                    <div class="row">
                                    <div class="col-md-10">
                                        <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="true" aria-controls="accordion-tab-1-content-1">Is it possible to commit a crime when conducting cyber crime investigations?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>The answer to this question is a profound yes. Understanding the ramifications of your
                                            actions as they relate to the law is an important part of being a cyber crimes investigator.
                                            Although evidence admissibility will not be in jeopardy in cases when you have went on to
                                            find clues, privacy concerns are your biggest challenge. If you read contents of someone’s
                                            communication, someone might institute an action for their breach of privacy unless it is
                                            authorized by a court.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-2">
                                    <div class="row">
                                    <div class="col-md-10">
                                        <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">How much training do I need to become a cyber crimes investigator?</button>
                                    </h5>
                                        
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>Although a fair amount of training is required, you don’t necessarily need a Masters degree
                                            in computer science to be a competent and skilled cyber crime investigator. You need to be
                                            aware about the architecture of the internet, know-how about various apps, services and
                                            platforms and most definitely an overall understanding of how a electronic devices work
                                            and how to use some of them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-3">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">Can we change MAC address?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>MAC address can be changed using special softwares. It is called MAC spoofing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-4">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Can we change IP address?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>IP address can be changed only by using Proxy Servers or VPN (Virtual Private Networks) in
                                            case of static IPs. In case of Dynamic IP just restarting your router and machine can change
                                            the IP address.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-5">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5">Can a system have more than one MAC addresses?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>Yes, every NIC (Network Interface Cards) have their own MAC addresses. So, if a system is
                                            installed with multiple NICs it will have multiple MAC addresses respective to those NICs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-6">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-6" aria-expanded="false" aria-controls="accordion-tab-1-content-6">Do ISPs give IP logs to its consumer?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-6" aria-expanded="false" aria-controls="accordion-tab-1-content-6"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-6" aria-labelledby="accordion-tab-1-heading-6" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>No, IP logs can only be acquired by Law Enforcement Agencies. ISPs do not provide such
                                            data to its consumers directly.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-7">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-7" aria-expanded="false" aria-controls="accordion-tab-1-content-7">Can we open deep web websites on normal browser?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-7" aria-expanded="false" aria-controls="accordion-tab-1-content-7"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-7" aria-labelledby="accordion-tab-1-heading-7" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>No, it requires special browsers to access the content. TOR browser is one of the
                                            browsers used to access dark web content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-8">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                         
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-8" aria-expanded="false" aria-controls="accordion-tab-1-content-8">Can I investigate a crime on the deep web?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-8" aria-expanded="false" aria-controls="accordion-tab-1-content-8"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                   
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-8" aria-labelledby="accordion-tab-1-heading-8" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>Yes and No. Hoping to find someone reactively through the traditional IP process may be a
                                            dead end most of the times. However, this does not meant that investigations on the deep
                                            web have not been done. Tracking someone purely on the deep web requires some level of
                                            expertise which can be acquired through some study and training.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-9">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-9" aria-expanded="false" aria-controls="accordion-tab-1-content-9">Do I have to use the IT Act in cyber crime cases?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-9" aria-expanded="false" aria-controls="accordion-tab-1-content-9"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-9" aria-labelledby="accordion-tab-1-heading-9" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>Although as per the recent judgments of the Supreme Court, IT Act should be used in all
                                            cases of cyber crime but the applicability of the provision extends to those cases specifically
                                            when there is a relatively similar offence in any of the other statute as well. In such cases IT Act has to be mandatorily used. For example, Sections 292-294 of the IPC may be relatively
                                            similar to Section 67A of the IT Act. In this kind of a discrepancy, Section 67A must be
                                            definitely used.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-10">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-10" aria-expanded="false" aria-controls="accordion-tab-1-content-10">Something just happened over the internet. This offence is although not covered in the IT
                                            Act. What do I do?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-10" aria-expanded="false" aria-controls="accordion-tab-1-content-10"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-10" aria-labelledby="accordion-tab-1-heading-10" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>For the lack of a specific provision under the IT Act, you should not avoid filing a FIR. Having
                                            said that, many of your offences can be made out when Section 43 and 66 are read
                                            together, so be very thorough with those. Apart from that, you need to have a good
                                            understanding of the IPC as well because some of the cyber crime offences may be made
                                            out through the IPC itself. Someone threatening a person over the Internet is not covered in
                                            the IT Act per se but it is covered under Section 503 of the IPC.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-11">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        
                                    <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-11" aria-expanded="false" aria-controls="accordion-tab-1-content-11">Do I need to have a computer science degree in order to testify about the computer
                                            investigation I conducted?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-11" aria-expanded="false" aria-controls="accordion-tab-1-content-11"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-11" aria-labelledby="accordion-tab-1-heading-11" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>No! As an investigator, you are a percipient witness and not an expert witness. This does not
                                            mandate you to have a computer science degree or certifications in order to be able to
                                            testify.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-12">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-12" aria-expanded="false" aria-controls="accordion-tab-1-content-12">How long will a service provider retain data?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-13" aria-expanded="false" aria-controls="accordion-tab-1-content-13"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-12" aria-labelledby="accordion-tab-1-heading-12" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>Generally, as per the US law an internet company like Facebook, Google etc. will retain their
                                            data for 90 days after deletion. An ISP working in India will operate as per the Indian license
                                            who can store billing data for a period up to one year as well.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-13">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-13" aria-expanded="false" aria-controls="accordion-tab-1-content-13">Can I open files on scene and verify?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-13" aria-expanded="false" aria-controls="accordion-tab-1-content-13"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-13" aria-labelledby="accordion-tab-1-heading-13" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>Ideally, you should not. It is always better to perform any operation on the imaged
                                            drive/device and not on the original but there will most likely also be cases where it is not a
                                            feasible option. In such situations, by virtue of the recent Supreme Court judgments, you
                                            can, in fact look at evidence on the scene as long as the entire process (from finding out to
                                            opening to all the operations) is documented in the form of a video. The videography so
                                            done will be admissible in court. So, now if you feel that there is some data that needs to be
                                            checked first, you can do so with a video recorded of yourself doing these operations.
                                            Please note- a screen recording on the primary device is not what is required.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-14">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                         <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-14" aria-expanded="false" aria-controls="accordion-tab-1-content-14">Can I unlock a phone and see its contents before seizing?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-14" aria-expanded="false" aria-controls="accordion-tab-1-content-14"><i class="fa fa-2x fa-caret-down light_dark" ></i></div>
                                    </div>
                                    
                                   
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-14" aria-labelledby="accordion-tab-1-heading-14" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>The rules of procedure will require you to isolate the device and send it out for forensics.
                                            But the same rule applies here as well. In case the device owner shares the device unlock
                                            pattern with you, you may in fact look at its contents with videographic proof of you doing
                                            it.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="accordion-tab-1-heading-15">
                                    
                                    <div class="row">
                                    <div class="col-md-10">
                                        <h5>
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-15" aria-expanded="false" aria-controls="accordion-tab-1-content-15">What should I do when there is a new service provider/intermediary I don’t know about?</button>
                                    </h5>
                                        </div>
                                        <div class="col-md-2 text-right" data-toggle="collapse" data-target="#accordion-tab-1-content-15" aria-expanded="false" aria-controls="accordion-tab-1-content-15"><i class="fa fa-2x fa-caret-down light_dark"></i></div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="collapse" id="accordion-tab-1-content-15" aria-labelledby="accordion-tab-1-heading-15" data-parent="#accordion-tab-1">
                                    <div class="card-body">
                                        <p>It might be possible that a service one comes across is totally new and has never come up
                                            during investigations before. When data is needed from such service providers, an IO should
                                            search the internet for the service provider’s law enforcement guidelines document to know
                                            the process that they follow and the manner of contacting them. For this, an IO can simply
                                            search the Internet through any search engine for the guidelines. Such searches would generally lead you to a dedicated page or a document that has all details about legal
                                            processes and the information needed in order to process a data request.</p>
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


