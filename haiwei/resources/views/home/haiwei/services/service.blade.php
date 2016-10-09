@extends('home.haiwei.layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="/home/css/service.css"/>
    @endsection
    @section('content')
    
    <!--主体开始-->
    <div id="main">
    	<div id="wrap">
        	<div id="nav-wrap">
                <div id="nav-tabs">
                	<p class="border-bottom sidebar-title">服务中心</p>
                    <ul id="serve">
                        <li id="guzhang" class="border-bottom sidebar-child sidebar-child-active">常见故障</li>
                        <li id="tijiao" class="sidebar-bottom-child">问题提交</li>
                    </ul>
                </div>
                
                <div id="nav-tabs2">
                	<p class="border-bottom sidebar-title">下载中心</p>
                    <ul id="download">
                        {{--<li class="border-bottom sidebar-child">最新APP</li>--}}
                        <li class="border-bottom sidebar-child">软件下载</li>
                        <li class="border-bottom sidebar-child">地图升级</li>
                        <li class="sidebar-bottom-child">安装指南</li>
                    </ul>
                </div>
            </div>
            
            <div id="content-box">
                <div id="service" class="trouble" style="display:block;">
                    <h1>常见故障</h1>
                    <div class="div-active tabName">智能互联导航盒（Android）</div>
                    <div class="margin-left-right div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                    <div class="div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                    <h2>C4世嘉智能互联导航盒（BZ3)售后常见故障:</h2>
                    <table class="table table-bordered">
                    	<!--<tr class="info">
                        	<td>序号</td>
                            <td>故障描述</td>
                            <td>解答</td>
                        </tr>-->
                        <tr>
                        	<td rowspan="2" style="vertical-align:middle">1</td>
                            <td>故障描述</td>
                            <td>C4世嘉加装了智能互联导航盒后，进入安卓界面使用任何功能都无声音，MRN界面声音正常。</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;width:75px;">解答</td>
                            <td>此现象是由于C4世嘉，原车AUX通道没打开造成的。4S店必须使用“车辆故障诊断软件”，打开原车AUX通道，即可解决。</td>
                        </tr>
                    
                    
                        
                        <tr>
                        	<td rowspan="2" style="vertical-align:middle">2</td>
                            <td>故障描述</td>
                            <td>新机装车时，发现配件里面的“三通线”有线束脱落，无法正常使用。</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;width:75px;">解答</td>
                            <td>此为线束问题，需要更换三通线。</td>
                        </tr>
                    
                      
                        
                        <tr>
                        	<td rowspan="2" style="vertical-align:middle">3</td>
                            <td>故障描述</td>
                            <td>USB不识别。</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;width:75px;">解答</td>
                            <td>重新插拔USB线和U盘，如果还是不行，尝试更换新的USB线，看是否能识别。还是不能识别，换导航盒。</td>
                        </tr>
                    
                    
                     
                        <tr>
                        	<td rowspan="2" style="vertical-align:middle">4</td>
                            <td>故障描述</td>
                            <td>C4世嘉导航  音乐和导航单独都有声音，但是听着音乐切入导航就没有音乐了，收音机切换到导航界面也没有声音，是什么问题呀？</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;width:75px;">解答</td>
                            <td>产品设计就是这样的，我们使用的是原车的AUX通道，对于原车而言，收音机、原车USB、AUX等这些，都是互斥的音源，播放一个，其他的就会没有声音。wince的导航盒，跟我们这个是有区别的，C4世嘉的安卓导航盒，目前就是这个设计。</td>
                        </tr>
                    
                    
                         
                        <tr>
                        	<td rowspan="2" style="vertical-align:middle">5</td>
                            <td>故障描述</td>
                            <td>AUX通道修改后无法保存。</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;width:75px;">解答</td>
                            <td>尝试车辆断电重新连接和导航盒断电重启，重复即可恢复正常。</td>
                        </tr>
                     
                     
                        
                        <tr>
                        	<td rowspan="2" style="vertical-align:middle">6</td>
                            <td>故障描述</td>
                            <td>C4世嘉刚才把导航恢复出厂设置后，现在进入导航界面只有雪铁龙标志
要怎么操作才能恢复到原来的导航界面？</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;width:75px;">解答</td>
                            <td>恢复出厂设置之后 第一次开机会比正常开机慢很多 在十分钟内可以完成开机。</td>
                        </tr>
                     
                     
                       
                        <tr>
                        	<td rowspan="2" style="vertical-align:middle">7</td>
                            <td>故障描述</td>
                            <td>收音机在FM频道正常播放时切换到导航界面收音机跳转到AM频道。</td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;width:75px;">解答</td>
                            <td>检查“AUX”通道。在原车屏幕上点击“音源”查看是否有“AUX”通道按钮。若没有说明AUX通道没开。</td>
                        </tr>
                     </table>
                        <!--<tr>
                        	<td>2</td>
                            <td>新机装车时，发现配件里面的“三通线”有线束脱落，无法正常使用。</td>
                            <td>此为线束问题，需要更换三通线。</td>
                        </tr>
                        <tr>
                        	<td>3</td>
                            <td>USB不识别</td>
                            <td>重新插拔USB线和U盘，如果还是不行，尝试更换新的USB线，看是否能识别。还是不能识别，换导航盒。</td>
                        </tr>
                        <tr>
                        	<td>4</td>
                            <td>C4世嘉导航  音乐和导航单独都有声音，但是听着音乐切入导航就没有音乐了，收音机切换到导航界面也没有声音，是什么问题呀？</td>
                            <td>产品设计就是这样的，我们使用的是原车的AUX通道，对于原车而言，收音机、原车USB、AUX等这些，都是互斥的音源，播放一个，其他的就会没有声音。wince的导航盒，跟我们这个是有区别的，C4世嘉的安卓导航盒，目前就是这个设计。</td>
                        </tr>
                        <tr>
                        	<td>5</td>
                            <td>AUX通道修改后无法保存</td>
                            <td>尝试车辆断电重新连接和导航盒断电重启，重复即可恢复正常。</td>
                        </tr>
                        <tr>
                        	<td>6</td>
                            <td>C4世嘉刚才把导航恢复出厂设置后，现在进入导航界面只有雪铁龙标志
