@extends('home.haiwei.layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="home/css/about.css"/>
    @endsection
    @section('content')
    
    <!--主体开始-->
    <div class="container"> 
        <div class="row about"> 
            <div class="col-xs-2" id="myScrollspy">
                <ul class="nav nav-tabs nav-stacked" id="myNav"> 
                    <li class="active"><a href="#section-1">公司简介</a></li>
                    <li><a href="#section-2">核心团队</a></li> 
                    <li><a href="#section-3">发展历程</a></li> 
                    <li><a href="#section-4">联系我们</a></li>  
                </ul> 
            </div> 
            <div class="col-xs-10" id="lists"> 
                <h2 id="section-1">海微公司简介</h2> 
                <ul>
                	<li class="indent">
                    武汉海微科技有限公司成立于2012年。注册资本1500万元，公司位于著名的国家自主创新示范区—中国光谷，是一家专注于汽车电子产品研发、生产、销售和服务的高新技术企业。
                    </li>
                    
                    <li class="indent">
                    公司具备多年汽车电子产品研发和设计经验的技术团队和管理团队。在车载导航、汽车显示、汽车音响、CAN Bus协议方面具备完整的软硬件研发能力；在工业设计、机械结构、PCB设计方面具备全面的设计能力；在市场营销方面我们拥有面向车载前后装市场独立的产品品牌及良好的客户关系；在生产能力方面拥有完整的符合的ISO/TS16949标准认证的制造供应链。
                    </li>
                    
                    <li class="indent">
                    公司致力于自主创新，在汽车电子产品行业拥有多项自主知识产权，是武汉东湖新技术开发区汽车电子产业代表性企业之一。
                    </li>
                    
                    <li class="indent">
                    目前，公司依托强大的研发能力和生产制造能力，积极开拓国内外市场，搭建全球战略合作平台，与国内知名汽车厂家开展合作，实现多款车型产品的研发量产。
                    </li>
                    <li>
                    	<img class="img-responsive" src="/home/images/about/haiwei.jpg"/>
                    </li>
                </ul>
                <hr>
                <h2 id="section-2">核心团队</h2>
                <div class="row">
                	<div class="col-md-5">
                    <img class="img-responsive" src="/home/images/about/li.jpg"/>
                    </div>
                    <div class="col-md-7">
                        <ul class="left">
                            <li><h3>李林峰</h3></li>
                            <li>CEO/Founder</li>
                            <li><h3>教育背景</h3></li>
                            <li>武汉大学，地理学与地理信息系统，硕士</li>
                            <li><h3>从业经验</h3></li>
                            <li>12年车载娱乐信息系统与汽车电子产品行业经验</li>
                            <li>从零开始组建团队并成功完成的提案、定点、设计、验证、交付</li>
                            <li>PSA、Chery、FujitsuTEN、Panasonic、Harman等多家车厂及Tier1项目合作</li>
                            <li>与多家半导体厂商保持长期深入高效的合作获得高质量的产品和技术支持</li>
                            <li>曾任多个嵌入式系统C\C++软件核心算法及架构工程师</li>
                            <li><h3>擅长领域</h3></li>
                            <li>汽车电子初创企业设立及管理</li>
                            <li>汽车电子产品研发设计及交付管理</li>
                            <li>电子及软件产品供应链管理</li>
                            <li>产品提案及系统方案设计</li>
                        </ul>
                    </div>
                </div>
                <div class="row m_top">
                	<div class="col-md-5">
                    <img class="img-responsive" src="/home/images/about/zhou.jpg"/>
                    </div>
                    <div class="col-md-7">
                        <ul class="left">
                            <li><h3>周云波</h3></li>
                            <li>CTO/Co-Founder</li>
                            <li><h3>教育背景</h3></li>
                            <li>武汉大学，应用电子，硕士</li>
                            <li><h3>从业经验</h3></li>
                            <li>历任多家公司工程师，项目经理，架构师，部门经理，技术总监</li>
                            <li>从事导航，LBS应用，汽车电子相关领域19年，对行业技术精通</li>
                            <li>对产品研发管理，软件过程管理，ISO，CMMI有丰富经验</li>
                            <li>曾主导多个国家电子发展基金项目，多个项目获得省市部委科技进步奖</li>
                            <li>曾主导丰田，标致雪铁龙，一汽，上汽，北汽，富士通天，哈曼等公司的车载电子产品开发及技术合作</li>
                            <li><h3>擅长领域</h3></li>
                            <li>新技术研究，新技术产品化，技术提案</li>
                            <li>系统分析，系统架构设计</li>
                            <li>研发团队管理，技术管理，项目管理，产品生命周期管理</li>
                        </ul>
                    </div>
                </div>
                <hr> 
                <h2 id="section-3">发展历程</h2> 
                <ul>
                	<li>2011年4月：魅爵导航亮相第十四届上海国际汽车工业展览会，正式从中国的前装汽车导航市场走向前台。</li>
                    <li>2012年2月：魅爵导航登陆第八届广州国际汽车改装服务业展览会，推出全系列30余款专车专用导航车机。</li>
                    <li>2012年3月：专属于魅爵的百人研发团队以实体化形式成立，专注于中国汽车电子，专注于车规级导航娱乐产品的研发。</li>
                    <li>2012年5月：魅爵导航生产工厂通过ISO/TS-16949认证。</li>
                    <li>2012年10月：魅爵MC-VW510S1大众系列专用机上市。</li>
                    <li>2012年11月：魅爵导航生产工厂通过VDA 6.3监督审核。</li>
                    <li>2013年2月：魅爵Ⅱ全新技术平台产品在第九届届广州国际汽车改装服务业展览会正式发布。</li>
                    <li>2013年2月，魅爵荣获2012年汽车电子十大竞争力品牌奖。</li>
                    <li>2013年9月，魅爵荣获“2013年度地图导航定位产品推荐产品”证书。</li>
                    <li>2014年9月，魅爵荣获2013年汽车电子十大优秀品牌奖。</li>
                </ul>
                <hr>
                <h2 id="section-4">联系我们</h2> 
                <ul>
                	<li>
						公司总部：武汉市东湖开发区关山大道武大科技园航域B3栋15楼
                    </li>
                    
                    <li>
                    	电话：027-59905050/5990505
                    </li>
                    
                    <li>
                    	传真：027-59905055
                    </li>
                    
                    <li>
                    	网址：
                    </li>
                    
                    <li>
						邮箱：
                    </li>
                    <li>
                    	<img class="img-responsive" src="/home/images/about/map.png"/>
                    </li>
                </ul>
            </div> 
    	</div> 
    </div>
    <!--主体结束-->


@endsection

@section('js')
    <script src="home/js/scrollspy.js"></script>

    <script>
        returnTop();

        $(document).ready(function(){
            $("#myNav").affix({
                offset:
                {
                    top:125
                }
            });
        });
    </script>
    @endsection

