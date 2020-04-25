@extends('layouts.master')
@section('tamplate')

    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="assets/images/page-header.jpg">
        <div class="container">
            <h1 class="title m-0">API</h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="service.html">Services</a>
                </li>
                <li>
                    API
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->
     
   

     <!--=================Api================= -->
     <style>
        th,td{
            font-size:16px;
        }
     </style>
     <section class="bulk-sms mask-sms padding-top">
        <div class="container" style="padding: 10px;">
        <div class="section-header">
                <span class="cate">API</span>
                <h2 class="title">HTTP SMS API</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                   
                    <h2 style="font-size: 24px;font-weight: 100;margin-top:12px;display:block"> HTTP SMS Api</h2>
                    <h4 style="font-size: 19px;font-weight: 100;margin-top:12px;">SMS Api allows you to integrate our sms service to your own web based / stand alone applications.</h4>
                   
                </div>
                <div class="col-lg-12">
                   
                <div class="well" style="padding: 16px;margin-bottom: 17px;background-color: rgba(0,0,0,.075);border-radius: 7px;">
				 http://sms.par-ken.com/api/smsapi?key=Account key&amp;route=Route&amp;sender=Sender id&amp;number=Number(s)&amp;sms=Message</div>
               </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                <table class="table table-striped table-bordered table-hover table-responsive">
									<thead style="background-color:#409652;color:#fff">
										<tr>
											<th class="hidden-phone">#</th>
											<th>Parameter</th>
											<th>Description</th>
											<th class="hidden-tablet hidden-phone">Example</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="hidden-phone">1</td>
											<td>key</td>
											<td>Your account API key</td>
											<td class="hidden-tablet hidden-phone">4ca962d15fda6a5d84489765176e8c22</td>
										</tr>
										<tr>
											<td class="hidden-phone">2</td>
											<td>sender</td>
											<td>Sender id</td>
											<td class="hidden-tablet hidden-phone">ALERTS</td>
										</tr>
										<tr>
											<td class="hidden-phone">3</td>
											<td>number</td>
											<td>Destination numbers</td>
											<td class="hidden-tablet hidden-phone">99XXXXXXXX,98XXXXXXXX</td>
										</tr>
										<tr>
											<td class="hidden-phone">4</td>
											<td>route</td>
											<td>Route you want to send SMS (
												Transactional - 1, Sender ID - 2, Promotional - 3, Trans OTP - 4)</td>
											<td class="hidden-tablet hidden-phone">2</td>
										</tr>
										<tr>
											<td class="hidden-phone">5</td>
											<td>sms</td>
											<td>SMS content (<span class="text-danger">Url encoded</span>)</td>
											<td class="hidden-tablet hidden-phone">Hello+user</td>
										</tr>
										<tr>
											<td colspan="4" align="right"><span class="text-danger">*</span> All special character included content should be in urlencode format.</td>
										</tr>
									</tbody>
								</table>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bulk-content text-center text-sm-left">
                       
                    </div>
                </div>
            </div>
        </div>




        
    </section>
    <!--=================End Api================= -->
    
    <!--=================Api================= -->
    <style>
        th,td{
            font-size:16px;
        }
     </style>
     <section class="bulk-sms mask-sms padding-top">
        <div class="container" style="padding: 10px;">
        <div class="section-header">
                <span class="cate">API</span>
                <h2 class="title">SMS Xml API</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                   
                    <h2 style="font-size: 24px;font-weight: 100;margin-top:12px;display:block">SMS Xml Api</h2>
                    <h4 style="font-size: 19px;font-weight: 100;margin-top:12px;">SMS Xml Api allows you to integrate our sms service to your own web based / stand alone applications.</h4>
                   
                </div>
               
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                <table class="table table-striped table-bordered table-hover table-responsive">
									<thead style="background-color:#409652;color:#fff">
										<tr>
											<th class="hidden-phone">#</th>
											<th>Parameter</th>
											<th>Description</th>
											<th class="hidden-tablet hidden-phone">Example</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="hidden-phone">1</td>
											<td>key</td>
											<td>Your account API key</td>
											<td class="hidden-tablet hidden-phone">&lt;key&gt;ff4d1c4bb98826ff6cc775699f8864ea&lt;/key&gt;</td>
										</tr>
										<tr>
											<td class="hidden-phone">2</td>
											<td>sender</td>
											<td>Sender id</td>
											<td class="hidden-tablet hidden-phone">&lt;sender&gt;ALERTS&lt;/sender&gt;</td>
										</tr>
										<tr>
											<td class="hidden-phone">3</td>
											<td>number</td>
											<td>Destination numbers</td>
											<td class="hidden-tablet hidden-phone">&lt;number&gt;99XXXXXXXX&lt;/number&gt;&lt;number&gt;98XXXXXXXX&lt;/number&gt;</td>
										</tr>
										<tr>
											<td class="hidden-phone">4</td>
											<td>route</td>
											<td>Route you want to send SMS (
												Transactional - 1, Sender ID - 2, Promotional - 3, Trans OTP - 4)</td>
											<td class="hidden-tablet hidden-phone">	&lt;route&gt;2&lt;/route&gt;</td>
										</tr>
										<tr>
											<td class="hidden-phone">5</td>
											<td>sms</td>
											<td>SMS content</td>
											<td class="hidden-tablet hidden-phone">&lt;sms&gt;Hello user&lt;/sms&gt;</td>
										</tr>
										<tr>
											<td colspan="4" align="right"><span class="text-danger">*</span> All special character included content should be in urlencode format.</td>
										</tr>
									</tbody>
								</table>
                </div>
                <div class="col-lg-12">
                   
                   <div class="well" style="padding: 16px;margin-bottom: 17px;background-color: rgba(0,0,0,.075);border-radius: 7px; font-size: 16px;">
                    $xml = '&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br>
                    &lt;message&gt;<br>
                        &lt;key &gt; Account key &lt;/key&gt;<br>
                        &lt;sms&gt; Message &lt;/sms&gt;<br>
                        &lt;sender&gt; Sender id &lt;/sender&gt;<br>
                        &lt;route &gt;Route  &lt;/route&gt;<br>
                        &lt;number&gt; Number &lt;/number&gt; <br>
                        &lt;number&gt; Number 2 &lt;/number&gt; <br>
                        &lt;/message&gt;'; <br> <br>
                        $xml = urlencode($xml); <br>
                        http://sms.par-ken.com/api/smsxml?xml=$xml
                    </div>
                  </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bulk-content text-center text-sm-left">
                       
                    </div>
                </div>
            </div>
        </div>




        
    </section>
    <!--=================End Api================= -->


    <!--=================Our Feature================= -->
    @include('tamplate.ourfeature.feature')
    <!--=================Our Feature================= -->
@endsection