<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
       <div class="am-offcanvas-bar admin-offcanvas-bar">
           <ul class="am-list admin-sidebar-list">
               <li>
                   <a href="/haiwei" class=""><span class="am-icon-home"></span> 首页</a>
               </li>



               <li class="admin-parent">
                   <a class="am-cf" data-am-collapse="{parent: '#menus', target: '#collapse-news'}">
                       <span class="am-icon-list"></span>
                       新闻中心 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                   </a>
                   <ul class="am-list am-collapse admin-sidebar-sub {{$_news or ''}} " id="collapse-news">
                       <li>
                           <a href="{{route('haiwei.news.index')}}" class="am-cf {{$_newslist or ''}}">
                               <span class="am-icon-list-ol"></span> 新闻列表
                               <span class="am-badge am-badge-secondary am-margin-right am-fr am-radius">{{ \App\Models\haiwei\Xinwen::count() }}</span>
                           </a>
                       </li>
                       <li>
                           <a href="{{route('haiwei.news_category.index')}}" class="{{$_news_category or ''}}">
                               <span class="am-icon-list-alt"></span> 新闻栏目
                               <span class="am-badge am-badge-success am-margin-right am-fr am-radius">{{ \App\Models\haiwei\NewsCategory::count() }}</span>
                           </a>
                       </li>

                       <li>
                           <a href="{{route('haiwei.news.create')}}" class="{{$_new_article or ''}}">
                               <span class="am-icon-user"></span> 添加新闻

                           </a>
                       </li>


                   </ul>
               </li>
               <li class="admin-parent">
                   <a class="am-cf" data-am-collapse="{parent: '#menus', target: '#collapse-products'}">
                       <span class="am-icon-list"></span>
                       产品中心 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                   </a>
                   <ul class="am-list am-collapse admin-sidebar-sub {{$_products or ''}} " id="collapse-products">
                       <li>
                           <a href="{{route('haiwei.products.index')}}" class="am-cf {{$_productslist or ''}}">
                               <span class="am-icon-list-ol"></span> 产品列表
                               <span class="am-badge am-badge-secondary am-margin-right am-fr am-radius">{{ \App\Models\haiwei\Product::count() }}</span>
                           </a>
                       </li>
                       <li>
                           <a href="{{route('haiwei.products_category.index')}}" class="{{$_products_category or ''}}">
                               <span class="am-icon-list-alt"></span> 产品栏目
                               <span class="am-badge am-badge-success am-margin-right am-fr am-radius">{{ \App\Models\haiwei\ProductsCategory::count() }}</span>
                           </a>
                       </li>
                       <li>
                           <a href="{{route('haiwei.products.create')}}" class="{{$_new_product or ''}}">
                               <span class="am-icon-user"></span> 添加产品

                           </a>
                       </li>

                   </ul>
               </li>

               <li class="admin-parent">
                   <a class="am-cf" data-am-collapse="{parent: '#menus', target: '#collapse-services'}">
                       <span class="am-icon-user"></span>
                       服务支持中心 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                   </a>
                   <ul class="am-list am-collapse admin-sidebar-sub {{$_services or ''}} " id="collapse-services">
                       <li>
                           <a href="{{route('haiwei.methods.index')}}" class="am-cf {{$_methods or ''}}">
                               <span class="am-icon-list-ol"></span> 常见故障解决方法
                               <span class="am-badge am-badge-secondary am-margin-right am-fr am-radius">{{ \App\Models\haiwei\Method::count() }}</span>
                           </a>
                       </li>

                       <li>
                           <a href="{{route('haiwei.problems.index')}}" class="am-cf {{$_problems or ''}}">
                               <span class="am-icon-list-ol"></span> 客户故障问题反馈
                               <span class="am-badge am-badge-secondary am-margin-right am-fr am-radius">{{ \App\Models\haiwei\Problem::count() }}</span>
                           </a>
                       </li>
                       <li>
                           <a href="{{route('haiwei.products_category.index')}}" class="{{$_products_category or ''}}">
                               <span class="am-icon-list-alt"></span> 下载中心
                               <span class="am-badge am-badge-success am-margin-right am-fr am-radius">{{ \App\Models\haiwei\ProductsCategory::count() }}</span>
                           </a>
                       </li>


                   </ul>
               </li>

               {{--<li>
                   <a href="/xCms/article/trash" class="{{ $_article_trash or '' }}">
                       <span class="am-icon-user"></span> 服务支持

                   </a>
               </li>--}}

               <li>
                   <a href="/haiwei/finder/index" class="{{ $_finder or '' }}">
                       <span class="am-icon-photo"></span> 文件管理
                   </a>
               </li>

               <li>
                   <a href="" class="{{ $_article_category or '' }}">
                       <span class="am-icon-columns"></span> 行业解决方案
                       <span class="am-badge am-badge-warning am-margin-right am-fr am-radius">22</span>
                   </a>
               </li>

               <li>
                   <a href="{{route('haiwei.link.index')}}" class="{{ $_link or '' }}">
                       <span class="am-icon-link"></span> 友情链接
                       <span class="am-badge am-badge-success am-margin-right am-fr am-radius">{{ \App\Models\haiwei\Link::count() }}</span>
                   </a>
               </li>

               <li class="admin-parent">
                   <a class="am-cf" data-am-collapse="{parent: '#menus', target: '#collapse-trash'}">
                       <span class="am-icon-list"></span>
                       垃圾回收站 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                   </a>
                   <ul class="am-list am-collapse admin-sidebar-sub {{$_trash or ''}} " id="collapse-trash">
                       <li>
                           <a href="/haiwei/news/trash" class="{{ $_news_trash or '' }}">
                               <span class="am-icon-trash-o"></span> 新闻回收站
                               <span class="am-badge am-badge-danger am-margin-right am-fr am-radius">{{ \App\Models\haiwei\Xinwen::onlyTrashed()->count() }}</span>
                           </a>
                       </li>
                       <li>
                           <a href="/haiwei/products/trash" class="{{ $_products_trash or '' }}">
                               <span class="am-icon-trash-o"></span> 产品回收站
                               <span class="am-badge am-badge-danger am-margin-right am-fr am-radius">{{ \App\Models\haiwei\Product::onlyTrashed()->count() }}</span>
                           </a>
                       </li>


                   </ul>
               </li>



           </ul>

          <div class="am-panel am-panel-default admin-sidebar-panel">
               <div class="am-panel-bd">
                   <p><span class="am-icon-bookmark"></span> 思考</p>
                   <p>红颜弹指老，刹那芳华！
                   </p>
               </div>
           </div>
           <div class="am-panel am-panel-default admin-sidebar-panel">
               <div class="am-panel-bd">
                   <p><span class="am-icon-tag"></span> Holy Bible</p>
                   <p>for a prostitute is a deep pit and a wayward wife is a narrow well.
                   </p>
               </div>
           </div>
       </div>
   </div>