要怎么操作才能恢复到原来的导航界面？</td>
                            <td>恢复出厂设置之后 第一次开机会比正常开机慢很多 在十分钟内可以完成开机。</td>
                        </tr>
                        <tr>
                        	<td>7</td>
                            <td>收音机在FM频道正常播放时切换到导航界面收音机跳转到AM频道。</td>
                            <td>检查“AUX”通道。在原车屏幕上点击“音源”查看是否有“AUX”通道按钮。若没有说明AUX通道没开。</td>
                        </tr>-->
					
                </div>
                
                <div id="service" class="submit">
                    <h1>售后故障问题提交</h1>
                    <form method="post" id="form">
                    	<ul>
                            <li>
                            	<span>故障提交人/网点：</span><input class="input-style" type="text" name="name"/>必填**
                            </li>
                            <li class="input-margin">
                            	<span>联系电话：</span><input class="input-style" type="text" name="tel"/>必填**
                            </li>
                            <li class="input-margin">
                            	<span>邮箱地址：</span><input class="input-style" type="text" name="email"/>
                            </li>
                            <li class="input-margin">
                            	<span>产品名称：</span><input class="input-style" type="text" name="product_name"/>
                            </li>
                            <li class="input-margin">
                            <span>问题类型：</span><select class="input-style" name="problem_type">
                                <option value="问题1">问题1</option>
                                <option value="问题2">问题2</option>
                                <option value="问题3">问题3</option>
                                <option value="问题4">问题4</option>
                            </select>
                            
                            </li>
                            <li class="input-margin">
                            <span>附件上传：</span><input type="file"  id="user_uploadFile"/>
                                <input type="hidden" name="file">
                            </li>
                            <li class="input-margin">
                            <span>问题详细描述：</span><br/><textarea name="desc"></textarea>
                            </li>
                        </ul>
                        <input id="btn" type="button" value="提交"/>
                    </form>
                </div>
            </div>
            
            <div id="content-box2">
            	{{--<div id="service" class="app">
                	<h1>最新APP</h1>
                    <!--<div class="phone">
                    	<img class="img-responsive" src="/home/images/service/phone.png"/>
                    </div>
                    <div class="download">
                    	<img src="/home/images/service/icon.png"/>
                        <h3>下载智驾云</h3>
                        <ul>
                        	<li>首次使用“智驾云”，您需要进行注册</li>
                            <li>注册成功后，您的爱车信息、行驶数据等都会为您永久保留。</li>
                        </ul>
                        <div id="btn1"><img src="/home/images/service/btn1.png"/></div>
                        <div id="btn2"><img src="/home/images/service/btn2.png"/></div>
                    </div>-->
                    <form>
						<input class="input-style" type="text" placeholder="请输入产品名称"/>
						<input id="btn2" type="button" value="搜索"/>
					</form>
                    <div class="div-active tabName">智能互联导航盒（Android）</div>
                    <div class="margin-left-right div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                    <div class="div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                </div>--}}
                
                <div id="service">
                	<h1>软件下载</h1>
                    <form>
						<input class="input-style" type="text" placeholder="请输入产品名称"/>
						<input id="btn2" type="button" value="搜索"/>
					</form>
                    <div class="div-active tabName">智能互联导航盒（Android）</div>
                    <div class="margin-left-right div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                    <div class="div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                </div>
                
                <div id="service">
                	<h1>地图升级</h1>
                    <form>
						<input class="input-style" type="text" placeholder="请输入产品名称"/>
						<input id="btn2" type="button" value="搜索"/>
					</form>
                    <div class="div-active tabName">智能互联导航盒（Android）</div>
                    <div class="margin-left-right div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                    <div class="div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                </div>
                
                <div id="service">
                	<h1>安装指南</h1>
                    <form>
						<input class="input-style" type="text" placeholder="请输入产品名称"/>
						<input id="btn2" type="button" value="搜索"/>
					</form>
                    <div class="div-active tabName">智能互联导航盒（Android）</div>
                    <div class="margin-left-right div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                    <div class="div-normal tabName">东风雪铁龙世嘉车载智云音乐系统</div>
                </div>
            </div>
        </div>
    </div>
    <!--主体结束-->

    @endsection

@section('js')
    <script src="/home/js/service.js"></script>
    <script src="/assets/js/jquery.html5-fileupload.js"></script>
    <script src="/assets/js/uploadFile.js"></script>
    <script>
        returnTop();

       $(function(){
           $('#btn').click(function(){
               $.ajax({
                   type: "POST",
                   url:"/services/store",
                   data:$('#form').serialize(),// 你的formid
                   error: function(request) {
                       alert("问题提交失败！请检查信息是否填写完毕~");
                   },
                   success: function(data) {
                       alert("问题提交成功！");
                       location.href = '/services';
                   }
               })
           })
       })
    </script>
    @endsection
    
