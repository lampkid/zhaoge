<?php
/**
 * Template Name: Zhaoge Index Template
 * Description: A Page Template that shows the Index page
 *
 * The zhaoge index template in zhaoge theme includes the main columns of the site content 
 *
 *
 * @package WordPress
 * @subpackage zhaoge
 * @since zhaoge 1.0
 */

// Enqueue showcase script for the slider
//wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/showcase.js', array( 'jquery' ), '2011-04-28' );

get_header(); ?>

		<style type="text/css">
                    #main {
                       padding-top:0px;
                    }
                    div.row-fluid {
                        margin-top:30px;
                    }

                    .panel-box {
                        border:1px solid #428BCA;
                        
                        margin-bottom:20px;
                    }
                    
                    .panel-box .panel-box-heading {
                        background:#428BCA;
                        width:100%;
			font-weight:bold;
                        color:#ffffff;
                    }
                    
                    .panel-box .heading-icon {
                        margin-left:10px;
                        margin-right:5px; 
                        background:url('');
                    }
                    
                    .panel-box .heading-right {
                        font-weight:normal;
                        font-size:12px;
                        position:relative;
                        margin-right:5px;
                        float:right;
                    }
                    
                    .panel-box ul {
                        list-style:disc;
                        margin-left:30px;
                    }

                    .panel-box ul li{
                      border-bottom:1px dashed gray;
                      padding-right:5px;
                      margin-top:5px;
                      color:#13152E;
                    }
                    
		</style>
			    <div class="container">
			      <div class="row-fluid">
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"> <span class="heading-icon" ></span>服务项目 <span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、其他</li>
                                  </ul>
                                 </div>
                                </div>
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"> <span class="heading-icon" ></span>服务项目<span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"><span class="heading-icon" ></span> 服务项目 <span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>

		              </div>  <!-- row -->					                
			      <div class="row-fluid">
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"> <span class="heading-icon" ></span>服务项目 <span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"> <span class="heading-icon" ></span>服务项目<span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>
			        <div class="span4">
                                 <div class="panel-box">
                                  <div class="panel-box-heading"><span class="heading-icon" ></span> 服务项目 <span class="heading-right">更多</span></div>
                                  <ul> 
                                    <li>新房开荒、家庭保洁</li>
                                    <li>会员卡、钟点工、擦玻璃</li>
                                    <li>木地板打蜡、石材抛光、保养除渗透、晶面护理</li>
                                  </ul>
                                 </div>
                                </div>

		              </div>  <!-- row -->
			      <div class="row-fluid">
			        <div class="span12"> 
                                  <div>
								    <div class="carousel slide" id="myCarousel">
										<ol class="carousel-indicators">
										  <li class="" data-slide-to="0" data-target="#myCarousel"></li>
										  <li data-slide-to="1" data-target="#myCarousel" class=""></li>
										  <li data-slide-to="2" data-target="#myCarousel" class="active"></li>
										</ol>
										<div class="carousel-inner">
										  <div class="item">
											<img alt="" src="<?php header_image();?>">
											<div class="carousel-caption">
											  <h4>First Thumbnail label</h4>
											  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
											</div>
										  </div>
										  <div class="item">
											<img alt="" src="<?php echo get_template_directory_uri();?>/images/headers/wheel.jpg">
											<div class="carousel-caption">
											  <h4>Second Thumbnail label</h4>
											  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
											</div>
										  </div>
										  <div class="item active">
											<img alt="" src="<?php echo get_template_directory_uri();?>/images/headers/shore.jpg">
											<div class="carousel-caption">
											  <h4>Third Thumbnail label</h4>
											  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
											</div>
										  </div>
										</div>
										<a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
										<a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
									</div>
								  </div>
			        
					</div>
                              </div>
			    </div>  <!-- .container -->

        
<?php get_footer(); ?>
