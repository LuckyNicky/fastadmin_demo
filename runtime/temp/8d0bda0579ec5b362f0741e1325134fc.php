<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/common/list_news_ajax.html";i:1583043030;s:74:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/common/item_news.html";i:1583043030;}*/ ?>

<?php $__z1lgn2K7d4__ = \addons\cms\model\Archives::getPageList($__PAGELIST__, ["id"=>"item"]); if(is_array($__z1lgn2K7d4__) || $__z1lgn2K7d4__ instanceof \think\Collection || $__z1lgn2K7d4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__z1lgn2K7d4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
<article class="article-item">
    <div class="media">
        <?php if($item['hasimage']): ?>
        <div class="media-left">
            <a href="<?php echo $item['url']; ?>">
                <div class="embed-responsive embed-responsive-4by3 img-zoom">
                    <img src="<?php echo $item['image']; ?>">
                </div>
            </a>
        </div>
        <?php endif; ?>
        <div class="media-body">
            <h3 class="article-title">
                <a href="<?php echo $item['url']; ?>" <?php if($item['style']): ?>style="<?php echo $item['style_text']; ?>"<?php endif; ?>><?php echo $item['title']; ?></a>
            </h3>
            <div class="article-intro hidden-xs">
                <?php echo $item['description']; ?>
            </div>
            <div class="article-tag">
                <a href="<?php echo $item['channel']['url']; ?>" class="tag tag-primary"><?php echo $item['channel']['name']; ?></a>
                <span itemprop="date"><?php echo date("Y年m月d日", $item['publishtime']); ?></span>
                <span itemprop="likes" title="点赞次数"><i class="fa fa-thumbs-up"></i> <?php echo $item['likes']; ?> 点赞</span>
                <span itemprop="comments"><a href="<?php echo $item['url']; ?>#comments" target="_blank" title="评论数"><i class="fa fa-comments"></i> <?php echo $item['comments']; ?></a> 评论</span>
                <span itemprop="views" title="浏览次数"><i class="fa fa-eye"></i> <?php echo $item['views']; ?> 浏览</span>
            </div>
        </div>
    </div>

</article>
<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__z1lgn2K7d4__; if($__PAGELIST__->isEmpty()): ?>
    <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无更多数据</span></div>
<?php else: ?>
    <div class="text-center">
        <a href="?page=<?php echo $__PAGELIST__->getNextPage(); ?>" data-page="<?php echo $__PAGELIST__->getNextPage(); ?>" class="btn btn-default my-4 px-4 btn-loadmore">加载更多</a>
    </div>
<?php endif; ?>